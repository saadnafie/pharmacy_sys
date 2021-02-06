<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App;

class Item extends Model
{

	protected $appends =['name'];

	public function getNameAttribute($value) {
        return $this->{'name_' . App::getLocale()};
    }

	public function product(){
		return $this->hasOne('App\Models\Product', 'item_id')->with('dates')->with('store')->with('type');
	}

	public function category()
	{
   		return $this->belongsTo('App\Models\Category', 'sub_category_id')->with('main');
	}
}
