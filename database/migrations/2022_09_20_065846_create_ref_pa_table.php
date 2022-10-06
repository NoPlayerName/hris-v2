<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_pa', function (Blueprint $table) {
            $table->id('id_ref_pa');
            $table->string('aspek', 50);
            $table->string('utama');
            $table->text('keterangan');
            $table->float('bobot');
            $table->unsignedInteger('seq');
            $table->unsignedInteger('manajerial_level');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_pa');
    }
};
