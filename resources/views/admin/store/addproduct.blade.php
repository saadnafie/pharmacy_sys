@extends('admin.layouts.header')

@section('content')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" rel="stylesheet" />

<style>
#multi_values{
	display:none;
}

.select2-container .select2-selection--single{
    height:34px !important;
	width:100%;
}
.select2-container--default .select2-selection--single{
         border: 1px solid #ccc !important; 
     border-radius: 0px !important; 
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
			
<form action="{{route('add_product')}}" method="post">
@csrf

 <div class="row">
  
   <div class="col-sm-12">
<div class="form-group">
<label for="email">النوع</label>
<div class="radio">
  <label><input type="radio" name="item_type" value="1" onclick="service_fields_disable()" checked>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;منتج</label>
  <label><input type="radio" name="item_type" value="2" onclick="service_fields_disable()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;خام</label>
  <label><input type="radio" name="item_type" value="3" onclick="service_fields_enable()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;خدمة</label>
</div>

</div>
</div>

 
 <div class="col-sm-4">
    <div class="form-group">
      <label for="email"> اسم الصنف (en)</label>
      <input type="text" class="form-control"  name="item_name_en" value="{{ old('item_name_en') }}" required>
    
	 @error('item_name_en')
    <div class="alert alert-danger">{{ $message }}</div>
   @enderror
	</div>
  </div>
  
   <div class="col-sm-4">
    <div class="form-group">
      <label for="email"> اسم الصنف (ar)</label>
      <input type="text" class="form-control"  name="item_name_ar" value="{{ old('item_name_ar') }}" required>
    
		   @error('item_name_ar')
    <div class="alert alert-danger">{{ $message }}</div>
   @enderror
	</div>
  </div>

<div class="col-sm-4">
<div class="form-group">
  <label for="email">نوع الضريبة </label>
    <div class="form-control">
  <label><input type="radio" name="tax_type" value="1"  checked>&nbsp;&nbsp;&nbsp;خاضع</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <label><input type="radio" name="tax_type" value="0" >&nbsp;&nbsp;&nbsp;غير خاضع</label>
</div>
</div>
</div>

<div class="col-sm-4">
    <div class="form-group">
      <label for="email">سعر البيع الافتراضى</label>
      <input type="text" class="form-control" name="defaultprice_sale" value="{{ old('defaultprice_sale') }}" required>
    
	   @error('defaultprice_sale')
    <div class="alert alert-danger">{{ $message }}</div>
   @enderror
	</div>
</div>


<div class="col-sm-4">
    <div class="form-group">
       <label for="email">التصنيف الرئيسى</label>
       <select class="form-control selectpicker"  data-live-search="true" name="main_category" id="main_category" onChange="main_category_val()">
        <option value="-1" disabled selected>اختر الفئة الرئيسية</option>
        @foreach($categories as $index=>$value)
        <option value="{{$value->sup_category}}">{{$value->category}}</option>
        @endforeach
       </select>
    </div>
  </div>  



<div class="col-sm-4">
<div class="form-group">
  <label for="email">التصنيف الفرعى</label>
   <select class="form-control"  name="sub_category" id="subcat">
       </select>
   </div>
 </div>

<script>
  function main_category_val() {

    var d = JSON.parse(document.getElementById("main_category").value);
    //document.getElementById("lis_val").value = d;
    
    //console.log(d);

    var catOptions = "";
    catOptions += "<option value='' disabled selected=''>إختر الفئة الفرعية</option>";
     if (d.length == 0) {
      //document.getElementById("subcat").innerHTML = "<option></option>";
      }else {
		   var locale = '{{ config('app.locale') }}';
		   if(locale == 'ar')
        var name = d.map(({category_ar}) => category_ar);
		else
		var name = d.map(({category_en}) => category_en);
		
        var id = d.map(({id}) => id);
        for (x in name) {
          catOptions += "<option value ='" + id[x] +"'>" + name[x] + "</option>";
        }
       // console.log("ddd",d);
      }
      document.getElementById("subcat").innerHTML = catOptions;
  }
</script>


<!---------------------------------------------------->
<div id="item_more">

<div class="col-sm-4">
<div class="form-group">
   <label for="email">المخزون الافتتاحى</label>
      <input type="text" class="form-control" name="base_amount" value="{{ old('base_amount') }}" >
	  
	   @error('base_amount')
    <div class="alert alert-danger">{{ $message }}</div>
   @enderror
    </div>
  </div> 

<div class="col-sm-4">
<div class="form-group">
  <label for="email">المادة الفعالة (en)</label>
      <input type="text" class="form-control" name="react_material_en" value="{{ old('react_material_en') }}">
    @error('react_material_en')
    <div class="alert alert-danger">{{ $message }}</div>
   @enderror
	
	</div>
</div>


<div class="col-sm-4">
<div class="form-group">
  <label for="email">المادة الفعالة (ar)</label>
      <input type="text" class="form-control" name="react_material_ar" value="{{ old('react_material_ar') }}">
    
	@error('react_material_ar')
    <div class="alert alert-danger">{{ $message }}</div>
   @enderror
	</div>
</div>


<div class="col-sm-4">
    <div class="form-group">
      <label for="email">المخزن الافتراضى</label>
      <select class="form-control selectpicker" name="base_store" data-live-search="true">
        @foreach($main_stores as $value)
        <option value="{{$value->id}}">{{$value->store_name}}</option>
        @endforeach
       </select>
    </div>
</div>




<div class="col-sm-4">
<div class="form-group">
   <label for="email">حد تنيه انتهاء المخزون</label>
      <input type="text" class="form-control" name="stock_limit_alarm" value="{{ old('stock_limit_alarm') }}">
    
	@error('stock_limit_alarm')
    <div class="alert alert-danger">{{ $message }}</div>
   @enderror
	</div>
</div>


<div class="col-sm-4">
<div class="form-group">
   <label for="email">التركيز</label>
      <input type="text" class="form-control @error('concentrate') is-invalid @enderror" name="concentrate" value="{{ old('concentrate') }}">
     @error('concentrate')
    <div class="alert alert-danger">{{ $message }}</div>
   @enderror
	
	</div>
	   
</div>


 <div class="col-sm-4">
    <div class="form-group">
       <label for="email">سعر الشراء الافتراضى</label>
      <input type="text" class="form-control" name="defaultprice_purchase" value="{{ old('defaultprice_purchase') }}">
    @error('defaultprice_purchase')
     <div class="alert alert-danger">{{ $message }}</div>
   @enderror
	</div>
</div>




<div class="col-sm-4">
<div class="form-group">
   <label for="email">sku رمز المصنع </label>
      <input type="text" class="form-control" name="sku_code" value="{{ old('sku_code') }}">
	   @error('sku_code')
    <div class="alert alert-danger">{{ $message }}</div>
   @enderror
    </div>
</div>

<div class="col-sm-4">
<div class="form-group">
  <label for="email">نوع المنتج</label>
      <select class="form-control"  name="pro_type">
        @foreach($pro_types as $value)
          <option value="{{$value->id}}" {{ (old('pro_type') == $value->id) ? 'selected' : '' }}>{{$value->type}}</option>
        @endforeach
      </select>
    </div>
</div>

<div class="col-sm-4">
<div class="form-group">
  <label for="email">نوع تتبع  المخزون</label><br>
  <input type="radio"  name="stock_tracking" value="0"  {{ (old('stock_tracking') == 0) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;التاريخ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio"  name="stock_tracking" value="1" {{ (old('stock_tracking') == 1) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;الكمية
@error('stock_tracking')
    <div class="alert alert-danger">{{ $message }}</div>
   @enderror
</div>
</div>




<div id="if_multi_date">
 <div class="col-sm-4">
<div class="form-group">
  <label for="email">تاريخ الانتاج</label>
      <input type="date" class="form-control" name="base_production_date" value="{{ old('base_production_date') }}" >
   
	   @error('base_production_date')
    <div class="alert alert-danger">{{ $message }}</div>
   @enderror

   </div>
 </div>


 <div class="col-sm-4">
    <div class="form-group">
	  <label for="email">تاريخ الانتهاء</label>
      <input type="date" class="form-control" name="base_expire_date" value="{{ old('base_expire_date') }}">
    
	
	   @error('base_expire_date')
    <div class="alert alert-danger">{{ $message }}</div>
   @enderror
	</div>
 </div>



<div class="col-sm-4">
<div class="form-group">
  <label for="email">ملاحظات</label>
      <input type="text" class="form-control" name="base_note" value="{{ old('base_note') }}">
    </div>
 </div>
</div>


 <div class="col-sm-12">
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" id="active_multi_val" name="active_multi_val" value="1" onclick="enable_disable_multival()" >&nbsp;&nbsp;&nbsp;&nbsp;تواريخ متعددة

      </label>
    </div>
 </div>

</div>


</div>

<div id="multi_values">

<div class="row">
 <div class="col-sm-12">
<br><button type="button" name="add" id="add" class="btn btn-success" ><i class="fa fa-plus"></i></button><br><br>



        <table class="table table-bordered table-striped" id="dynamicTable">  
            <tr>
                <th>المخزن</th>
                <th>الكمية</th>
				<th>السعر</th>
                <th>تاريخ الانتاج</th>
                <th>تاريخ الانتهاء</th>
				<th>ملاحظات</th>
				<th>حذف</th>
            </tr>
		
				<tr>  
					<td>
					  <select name="multi_store[]"  class="form-control my-select"  data-live-search="true">
						<option value="-1" disabled selected>اختر المخزن</option>

						@foreach($stores as $value)
						<option value="{{$value->id}}">{{$value->store_name}}</option>
						@endforeach
					  </select>  
					</td>  
					<td><input type="text" name="multi_amount[]"  class="form-control" /></td>  
					<td><input type="text" name="multi_price[]"  class="form-control" /></td>  
					<td><input type="date" name="multi_production_date[]"  class="form-control" /></td>  
					 <td><input type="date" name="multi_expire_date[]"  class="form-control" /></td>  
					<td><input type="text" name="multi_notes[]"  class="form-control" /></td> 
					<td><button type="button" class="btn btn-danger remove-tr"><i class="fa fa-trash"></i></button></td>  
				</tr> 
			
        </table> 
		
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

$('.my-select').selectpicker();

    function service_fields_disable(){
document.getElementById("item_more").style.display = "block";
}

function service_fields_enable(){
document.getElementById("item_more").style.display = "none";
}

function enable_disable_multival(){
 // Get the checkbox
  var checkBox = document.getElementById("active_multi_val");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
   document.getElementById("multi_values").style.display = "block";
   document.getElementById("if_multi_date").style.display = "none";
  } else {
    document.getElementById("multi_values").style.display = "none";
	document.getElementById("if_multi_date").style.display = "block";
  }
}



</script>

<script type="text/javascript">
   
    var i = 0;
       
    $("#add").click(function(){
   
        ++i;
   
	$("#dynamicTable").append('<tr><td><select name="multi_store[]"  class="form-control my-select" data-live-search="true"> <option value="-1">اختر المخزن</option><?php foreach($stores as $value){ ?><option value="{{ $value->id}}">{{ $value->store_name}}</option><?php } ?></select> </td><td><input type="text" name="multi_amount[]"  class="form-control" /></td><td><input type="text" name="multi_price[]"  class="form-control" /></td><td><input type="date" name="multi_production_date[]"  class="form-control" /></td><td><input type="date" name="multi_expire_date[]"  class="form-control" /></td><td><input type="text" name="multi_notes[]"  class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr"><i class="fa fa-trash"></i></button></td></tr>');
        $('.my-select').selectpicker();
		$('.my-select').selectpicker('refresh');
	});
   
    $(document).on('click', '.remove-tr', function(){  
         $(this).parents('tr').remove();
    });  
   
   
     $(function() {
  $('.selectpicker').selectpicker();
});

</script>


    @endsection
	
