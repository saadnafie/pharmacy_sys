<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDate extends Model
{
	//protected $appends =['total_cost'];
	
	public function store()
	{
   		return $this->belongsTo('App\Models\Store', 'store_id');
	}
	
	/*public function getTotalCostAttribute($value) {
		return $this->cost * $this->quantity;
    }*/
}
