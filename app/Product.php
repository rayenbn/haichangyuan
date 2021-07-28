<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Product extends Model
{
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'price',
        'price_range',
        'created_at',
        'updated_at',
        'deleted_at',
        'description',
    ];

    public function path()
    {
        return url("/our-products/{$this->id}-" . Str::slug($this->name));
    }

    public function categories()
    {
    	return $this->belongsToMany('App\Category_products', 'prod_cat')->orderBy('created_at','DESC')->withTimestamps();//->paginate(12);
    }

    public function colors()
    {
    	return $this->belongsToMany('App\Colors', 'product_colors')->orderBy('created_at','DESC')->withTimestamps();//->paginate(12);
    }

    public function images()
    {
    	return $this->hasMany(ProductsImage::class)->OrderBy('orders', 'ASC');
    }

}
