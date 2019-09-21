<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<?php
session_start();
if(isset($_POST['btnSubmit']))
{
	$_SESSION['uname'] = $_POST['txtUname'];
	setcookie("email",$_POST['txtEmai1']);
	setcookie("address",$_POST['txtaddress']);
	setcookie("contact",$_POST['txtCnt']);
	setcookie("order",$_POST['txtord']);
	
	header("Location: Output.php");
	
}
?>
<body>
<div class="container" style="background-color:rgba(173,48,180,1.00)">
<div class="row">
<div class="col-md-12">
<div class="jumbotron">
<h3 class="display-4" style="animation:running">Registration form </h3>
</div>
<form method="Post" >
<form>
  <div class="form-group">
    <label for="exampleInputEmail1" style="font-family:'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif">Email address</label>
    <input type="email" class="form-control" name="txtEmai1" aria-describedby="emailHelp" placeholder="Enter email">
   </div>
  <div class="form-group">
    <label for="exampleInputPassword1" style="font-family:'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif">Username</label>
    <input type="text" class="form-control" name="txtUname" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" style="font-family:'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif">Address</label>
    <input type="text" class="form-control" name="txtaddress" placeholder="Address" />
    </div>
    <div class="form-group">
    <label for="exampleinputPassword1" style="font-family:'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif">Contact</label>
    <input type="text" class="form-control" name="txtCnt" placeholder="Contact"/>
  </div>
   <label for="exampleinputPassword1" style="font-family:'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif">Order</label>
    <input type="number" class="form-control" name="txtord" placeholder="Order"/><br/>
  </div>  
  <button type="submit" name="btnSubmit" class="btn btn-primary">Registration</button>
</form>
</div>

<body>
</body>
</html>
