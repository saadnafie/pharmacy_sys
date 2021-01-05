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
                                            <li><span class="bread-blod">بيانات العميل</span>
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
      
		   <div class="row">

<div class="col-md-6">
    <a href="{{url('editcustomer')}}/{{$cusdetail->id}}" class="btn btn-info">
            <i class="fa fa-edit" aria-hidden="true"></i> تعديل بيانات</a>	
</div>
                      <div class="col-md-6" style="text-align:left;">
            @if($cusdetail->isActive != 2)
            <a href="{{url('customer_activation')}}/{{$cusdetail->id}}/2" class="btn btn-warning">
            <i class="fa fa-minus-circle" aria-hidden="true"></i> تعليق</a> 
            @endif
            @if($cusdetail->isActive != 1)
            <a href="{{url('customer_activation')}}/{{$cusdetail->id}}/1" class="btn btn-success">
            <i class="fa fa-check" aria-hidden="true"></i> تفعيل</a> 
            @endif
            @if($cusdetail->isActive != 3)
            <a href="{{url('customer_activation')}}/{{$cusdetail->id}}/3" class="btn btn-danger">
            <i class="fa fa-ban" aria-hidden="true"></i> حظر</a> 
            @endif 
<br>
            <span>حالة</span>:&nbsp;{{$cusdetail->activation->activation}}
          </div>
</div>

<br>
<div class="panel panel-default">
  <div class="panel-body">
<form>

<div class="row">

<div class="col-md-4">
    <div class="form-group">
      <label for="email">اسم العميل</label>
      <input type="text" class="form-control" value="{{$cusdetail->name}}" disabled>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">رقم الجوال</label>
      <input type="text" class="form-control" value="{{$cusdetail->phone}}" disabled>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">رقم حساب العميل</label>
      <input type="text" class="form-control"  value="123456" disabled>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="email">العنوان</label>
      <input type="text" class="form-control" value="{{$cusdetail->address}}" disabled>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">المدينة</label>
      <input type="text" class="form-control" value="{{$cusdetail->city}}" disabled>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">المنطقة</label>
      <input type="text" class="form-control" value="{{$cusdetail->area}}" disabled>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="email">البريد الالكتروني</label>
      <input type="email" class="form-control" value="{{$cusdetail->email}}" disabled>
    </div>
</div>

<div class="col-md-4">
   <div class="form-group">
      <label for="pwd">نوع العميل</label>
      @if($cusdetail->type == 0)
      <input type="text" class="form-control" value="فردي" disabled>
       @else
      <input type="text" class="form-control" value="شركة" disabled>
      @endif
    </div>
</div>
@if($cusdetail->type == 1)
<div id="com_info">
<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">اسم الشركة</label>
      <input type="text" class="form-control" value="{{$cusdetail->company->company_name}}" disabled>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="email">الحد الائتماني</label>
      <input type="text" class="form-control" value="{{$cusdetail->company->credit_limit}}" disabled>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">المدة الائتمانية</label>
      <input type="text" class="form-control" value="{{$cusdetail->company->credit_duration}}" disabled>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">الرصيد الحالي</label>
      <input type="text" class="form-control" value="{{$cusdetail->company->current_balance}}" disabled>
    </div>
</div>
</div>
@endif
</div>


  </form>
</div>
</div>

            </div>
        </div>


    @endsection

    