<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pustakawan extends Model
{
    protected $table = 'pustakawan';
    public $primaryKey= 'ID_staff';
    public $timestamps = false;
}
