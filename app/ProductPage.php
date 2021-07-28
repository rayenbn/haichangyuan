<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPage extends Model
{
    protected $fillable = [
        'prod1_img',
        'prod1_title',
        'prod1_link',
        'prod2_img',
        'prod2_title',
        'prod2_link',
        'prod3_img',
        'prod3_title',
        'prod3_link',
    ];
}
