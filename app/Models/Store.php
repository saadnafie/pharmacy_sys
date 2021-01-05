<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
	public function department()
	{
   		return $this->belongsTo('App\Models\Department', 'department_id');
	}

	public function main_store()
	{
   		return $this->belongsTo('App\Models\Store', 'store_parent_id');
	}
}
