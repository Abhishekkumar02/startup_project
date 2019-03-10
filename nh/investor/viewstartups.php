<?php
require "stableconnect.php";
require "beginit.php";
if(!$loggedin)
{
	header("location:in_signin.php");
	exit();
	}
?>
<br>
<center><h3>Recently registered startups</h3></center>
<br><br><center>
	<div id="tablediv">
                 <table class="table table-bordered table-striped "id="t01">
		       <thead>
						<th> Name</th>
						<th> Address</th>
						<th> Website</th>
				    <th> Incorporation No.</th>
						<th> User Id</th>
						<th> Contact No.</th>
						<th> Date</th>
						<th> City</th>
						<th> Representative</th>
						<th> Email</th>
						<th> Action</th>
				  </thead>
				  <tbody>
						<?php
					$sql_query0="SELECT * FROM startup_details order by (id) desc";
		       $result0=mysqli_query($conn,$sql_query0);
		 	   while($row0=mysqli_fetch_assoc($result0)){
					 $sql_query01="SELECT * FROM city_details WHERE city_id='".$row0['city']."'";
			      $result01=mysqli_query($conn,$sql_query01);
				   $row01=mysqli_fetch_assoc($result01);
					        ?>
									<tr>
				  <td><?php echo $row0['name'];?></td>
					<td><?php echo $row0['address'];?></td>
					<td><?php echo $row0['website'];?></td>
					<td><?php echo $row0['incorporation_no'];?></td>
					<td><?php echo $row0['user_id'];?></td>
					<td><?php echo $row0['phone'];?></td>
					<td><?php echo $row0['date'];?></td>
					<td><?php echo $row01['city_name'];?></td>
					<td><?php echo $row0['representative'];?></td>
					<td><?php echo $row0['email'];?></td>
					<td><a class="whitebtn"  href="../portfolio/show_portfolio.php?id=<?php echo $row0['user_id'];?>"> View User's Portfolio</a></td>
 				</tr><?php
			}
	?></tbody>
        </table>
    </div>
	</center>
</body>
</html>
