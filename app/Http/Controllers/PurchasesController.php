<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Store;
use App\Models\Item;
use App\Models\Employee;
use App\Models\Supplier;
use App\Models\TaxSetting;
use App\Models\PurchaseBill;
use App\Models\PurchaseBillProduct;
use App\Models\ProductDate;

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

    public function add_new_bill(Request $request){

        $supp = Supplier::where('id',$request->supplier_id)->with('tree')->first();
        $pursh_tree = TreeAccount::find(28);
        $pursh_tax_tree = TreeAccount::find(29);

        $bill = new PurchaseBill();
        $bill->bill_number = 0;
        $bill->bill_date = $request->bill_date;
        $bill->supplier_id = $request->supplier_id;
        $bill->employee_id = $request->employee_id;
        $bill->total_discount = $request->total_discount;
        $bill->total_before_tax = $request->total_before_tax;
        $bill->total_tax = $request->total_tax;
        $bill->total_final = $request->final_total;
        $bill->paid_amount = $request->paid_amount;
        $bill->remaining_amount = $request->remaining_amount;
        $bill->due_date = $request->due_date;
        $bill->pay_way = $request->credit_debit;
        if($request->final_total == $request->paid_amount || $request->final_total <= $request->paid_amount)
            $bill->is_paid = 1;
        else
            $bill->is_paid = 0;
        $bill->save();
        $bill->bill_number = $bill->id;
        $bill->save();

        foreach ($request->multi_product as $key => $product) {
            $product_date = new ProductDate();
            $product_date->product_id = $product->id;
            $product_date->production_date = ($request->multi_production_date)[$key];
            $product_date->expire_date = ($request->multi_expire_date)[$key];
            $product_date->quantity = ($request->multi_price)[$key];
            $product_date->cost = ($request->multi_amount)[$key];
            $product_date->store_id  = $request->store_id;
            $product_date->note = ($request->multi_note)[$key];
            $product_date->save();

            $bill_pro = new PurchaseBillProduct();
            $bill_pro->bill_id = $bill->id;
            $bill_pro->product_id = $product_date->id;
            $bill_pro->product_discount = ($request->multi_discount)[$key];
            $bill_pro->tax_value = ($request->multi_tax_val)[$key];
            $bill_pro->quantity = ($request->multi_amount)[$key];
            $bill_pro->total_amount = ($request->multi_total)[$key];
            $bill_pro->save();
        }

        $entry = new AccountingEntry();
        $entry->type = 1;
        $entry->title_en = "Due purchase invoice number".$bill->id;
        $entry->title_ar = "إستحقاق فاتورة شراء رقم".$bill->id;
        $entry->date = date('Y-m-d');
        $entry->description = "إستحقاق فاتورة شراء رقم".$bill->id;
        $entry->user_id = auth()->user()->id;
        $entry->save();

        //////////////////////// supp ///////////////////////////
        $account = TreeAccount::find($supp->tree_id);
        $account->balance = $account->balance - $request->total_final;
        $account->save();

        $action = new EntryAction();
        $action->entry_id = $entry->id;
        $action->tree_id = $acc;
        $action->credit = $request->total_final;
        $action->debit = 0;
        $action->balance = $account->balance;
        $action->save();
        //////////////////////// pursh ///////////////////////////////
        $account = TreeAccount::find($acc);
        $account->balance = $account->balance + $request->total_before_tax;
        $account->save();

        $action = new EntryAction();
        $action->entry_id = $entry->id;
        $action->tree_id = $acc;
        $action->credit = 0;
        $action->debit = $request->total_before_tax;
        $action->balance = $account->balance;
        $action->save();
        ////////////////////////pursh tax ///////////////////////////
        $account = TreeAccount::find($acc);
        $account->balance = $account->balance + $request->total_tax;
        $account->save();

        $action = new EntryAction();
        $action->entry_id = $entry->id;
        $action->tree_id = $acc;
        $action->credit = 0;
        $action->debit = $request->total_tax;
        $action->balance = $account->balance;
        $action->save();

    }
}
