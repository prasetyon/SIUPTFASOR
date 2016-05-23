<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasi', function (Blueprint $table) {
            $table->increments('id_penyewaan');
            $table->string('id_lapangan', 5);
            $table->string('email_penyewa');
            $table->date('tanggal_sewa');
            $table->integer('harga_sewa');
            $table->time('waktu_mulai_sewa');
            $table->time('waktu_selesai_sewa');
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
        Schema::drop('reservasi');
    }
}
