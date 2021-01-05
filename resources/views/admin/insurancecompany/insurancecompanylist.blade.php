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
                                            <li><span class="bread-blod">شركات التأمين</span>
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
			
			<a href="{{url('addinsurancecompany')}}" type="button" class="btn btn-info">اضافة شركة</a>
			<br><br>
			<div class="row">
			<div class="col-md-3">
			<b>اجمالي عدد الشركات</b> <span style="color:green;font-size:16px;">{{count($companies)}}</span>
			</div>
			<div class="col-md-3">
			<b>اجمالي عدد فواتير الشركة</b> <span style="color:green;font-size:16px;">5</span>
			</div>
            <div class="col-md-3">
            <b>اجمالي تكلفة فواتير الشركة</b> <span style="color:green;font-size:16px;">500</span>
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
        <th>معرف الشركة </th>
		<th>اسم الشركة</th>
		<th>تاريخ الاضافة</th>
		<th>عدد الفواتير</th>
		<th>التكلفة</th>
		<th>الاجراءات</th>
      </tr>
    </thead>
    <tbody>
        @foreach($companies as $index=>$company)
      <tr>
        <td>{{$index+1}}</td>
        <td>24124124</td>
		<td>{{$company->company_name}}</td>
        <td>{{$company->created_at}}</td>
		<td>10</td>
		<td>500</td>
        <td>
        <a href="{{url('insurancecompanydetail')}}/{{$company->id}}" class="btn btn-info">
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

    