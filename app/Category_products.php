<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_products extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'productscategory';

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

    // public function getRouteKeyName()
    // {
    // 	return 'slug';
    // }
}
