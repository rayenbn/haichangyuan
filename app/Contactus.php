<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    protected $fillable = [
        'title',
        'address',
        'email1',
        'banner_image',
        'phone',
        'opening_time',
        'image1',
        'image2',
        'image3',
        'image4',
    ];

}
