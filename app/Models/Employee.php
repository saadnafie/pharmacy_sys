<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App;

class Employee extends Model
{
	public function nationality()
	{
   		return $this->belongsTo('App\Models\Nationality', 'nationality_id');
	}

	public function department()
	{
   		return $this->belongsTo('App\Models\Department', 'department_id');
	}

	public function job()
	{
   		return $this->belongsTo('App\Models\Job', 'job_id')->with('main')->with('levels');
	}

	public function activation()
	{
   		return $this->belongsTo('App\Models\EmployeeActivation', 'isActive');
	}

	public function contract_type()
	{
   		return $this->belongsTo('App\Models\ContractType', 'contract_type_id');
	}

	public function period_type()
	{
   		return $this->belongsTo('App\Models\PeriodType', 'period_type_id');
	}

	public function getNameAttribute($value) {
        return $this->{'name_' . App::getLocale()};
    }

	
}
