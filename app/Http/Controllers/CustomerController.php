<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use App\Models\Customer;
use App\Models\CustomerCompanyInfo;

class CustomerController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }

    public function show_all_customers(){
      $customers = Customer::with('user')->with('activation')->get();
      return view('admin.customer.customerlist',compact('customers'));
    }

    public function add_customer_page(){
      return view('admin.customer.addcustomer');
    }

    public function add_new_customer(Request $request){
      //return auth()->user();
        $customer = new Customer();
        $customer->name = $request->cus_name;
        $customer->phone = $request->cus_phone;
        $customer->email = $request->cus_email;
        $customer->city = $request->cus_city;
        $customer->area = $request->cus_area;
        $customer->address = $request->cus_address;
        $customer->type = $request->cus_type;
        $customer->user_id = auth()->user()->id;
        $customer->save();
        if($request->cus_type == 1){
          $company = new CustomerCompanyInfo();
          $company->customer_id = $customer->id;
          $company->company_name = $request->com_name;
          $company->credit_limit = $request->com_credit_limit;
          $company->credit_duration = $request->com_credit_duration;
          $company->current_balance = $request->com_current_balance;
          $company->save();
        }
        Session::flash('success', 'تمت العملية بنجاح!');
        return redirect()->route('customerlist');
    }

    public function show_customer_detail($id){
      $cusdetail = Customer::where('id',$id)->with('company')->first();
      return view('admin.customer.customerdetail', compact('cusdetail'));
    }

    public function edit_customer_page($id){
      $cusdetail = Customer::where('id',$id)->with('company')->first();
      return view('admin.customer.editcustomer',compact('id', 'cusdetail'));
    }

    public function edit_customer(Request $request){
      //return $request;
        $customer = Customer::find($request->cus_id);
        $customer->name = $request->cus_name;
        $customer->phone = $request->cus_phone;
        $customer->email = $request->cus_email;
        $customer->city = $request->cus_city;
        $customer->area = $request->cus_area;
        $customer->address = $request->cus_address;
        $customer->type = $request->cus_type;
        $customer->save();
        if($request->cus_type == 1){
          $company = CustomerCompanyInfo::where('customer_id',$request->cus_id)->first();
          $company->company_name = $request->com_name;
          $company->credit_limit = $request->com_credit_limit;
          $company->credit_duration = $request->com_credit_duration;
          $company->current_balance = $request->com_current_balance;
          $company->save();
        }
        Session::flash('success', 'تمت العملية بنجاح!');
        return redirect()->route('customerdetail',['id' => $request->cus_id]);
    }

    public function customer_activation($id , $status){
      Customer::find($id)->update(['isActive' => $status]);
      Session::flash('success', 'تمت العملية بنجاح!');
      return redirect()->back();
    }
}
