<?php
$servername = "localhost";
$database = "tablesa";
$username = "sistemas";
$password = "-3n2LC4-";

$link = mysqli_connect($servername, $username, $password, $database);

if (mysqli_connect_errno()) {
   die("Connect failed: %s\n" + mysqli_connect_error());
   exit();
}
echo "Connected successfully";


        
mysqli_close($conn);
