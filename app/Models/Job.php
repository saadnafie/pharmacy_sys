<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App;

class Job extends Model
{
	public function getJobAttribute($value) {
        return $this->{'job_' . App::getLocale()};
    }

    public function main()
	{
   		return $this->belongsTo('App\Models\Job', 'parent_id');
	}

	public function levels()
	{
   		return $this->hasMany('App\Models\Job', 'parent_id');
	}
}
