<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Store;
use App\Models\Item;
use App\Models\Employee;
use App\Models\Customer;
use App\Models\TaxSetting;
use App\Models\Category;

class SalesController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show_bill_page(){
    	$products = Item::where('type','!=',2)->with('product')->get();
    	$employees = Employee::all();
        $customers = Customer::all();
        $tax = TaxSetting::find(2);
    	return view('admin.sale.addbill',compact('products','employees','customers','tax'));
    }

    public function sale_point_page(){
        $products = Item::where('type','!=',2)->with('product')->get();
        $employees = Employee::all();
        $customers = Customer::all();
        $tax = TaxSetting::find(2);
        $categories = Category::whereNull('parent_id')->get();
        return view('admin.sale.pointofsale',compact('categories','products','employees','customers','tax'));
    }

    
}
