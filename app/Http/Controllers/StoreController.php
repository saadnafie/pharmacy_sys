<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use App\Models\Store;
use App\Models\Department;

use App\Models\Item;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\ProductDate;

class StoreController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }

    ////////////////////////// stores ////////////////////////////////////////

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
      $store->store_name_en = $request->store_name_en;
      $store->store_name_ar = $request->store_name_ar;
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
      $store->store_name_en = $request->store_name_en;
      $store->store_name_ar = $request->store_name_ar;
      $store->address = $request->store_address;
      $store->city = $request->store_city;
      $store->area = $request->store_area;
      $store->save();
      Session::flash('success', 'تمت العملية بنجاح!');
      return redirect()->route('storedetail',['id' => $request->store_id]);
    }

    /////////////////////////////////////// products //////////////////////////////////////////////

    public function show_all_products(){
		  $products = Item::with('product')->get();
      return view('admin.store.productservice',compact('products'));
    }

    public function add_product_page(){
      $categories = Category::whereNull('parent_id')->with('sup_category')->get();
      $main_stores = Store::where('store_type',0)->get();
      $stores = Store::all();
      $pro_types = ProductType::all();
      return view('admin.store.addproduct',compact('categories','pro_types','stores','main_stores'));
    }

    public function add_new_product(Request $request){
     /* $this->validate($request, [
          'sub_category' => 'required',
        ]);*/
	    if($request->item_type == 3){
        $this->validate($request, [
          'sub_category' => 'required',
        ]);
		  }else if(($request->item_type == 1 || $request->item_type == 2) && (isset($request->active_multi_val) && $request->active_multi_val == 1)){
        $this->validate($request, [
		      'sub_category' => 'required',
          'defaultprice_purchase' => 'required',
          'base_store' => 'required',
          'sku_code' => 'required|unique:products,SKU_code',
          'stock_limit_alarm' => 'required',
          'react_material_en' => 'required',
          'react_material_ar' => 'required',
          'concentrate' => 'required',
          'pro_type' => 'required',
          'base_amount' => 'required',
          'defaultprice_purchase' => 'required',
		  
	        'multi_production_date' => 'required|min:1',
          'multi_expire_date' => 'required',
          'multi_amount' => 'required',
          'multi_price' => 'required',
          'multi_store' => 'required',
        ],[
      		'defaultprice_purchase.required' => 'this field is required',
      		'base_store.required' => 'this field is required',
      		'sku_code.required' => 'this field is required',
      		'stock_limit_alarm.required' => 'this field is required',
      		'react_material_en.required' => 'this field is required',
      		'react_material_ar.required' => 'this field is required',
      		'concentrate.required' => 'this field is required',
      		'pro_type.required' => 'this field is required',
      		'base_amount.required' => 'this field is required',
      		'defaultprice_purchase.required' => 'this field is required',
      		]);
      		
              }else{
                $this->validate($request, [
      		  'sub_category' => 'required',
                'defaultprice_purchase' => 'required',
                'base_store' => 'required',
                'sku_code' => 'required|unique:products,SKU_code',
                'stock_limit_alarm' => 'required',
                'react_material_en' => 'required',
                'react_material_ar' => 'required',
                'concentrate' => 'required',
                'pro_type' => 'required',
                'base_amount' => 'required',
                'defaultprice_purchase' => 'required',
      		  
                  'base_production_date' => 'required',
                  'base_expire_date' => 'required',
                ],[
      		'defaultprice_purchase.required' => 'this field is required',
      		'base_store.required' => 'this field is required',
      		'sku_code.required' => 'this field is required',
      		'stock_limit_alarm.required' => 'this field is required',
      		'react_material_en.required' => 'this field is required',
      		'react_material_ar.required' => 'this field is required',
      		'concentrate.required' => 'this field is required',
      		'pro_type.required' => 'this field is required',
      		'base_amount.required' => 'this field is required',
      		'defaultprice_purchase.required' => 'this field is required',
		  ]);
        
      }

      $item = new Item();
      $item->code = "10000";
      $item->name_en = $request->item_name_en;
      $item->name_ar = $request->item_name_ar;
      $item->default_sale_price = $request->defaultprice_sale;
      $item->sub_category_id = $request->sub_category;
      $item->type = $request->item_type;
      $item->isTax = $request->tax_type;
      $item->user_id = auth()->user()->id;
      $item->save();
      $item->code = $item->code + $item->id;
      $item->save();

      if($request->item_type == 1 || $request->item_type == 2){

        $product = new Product();
        $product->item_id = $item->id;
        $product->default_buy_price = $request->defaultprice_purchase;
        $product->default_store_id = $request->base_store;
        $product->SKU_code = $request->sku_code;
        $product->stock_limit = $request->stock_limit_alarm;
        $product->track_type = $request->stock_tracking;
        $product->react_material_en = $request->react_material_en;
        $product->react_material_ar = $request->react_material_ar;
        $product->concentrate = $request->concentrate;
        $product->product_type_id = $request->pro_type;
        $product->save();

        if(isset($request->active_multi_val) && $request->active_multi_val == 1){
          foreach ($request->multi_production_date as $key => $value) {
            if($value != null){
              $pro_date = new ProductDate();
              $pro_date->product_id = $product->id;
              $pro_date->production_date = $value;
              $pro_date->expire_date = ($request->multi_expire_date)[$key];
              $pro_date->quantity = ($request->multi_amount)[$key];
              $pro_date->cost = ($request->multi_price)[$key];
              $pro_date->store_id = ($request->multi_store)[$key];
              $pro_date->note = ($request->multi_notes)[$key];
              $pro_date->save();
            } 
          }
        }else{
          $pro_date = new ProductDate();
          $pro_date->product_id = $product->id;
          $pro_date->production_date = $request->base_production_date;
          $pro_date->expire_date = $request->base_expire_date;
          $pro_date->quantity = $request->base_amount;
          $pro_date->cost = $request->defaultprice_purchase;
          $pro_date->store_id = $request->base_store;
          $pro_date->note = $request->base_note;
          $pro_date->save();
        }
      }
      Session::flash('success', 'تمت العملية بنجاح!');
      return redirect()->route('productservice');
    }

    public function show_product_detail($id){
      $product = Item::where('id',$id)->with('product')->with('category')->first();
      $stores = Store::all();
      return view('admin.store.productdetail',compact('product','stores'));
    }

    public function add_new_stock(Request $request){
      $pro_date = new ProductDate();
      $pro_date->product_id = $request->product_id;
      $pro_date->production_date = $request->production_date;
      $pro_date->expire_date = $request->expiration_date;
      $pro_date->quantity = $request->store_id;
      $pro_date->store_id = $request->store_id;
      $pro_date->note = $request->notes;
      $pro_date->save();

      return redirect()->back();
    }

}
