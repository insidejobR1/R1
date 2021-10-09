<html>
<head><title>display the customer form</title>
</head>

<body>
  <table border="2">

  <tr>

    <th>Client Name</th>
    <th>Guardian Name</th>
    <th>Guardian Type</th>
    <th>Contact Number Type</th>
  <th>Address</th>
   <th>Nextmeeting Date</th>
</tr>

<?php

include("connection1.php");

$query = "SELECT * FROM form1";
$data = mysqli_query($mysqli,$query);
$total = mysqli_num_rows($data);
 if($total>0)


 {

  while($result=mysqli_fetch_assoc($data))


  {
    
   echo "<tr><td>".$result['clientname']."</td>";
   echo "<td>".$result['guardianname']."</td>";
  echo "<td>".$result['guardiantype']."</td>";
  echo "<td>".$result['contactnumber']."</td>";
    echo "<td>".$result['address']."</td>";
    echo "<td>".$result['nextmeetingdate']."</td></tr>";
  }
 echo "table has record";
 }
else{
  echo "<tr> Record not Found </tr>";
}
 ?>
</table>
 </body>
 </html>





