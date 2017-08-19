<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name_product','slug','title','price','release_date','release_style','style_code','description','content','image'];

    public function categories(){

    	return $this->belongsToMany('App\Models\Category','cat_products','product_id','cat_id');
    }
    public function sizes(){

    	return $this->belongsToMany('App\Models\Size','size_products','product_id','cat_id');
    }
}
