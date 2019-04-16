<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computers extends Model
{
    protected $fillable = [
        'number', 'details', 'availability',
    ];
}
