@extends('admin.layouts.header')

@section('content')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<style>
#com_info{
display:none;
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
                                            <li><span class="bread-blod">اضافة قيد</span>
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
<form action="{{route('add_new_customer')}}"  method="post">
@csrf
<div class="row">

<div class="col-md-12">
    <div class="form-group">
      <label for="email">التاريخ</label>
      <input type="date" class="form-control" name="cus_name" required>
    </div>
</div>

<div class="col-md-12">
    <div class="form-group">
      <label for="pwd">الوصف</label>
      <textarea rows="4" class="form-control" name="cus_phone" ></textarea>
    </div>
</div>


</div>


<div class="row">
 <div class="col-sm-12">
<br><button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-plus"></i></button><br><br>
<div class="table-responsive">
        <table class="table table-bordered table-striped" id="dynamicTable">  
            <tr>
                <th>اسم الحساب *</th>
                <th>الوصف</th>
                <th>مدين *</th>
				<th>دائن *	</th>
				<th>حذف</th>
            </tr>
            <tr>  
                <td><input type="text" name="multi_product[]"  class="form-control" /></td>  
                <td><input type="text" name="multi_price[]"  class="form-control" /></td>  
                <td><input type="text" name="multi_unit[]"  class="form-control" /></td>  
				 <td><input type="text" name="multi_amount[]"  class="form-control" /></td>  
                <td><button type="button" class="btn btn-danger remove-tr"><i class="fa fa-trash"></i></button></td>  
            </tr>  
        </table> 
		</div>
</div>
</div>




<div class="row">
   <div class="col-md-12">
      <button type="submit" class="btn btn-primary">حفظ</button>
    </div>
</div>

  </form>
</div>
</div>

            </div>
        </div>

<script type="text/javascript">
   
    var i = 0;
       
    $("#add").click(function(){
   
        ++i;
   
        $("#dynamicTable").append('<tr><td><input type="text" name="multi_product[]" class="form-control" /></td><td><input type="text" name="multi_price[]"  class="form-control" /></td><td><input type="text" name="multi_unit[]"  class="form-control" /></td><td><input type="text" name="multi_amount[]"  class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr"><i class="fa fa-trash"></i></button></td></tr>');
    });
   
    $(document).on('click', '.remove-tr', function(){  
         $(this).parents('tr').remove();
    });  
   
</script>
    @endsection

    