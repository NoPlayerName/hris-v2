<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use DateTime;
use App\Models\Ski;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Core\DateTime as CoreDateTime;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Ski::factory(5)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('skis')->insert([
            'category' => 'data',
            'kode_jabatan' => '01',
            'version' => date('Ymd'),
            // 'created_at' => date('Ymd'),
            // 'updated_at' => date('Ymd'),
            // 'deleted_at' => date('Ymd')
        ]);
        DB::table('skis')->insert([
            'category' => 'data2',
            'kode_jabatan' => '02',
            'version' => date('Ymd'),
            // 'created_at' => date('Ymd'),
            // 'updated_at' => date('Ymd'),
            // 'deleted_at' => date('Ymd')
        ]);

        DB::table('kelompok_sks')->insert([
            'kelompok' => 'Finansial',
            // 'created_at' => date('Ymd'),
            // 'updated_at' => date('Ymd'),
            // 'deleted_at' => date('Ymd')

        ]);

        DB::table('kelompok_sks')->insert([
            'kelompok' => 'Pelanggan',
            // 'created_at' => date('Ymd'),
            // 'updated_at' => date('Ymd'),
            // 'deleted_at' => date('Ymd')
        ]);

        DB::table('kelompok_sks')->insert([
            'kelompok' => 'Proses Internal',
            // 'created_at' => date('Ymd'),
            // 'updated_at' => date('Ymd'),
            // 'deleted_at' => date('Ymd')
        ]);

        DB::table('kelompok_sks')->insert([
            'kelompok' => 'Pertumbuhan & Pembelajaran',
            // 'created_at' => date('Ymd'),
            // 'updated_at' => date('Ymd'),
            // 'deleted_at' => date('Ymd')
        ]);

        DB::table('kelompok_sks')->insert([
            'kelompok' => 'Lain - lain',
            // 'created_at' => date('Ymd'),
            // 'updated_at' => date('Ymd'),
            // 'deleted_at' => date('Ymd')
        ]);
        DB::table('ski_tugas')->insert([
            'id_ref_ski' => '1',
            'tugas' => 'membuat sistem'
        ]);
        DB::table('ski_tugas')->insert([
            'id_ref_ski' => '2',
            'tugas' => 'membuat sistem2'
        ]);
        DB::table('ski_tugas')->insert([
            'id_ref_ski' => '3',
            'tugas' => 'membuat sistem3'
        ]);
    }
}
