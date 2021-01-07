<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TreeAccount;

class OwnerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function display_account_tree()
    {
        $allaccountslist = TreeAccount::where('account_type', 0)->get();

        $allaccounts = TreeAccount::whereNull('parent_id')->with('children')->get();
		
		$data['data'] =  $allaccounts;
		
		$core =  json_encode(array('core'=>$data));
        //return $core;->with('account_tree')
		
		//$core = json_encode($core2);
		//return $core;
		
        return view('admin.accountstree2',compact('allaccounts', 'allaccountslist', 'core'));
    }

    public function add_new_accounttree(Request $request)
    {
        $account = new TreeAccount;

        $account->name_ar = $request->name_ar;
        $account->name_en = $request->name_en;
        $account->account_type = $request->acc_type;

        if($request->acc_parent != 0)
        $account->parent_id = $request->acc_parent;

        $account->save();

        return redirect()->back();
    }
}
