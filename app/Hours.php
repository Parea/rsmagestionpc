<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hours extends Model
{
    protected $fillable = [
        'start_at', 'end_at',
    ];
}
