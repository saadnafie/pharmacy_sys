<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TreeAccount;
use App\Models\FinalAccount;

class FinancialController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function display_account_tree()
    {
        $allaccountslist = TreeAccount::where('account_type', 0)->get();

        $allaccounts = TreeAccount::whereNull('parent_id')->with('children')->get();
		
		$data['data'] =  $allaccounts;
		
		$core =  json_encode(array('core'=>$data));
        $final_accounts = FinalAccount::all();
        //return $core;->with('account_tree')
		
		//$core = json_encode($core2);
		//return $core;
		
        return view('admin.financial.accountstree2',compact('allaccounts', 'allaccountslist', 'core','final_accounts'));
    }

    public function add_new_accounttree(Request $request)
    {
        $acc = TreeAccount::where('id',$request->acc_parent)->with('account')->first();
        $code = ($acc->id_code.count($acc->account)) + 1;
        //return $code;

        $account = new TreeAccount;
        $account->id_code = $code;
        $account->name_ar = $request->name_ar;
        $account->name_en = $request->name_en;
        $account->account_type = $request->acc_type;
        $account->parent_id = $request->acc_parent;
        $account->balance_type = $request->credit_debit;
        $account->user_id = auth()->user()->id;
        $account->final_account_id = $request->final_acc;
        $account->save();

        return redirect()->back();
    }
}
