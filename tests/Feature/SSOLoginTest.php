<?php

namespace Tests\Feature;

use App\Models\User as ModelsUser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\User;
use Mockery;
use Tests\TestCase;

class SSOLoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_sso_user_belum_pernah_login()
    {
        $abstractUser = Mockery::mock(User::class);

        $abstractUser->nik = '1706562';
        $abstractUser->nik_lama = '17062';
        $abstractUser->name = 'Resna';
        $abstractUser->email = 'example@trans7.co.id';

        $provider = Mockery::mock(PassportSSOProvider::class);
        $provider->shouldReceive('user')->andReturn($abstractUser);

        Socialite::shouldReceive('with')->with('sso')->andReturn($provider);

        $response = $this->get(route('login.sso.callback'));
        $response->assertStatus(302);

        $user = ModelsUser::where('nik', $abstractUser->nik)->first();

        $this->assertNotNull($user);
        $this->assertSame($user->name, $abstractUser->name);
        $this->assertAuthenticated();
        $this->assertAuthenticatedAs($user);
    }

    public function test_login_sso_user_sudah_pernah_login()
    {
        $abstractUser = Mockery::mock(User::class);

        $abstractUser->nik = '1706561';
        $abstractUser->nik_lama = '17061';
        $abstractUser->name = 'Rizki';
        $abstractUser->email = 'example@trans7.co.id';

        $user = ModelsUser::create(['nik' => $abstractUser->nik, 'name' => $abstractUser->name, 'email' => $abstractUser->email]);

        $provider = Mockery::mock(PassportSSOProvider::class);
        $provider->shouldReceive('user')->andReturn($abstractUser);

        Socialite::shouldReceive('with')->with('sso')->andReturn($provider);

        $response = $this->get(route('login.sso.callback'));
        $response->assertStatus(302);

        $this->assertAuthenticated();
        $this->assertAuthenticatedAs($user);
    }
}
