<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    public $primaryKey= 'ID_anggota';
    public $timestamps = false;
}
