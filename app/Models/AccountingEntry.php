<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App;

class AccountingEntry extends Model
{
	public function getTitleAttribute($value) {
        return $this->{'title_' . App::getLocale()};
    }

	public function acctions()
	{
   		return $this->hasMany('App\Models\EntryAction', 'entry_id');
	}
}
