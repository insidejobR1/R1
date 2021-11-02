<?php
include("connection.php");
$state_id = $_POST['value'];
$sql = "SELECT * FROM district WHERE state_id = '". $state_id ."'";
$districs = $conn->query($sql);
$data = "<select id='district' name='district'>";
$data .= "<option value=''>Select a District</option>";
while($row = mysqli_fetch_array($districs)){
    $data .= "<option value=".$row['districtid'] .">".$row['district_title'] ."</option>";
}
$data .= '</select>';
echo $data;
?>