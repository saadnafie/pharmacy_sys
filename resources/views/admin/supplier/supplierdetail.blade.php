@extends('admin.layouts.header')

@section('content')

  </style>
          <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <!--<li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>-->
                                            <li><span class="bread-blod">بيانات المورد</span>
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
    <a href="{{url('editsupplier')}}/{{$supdetail->id}}" class="btn btn-info">
            <i class="fa fa-edit" aria-hidden="true"></i> تعديل بيانات</a> 
          </div>

          <div class="col-md-6" style="text-align:left;">
            @if($supdetail->isActive != 2)
            <a href="{{url('supplier_activation')}}/{{$supdetail->id}}/2" class="btn btn-warning">
            <i class="fa fa-minus-circle" aria-hidden="true"></i> تعليق</a> 
            @endif
            @if($supdetail->isActive != 1)
            <a href="{{url('supplier_activation')}}/{{$supdetail->id}}/1" class="btn btn-success">
            <i class="fa fa-check" aria-hidden="true"></i> تفعيل</a> 
            @endif
            @if($supdetail->isActive != 3)
            <a href="{{url('supplier_activation')}}/{{$supdetail->id}}/3" class="btn btn-danger">
            <i class="fa fa-ban" aria-hidden="true"></i> حظر</a> 
            @endif 
<br>
            <span>حالة</span>:&nbsp;{{$supdetail->activation->activation}}
          </div>
        </div>
<br><br>
<div class="panel panel-default">
  <div class="panel-body">
<form action="{{route('add_new_supplier')}}"  method="post">
@csrf
<div class="row">

<div class="col-md-4">
    <div class="form-group">
      <label for="email">اسم المورد</label>
      <input type="text" class="form-control" value="{{$supdetail->name}}" disabled>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">رقم الجوال</label>
      <input type="text" class="form-control" value="{{$supdetail->phone}}" disabled>
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
      <input type="text" class="form-control" value="{{$supdetail->address}}" disabled>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">المدينة</label>
      <input type="text" class="form-control" value="{{$supdetail->city}}" disabled>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">المنطقة</label>
      <input type="text" class="form-control" value="{{$supdetail->area}}" disabled>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="email">البريد الالكتروني</label>
      <input type="email" class="form-control" value="{{$supdetail->email}}" disabled>
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
      <input type="text" class="form-control" value="{{$supdetail->company->company_name}}" disabled>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="email">الحد الائتماني</label>
      <input type="text" class="form-control" value="{{$supdetail->company->credit_limit}}" disabled>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">المدة الائتمانية</label>
      <input type="text" class="form-control" value="{{$supdetail->company->credit_duration}}" disabled>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">الرصيد الحالي</label>
      <input type="text" class="form-control" value="{{$supdetail->company->current_balance}}" disabled>
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

    