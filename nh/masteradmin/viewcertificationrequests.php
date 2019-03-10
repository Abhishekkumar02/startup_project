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
	<h3>Certification requests</h3></center>
<br><br>
<center>
	 <div id="tablediv">
        <table class="table table-bordered table-striped "id="t01">
		      <thead>
					<th> Name</th>
					<th> User Email</th>
					<th> Date</th>
					<th> Startup</th>
					<th> Account</th>
				  </thead>
				  <tbody>
						<?php
						$sql_query0="SELECT * FROM request_certified_details order by (id) desc";
	      $result0=mysqli_query($conn,$sql_query0);
	   while($row0=mysqli_fetch_assoc($result0))
		 {
			 $sql_query1="SELECT * FROM startup_details where id='".$row0['startup']."'";
	 $result1=mysqli_query($conn,$sql_query1);
	 $row1=mysqli_fetch_assoc($result1);
  ?>
				<tr>
				  <td><?php echo $row0['name'];?></td>
					<td><?php echo $row0['user_email'];?></td>
					<td><?php echo $row0['date'];?></td>
					<td><?php echo $row1['name'];?></td>
					<td><?php echo $row1['user_id'];?></td>
				</tr><?php

			}
	?></tbody>
        </table>
    </div></center>

</body>
</html>
