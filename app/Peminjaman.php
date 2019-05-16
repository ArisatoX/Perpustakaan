<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';
    public $primaryKey= 'ID_pinjam';
    public $timestamps = false;
}
