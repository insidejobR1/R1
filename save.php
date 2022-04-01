<?php
include 'config.php';

if(isset($_GET['id'])){
	$id= $_GET['id'];
	$sql = "DELETE FROM `userform` WHERE id=$id ";
	if (mysqli_query($con, $sql)) {
		echo"<script>
		alert('user Delete successfully');
		location.assign('indexx.php');
   </script>";
	} 
	else {
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
	mysqli_close($con);
}

if(count($_POST)>0){
	if($_POST['type']==1){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$psw=$_POST['psw'];
		$add=$_POST['add'];
		$sql = "INSERT INTO `userform`( `username`, `email`,`password`,`address`)VALUES ('$name','$email','$psw','$add')";
    
		if (mysqli_query($con, $sql)) {
			echo json_encode(array("statusCode"=>200));
  echo"<script>
       alert('user added successfully');
       assign.location('indexx.php');
  </script>";
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);
	}
}



if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$psw=$_POST['psw'];
		$add=$_POST['add'];
		$sql = "UPDATE `userform` SET `username`='$name',`email`='$email',`password`='$psw',`address`='$add' WHERE `email`='$email'";
		if (mysqli_query($con, $sql)) {
			echo"<script>
			alert('user updated successfully');
			location.assign('indexx.php');
	   </script>";
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `userform` WHERE id=$id ";
		if (mysqli_query($con, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM userform WHERE id in ($id)";
		if (mysqli_query($con, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);
	}
}

?>