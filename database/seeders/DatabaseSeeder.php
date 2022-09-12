<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use DateTime;
use Faker\Core\DateTime as CoreDateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // DB::table('ref_kelompok_sk')->insert([
        //     'kelompok' => 'Finansial',
        //     'created_at' => date('Ymd'),
        //     'updated_at' => date('Ymd'),
        //     'deleted_at' => date('Ymd')

        // ]);

        // DB::table('ref_kelompok_sk')->insert([
        //     'kelompok' => 'Pelanggan',
        //     'created_at' => date('Ymd'),
        //     'updated_at' => date('Ymd'),
        //     'deleted_at' => date('Ymd')
        // ]);

        // DB::table('ref_kelompok_sk')->insert([
        //     'kelompok' => 'Proses Internal',
        //     'created_at' => date('Ymd'),
        //     'updated_at' => date('Ymd'),
        //     'deleted_at' => date('Ymd')
        // ]);

        // DB::table('ref_kelompok_sk')->insert([
        //     'kelompok' => 'Pertumbuhan & Pembelajaran',
        //     'created_at' => date('Ymd'),
        //     'updated_at' => date('Ymd'),
        //     'deleted_at' => date('Ymd')
        // ]);

        // DB::table('ref_kelompok_sk')->insert([
        //     'kelompok' => 'Lain - lain',
        //     'created_at' => date('Ymd'),
        //     'updated_at' => date('Ymd'),
        //     'deleted_at' => date('Ymd')
        // ]);
    }
}
