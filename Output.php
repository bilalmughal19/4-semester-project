<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration view</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<?php
session_start();
$uname = $_SESSION['uname'];
echo $_COOKIE['email'];
?>
<table width="200" border="2">
  <tr>
    <th scope="row">Email Address</th>
    <td><?php echo $_COOKIE['email']?></td>
  </tr>
  <tr>
    <th scope="row">Username</th>
    <td><?php echo $_SESSION['uname']?></td>
  </tr>
  <tr>
    <th scope="row">Address</th>
    <td><?php echo $_COOKIE['address']?></td>
  </tr>
  <tr>
    <th scope="row">Contact</th>
    <td><?php echo $_COOKIE['contact']?></td>
  </tr>
  <tr>
  <th scope="row">Order</th>
   <td><?php echo $_COOKIE['order']?></td>
  </tr>
  <tr>
    <th bgcolor="#308CC0">Successfully Registered</th>
  </tr>
</table>