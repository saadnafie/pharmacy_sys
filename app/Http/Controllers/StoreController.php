<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use App\Models\Store;
use App\Models\Department;

class StoreController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }

    public function show_all_stores(){
      $stores = Store::with('department')->with('main_store')->get();
      return view('admin.store.storemanage',compact('stores'));
    }

    public function add_store_page(){
      $department = Department::all();
      $main_store = Store::where('store_type',0)->get();
      return view('admin.store.addstore',compact('main_store','department'));
    }

    public function add_new_store(Request $request){
      //return auth()->user();

      $store = new Store();
      $store->store_name = $request->store_name;
      $store->store_code = "st";
      $store->address = $request->store_address;
      $store->city = $request->store_city;
      $store->area = $request->store_area;
      $store->store_type = $request->store_type;
      if($request->store_type == 1)
        $store->store_parent_id = $request->main_store;
      $store->department_id = $request->store_dept;
      
      $store->save();
      $st = "";
      if($store->id < 9) $st = "st000";
      else if($store->id < 100 ) $st = "st00";
      else if($store->id < 1000 ) $st = "st0";
      $store->store_code = $st.$store->id;
      $store->save();

      Session::flash('success', 'تمت العملية بنجاح!');
      return redirect()->route('storemanage');
    }

    public function show_store_detail($id){
      $stdetail = Store::where('id',$id)->with('department')->with('main_store')->first();
      return view('admin.store.storedetail', compact('stdetail'));
    }

    public function edit_store_page($id){
      $stdetail = Store::where('id',$id)->with('department')->with('main_store')->first();
      return view('admin.store.editstore',compact('id', 'stdetail'));
    }

    public function edit_store(Request $request){
      //return $request;
      $store = Store::find($request->store_id);
      $store->store_name = $request->store_name;
      $store->address = $request->store_address;
      $store->city = $request->store_city;
      $store->area = $request->store_area;
      $store->save();
      Session::flash('success', 'تمت العملية بنجاح!');
      return redirect()->route('storedetail',['id' => $request->store_id]);
    }
/*
    public function store_activation($id , $status){
      Store::find($id)->update(['isActive' => $status]);
      Session::flash('success', 'تمت العملية بنجاح!');
      return redirect()->back();
    }*/
}
