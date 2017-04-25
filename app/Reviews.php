<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
        //
    use Notifiable;
    protected $fillable = [
        "name","comment","rating","rid"
    ];
}
