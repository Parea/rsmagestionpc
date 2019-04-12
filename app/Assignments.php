<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignments extends Model
{
    protected $fillable = [
        'client_id', 'computer_id', 'hour_id',
    ];
}
