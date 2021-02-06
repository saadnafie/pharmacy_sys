<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Card</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
  

<style>
body{
	background-color: brown;
}
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  box-sizing: border-box;
  background-image: url('img/searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
</head>
<body> 

<div class="card">
    <div class="card-body" style="background-color:#58040c;">
	<div class="dropdown">
	<button onclick="myFunction()" class="dropbtn"><i class="fa fa-th" aria-hidden="true"></i> Categories</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    @foreach($categories as $value)
      <a href="#about">{{$value->category}}</a>
    @endforeach
  </div>
 </div>  
  
 </div> 
  </div> 
  
<div class="container-fluid">
  <br>
  
<div class="row">

<div class="col-lg-8">

<div class="row">
  @foreach($products as $index=>$value)
  <div class="col-md-3">
  <div class="card" >
  <div class="card-body">
    <a href="#" class="btn btn-primary" onclick="addCode({{$index}})"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
	<input type="hidden" id="pro{{$index}}" value="{{$value}}">
    <b class="card-text" >{{$value->name}}</b>
  </div>
</div>
  </div>
  @endforeach

</div> 

   </div>
   
   
   <div class="col-sm-4">
   <div style="padding:10px;background-color: coral;height: 100vh;">
   <table  class="table table-striped">
    <thead>
    <tr>
		<th>Product</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>Delete</th>
	</tr>
	 </thead>
	 <tbody id="add_to_me">
	 
	 </tbody>
   </table>
   <hr>
   <hr>
   <table>
    <tr><td><b>Discount:</b></td><td> 30</td></tr>
   <tr><td><b>Sub total:</b></td><td> 100</td></tr>
   <tr><td><b>Taxes:</b></td><td> 20</td></tr>
   <tr><td colspan="2"><hr></td></tr>
   <tr><td><b>Total:</b></td><td> 90</td></tr>
   </table>
   <br><br>
   <div class="form-group">
    <input type="number" class="form-control" id="usr" placeholder="Discount Value" >
	</div>
	<div class="form-group">
	  <select class="form-control form-control-lg selectpicker" data-live-search="true" >
		<option data-tokens="Default Customer" selected disabled>Default Customer</option>
    @foreach($customers as $value)
		<option data-tokens="Customer2">{{$value->name}}</option>
    @endforeach
	  </select>
	</div>
   <button type="button" class="btn btn-danger btn-lg btn-block"><i class="fa fa-money" aria-hidden="true"></i> Pay Order</button>
   </div>
   </div>
   
</div>
  
</div>





<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>

<script> 

  function addCode(x) { 
    var pro = JSON.parse(document.getElementById("pro"+x).value);
    //console.log(pro.name);
    document.getElementById("add_to_me").innerHTML += '<tr><td>'+ pro.name +'</td>'+'<td>'+pro.default_sale_price+'</td>'+'<td><input type="text" value="1"></td>'+'<td><button type="button" class="btn btn-danger remove-tr"><i class="fa fa-trash"></i></button></td>'+'</tr>'; 
  } 
	
	$(document).on('click', '.remove-tr', function(){  
		$(this).parents('tr').remove();
	});
		
	$(function() {
    $('.selectpicker').select2();
  });
</script> 

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

</body>
</html>
