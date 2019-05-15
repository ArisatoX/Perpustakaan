<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    public $primaryKey= 'ID_buku';
    public $timestamps = false;
    
}
