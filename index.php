
<html><head><title>Customer Form</title>
<?php
include("connection.php");
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
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
<form action="index.php" method="POST">
<table align="center"border="0">
<tr>
  <td>Client Name<br><input type="text" placeholder="clientname" name="client_name" id='client_name' required></td>
</tr>
  <tr>
<td>Guardian Name<br><input type="text" placeholder="guardianame" name="guardian_name" required></td></tr>
<tr><td>Guardian Type<br><placeholder="text" required>
<select id="gname" name="guardian_type" >
<option value="">None</option>
  <option value="S/O">S/O</option>
  <option value="w/o">W/O</option>
  <option value="d/o">D/O</option>
  <option value="c/o">C/O</option></td></tr> 
</select></td></tr>
<tr><td>Date Of birth<br><input type="date" placeholder="Date of birth" name="dob" min="1980-01-01" max="2000-01-01" required></td></tr>
<tr><td>Mobile Number<br><input type="text" placeholder="Mobile Number" name="mobile_no"  minlength="10" maxlength="10" required></td></tr>

<tr><td>Additional Number<br><input type="text" placeholder="additionalnumber" name="anumber"  minlength="10" maxlength="10" required></td></tr>

  <tr><td>Address<br><input type="text" placeholder="Address" name="address" required></td></tr>
  <tr><td>State<br>
<select id="state" name="State">
  <option value="">Select a State</option>
  <?php
  $sql = "SELECT * FROM state";
 $res =  $conn->query($sql);
   while ($row = mysqli_fetch_array($res)) { ?>
    <option value="<?php echo $row['state_id']?>"><?php echo $row['state_title']?></option>
    <?php }?>
  </select></td></tr>
  <input type="hidden" placeholder="Mobile Number" name="valueGet" id="valueGet">
<tr><td>District<br><name="district" required>
<select id="district" name="district">
  <option value="">Select a District</option>
  </select>

  <tr><td>Next Followup date<br><input type="date" placeholder="date" name="next_follow_up_date" min="<?php echo date('d-m-y',strtotime(date('d-m-Y'). ' + 1 days')); ?>" max="<?php echo date('d-m-y',strtotime(date('d-m-Y'). ' + 14 days')); ?> " required></td></tr>
  <tr><td>City<br><name="city" required>
<select id="city" name="city">
  <option value="">Select a city</option>
</select></td></tr>
  <tr><td><input type="Submit" id="btn" value="submit" name="submit"></td></tr>          
</form>
</table>
</body>
</html> 
<script>
	$(document).ready(function(){
    $("#state").change(function(){
      $.ajax({
        url:"state_to_district.php",
        type:'POST',
        data:{value:$("#state").val()},
        success:function(data){
           $("#district").html(data);
        }
      });
    });
    $("#district").change(function(){
     $.ajax({
        url:"district_to_city.php",
        type:'POST',
        data:{value:$("#district").val()},
        success:function(data){
           $("#city").html(data);
        }
      });
    });
	});
</script>