

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
<form action="connection.php" method="POST">
<table align="center"border="0">
<tr>
  <td>First Name
  <br><input type="text" placeholder="first Name" name="fname" required></td>
</tr>
  <tr>
<td>Last Name<br><input type="text" placeholder="Last Name" name="lname" required></td></tr>
<tr><td>Contact Number<br><input type="Number" placeholder="Contact Number" name="cnumber" required></td></tr>
<tr><td>Alternate Number<br><input type="text" placeholder="Alternate Number" name="anumber" required></td></tr>
<tr><td>Guardian Name<select name="father" id="father" required>
<option value="">None</option>
  <option value="Father">Father</option>
  <option value="Mother">Mother</option></td></tr>
  <tr><td>Address<br><input type="text" placeholder="Address" name="address" required></td></tr>
  <tr><td>Date Of birth<br><input type="date" placeholder="Date of birth" name="dob" required></td></tr>
<tr><td>Todays date<br><input type="date" placeholder="Todays date" name="tdate" required></td></tr>
<tr><td><input type="Submit" id="btn" name="submit"></a></td></tr>          
</form>
</table>
</body>
</html> 


