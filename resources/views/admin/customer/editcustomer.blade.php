@extends('admin.layouts.header')

@section('content')

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
                                            <li><span class="bread-blod">تعديل بيانات العميل</span>
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
<form action="{{route('edit_customer')}}"  method="post">
@csrf
<div class="row">
<input type="hidden" class="form-control" name="cus_id" value="{{$cusdetail->id}}">
<div class="col-md-4">
    <div class="form-group">
      <label for="email">اسم العميل</label>
      <input type="text" class="form-control" name="cus_name" value="{{$cusdetail->name}}" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">رقم الجوال</label>
      <input type="text" class="form-control" name="cus_phone" value="{{$cusdetail->phone}}"required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">رقم حساب العميل</label>
      <input type="text" class="form-control"  name="cus_acc_no" value="7868686">
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="email">العنوان</label>
      <input type="text" class="form-control" name="cus_address" value="{{$cusdetail->address}}" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">المدينة</label>
      <input type="text" class="form-control" name="cus_city" value="{{$cusdetail->city}}" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">المنطقة</label>
      <input type="text" class="form-control" name="cus_area" value="{{$cusdetail->area}}" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="email">البريد الالكتروني</label>
      <input type="email" class="form-control" name="cus_email" value="{{$cusdetail->email}}" required>
    </div>
</div>



@if($cusdetail->type == 1)
<div id="com_info">
<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">اسم الشركة</label>
      <input type="text" class="form-control" value="{{$cusdetail->company->company_name}}" name="com_name">
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="email">الحد الائتماني</label>
      <input type="text" class="form-control" value="{{$cusdetail->company->credit_limit}}" name="com_credit_limit">
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">المدة الائتمانية</label>
      <input type="text" class="form-control" value="{{$cusdetail->company->credit_duration}}"  name="com_credit_duration">
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">الرصيد الحالي</label>
      <input type="text" class="form-control" value="{{$cusdetail->company->current_balance}}" name="com_current_balance">
    </div>
</div>
</div>
@endif

</div>

<div class="row">
   <div class="col-md-4">
      <button type="submit" class="btn btn-primary">تعديل البيانات</button>
    </div>
</div>

  </form>
</div>
</div>

            </div>
        </div>
    @endsection

    