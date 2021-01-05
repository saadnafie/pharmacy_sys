@extends('admin.layouts.header')

@section('content')


<style>
#com_info{
display:none;
}
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
                                            <li><span class="bread-blod">اضافة العملاء</span>
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
<form action="{{route('add_new_customer')}}"  method="post">
@csrf
<div class="row">

<div class="col-md-4">
    <div class="form-group">
      <label for="email">اسم العميل</label>
      <input type="text" class="form-control" name="cus_name" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">رقم الجوال</label>
      <input type="text" class="form-control" name="cus_phone" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">رقم حساب العميل</label>
      <input type="text" class="form-control"  name="cus_acc_no">
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="email">العنوان</label>
      <input type="text" class="form-control" name="cus_address" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">المدينة</label>
      <input type="text" class="form-control" name="cus_city" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">المنطقة</label>
      <input type="text" class="form-control" name="cus_area" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="email">البريد الالكتروني</label>
      <input type="email" class="form-control" name="cus_email" required>
    </div>
</div>

<div class="col-md-4">

    <div class="form-group">
      <label for="pwd">نوع العميل</label>
        <div class="radio">
  <label><input type="radio" name="cus_type" value="0" onclick="company_info_disable()" checked>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;فردي</label>
  <label><input type="radio" name="cus_type" value="1" onclick="company_info_enable()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;شركة</label>
</div>
    </div>
</div>

<div id="com_info">
<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">اسم الشركة</label>
      <input type="text" class="form-control" name="com_name">
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="email">الحد الائتماني</label>
      <input type="text" class="form-control" name="com_credit_limit">
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">المدة الائتمانية</label>
      <input type="text" class="form-control" name="com_credit_duration">
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for="pwd">الرصيد الحالي</label>
      <input type="text" class="form-control" name="com_current_balance">
    </div>
</div>
</div>

</div>

<div class="row">
   <div class="col-md-12">
      <button type="submit" class="btn btn-primary">حفظ</button>
    </div>
</div>

  </form>
</div>
</div>

            </div>
        </div>

<script>
  function company_info_disable(){
document.getElementById("com_info").style.display = "none";
}

function company_info_enable(){
document.getElementById("com_info").style.display = "block";
}
</script>
    @endsection

    