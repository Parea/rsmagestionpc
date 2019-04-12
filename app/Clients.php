<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = [
        'lastname', 'firstname', 'number_phone',
    ];

}
