<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Halls extends Model
{
     protected $table = "halls";
    public $primaryKey = 'id';
    public $timestamps = true;
}
