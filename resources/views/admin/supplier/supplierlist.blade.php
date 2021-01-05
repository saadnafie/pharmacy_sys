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
                                            <li><span class="bread-blod">قائمة الموردين</span>
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
			
			<a href="{{url('addsupplier')}}" class="btn btn-success">اضافة مورد</a>
			<br><br>
			<div class="row">
			<div class="col-md-3">
			<b>اجمالي عدد الموردين</b> <span style="color:green;font-size:16px;">{{count($suppliers)}}</span>
			</div>
			<div class="col-md-3">
			<b>اجمالي المبيعات</b> <span style="color:green;font-size:16px;">500</span>
			</div>
			</div>
<br>
<div class="panel panel-default">
  <div class="panel-body">

    <div class="table-responsive">
<table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>رقم حساب المورد</th>
        <th>إسم المورد</th>
		<th>أنشئ بواسطة</th>
		<th>تاريخ الانشاء</th>
		<th>نوع المورد</th>
		<th>عدد الفواتير</th>
		<th>اجمالي المبلغ</th>
		<th>اجمالي مدفوعات للمورد</th>
		<th>اجمالي المتبقي للمورد </th>
		<th>الحالة</th>
		<th>الاجراءات</th>
      </tr>
    </thead>
    <tbody>
        @foreach($suppliers as $index=>$supplier)
      <tr>
        <td>{{$index+1}}</td>
        <td>24124124</td>
		<td>{{$supplier->name}}</td>
        <td>{{$supplier->user->name}}</td>
        <td>{{$supplier->created_at}}</td>
        @if($supplier->type)
		<td>نقدي</td>
        @else
        <td>آجل</td>
        @endif
		<td>20</td>
		<td>100</td>
        <td>100</td>
        <td>0</td>
		<td>{{$supplier->activation->activation}}</td>
        <td><a href="{{url('supplierdetail')}}/{{$supplier->id}}" class="btn btn-info">
            <i class="fa fa-eye" aria-hidden="true"></i></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
</div>


            </div>
        </div>


    @endsection

    