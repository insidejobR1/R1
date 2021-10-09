<html><head><title>Customer Form</title><style>
table
{
color:white;
background-color:grey;
border-radius:3px;
padding: 2%;
</style>
<style>
h1 {
  text-align: center;
}
</style>
</head>
<body style="background-color:skyblue;">
<h1><p style="color:blue">Enter below all the details.</p></h1>
<form action="connection1.php" method="POST">
<table align="center"border="2">
<tr>
  <td>Client Name
  <br><input type="text" placeholder="first Name" name="cname" required></td>
</tr>
<tr>
  <td>Guardian Name
  <br><input type="text" placeholder="guardian Name" name="gname" required></td>
</tr>
<tr><td>Guardian type<select name="father" id="father" required>
  <option value="Father">Mr.</option>
  <option value="Mother">ms.</option></td></tr>
  <tr>
<tr><td>Contact Number<br><input type="Number" placeholder="Contact Number" name="cnumber" required></td></tr>
<tr><td>Alternate Number<br><input type="number" placeholder="Alternate Number" name="anumber" required></td></tr>

  <tr><td>Address<br><input type="text" placeholder="Address" name="address" required></td></tr>
<tr><td>Nextmeeting date<br><input type="date" placeholder="Todays date" name="nmdate" required min="<?php $d =strtotime("+15days"); $d= date("Y-m-d", $d); echo $d?>"></td></tr>
<tr><td><input type="submit" value="Submit" name="Submit"></td></tr>
</table>
</body>
</html> 
