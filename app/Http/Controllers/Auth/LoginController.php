<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Qwildz\SSOClient\SSOClient;

class LoginController extends Controller
{
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/ski';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function loginSSO()
    {
        return Socialite::with('sso')->redirect();
    }

    public function callback(SSOClient $client)
    {
        $user = Socialite::with('sso')->user();

        // session()->put('sso_instance', $user);
        // session()->put('access_token', $user->token);
        // session()->put('internal_user', (bool) $user->internal);

        $userInstance = $this->findUser($user);

        if ($userInstance) {
            auth()->login($userInstance);
            $client->setSid($user->token);

            return redirect()->intended();
        } else {
            session()->put('no_access', true);

            return $this->noAccess();
        }
    }

    public function logout(Request $request, SSOClient $client)
    {
        if (auth()->check()) {
            $client->logout();
        }

        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? response([], 204)
            : redirect('/');
    }

    private function noAccess()
    {
        return redirect()->to(config('sso.url').'/noaccess?client_id='.config('sso.client_id'));
    }

    private function findUser($user)
    {
        $changeNik = false;
        $authUser = User::where('nik', $user->nik)->first();

        if (! $authUser) {
            $authUser = User::where('nik', $user->nik_lama)->first();
            $changeNik = true;
        }

        if ($changeNik && $authUser) {
            $authUser->nik = $user->nik;
            $authUser->save();
        }

        if (! $authUser) {
            $authUser = User::create(['nik' => $user->nik, 'name' => $user->name, 'email' => $user->email]);
        }

        return $authUser;
    }
}
