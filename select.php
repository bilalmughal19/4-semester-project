<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photoshare";

$a=$_POST["t2"];
$b=$_POST["t3"];

echo $a;

echo $b;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM members where userid='$a' AND passwd='$b'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
   session_start();
   $_SESSION["userdata"]=$a;
        include('memberdash.html');
    
    
} else {
    echo "wrong";
include('login.html');

}

mysqli_close($conn);
?> 

