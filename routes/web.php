<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('locale/{locale}', function ($locale){
	 App::setLocale($locale);
    Session::put('locale', $locale);
    return redirect()->back();
});


Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/', function () {
    return view('index');
});*/

/*Route::get('/index', function () {
    return view('index');
});*/

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

//--------------------------------------finance------------------------------


Route::get('/accountstree', 'FinancialController@display_account_tree')->name('accountstree');
Route::post('/add_new_accounttree', 'FinancialController@add_new_accounttree')->name('add_new_accounttree');

Route::get('dailyentrylist', 'FinancialController@show_all_entries')->name('dailyentrylist');

Route::get('dailyentry', 'FinancialController@add_entry_page');

Route::post('add_new_entry', 'FinancialController@add_new_entry')->name('add_new_entry');

Route::get('treasurybanklist', function () {
    return view('admin/treasurybanklist');
});
//--------------------------------------sales------------------------------
Route::get('managebill', function () {
    return view('admin/sale/managebill');
});

Route::get('addsalesbill','SalesController@show_bill_page');


Route::get('returnbill', function () {
    return view('admin/sale/returnbill');
});

Route::get('pricelist', function () {
    return view('admin/sale/pricelist');
});

Route::get('pointofsale','SalesController@sale_point_page');

Route::get('managepointofsale', function () {
    return view('admin/sale/managepointofsale');
});

//--------------------------------------purchase------------------------------
Route::get('purchasemanagebill', function () {
    return view('admin/purchase/purchasemanagebill');
});

Route::get('addpurchasebill','PurchasesController@show_bill_page');

Route::get('purchasereturnbill', function () {
    return view('admin/purchase/purchasereturnbill');
});

Route::get('purchaserequest', function () {
    return view('admin/purchase/purchaserequest');
});

//--------------------------------------customerlist------------------------------
Route::get('customerlist', 'CustomerController@show_all_customers')->name('customerlist');

Route::get('addcustomer', 'CustomerController@add_customer_page')->name('addcustomer');

Route::post('add_new_customer', 'CustomerController@add_new_customer')->name('add_new_customer');

Route::get('customerdetail/{id}', 'CustomerController@show_customer_detail')->name('customerdetail');

Route::get('editcustomer/{id}', 'CustomerController@edit_customer_page')->name('editcustomer');
Route::post('edit_customer', 'CustomerController@edit_customer')->name('edit_customer');

Route::get('customer_activation/{id}/{status}', 'CustomerController@customer_activation')->name('customer_activation');

//--------------------------------------supplierlist------------------------------
Route::get('supplierlist', 'SupplierController@show_all_suppliers')->name('supplierlist');

Route::get('addsupplier', 'SupplierController@add_supplier_page')->name('addsupplier');

Route::post('add_new_supplier', 'SupplierController@add_new_supplier')->name('add_new_supplier');

Route::get('supplierdetail/{id}', 'SupplierController@show_supplier_detail')->name('supplierdetail');

Route::get('editsupplier/{id}', 'SupplierController@edit_supplier_page')->name('editsupplier');

Route::post('edit_supplier', 'SupplierController@edit_supplier')->name('edit_supplier');

Route::get('supplier_activation/{id}/{status}', 'SupplierController@supplier_activation')->name('supplier_activation');
//---------------------------------- product & service & store manage ---------------------------


        //////// store///////
Route::get('storemanage', 'StoreController@show_all_stores')->name('storemanage');

Route::get('addstore', 'StoreController@add_store_page')->name('addstore');

Route::post('add_new_store', 'StoreController@add_new_store')->name('add_new_store');

Route::get('storedetail/{id}', 'StoreController@show_store_detail')->name('storedetail');

Route::get('editstore/{id}', 'StoreController@edit_store_page')->name('editstore');

Route::post('edit_store', 'StoreController@edit_store')->name('edit_store');



           //---Items (products/services)---

Route::get('productservice', function () {
    return view('admin/store/productservice');
});

Route::get('addproduct', function () {
    return view('admin/store/addproduct');
});

Route::get('productservice', 'StoreController@show_all_products')->name('productservice');

Route::get('addproduct', 'StoreController@add_product_page')->name('addproduct');

Route::post('add_product', 'StoreController@add_new_product')->name('add_product');

Route::get('productdetail/{id}', 'StoreController@show_product_detail')->name('productdetail');

Route::post('add_new_stock', 'StoreController@add_new_stock')->name('add_new_stock');

    /////////////////// store settings ////////////////////////////
Route::get('storesetting', function () {
    return view('admin/store/storesetting');
});

Route::get('productdefinition', 'StoreController@show_all_definitions')->name('productdefinition');
Route::post('add_new_category', 'StoreController@add_new_category')->name('add_new_category');
Route::post('add_new_type', 'StoreController@add_new_type')->name('add_new_type');



//--------------------------------------employee manage------------------------------
Route::get('manageemployee', 'EmployeeController@show_all_employee')->name('manageemployee');

Route::get('addemployee', 'EmployeeController@add_employee_page')->name('addemployee');

Route::post('add_new_employee', 'EmployeeController@add_new_employee')->name('add_new_employee');

Route::get('employeedetail/{id}', 'EmployeeController@show_employee_detail')->name('employeedetail');

Route::get('editemployee/{id}', 'EmployeeController@edit_employee_page')->name('editemployee');

Route::post('edit_employee', 'EmployeeController@edit_employee')->name('edit_employee');

Route::get('employee_activation/{id}/{status}', 'EmployeeController@employee_activation')->name('employee_activation');

        //////////////////////  org /////////////////////////////

Route::get('orgstructure', 'EmployeeController@show_all_org');
Route::post('add_new_department', 'EmployeeController@add_new_department')->name('add_new_department');
Route::post('add_new_job', 'EmployeeController@add_new_job')->name('add_new_job');
Route::get('department_activation/{id}/{status}', 'EmployeeController@department_activation');
Route::get('job_activation/{id}/{status}', 'EmployeeController@job_activation');


//--------------------------------------Insurance Company------------------------------

Route::get('insurancecompanylist', 'InsuranceCompanyController@show_all_companies')->name('insurancecompanylist');

Route::get('addinsurancecompany', 'InsuranceCompanyController@add_company_page')->name('addinsurancecompany');

Route::post('add_new_company', 'InsuranceCompanyController@add_new_company')->name('add_new_company');

Route::get('insurancecompanydetail/{id}', 'InsuranceCompanyController@show_company_detail')->name('insurancecompanydetail');

Route::post('add_new_class', 'InsuranceCompanyController@add_new_class')->name('add_new_class');

Route::post('edit_class', 'InsuranceCompanyController@edit_class')->name('edit_class');

Route::get('editcompany/{id}', 'InsuranceCompanyController@edit_company_page')->name('editcompany');

Route::post('edit_company', 'InsuranceCompanyController@edit_company')->name('edit_company');
/*
Route::get('employee_activation/{id}/{status}', 'InsuranceCompanyController@employee_activation')->name('employee_activation');*/



//--------------------------------------Branches------------------------------

Route::get('managebranch', 'BranchesController@show_all_branches')->name('managebranch');
Route::get('addbranch', 'BranchesController@add_branch_page')->name('add_branch_page');
Route::post('add_new_branch', 'BranchesController@add_new_branch')->name('add_new_branch');


//////////////////////////////// General Setting ////////////////////////////////////////

            //////////////////// Tax Setting ////////////////////

Route::get('taxsetting', 'GeneralSettingController@show_tax_setting_page')->name('taxsetting');
Route::post('update_tax', 'GeneralSettingController@update_tax')->name('update_tax');
