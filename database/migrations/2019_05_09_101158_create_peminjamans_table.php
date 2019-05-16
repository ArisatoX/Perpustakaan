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
            $table->foreign('ID_buku')->references('ID_buku')->on('buku')->onDelete('cascade');
            $table->foreign('ID_anggota')->references('ID_anggota')->on('anggota')->onDelete('cascade');
            $table->foreign('ID_staff')->references('ID_staff')->on('pustakawan')->onDelete('cascade');
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
