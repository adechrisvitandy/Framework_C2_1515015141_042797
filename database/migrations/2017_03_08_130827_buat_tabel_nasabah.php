<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelNasabah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nasabah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',50);
            $table->integer('pengguna_id',false,true);
            $table->foreign('pengguna_id')->references('id')->on('pengguna');
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->string('no_telp',12);
            $table->integer('saldo_awal');
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
        Schema::drop('nasabah');
    }
}
