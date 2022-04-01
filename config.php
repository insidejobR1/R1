<?php
$servername     = "localhost";
$username     = "root";
$password     = "";
$db = "userdetails";
// Create connection
$con= mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$con) {
    die("Unable to Connect database: " . mysqli_connect_error());
}else{
    echo"successful";
}
?>



















 