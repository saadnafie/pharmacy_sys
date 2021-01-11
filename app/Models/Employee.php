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
   		return $this->belongsTo('App\Models\JobType', 'job_id');
	}

	public function job_level()
	{
   		return $this->belongsTo('App\Models\JobLevel', 'job_level_id');
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
