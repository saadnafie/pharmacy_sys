<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Product extends Model
{
	
	protected $appends =['total_quantity' , 'total_cost' , 'avg_cost'];
	
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
	
	public function getTotalQuantityAttribute($value) {
		return $this->dates()->sum('quantity');
    }
	
	public function getTotalCostAttribute($value) {
		return $this->dates()->sum(DB::raw('cost * quantity'));
    }
	
	public function getAvgCostAttribute($value) {
		
		return $this->total_cost/$this->total_quantity;
    }
	
}
