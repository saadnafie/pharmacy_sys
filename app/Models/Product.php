<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public function dates()
	{
   		return $this->hasMany('App\Models\ProductDate', 'product_id')->with('store');
	}

	public function store()
	{
   		return $this->belongsTo('App\Models\Store', 'default_store_id');
	}

	public function type()
	{
   		return $this->belongsTo('App\Models\ProductType', 'product_type_id');
	}
}
