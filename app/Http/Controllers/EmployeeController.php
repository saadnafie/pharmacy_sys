<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use App\Models\Employee;
use App\Models\Nationality;
use App\Models\Department;
use App\Models\Job;
use App\Models\EmployeeActivation;
use App\Models\ContractType;
use App\Models\PeriodType;
use App\Models\Month;

class EmployeeController extends Controller
{

    public function __construct(){
      $this->middleware('auth');
    }

    public function show_all_employee(){
      $employees = Employee::with('nationality')->with('department')->with('job')->with('activation')->with('contract_type')->with('period_type')->get();
      //dd($employees);
      return view('admin.employee.manageemployee',compact('employees'));
    }

    public function add_employee_page(){
      $nationality = Nationality::all();
      $department = Department::with('jobs')->get();
      $job_type = Job::all();
      $activation = EmployeeActivation::all();
      $contract_type = ContractType::all();
      $period_type = PeriodType::all();
      //return $department;
      return view('admin.employee.addemployee' , compact('nationality','department','job_type','activation','contract_type','period_type'));
    }

    public function add_new_employee(Request $request){

      $file = $request->file('emp_photo');

      $employee = new Employee();
      $employee->name = $request->emp_name;
      $employee->email = $request->emp_email;
      $employee->image = 'x.jpg';
      $employee->gender = $request->emp_gender;
      $employee->nationality_id = $request->emp_nationality;
      $employee->home_address = $request->emp_homeaddress;
      $employee->home_phone = $request->emp_homephone;
      $employee->job_address = $request->emp_workaddress;
      $employee->job_phone = $request->emp_workphone;
      $employee->department_id = $request->dept_name;
      $employee->hiring_date = $request->hiring_date;
      $employee->end_date = $request->hiring_deadline;
      $employee->job_id = $request->emp_jop;
      $employee->contract_type_id = $request->contract_type;
      $employee->period_type_id = $request->period_type;
      $employee->sys_lang = $request->sys_lang;
      $employee->isActive = $request->emp_status;
      if(isset($request->login_access))
        $employee->isLogged = 1;
      $employee->save();

      $image_name = 'emp_img'.$employee->id."_".date("Ymdhis").".jpg";
      $employee->image = $image_name;
      $employee->save();
      $file->move(public_path("data/employees/images"), $image_name);

      if(isset($request->name)){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->name;
        $user->address = $request->name;
        $user->phone = $request->name;
        $user->password = Hash::make($request->phone);
        $user->user_type_id = 2;
        $user->save();
      }

      Session::flash('success', 'تمت العملية بنجاح!');
      return redirect()->route('manageemployee');
    }

    public function show_employee_detail($id){
      $empdetail = Employee::where('id',$id)->with('nationality')->with('department')->with('job')->with('activation')->with('contract_type')->with('period_type')->first();
      //return $empdetail;
      return view('admin.employee.employeedetail', compact('empdetail'));
    }

    public function edit_employee_page($id){
      $nationality = Nationality::all();
      $department = Department::all();
      $job_type = Job::with('levels')->whereNull('parent_id')->get();
      $activation = EmployeeActivation::all();
      $contract_type = ContractType::all();
      $period_type = PeriodType::all();
      $empdetail = Employee::where('id',$id)->with('nationality')->with('department')->with('job')->first();
      $cur_levels = Job::where('parent_id',$empdetail->job->main->id)->get();

      return view('admin.employee.editemployee',compact('empdetail','nationality','department','job_type','cur_levels','activation','contract_type','period_type'));
    }

    public function edit_employee(Request $request){

      $employee = Employee::find($request->emp_id);
      $employee->name = $request->emp_name;
      $employee->email = $request->emp_email;
      $employee->home_address = $request->emp_homeaddress;
      $employee->home_phone = $request->emp_homephone;
      $employee->job_address = $request->emp_workaddress;
      $employee->job_phone = $request->emp_workphone;
      $employee->end_date = $request->hiring_deadline;
      $employee->job_id = $request->emp_jop;
      $employee->save();

      Session::flash('success', 'تمت العملية بنجاح!');
      return redirect()->route('manageemployee');
    }

    public function employee_activation($id , $status){
      Employee::find($id)->update(['isActive' => $status]);
      Session::flash('success', 'تمت العملية بنجاح!');
      return redirect()->back();
    }

    ///////////////////////////// Org //////////////////////////////////

    public function show_all_org(){
      $departments = Department::all();
      $jobs = Job::whereNull('parent_id')->with('department')->get();
      $levels = Job::whereNotNull('parent_id')->with('main')->get();
      $months = Month::all();
      return view('admin.employee.orgstructure',compact('departments','jobs','levels','months'));
    }

    public function add_new_department(Request $request){
      $department = new Department();
      $department->department_en = $request->dept_name_en;
      $department->department_ar = $request->dept_name_ar;
      if($request->dept_desc != '')
        $department->description = $request->dept_desc;
      $department->finance_date = $request->day_val;
      $department->finance_month = $request->month_val;
      $department->status = $request->isActive;
      $department->save();

      Session::flash('success', 'تمت العملية بنجاح!');
      return redirect()->back();
    }

    public function department_activation($id , $status){
      Department::find($id)->update(['status' => $status]);
      Session::flash('success', 'تمت العملية بنجاح!');
      return redirect()->back();
    }

    public function add_new_job(Request $request){
      $job= new Job();
      $job->job_en = $request->job_name_en;
      $job->job_ar = $request->job_name_ar;
      if(isset($request->dept_id))
        $job->department_id = $request->dept_id;
      else{
        $j = Job::find($request->job_id);
        $job->department_id = $j->department_id;
      }
      if(isset($request->job_desc))
        $job->description = $request->job_desc;
      if(isset($request->job_id))
        $job->parent_id = $request->job_id;
      $job->status = $request->isActive;
      $job->save();

      Session::flash('success', 'تمت العملية بنجاح!');
      return redirect()->back();
    }

    public function job_activation($id , $status){
      Job::find($id)->update(['status' => $status]);
      Session::flash('success', 'تمت العملية بنجاح!');
      return redirect()->back();
    }

}
