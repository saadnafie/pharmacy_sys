@extends('admin.layouts.header')

@section('content')
          <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <!--<li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>-->
                                            <li><span class="bread-blod">اضافة الموظفين</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     
        <div class="analytics-sparkle-area">
            <div class="container-fluid">
			

<div class="panel panel-default">
  <div class="panel-body">
<form action="{{route('add_new_employee')}}" method="post" enctype="multipart/form-data">
@csrf

<div class="row">

<div class="col-md-12">
    <div class="form-group">
      <label for="email">الادارة التابع لها</label>
      <select class="form-control"  name="dept_name">
        @foreach($department as $value)
        <option value="{{$value->id}}">{{$value->department}}</option>
        @endforeach
      </select>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="email">اسم الموظف</label>
      <input type="text" class="form-control" name="emp_name" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">ارفاق صورة</label>
      <input type="file" class="form-control"   name="emp_photo" required>
    </div>
</div>

<div class="col-md-4">
  <div class="form-group">
  <label for="email">حالة الموظف</label>
    <select class="form-control"   name="emp_status">
        @foreach($activation as $value)
        <option value="{{$value->id}}">{{$value->activation}}</option>
        @endforeach
      </select>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="email">البريد الالكتروني</label>
      <input type="email" class="form-control" name="emp_email" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">لغة النظام للموظف</label>
      <select class="form-control"   name="sys_lang">
        <option value="ar">عربي</option>
        <option value="en">انجليزي</option>
      </select>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">الصلاحيات المسموح بها</label>
      <select class="form-control"   name="emp_permission">
        <option value="1">مدير للنظام</option>
        <option value="2">موظف مشتريات</option>
      </select>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="email">الجنس</label>
      <select class="form-control" name="emp_gender">
        <option value="m">ذكر</option>
        <option value="f">انثي</option>
      </select>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">الجنسية</label>
        <select class="form-control" name="emp_nationality">
        @foreach($nationality as $value)
        <option value="{{$value->id}}">{{$value->nationality_ar}}</option>
        @endforeach
      </select>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">عنوان الموظف في دولته</label>
      <input type="text" class="form-control" name="emp_homeaddress" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="email">رقم التواصل في دولته</label>
      <input type="text" class="form-control"   name="emp_homephone" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">عنوان العمل</label>
      <input type="text" class="form-control" name="emp_workaddress" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">رقم التواصل في العمل</label>
      <input type="text" class="form-control"   name="emp_workphone" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="email">تاريخ التعيين</label>
      <input type="date" class="form-control" name="hiring_date" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">الوظيفة</label>
        <select class="form-control" name="emp_jop">
        @foreach($job_type as $value)
        <option value="{{$value->id}}">{{$value->type}}</option>
        @endforeach
      </select>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">المستوي الوظيفي</label>
      <select class="form-control" name="jop_level">
        @foreach($job_level as $value)
        <option value="{{$value->id}}">{{$value->level}}</option>
        @endforeach
      </select>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="email">نوع الدوام</label>
     <select class="form-control" name="period_type">
        @foreach($period_type as $value)
        <option value="{{$value->id}}">{{$value->period_type}}</option>
        @endforeach
      </select>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">تاريخ نهاية العقد</label>
      <input type="date" class="form-control" name="hiring_deadline" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">نوع العقد</label>
      <select class="form-control" name="contract_type">
        @foreach($contract_type as $value)
        <option value="{{$value->id}}">{{$value->contract_type}}</option>
        @endforeach
      </select>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="email">العطلات الرسمية</label>
        <select class="form-control"   name="emp_holidays">
        <option value="1">عيد الفطر</option>
        <option value="2">عيد الاضحي</option>
      </select>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">سياسة الاجازات السنوية</label>
      <select class="form-control"   name="holidays_policy">
        <option value="1">شهر</option>
        <option value="2">شهرين</option>
      </select>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">تاريخ الاجازى القادمة</label>
      <input type="date" class="form-control" name="next_holiday_date" required>
    </div>
</div>

<div class="col-md-12">
<div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" value="1" name="login_access"> تفعيل دخول النظام
    </label>
  </div>
</div>

<div class="col-md-12">
    <button type="submit" class="btn btn-primary">حفظ</button>
  </div>  

  </form>
</div>
</div>

            </div>
        </div>


    @endsection

    