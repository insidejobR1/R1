<?php


 if(isset($_GET['id'])){
	$id=$_GET['id'];
    include("connection.php");

    $dele = "DELETE FROM `userform` WHERE id='$id'";
	$res = mysqli_query($conn,$dele);

    if (($res) === TRUE) {
  echo "Record deleted successfully";
  //  echo "<script> window.location.href:read.php</script>";
  header('location:read.php');
}
 else {
  echo "Error deleting record: " . $conn->error;
}
}
?>