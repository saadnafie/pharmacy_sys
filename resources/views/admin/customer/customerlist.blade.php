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
                                            <li><span class="bread-blod">قائمة العملاء</span>
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
			
			<a href="{{url('addcustomer')}}" class="btn btn-success">اضافة عميل</a>
			<br><br>
			<div class="row">
			<div class="col-md-3">
			<b>اجمالي عدد العملاء</b> <span style="color:green;font-size:16px;">{{count($customers)}}</span>
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
        <th>رقم حساب العميل</th>
        <th>اسم العميل</th>
		<th>أنشئ بواسطة</th>
		<th>تاريخ الانشاء</th>
		<th>نوع العميل</th>
		<th>عدد الفواتير</th>
		<th>اجمالي المبلغ</th>
		<th>اجمالي مدفوعات العميل</th>
		<th>اجمالي المتبقي علي العميل</th>
		<th>الحالة</th>
		<th>الاجراءات</th>
      </tr>
    </thead>
    <tbody>
        @foreach($customers as $index=>$customer)
      <tr>
        <td>{{$index+1}}</td>
        <td>24124124</td>
        <td>{{$customer->name}}</td>
		<td>{{$customer->user->name}}</td>
        <td>{{$customer->created_at}}</td>
        @if($customer->type == 0)
		<td>فردي</td>
        @else
        <td>شركة</td>
        @endif
		<td>20</td>
		<td>100</td>
        <td>100</td>
        <td>0</td>
		<td>{{$customer->activation->activation}}</td>
        <td>
            <a href="{{url('customerdetail')}}/{{$customer->id}}" class="btn btn-info">
            <i class="fa fa-eye" aria-hidden="true"></i></a>
        </td>
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

    