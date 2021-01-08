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
                                            <li><span class="bread-blod">القيود اليومية</span>
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
			
			<a href="{{url('dailyentry')}}" class="btn btn-success">إنشاء قيد</a>
			<br><br>

<br>

<div class="panel panel-default">
  <div class="panel-body">
<div class="table-responsive">
<table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>التاريخ</th>
        <th>الحساب</th>
		<th>مدين</th>
		<th>دائن</th>
		<th>الوصف</th>
		<th>الاجراءات</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>12/11/2020</td>
		<td>مبيعات</td>
		<td>1000</td>
        <td>0</td>
        <td>لا يوجد</td>
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

    