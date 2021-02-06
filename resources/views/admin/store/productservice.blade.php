@extends('admin.layouts.header')

@section('content')

     
        <div class="analytics-sparkle-area">
            <div class="container-fluid">
			<br>
			المنتجات والخدمات: <a href="{{url('addproduct')}}" type="button" class="btn btn-info">اضافة صنف</a>
			<br><br>
			<div class="row">
			<div class="col-md-3">
			<b>اجمالي عدد المنتجات</b> <span style="color:green;font-size:16px;">{{count($products)}}</span>
			</div>
			<div class="col-md-3">
			<b>اجمالي الكمية</b> <span style="color:green;font-size:16px;">{{$products->sum('product.total_quantity')}}</span>
			</div>
			<div class="col-md-3">
			<b>متوسط تكلفة المنتجات</b> <span style="color:green;font-size:16px;">{{round($products->sum('product.avg_cost'),2)}}</span>
			</div>
			</div>
<br>
<div class="panel panel-default">
  <div class="panel-body">
<div class="table-responsive">
<table class="table table-bordered" id="example">
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
		@if(isset($product->product))
			<td>{{$product->product->total_quantity}}</td>
			<td>{{round($product->product->total_cost/$product->product->total_quantity,2)}}</td>
		@else
			<td>0</td>
			<td>0</td>
		@endif
		
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

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
    @endsection

    