<?php

	$user2=$_POST['register'];

if($user2 == "ali" && $pass2 == "123")
{
include('insert2.php');
}

else
{
	include('signup.html');
	echo "Invalid id or Password!!!!";
	
	}

?>
