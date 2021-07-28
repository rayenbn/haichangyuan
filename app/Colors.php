<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colors extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'colors';

     /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
}
