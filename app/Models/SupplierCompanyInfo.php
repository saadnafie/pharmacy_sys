<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupplierCompanyInfo extends Model
{
	public function supplier()
	{
   		return $this->belongsTo('App\Models\Supplier', 'customer_id');
	}
}
