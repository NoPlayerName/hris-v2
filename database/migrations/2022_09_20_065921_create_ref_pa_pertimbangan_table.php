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
        Schema::create('ref_pa_pertimbangan', function (Blueprint $table) {
            $table->id('id_ref_pa_pertimbangan');
            $table->unsignedBigInteger('id_ref_pa');
            $table->unsignedInteger('seq');
            $table->text('pertimbangan');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_ref_pa')->references('id_ref_pa')->on('ref_pa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_pa_pertimbangan');
    }
};
