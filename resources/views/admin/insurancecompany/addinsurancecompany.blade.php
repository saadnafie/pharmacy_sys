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
                                            <li><span class="bread-blod">اضافة شركة</span>
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

<form action="{{route('add_new_company')}}" method="post">
@csrf


<div class="row">


 <div class="col-sm-4">

    <div class="form-group">
      <label>اسم الشركة</label>
      <input type="text" class="form-control" name="insurancecom_name" required>
    </div>

    <div class="form-group">
      <label>الرقم الاضافى</label>
      <input type="text" class="form-control" name="insurancecom_phone2" required>
    </div>


    <div class="form-group">
      <label>البريد الالكترونى</label>
      <input type="text" class="form-control" name="insurancecom_email" required>
    </div>



<div class="form-group">
  <label>المبلغ الثابت</label>
      <input type="text" class="form-control" name="insurancecom_fixedamount" required>
    </div>


</div><!-------col---->


 <div class="col-sm-4">

    <div class="form-group">
      <label>اسم الشخص المسؤول</label>
      <input type="text" class="form-control"  name="insurancecom_responsible" required>
    </div>



    <div class="form-group">
      <label>رقم السجل التجارى</label>
      <input type="text" class="form-control"  name="insurancecom_commertialrecord" required>
    </div>




<div class="form-group">
  <label>التصنيف</label>
      <input type="text" class="form-control"  name="insurancecom_classification" required>
    </div>




<div class="form-group">
  <label>الحد الاقصى للتحمل</label>
      <input type="text" class="form-control"   name="insurancecom_maxlimit" required>
    </div>

</div><!-------col---->


 <div class="col-sm-4">

    <div class="form-group">
      <label>رقم التواصل</label>
      <input type="text" class="form-control"   name="insurancecom_phone" required>
    </div>




<div class="form-group">
  <label>الرقم الضريبى</label>
      <input type="text" class="form-control"  name="insurancecom_tax" required>
    </div>



<div class="form-group">
  <label>نسبة الخصم</label>
      <input type="text" class="form-control"  name="insurancecom_discount" required>
  </div>

</div><!-------col---->




<div class="col-sm-12">
<button type="submit" class="btn btn-primary" >حفظ</button>
</div>

</div><!-------row----->

</form>

</div>
</div>

</div>
</div>
<br><br>
</div>


 @endsection