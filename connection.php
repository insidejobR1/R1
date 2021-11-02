<?php
$conn = new mysqli("localhost", "root", "","customerform");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Escape user inputs for security
if(isset($_POST['submit'])){
$clientname = $_POST['client_name'];
$Guardianname = $_POST['guardian_name'];
$Guardiantype = $_POST['guardian_type'];
$Dob = $_POST['dob'];
$Mobileno = $_POST['mobile_no'];
$Additionalno = $_POST['anumber'];
$Address = $_POST['address'];
$State = $_POST['State'];
$District = $_POST['district'];
$Nextfollowupdate = $_POST['next_follow_up_date'];
$City = $_POST['city'];
//echo "data is taken";
$sql = "INSERT INTO userform (client_name, guardian_name, guardian_type, dob, mobile_no, anumber, address, state, district, next_follow_up_date, city ) VALUES ('$clientname', '$Guardianname', '$Guardiantype', '$Dob', '$Mobileno', '$Additionalno', '$Address', '$State', '$District', '$Nextfollowupdate', '$City' )";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>
