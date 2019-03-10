<?php
require "stableconnect.php";
require "beginadmin.php";
if(!$loggedin)
{
	header("location:in_signin.php");
	exit();
	}
?>
<center>
	<h3>Queries</h3></center>
<br><br>
<center>
	 <div id="tablediv">
        <table class="table table-bordered table-striped "id="t01">
		      <thead>
					<th> User Name</th>
					<th> User Email</th>
					<th> Contact</th>
					<th> State</th>
					<th> City</th>
					<th> Address</th>
					<th> Category</th>
					<th> Pincode</th>
					<th> Website</th>
					<th> Description</th>
					<th> Date</th>
					</thead>
				  <tbody>
						<?php
						$sql_query0="SELECT * FROM grievances_details order by (id) desc";
	      $result0=mysqli_query($conn,$sql_query0);
	   while($row0=mysqli_fetch_assoc($result0))
		 {  ?>
				<tr>
				  <td><?php echo $row0['name'];?></td>
					<td><?php echo $row0['email'];?></td>
					<td><?php echo $row0['contact_no'];?></td>
					<?php $reu = "SELECT city_name, state_name FROM city_details,state_details WHERE city_details.city_id = '".$row0['city']."' and state_details.state_id = (SELECT state_id from city_details WHERE city_id='".$row0['city']."')";
					$re = mysqli_query($conn,$reu);
					$da = mysqli_fetch_assoc($re);
					$state=$da['state_name'];
					$city=$da['city_name'];

					 ?>

					 <td><?php echo $state;?></td>
					 <td><?php echo $city;?></td>
 					<td><?php echo $row0['address'];?></td>
					<td><?php echo ($row0['category']==1)?"Startup":"Incubator";?></td>
					<td><?php echo $row0['pincode'];?></td>
					<td><?php echo $row0['website'];?></td>
					<td><?php echo $row0['msg'];?></td>
					<td><?php echo $row0['date'];?></td>
				</tr><?php
			}
	?></tbody>

        </table>
    </div></center>

</body>
</html>
