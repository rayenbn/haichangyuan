<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productColors extends Model
{
     /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
    
    public function products()
    {
    	return $this->belongsToMany('App\Product','prod_cat')->orderBy('created_at','ASC')->paginate(12);
    }
}
