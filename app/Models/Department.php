<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App;

class Department extends Model
{
	public function getDepartmentAttribute($value) {
        return $this->{'department_' . App::getLocale()};
    }
}
