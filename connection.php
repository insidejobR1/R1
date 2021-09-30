<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "customer");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

// Escape user inputs for security
$firstname = $mysqli->real_escape_string($_REQUEST['fname']);
$lastname = $mysqli->real_escape_string($_REQUEST['lname']);
$contactnumber = $mysqli->real_escape_string($_REQUEST['cnumber']);
$alternatenumber = $mysqli->real_escape_string($_REQUEST['anumber']);
$guardianname = $mysqli->real_escape_string($_REQUEST['father']);
$address = $mysqli->real_escape_string($_REQUEST['address']);
$dateofbirth = $mysqli->real_escape_string($_REQUEST['dob']);
$todaysdate = $mysqli->real_escape_string($_REQUEST['tdate']);
 
$sql = "INSERT INTO form (firstname, lastname, contactnumber, alternatenumber, guardianname, address, dateofbirth, todaysdate) VALUES ('$firstname', '$lastname', '$contactnumber', '$alternatenumber', '$guardianname', '$address', '$dateofbirth', '$todaysdate')";
if($mysqli->query($sql) === true)
{
    echo "records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>
