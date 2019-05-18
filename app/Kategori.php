<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    public $primaryKey= 'ID_kategori';
    public $timestamps = false;
}
