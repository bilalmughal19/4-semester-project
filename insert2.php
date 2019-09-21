<?php



include("connect.php");

	
	$user2=$_POST["t2"];
	$pass2=$_POST["t3"];
	$age2=$_POST["t4"];


$query="insert into members values ('$user2','$pass2','$age2')";
	if(mysqli_query($conn,$query))
	{
		echo 'inserted';
		
		
		}else
		{
			echo 'not inserted';
			}




?>


