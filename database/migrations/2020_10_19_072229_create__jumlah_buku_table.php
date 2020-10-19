<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJumlahBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jumlah_buku', function (Blueprint $table) {
            $table->increments('nama');
            $table->increments('alamat');
            $table->increments('images');
            $table->increments('telp');
            $table->increments('jenis_kelamin');
            $table->increments('alamat');
            $table->increments('tanggal_lahir');
            $table->increments('tempat_lahir');
            $table->increments('asal_skolah');
            $table->increments('nama_ibu');
            $table->increments('nama_ayah');
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
        Schema::dropIfExists('_jumlah_buku');
    }
}
