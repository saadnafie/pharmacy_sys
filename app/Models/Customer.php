<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App;

class Customer extends Model
{

	protected $fillable = [
        'isActive'
    ];


	public function company()
	{
		return $this->hasOne('App\Models\CustomerCompanyInfo', 'customer_id');
	}

	public function user()
	{
   		return $this->belongsTo('App\Models\User', 'user_id');
	}

	public function activation()
	{
   		return $this->belongsTo('App\Models\Activation', 'isActive');
	}

	public function getNameAttribute($value) {
        return $this->{'name_' . App::getLocale()};
    }
}
