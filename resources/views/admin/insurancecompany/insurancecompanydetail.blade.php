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
                                            <li><span class="bread-blod">بيانات الشركة</span>
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

<div class="row">


 <div class="col-sm-4">

    <div class="form-group">
      <label>اسم الشركة</label>
      <input type="text" class="form-control" value="{{$compdetail->company_name}}" disabled>
    </div>

    <div class="form-group">
      <label>الرقم الاضافى</label>
      <input type="text" class="form-control" value="{{$compdetail->phone2}}" disabled>
    </div>


    <div class="form-group">
      <label>البريد الالكترونى</label>
      <input type="text" class="form-control" value="{{$compdetail->email}}" disabled>
    </div>



</div><!-------col---->


 <div class="col-sm-4">

    <div class="form-group">
      <label>اسم الشخص المسؤول</label>
      <input type="text" class="form-control"  value="{{$compdetail->responsible_name}}" disabled>
    </div>



    <div class="form-group">
      <label>رقم السجل التجارى</label>
      <input type="text" class="form-control"  value="{{$compdetail->cr_number}}" disabled>
</div>


<div class="form-group">
  <label>نسبة الخصم</label>
      <input type="text" class="form-control"  value="{{($compdetail->classes)[0]->discount_percentage}}" disabled>
  </div>

    


</div><!-------col---->


 <div class="col-sm-4">

    <div class="form-group">
      <label>رقم التواصل</label>
      <input type="text" class="form-control"   value="{{$compdetail->phone1}}" disabled>
    </div>




<div class="form-group">
  <label>الرقم الضريبى</label>
      <input type="text" class="form-control"  value="{{$compdetail->tax_number}}" disabled>
    </div>





  <div class="form-group">
  <label>المبلغ الثابت</label>
      <input type="text" class="form-control" value="{{($compdetail->classes)[0]->fixed_amount}}" disabled>
    </div>

</div><!-------col---->



</div><!-------row----->

</form>

</div>
</div>

</div>
</div>
<br><br>
</div>


 @endsection