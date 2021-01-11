<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App;

class JobLevel extends Model
{
	public function getLevelAttribute($value) {
        return $this->{'level_' . App::getLocale()};
    }
}
