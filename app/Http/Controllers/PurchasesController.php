<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Store;
use App\Models\Item;
use App\Models\Employee;

class PurchasesController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    //////////////////////// bills ////////////////////////////////////

    public function show_bill_page(){
    	$stores = Store::all();
    	$products = Item::where('type',1)->orWhere('type',2)->with('product')->get();
    	$employees = Employee::all();
    	return view('admin.purchase.addbill',compact('stores','products','employees'));
    }

    public function add_new_bill(Request $request){}
}
