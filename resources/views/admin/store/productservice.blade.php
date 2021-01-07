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
                                            <li><span class="bread-blod">المنتجات والخدمات</span>
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
			
			<a href="{{url('addproduct')}}" type="button" class="btn btn-info">اضافة صنف</a>
			<br><br>
			<div class="row">
			<div class="col-md-3">
			<b>اجمالي عدد المنتجات</b> <span style="color:green;font-size:16px;">{{count($products)}}</span>
			</div>
			<div class="col-md-3">
			<b>اجمالي تكلفة المنتجات</b> <span style="color:green;font-size:16px;">500</span>
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
        <th>رقم الصنف </th>
		<th>اسم الصنف</th>
		<th>تاريخ الاضافة</th>
		<th>الكمية</th>
		<th>التكلفة</th>
		<th>الاجراءات</th>
      </tr>
    </thead>
    <tbody>
        @foreach($products as $index=>$product)
      <tr>
        <td>{{$index+1}}</td>
        <td>{{$product->code}}</td>
		<td>{{$product->name}}</td>
        <td>{{$product->created_at}}</td>
		<td>10</td>
		<td>500</td>
        <td>
        <a href="{{url('productdetail')}}/{{$product->id}}" class="btn btn-info">
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

    