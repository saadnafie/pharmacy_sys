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
                                            <li><span class="bread-blod">اضافة فاتورة</span>
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

<div class="col-md-2">
    <div class="form-group">
      <label for="email">اختر العميل</label>
      <select class="form-control" name="credit_debit">
        <option value="0">احمد</option>
         <option value="1">محمد</option>
    </select>
    </div>
</div>

<div class="col-md-2">
    <div class="form-group">
      <label for="pwd">رقم حساب العميل</label>
      <select class="form-control" name="credit_debit">
        <option value="0">5464</option>
         <option value="1">7567657</option>
    </select>
    </div>
</div>

<div class="col-md-2">
    <div class="form-group">
      <label for="pwd">رصيد العميل</label>
      <input type="text" class="form-control"  name="cus_acc_no" disabled>
    </div>
</div>

<div class="col-md-2">
    <div class="form-group">
      <label for="email">نوع الفاتورة</label>
	    <div class="form-control">
      <input type="radio"  name="stock_tracking" value="0"  {{ (old('stock_tracking') == 0) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;نقدي&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio"  name="stock_tracking" value="1" {{ (old('stock_tracking') == 1) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;آجل
</div>
    </div>
</div>

<div class="col-md-2">
    <div class="form-group">
      <label for="pwd">تاريخ الفاتورة</label>
      <input type="date" class="form-control" name="cus_city" required>
    </div>
</div>

<div class="col-md-2">
    <div class="form-group">
      <label for="pwd">مندوب المبيعات</label>
     <select class="form-control" name="credit_debit">
        <option value="0">سامر</option>
         <option value="1">نادر</option>
    </select>
    </div>
</div>


</div>


<div class="row">
 <div class="col-sm-12">
<br><button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-plus"></i></button><br><br>
<div class="table-responsive">
        <table class="table table-bordered table-striped" id="dynamicTable">  
            <tr>
                <th>المنتج</th>
                <th>السعر</th>
                <!--<th>الوحدة</th>-->
				<th>الكمية</th>
                <th>الخصم</th>
				<th>نوع الضريبة</th>
				<th>قيمة الضريبة</th>
				<th>الاجمالي</th>
				<th>حذف</th>
            </tr>
            <tr>  
                <td><input type="text" name="multi_product[]"  class="form-control" /></td>  
                <td><input type="text" name="multi_price[]"  class="form-control" /></td>  
                <!--<td><input type="text" name="multi_unit[]"  class="form-control" /></td> --> 
				 <td><input type="text" name="multi_amount[]"  class="form-control" /></td>  
                <td><input type="text" name="multi_discount[]"  class="form-control" /></td> 
				<td><input type="text" name="multi_tax_type[]"  class="form-control" disabled></td> 
				<td><input type="text" name="multi_tax_val[]"  class="form-control" disabled></td> 
				<td><input type="text" name="multi_total[]"  class="form-control" /></td> 
                <td><button type="button" class="btn btn-danger remove-tr"><i class="fa fa-trash"></i></button></td>  
            </tr>  
        </table> 
		</div>
</div>
</div>


<div class="row">
<div class="col-md-2">
    <div class="form-group">
      <label for="email">إجمالي الاصناف</label>
      <input type="text" class="form-control" name="cus_name" required>
    </div>
</div>

<div class="col-md-2">
    <div class="form-group">
      <label for="pwd">إجمالي الخصم</label>
      <input type="text" class="form-control" name="cus_phone" required>
    </div>
</div>

<div class="col-md-2">
    <div class="form-group">
      <label for="pwd">الإجمالي قبل الضريبة</label>
      <input type="text" class="form-control"  name="cus_acc_no">
    </div>
</div>

<div class="col-md-2">
    <div class="form-group">
      <label for="pwd">الإجمالي بعد الضريبة</label>
      <input type="text" class="form-control"  name="cus_acc_no">
    </div>
</div>

<div class="col-md-2">
    <div class="form-group">
      <label for="email"> الإجمالي النهائي</label>
      <input type="text" class="form-control" name="cus_name" required>
    </div>
</div>

<div class="col-md-2">
    <div class="form-group">
      <label for="pwd">المبلغ المدفوع</label>
      <input type="text" class="form-control" name="cus_phone" required>
    </div>
</div>
</div>

<div class="row">
<div class="col-md-2">
    <div class="form-group">
      <label for="pwd">المبلغ المتبقي</label>
      <input type="text" class="form-control"  name="cus_acc_no">
    </div>
</div>


<div class="col-md-2">
    <div class="form-group">
      <label for="pwd">طريقة الدفع</label>
      <select class="form-control" name="credit_debit">
        <option value="0">كاش</option>
         <option value="1">شبكة</option>
    </select>
    </div>
</div>

<div class="col-md-2">
    <div class="form-group">
      <label for="pwd">تاريخ الاستحقاق</label>
      <input type="date" class="form-control"  name="cus_acc_no">
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
   
        $("#dynamicTable").append('<tr><td><input type="text" name="multi_product[]" class="form-control" /></td><td><input type="text" name="multi_price[]"  class="form-control" /></td><td><input type="text" name="multi_amount[]"  class="form-control" /></td><td><input type="text" name="multi_discount[]"  class="form-control" /></td><td><input type="text" name="multi_tax_type[]"  class="form-control" /><td><input type="text" name="multi_tax_val[]"  class="form-control" /></td><td><input type="text" name="multi_total[]"  class="form-control" /></td></td><td><button type="button" class="btn btn-danger remove-tr"><i class="fa fa-trash"></i></button></td></tr>');
    });
   
    $(document).on('click', '.remove-tr', function(){  
         $(this).parents('tr').remove();
    });  
   
</script>
    @endsection

    