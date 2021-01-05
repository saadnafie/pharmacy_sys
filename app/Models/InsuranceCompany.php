<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InsuranceCompany extends Model
{
	public function classes()
	{
		return $this->hasMany('App\Models\InsuranceCompanyClass', 'company_id');
	}
}
