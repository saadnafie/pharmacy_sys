@extends('admin.layouts.header')

@section('content')

<style>
    .form-group textarea{
        height:60px;
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
                                            <li><span class="bread-blod">اعدادت المخازن والمنتجات </span>
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
			
		

<br>

<a href="{{url('productdefinition')}}" class="btn btn-primary">تعريفات المنتجات</a>



            </div>
        </div>


    @endsection

    