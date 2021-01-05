<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{

	protected $fillable = [
        'isActive'
    ];
    
	public function company()
	{

   		return $this->hasOne('App\Models\SupplierCompanyInfo', 'supplier_id');
	}

	public function user()
	{
   		return $this->belongsTo('App\Models\User', 'user_id');
	}

	public function activation()
	{
   		return $this->belongsTo('App\Models\Activation', 'isActive');
	}
}
