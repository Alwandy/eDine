<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    //
    use Notifiable;
    protected $fillable = [
        "name","email","phone","amount","time"
    ];
}
