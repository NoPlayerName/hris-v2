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

        DB::table('ski_sks')->insert([
        'id_ref_ski' => 1,
        'id_kelompok_sk' => 1,
        'sasaran_kerja' => 'kinerja tahun 2021',
        'bobot' => 0.3,
        'kriteria_pengukuran' => 'yang memenuhi kriteri adalah semua target yang diberikan tercapai',
        'target' => 'semua target terpenuhi',
        'batas_waktu' => date('Ymd'),
        'rencana_tindakan' => 'mencapai semua target',
        'sequence' => 1
        ]);
        DB::table('ski_sks')->insert([
        'id_ref_ski' => 2,
        'id_kelompok_sk' => 2,
        'sasaran_kerja' => 'kinerja tahun 2022',
        'bobot' => 0.2,
        'kriteria_pengukuran' => 'yang memenuhi kriteri adalah hampir semua target yang diberikan tercapai',
        'target' => 'sebagian target terpenuhi',
        'batas_waktu' => date('Ymd'),
        'rencana_tindakan' => 'mencapai sebagiantarget',
        'sequence' => 2
        ]);
        DB::table('ski_sks')->insert([
        'id_ref_ski' => 3,
        'id_kelompok_sk' => 3,
        'sasaran_kerja' => 'kinerja tahun 2023',
        'bobot' => 0.4,
        'kriteria_pengukuran' => 'target tercapai semua',
        'target' => 'target terlampaui',
        'batas_waktu' => date('Ymd'),
        'rencana_tindakan' => 'target tercapai',
        'sequence' => 3
        ]);
        DB::table('ski_templates')->insert([
            'category' => 'staff',
            'kode_jabatan' => '01',
            'version' => date('Ymd'),
            // 'created_at' => date('Ymd'),
            // 'updated_at' => date('Ymd'),
            // 'deleted_at' => date('Ymd')
        ]);
        DB::table('ski_templates')->insert([
            'category' => 'supervisor',
            'kode_jabatan' => '02',
            'version' => date('Ymd'),
            // 'created_at' => date('Ymd'),
            // 'updated_at' => date('Ymd'),
            // 'deleted_at' => date('Ymd')
        ]);
        DB::table('ski_templates')->insert([
            'category' => 'Section Head',
            'kode_jabatan' => '03',
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
