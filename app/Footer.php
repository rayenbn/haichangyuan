<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $fillable = [
        'addresss',
        'phone',
        'email',
        'opening_time'
    ];
}
