<?php
include("connection.php");
?>
<?php $results = $conn->query("SELECT * FROM userform"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<table border="2">
	<thead>
		<tr>
			<th>Client Name</th>
			<th>Guardian Name</th>
            <th>Guardian Type</th>
            <th>DOB</th>
            <th>Moblie Number</th>
            <th>Additional Number</th>
            <th>Address</th>
            <th>State Name</th>
            <th>District</th>
            <th>next follow up datedress</th>
            <th>City</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['client_name']; ?></td>
			<td><?php echo $row['guardian_name']; ?></td>
            <td><?php echo $row['guardian_type']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><?php echo $row['mobile_no']; ?></td>
            <td><?php echo $row['anumber']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['state']; ?></td>
            <td><?php echo $row['district']; ?></td>
            <td><?php echo $row['next_follow_up_date']; ?></td>
            <td><?php echo $row['city']; ?></td>
			<td>
				<a href="display.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
<script>
	$(document).ready(function(){
		console.log("hello");
	});
</script>

    