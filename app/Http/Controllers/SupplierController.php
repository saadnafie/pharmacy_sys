<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use App\Models\Supplier;
use App\Models\SupplierCompanyInfo;
use App\Models\TreeAccount;

class SupplierController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }
    
    public function show_all_suppliers(){
      $suppliers = Supplier::with('user')->with('tree')->with('activation')->get();
      return view('admin.supplier.supplierlist',compact('suppliers'));
    }

    public function add_supplier_page(){
      return view('admin.supplier.addsupplier');
    }

    public function add_new_supplier(Request $request){
      $acc = TreeAccount::where('id',16)->with('account')->first();
      $code = ($acc->id_code.'0000')+count($acc->account) + 1;
      
      $account = new TreeAccount;
      $account->id_code = $code;
      $account->name_ar = $request->sup_name_ar;
      $account->name_en = $request->sup_name_en;
      $account->account_type = 1;
      $account->parent_id =  16;
      $account->balance_type = 1;
      $account->user_id = auth()->user()->id;
      $account->final_account_id = 1;
      $account->save();

      $supplier = new Supplier();
      $supplier->name_en = $request->sup_name_en;
      $supplier->name_ar = $request->sup_name_ar;
      $supplier->phone = $request->sup_phone;
      $supplier->email = $request->sup_email;
      $supplier->city = $request->sup_city;
      $supplier->area = $request->sup_area;
      $supplier->address = $request->sup_address;
      $supplier->type = $request->sup_type;
      $supplier->tree_id = $account->id;
      $supplier->user_id = auth()->user()->id;
      $supplier->save();

      $account->id_code = ($acc->id_code.'0000')+$supplier->id;
      $account->save();

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
      $supdetail = Supplier::where('id',$id)->with('company')->with('tree')->first();
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
