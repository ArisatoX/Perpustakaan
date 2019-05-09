<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeminjamansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->increments('ID_pinjam');
            $table->integer('ID_buku');
            $table->integer('ID_anggota');
            $table->integer('ID_staff');
            $table->date('tgl_pinjam');
            $table->date('batas_kembali');
            $table->date('tgl_kembali');
            $table->integer('denda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
}
