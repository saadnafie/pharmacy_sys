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
        <th>العنوان</th>
		<th>النوع</th>
		<th>الوصف</th>
		<th>الاجراءات</th>
      </tr>
    </thead>
    <tbody>
        @foreach($entries as $index=>$value)
      <tr>
        <td>{{$index+1}}</td>
        <td>{{$value->date}}</td>
		<td>{{$value->title}}</td>
        @if($value->type == 0)
		<td>يدوي</td>
        @else
        <td>آلي</td>
        @endif
        <td>{{$value->description}}</td>
		<td>-</td>
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

    