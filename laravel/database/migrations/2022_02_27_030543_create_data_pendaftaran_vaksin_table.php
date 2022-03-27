<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pendaftaran_vaksin', function (Blueprint $table) {
            $table->id();
            $table->string('dosis_vaksin');
            $table->string('jenis_vaksin');
            $table->string('kewarganegaraan');
            $table->string('nik');
            $table->string('nama_lengkap');
            $table->dateTime('tanggal_lahir');
            $table->string('no_hp');
            $table->string('alamat_ktp');
            $table->string('alamat_domisili');
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
        Schema::dropIfExists('data_pendaftaran_vaksin');
    }
};
