
<?php

$a = $_POST["t2"];
$b = $_POST["t3"];

echo "<br>Username::<br/> ".$a;

if($a == "ali" && $b == "123")
{
	echo "Loginsuccess";
	include("select.php");
}
   else 
   {
	   echo "failed";
   }

?>
