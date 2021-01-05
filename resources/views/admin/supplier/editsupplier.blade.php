@extends('admin.layouts.header')

@section('content')

<style>

  </style>
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
                                            <li><span class="bread-blod">اضافة الموردين</span>
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
<form action="{{route('edit_supplier')}}"  method="post">
@csrf
<div class="row">

<input type="hidden" class="form-control" name="sup_id" value="{{$supdetail->id}}">

<div class="col-md-4">
    <div class="form-group">
      <label for="email">اسم المورد</label>
      <input type="text" class="form-control" name="sup_name" value="{{$supdetail->name}}" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">رقم الجوال</label>
      <input type="text" class="form-control" name="sup_phone" value="{{$supdetail->phone}}" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">رقم حساب المورد</label>
      <input type="text" class="form-control" name="sup_acc_no" disabled>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="email">العنوان</label>
      <input type="text" class="form-control" name="sup_address" value="{{$supdetail->address}}" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">المدينة</label>
      <input type="text" class="form-control" name="sup_city" value="{{$supdetail->city}}" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">المنطقة</label>
      <input type="text" class="form-control" name="sup_area" value="{{$supdetail->area}}" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="email">البريد الالكتروني</label>
      <input type="email" class="form-control" name="sup_email" value="{{$supdetail->email}}" required>
    </div>
</div>

<div class="col-md-4">
   <div class="form-group">
      <label for="pwd">نوع العميل</label>
      <input type="text" class="form-control" value="{{$supdetail->type}}" disabled>
    </div>
</div>

@if($supdetail->type == 1)
<div id="com_info">
<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">اسم الشركة</label>
      <input type="text" class="form-control" name="com_name" value="{{$supdetail->company->company_name}}">
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="email">الحد الائتماني</label>
      <input type="text" class="form-control" name="com_credit_limit" value="{{$supdetail->company->credit_limit}}">
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">المدة الائتمانية</label>
      <input type="text" class="form-control" name="com_credit_duration" value="{{$supdetail->company->credit_duration}}">
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">الرصيد الحالي</label>
      <input type="text" class="form-control" name="com_current_balance" value="{{$supdetail->company->current_balance}}">
    </div>
</div>
</div>
@endif
</div>

<div class="col-md-4">
    <button type="submit" class="btn btn-primary">تعديل البيانات</button>
    </div>

  </form>
</div>
</div>

            </div>
        </div>

<script>
 
</script>
    @endsection

    