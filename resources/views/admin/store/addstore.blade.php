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
                                            <li><span class="bread-blod">اضافة مستودع</span>
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


<form action="{{route('add_new_store')}}" method="post">
  @csrf
    
    <div class="row">


 <div class="col-sm-4">

    <div class="form-group">
      <label for="email">اسم المستودع بالإنجليزي</label>
      <input type="text" class="form-control"  name="store_name_en" required>
    </div>

    <div class="form-group">
      <label for="email">اسم المستودع بالعربي</label>
      <input type="text" class="form-control"  name="store_name_ar" required>
    </div>

  <div class="form-group">
    <label for="email">العنوان</label>
      <input type="text" class="form-control"  name="store_address" required>
    </div>


    <div class="form-group">
      <label for="email">صلاحية العرض</label>
<select class="form-control" id="sel1" name="view_permission">
        <option>الكل</option>
        <option>دور وظيفي محدد</option>
         <option>موظف محدد</option>
        <option>فرع محدد</option>
      </select>
    </div>



<div class="form-group">
<label for="email">القسم التابع له</label>
      <select class="form-control" id="sel1" name="store_dept">
        @foreach($department as $value)
        <option value="{{$value->id}}">{{$value->department}}</option>
        @endforeach
      </select>
    </div>


</div><!-------col---->


 <div class="col-sm-4">


    <div class="form-group">
      <label for="email">النوع </label>
      <select class="form-control" id="sel1" name="store_type">
        <option value="0">رئيسي</option>
        <option value="1">فرعي</option>
      </select>
    </div>



    <div class="form-group">
       <label for="email">المدينة </label>
      <input type="text" class="form-control"  name="store_city" required>
    </div>




<div class="form-group">
   <label for="email">صلاحية انشاء فواتير </label>
<select class="form-control" id="sel1" name="bill_permission">
        <option>الكل</option>
        <option>دور وظيفي محدد</option>
         <option>موظف محدد</option>
        <option>فرع محدد</option>
      </select>
    </div>

</div><!-------col---->


 <div class="col-sm-4">

<div class="form-group">
  <label for="email">المستودع الرئيسى </label>
 <select class="form-control" id="sel1" name="main_store">
  @foreach($main_store as $value)
        <option value="{{$value->id}}">{{$value->store_name}}</option>
  @endforeach
      </select>
</div>


<div class="form-group">
   <label for="email">المنطقة </label>
      <input type="text" class="form-control"  name="store_area" required>
    </div>



<div class="form-group">
  <label for="email">صلاحية تعديل المخازن </label>
<select class="form-control" id="sel1" name="store_permission">
        <option>الكل</option>
        <option>دور وظيفي محدد</option>
         <option>موظف محدد</option>
        <option>فرع محدد</option>
      </select>
    </div>

</div><!-------col---->

 <div class="col-sm-12">
<button type="submit" class="btn btn-primary">حفظ</button>

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