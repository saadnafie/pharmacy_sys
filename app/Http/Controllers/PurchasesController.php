<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Store;
use App\Models\Item;
use App\Models\Employee;
use App\Models\Supplier;
use App\Models\TaxSetting;

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
        $suppliers = Supplier::all();
        $tax = TaxSetting::find(1);
    	return view('admin.purchase.addbill',compact('stores','products','employees','suppliers','tax'));
    }

    public function add_new_bill(Request $request){}
}
