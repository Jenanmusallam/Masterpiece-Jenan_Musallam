<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $table = "reviews";
    public    $primaryKey = 'id';
    public    $timestamps = true;
}
