<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ski_sks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_ref_ski');
            $table->foreignId('id_kelompok_sk');
            $table->text('sasaran_kerja');
            $table->float('bobot');
            $table->text('kriteria_pengukuran');
            $table->text('target');
            $table->datetime('batas_waktu');
            $table->text('rencana_tindakan');
            $table->integer('sequence');
            $table->datetime('created_at')->nullable();
            $table->datetime('updated_at')->nullable();
            $table->datetime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ski_sks');
    }
};
