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
                                            <li><span class="bread-blod">إدارة الفواتير</span>
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
			
			<button type="button" class="btn btn-success">إنشاء فاتورة</button>
			<br><br>
			<div class="row">
			<div class="col-md-3">
			<b>اجمالي عدد الفواتير</b> <span style="color:green;font-size:16px;">3</span>
			</div>
			<div class="col-md-3">
			<b>اجمالي المبيعات</b> <span style="color:green;font-size:16px;">500</span>
			</div>
			<div class="col-md-3">
			<b>اجمالي المدفوع</b> <span style="color:green;font-size:16px;">300</span>
			</div>
			<div class="col-md-3">
			<b>اجمالي المتبقي</b> <span style="color:green;font-size:16px;">200</span>
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
        <th>رقم الفاتورة</th>
        <th>تاريخ الفاتورة</th>
		<th>أنشئ بواسطة</th>
		<th>المورد</th>
		<th>نوع الفاتورة</th>
		<th>اجمالي المبلغ</th>
		<th>المدفوع</th>
		<th>المتبقي</th>
		<th>الحالة</th>
		<th>الاجراءات</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>24124124</td>
        <td>12/11/2020</td>
		<td>اشرف شبل</td>
		<td>محمد احمد</td>
		<td>نقدي</td>
		 <td>1000</td>
        <td>600</td>
        <td>400</td>
		 <td>مكتمل</td>
        <td>-</td>
      </tr>
    </tbody>
  </table>
  </div>
  </div>
  </div>
            </div>
        </div>


    @endsection

    