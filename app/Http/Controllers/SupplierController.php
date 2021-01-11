<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use App\Models\Supplier;
use App\Models\SupplierCompanyInfo;

class SupplierController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }
    
    public function show_all_suppliers(){
        $suppliers = Supplier::with('user')->with('activation')->get();
        return view('admin.supplier.supplierlist',compact('suppliers'));
    }

    public function add_supplier_page(){
        return view('admin.supplier.addsupplier');
    }

    public function add_new_supplier(Request $request){
        $supplier = new Supplier();
        $supplier->name_en = $request->sup_name_en;
        $supplier->name_ar = $request->sup_name_ar;
        $supplier->phone = $request->sup_phone;
        $supplier->email = $request->sup_email;
        $supplier->city = $request->sup_city;
        $supplier->area = $request->sup_area;
        $supplier->address = $request->sup_address;
        $supplier->type = $request->sup_type;
        $supplier->user_id = auth()->user()->id;
        $supplier->save();
        if($request->sup_type == 1){
          $company = new SupplierCompanyInfo();
          $company->supplier_id = $supplier->id;
          $company->company_name_en = $request->com_name_en;
          $company->company_name_ar = $request->com_name_ar;
          $company->credit_limit = $request->com_credit_limit;
          $company->credit_duration = $request->com_credit_duration;
          $company->current_balance = $request->com_current_balance;
          $company->save();
        }
        Session::flash('success', 'تمت العملية بنجاح!');
        return redirect()->route('supplierlist');
    }

    public function show_supplier_detail($id){
      $supdetail = Supplier::where('id',$id)->with('company')->first();
      return view('admin.supplier.supplierdetail', compact('supdetail'));
    }

    public function edit_supplier_page($id){
      $supdetail = Supplier::where('id',$id)->with('company')->first();
      return view('admin.supplier.editsupplier',compact('id','supdetail'));
    }

    public function edit_supplier(Request $request){
        $supplier = Supplier::find($request->sup_id);
        $supplier->name_en = $request->sup_name_en;
        $supplier->name_ar = $request->sup_name_ar;
        $supplier->phone = $request->sup_phone;
        $supplier->email = $request->sup_email;
        $supplier->city = $request->sup_city;
        $supplier->area = $request->sup_area;
        $supplier->address = $request->sup_address;
        $supplier->save();
        if($request->sup_type == 1){
          $company = SupplierCompanyInfo::where('supplier_id',$request->sup_id)->first();
          $company->company_name_en = $request->com_name_en;
          $company->company_name_ar = $request->com_name_ar;
          $company->credit_limit = $request->com_credit_limit;
          $company->credit_duration = $request->com_credit_duration;
          $company->current_balance = $request->com_current_balance;
          $company->save();
        }
        Session::flash('success', 'تمت العملية بنجاح!');
        return redirect()->route('supplierdetail',['id'=>$request->sup_id]);
    }

    public function supplier_activation($id , $status){
      Supplier::find($id)->update(['isActive' => $status]);
      Session::flash('success', 'تمت العملية بنجاح!');
      return redirect()->back();
    }
}
