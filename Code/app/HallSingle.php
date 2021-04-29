<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HallSingle extends Model
{
    protected $table = "hall_singles";
    public $primaryKey = 'id';
    public $timestamps = true;
}
