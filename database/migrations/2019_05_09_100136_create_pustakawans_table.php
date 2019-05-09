<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePustakawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pustakawan', function (Blueprint $table) {
            $table->increments('ID_staff');
            $table->string('nama_staff');
            $table->string('jenis_kel');
            $table->string('alamat');
            $table->date('tgl_lahir');
            $table->string('no_telp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pustakawan');
    }
}
