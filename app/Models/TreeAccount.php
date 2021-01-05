<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TreeAccount extends Model
{
	public function account()
	{
   		return $this->hasMany('App\Models\TreeAccount', 'parent_id');
	}

// recursive, loads all descendants
	public function account_tree()
	{
	   return $this->account()->with('account_tree');
	   // which is equivalent to:
	   // return $this->hasMany('Survey', 'parent')->with('childrenRecursive);
	}
}
