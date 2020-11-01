<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('np');
            $table->string('full_name');
            $table->string('tanggal_lahir');
            $table->string('tanggal_masuk');
            $table->string('tanggal_mpp');
            $table->string('tanggal_pensiun');
            $table->unsignedBigInteger('jabatan_id');
            $table->unsignedBigInteger('unit_kerja_id');
            $table->unsignedBigInteger('posisi_id');
            $table->unsignedBigInteger('pangkat_id');
            $table->integer('grade');
            $table->integer('T_to_pensiun');
            $table->string('brithplace');
            $table->string('Tmt');
            $table->unsignedBigInteger('level_id');

            $table->foreign('jabatan_id')->references('id')->on('jabatan')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pangkat_id')->references('id')->on('pangkats')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('unit_kerja_id')->references('id')->on('units')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('posisi_id')->references('id')->on('posisi')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyawans');
    }
}