<?php
include("connection.php");
$districtid = $_POST['value'];
$sql = "SELECT * FROM city WHERE districtid = '". $districtid ."'";
$cityes = $conn->query($sql);
$data = "<select id='city' name='city'>";
$data .= "<option value=''>Select a City</option>";
while($row = mysqli_fetch_array($cityes)){
    $data .= "<option value=".$row['id'] .">".$row['name'] ."</option>";
}
$data .= '</select>';
echo $data;
?>