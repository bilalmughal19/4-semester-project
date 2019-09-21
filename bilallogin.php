
<?php

$a = $_POST["txt"];
$b = $_POST["pswrd"];

echo "<br>Username::<br/> ".$a;

if($a == "Bilal" && $b == "Mughal")
{
	echo "Loginsuccess";
	include("home.html");
}
   else 
   {
	   echo "failed";
   }

?>
