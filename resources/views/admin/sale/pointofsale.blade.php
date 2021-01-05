@extends('admin.layouts.header')

@section('content')

<style>
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
     vertical-align: unset; 
	 
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
                                            <li><span class="bread-blod">نقاط البيع</span>
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
<div class="table-responsive">
<table class="table table-bordered">
    <thead >
      <tr class="warning">
        <th>رقم الصنف</th>
        <th>اسم الصنف</th>
		<th>الكمية</th>
		<th>السعر</th>
		<th>الخصم</th>
		<th>الضريبة</th>
		<th>الاجمالي</th>
		<th style="width:50%">المنتجات والخدمات</th>
		<th>اقسام المنتجات</th>
      </tr>
    </thead>
	    <tbody>
      <tr >
        <td colspan="7">4523464262
		
		<div class="bill_items" style="height:300px;">
		items
		</div>
		
		
		
		<table width="100%">
		<thead>
		<tr class="success">
		<th ><button type="button" class="btn btn-success" style="width:100%;height:50px;border-radius:0px;font-size:12px;">إجمالي قبل الضريبة</button></th>
		<th ><button type="button" class="btn btn-success" style="width:100%;height:50px;border-radius:0px;font-size:12px;">إجمالي الخصم</button></th>
		<th ><button type="button" class="btn btn-success" style="width:100%;height:50px;border-radius:0px;font-size:12px;">إجمالي الضريبة</button></th>
		<th colspan="2"><button type="button" class="btn btn-success" style="width:100%;height:50px;border-radius:0px;font-size:12px;">&nbsp;&nbsp;&nbsp;إجمالي النهائي&nbsp;&nbsp;&nbsp;</button></th>
      </tr>
      <tr>
        <th><button type="button" class="btn btn-default" style="width:100%;height:50px;border-radius:0px;">x</button></th>
        <th><button type="button" class="btn btn-default" style="width:100%;height:50px;border-radius:0px;">9</button></th>
		<th><button type="button" class="btn btn-default" style="width:100%;height:50px;border-radius:0px;">8</button></th>
		<th><button type="button" class="btn btn-default" style="width:100%;height:50px;border-radius:0px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></th>
		<th class="success"><button type="button" class="btn btn-success" style="width:100%;height:50px;border-radius:0px;font-size:12px;">الكمية</button></th>
      </tr>
	  <tr>
        <th><button type="button" class="btn btn-default" style="width:100%;height:50px;border-radius:0px;">+/-</button></th>
        <th><button type="button" class="btn btn-default" style="width:100%;height:50px;border-radius:0px;">6</button></th>
		<th><button type="button" class="btn btn-default" style="width:100%;height:50px;border-radius:0px;">5</button></th>
		<th><button type="button" class="btn btn-default" style="width:100%;height:50px;border-radius:0px;">4</button></th>
		<th><button type="button" class="btn btn-info" style="width:100%;height:50px;border-radius:0px;font-size:12px;">الوحدة</button></th>
      </tr>
	  <tr>
        <th rowspan="2"><button type="button" class="btn btn-default" style="width:100%;height:100px;border-radius:0px;">Enter <br><br> = </button></th>
        <th><button type="button" class="btn btn-default" style="width:100%;height:50px;border-radius:0px;">3</button></th>
		<th><button type="button" class="btn btn-default" style="width:100%;height:50px;border-radius:0px;">2</button></th>
		<th><button type="button" class="btn btn-default" style="width:100%;height:50px;border-radius:0px;">1</button></th>
		<th><button type="button" class="btn btn-primary" style="width:100%;height:50px;border-radius:0px;font-size:12px;">خصم</button></th>
      </tr>
	  <tr>
        <th><button type="button" class="btn btn-default" style="width:100%;height:50px;border-radius:0px;">.</button></th>
		<th colspan="2"><button type="button" class="btn btn-default" style="width:100%;height:50px;border-radius:0px;">0</button></th>
		<th><button type="button" class="btn btn-danger" style="width:100%;height:50px;border-radius:0px;font-size:12px;">إزالة</button></th>
      </tr>
	  <tr>
        <th colspan="5" class="success"><button type="button" class="btn btn-success" style="width:100%;height:50px;border-radius:0px;font-size:14px;">الدفع</button></th>
        
      </tr>
    </thead>
	</table>
	
		<td style="width:50%">
	
<div class="row">	
		<div class="col-md-4">
			<div class="panel panel-default">
			  <div class="panel-heading">Panel Heading</div>
			  <div class="panel-body">Panel Content</div>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="panel panel-default">
			  <div class="panel-heading">Panel Heading</div>
			  <div class="panel-body">Panel Content</div>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="panel panel-default">
			  <div class="panel-heading">Panel Heading</div>
			  <div class="panel-body">Panel Content</div>
			</div>
		</div>
</div>
		
<div class="row">	
		<div class="col-md-4">
			<div class="panel panel-default">
			  <div class="panel-heading">Panel Heading</div>
			  <div class="panel-body">Panel Content</div>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="panel panel-default">
			  <div class="panel-heading">Panel Heading</div>
			  <div class="panel-body">Panel Content</div>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="panel panel-default">
			  <div class="panel-heading">Panel Heading</div>
			  <div class="panel-body">Panel Content</div>
			</div>
		</div>
</div>

<div class="row">	
		<div class="col-md-4">
			<div class="panel panel-default">
			  <div class="panel-heading">Panel Heading</div>
			  <div class="panel-body">Panel Content</div>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="panel panel-default">
			  <div class="panel-heading">Panel Heading</div>
			  <div class="panel-body">Panel Content</div>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="panel panel-default">
			  <div class="panel-heading">Panel Heading</div>
			  <div class="panel-body">Panel Content</div>
			</div>
		</div>
</div>


		
		</td>
		<td>

			<div class="panel panel-default">
			  <div class="panel-heading">Panel Heading</div>
			  <div class="panel-body">Panel Content</div>
			</div>
			
			<div class="panel panel-default">
			  <div class="panel-heading">Panel Heading</div>
			  <div class="panel-body">Panel Content</div>
			</div>
           
	
		</td>
      </tr>
    </tbody>
  </table>
</div>
</div>
</div>
            </div>
        </div>


    @endsection

    