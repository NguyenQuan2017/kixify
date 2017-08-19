<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   protected $fillable=['name_cat','parent_cat'];

   public function products(){

   	return $this->belongsToMany('App\Models\Product','cat_products','cat_id','product_id');
   }
}
