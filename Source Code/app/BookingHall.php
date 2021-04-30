<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingHall extends Model
{
    protected $table = "booking_halls";
    public $primaryKey = 'id';
    public $timestamps = true;
}
