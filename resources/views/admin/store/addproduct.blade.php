@extends('admin.layouts.header')

@section('content')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<style>
#multi_values{
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
                                            <li><span class="bread-blod"> اضافة صنف</span>
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
			
<form action="/action_page.php">

 <div class="row">
  
   <div class="col-sm-12">
<div class="form-group">
<label for="email">النوع</label>
<div class="radio">
  <label><input type="radio" name="item_type" value="1" onclick="info1_disable()" checked>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;منتج</label>
  <label><input type="radio" name="item_type" value="2" onclick="info2_enable()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;خام</label>
  <label><input type="radio" name="item_type" value="3" onclick="info3_enable()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;خدمة</label>
</div>

</div>
</div>


 <div class="col-sm-4">

    <div class="form-group">
      <label for="email">اسم الصنف</label>
      <input type="text" class="form-control"  name="item_name" required>
    </div>

    <div class="form-group">
      <label for="email">سعر البيع الافتراضى</label>
      <input type="text" class="form-control" name="defaultprice_sale" required>
    </div>


    <div class="form-group">
       <label for="email">التصنيف الرئيسى</label>
      <input type="text" class="form-control" name="main_category" required>
    </div>



<div class="form-group">
   <label for="email">المخزون الافتتاحى</label>
      <input type="text" class="form-control" name="open_stock" required>
    </div>



<div class="form-group">
  <label for="email">المادة الفعالة</label>
      <input type="text" class="form-control" name="react_material" required>
    </div>


</div><!-------col---->


 <div class="col-sm-4">


    <div class="form-group">
       <label for="email">رقم الصنف</label>
      <input type="text" class="form-control" name="item_code" disabled>
    </div>



    <div class="form-group">
      <label for="email">المخزن الافتراضى</label>
      <input type="text" class="form-control" name="default_stock" required>
    </div>




<div class="form-group">
  <label for="email">التصنيف الفرعى</label>
      <input type="text" class="form-control" name="sub_category" required>
    </div>




<div class="form-group">
   <label for="email">حد تنيه انتهاء المخزون</label>
      <input type="text" class="form-control" name="stock_limit_alarm" required>
    </div>



<div class="form-group">
   <label for="email">التركيز</label>
      <input type="text" class="form-control" name="concentrate" required>
    </div>



</div><!-------col---->


 <div class="col-sm-4">

    <div class="form-group">
       <label for="email">سعر الشراء الافتراضى</label>
      <input type="text" class="form-control" name="defaultprice_purchase" required>
    </div>



<div class="form-group">
  <label for="email">نوع الضريبة </label>
<select class="form-control"  name="tax_type">
        <option>خاضع</option>
        <option>غير خاضع</option>
      </select>
</div>


<div class="form-group">
   <label for="email">sku رمز المصنع </label>
      <input type="text" class="form-control" name="sku_code" required>
    </div>



<div class="form-group">
  <label for="email">نوع تتبع  المخزون</label>
      <input type="text" class="form-control" name="stock_tracking" required>
    </div>



<div class="form-group">
  <label for="email">نوع المنتج</label>
      <input type="text" class="form-control" name="pro_type" required>
    </div>


</div><!-------col---->








</div><!-------row----->





<div class="row">
 <div class="col-sm-4">
<div class="form-group">
  <label for="email">تاريخ الانتاج</label>
      <input type="date" class="form-control" name="production_date" required>
    </div>
 </div>


 <div class="col-sm-4">
    <div class="form-group">
	  <label for="email">تاريخ الانتهاء</label>
      <input type="date" class="form-control" name="expire_date" required>
    </div>
 </div>





<div class="col-sm-4">
<div class="form-group">
  <label for="email">ملاحظات</label>
      <input type="text" class="form-control" name="notes" required>
    </div>
 </div>

</div>

 <div class="col-sm-12">
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" id="active_multi_val" name="active_multi_val" onclick="enable_disable_multival()" >&nbsp;&nbsp;&nbsp;&nbsp;تواريخ متعددة

      </label>
    </div>
 </div>


<div id="multi_values">

<div class="row">
 <div class="col-sm-12">
<br><button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-plus"></i></button><br><br>
<div class="table-responsive">
        <table class="table table-bordered table-striped" id="dynamicTable">  
            <tr>
                <th>المخزن</th>
                <th>الكمية</th>
                <th>تاريخ الانتاج</th>
                <th>تاريخ الانتهاء</th>
				<th>ملاحظات</th>
				<th>حذف</th>
            </tr>
            <tr>  
                <td><input type="text" name="multi_store[]"  class="form-control" /></td>  
                <td><input type="text" name="multi_amount[]"  class="form-control" /></td>  
                <td><input type="date" name="multi_production_date[]"  class="form-control" /></td>  
				 <td><input type="date" name="multi_expire_date[]"  class="form-control" /></td>  
                <td><input type="text" name="multi_notes[]"  class="form-control" /></td> 
                <td><button type="button" class="btn btn-danger remove-tr"><i class="fa fa-trash"></i></button></td>  
            </tr>  
        </table> 
		</div>
</div>
</div>
</div>

<div class="col-sm-12">
<button type="submit" class="btn btn-primary">حفظ</button>
</div>

</form>



</div>
</div>

</div>
</div>
<br><br>
</div>


            </div>
        </div>
<script>

function enable_disable_multival(){
 // Get the checkbox
  var checkBox = document.getElementById("active_multi_val");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
   document.getElementById("multi_values").style.display = "block";
  } else {
    document.getElementById("multi_values").style.display = "none";
  }
}



</script>

<script type="text/javascript">
   
    var i = 0;
       
    $("#add").click(function(){
   
        ++i;
   
        $("#dynamicTable").append('<tr><td><input type="text" name="multi_store[]" class="form-control" /></td><td><input type="text" name="multi_amount[]"  class="form-control" /></td><td><input type="date" name="multi_production_date[]"  class="form-control" /></td><td><input type="date" name="multi_expire_date[]"  class="form-control" /></td><td><input type="text" name="multi_notes[]"  class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr"><i class="fa fa-trash"></i></button></td></tr>');
    });
   
    $(document).on('click', '.remove-tr', function(){  
         $(this).parents('tr').remove();
    });  
   
</script>
    @endsection