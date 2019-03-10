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
					<th>  Name</th>
					<th> Login ID</th>
					<th> About</th>
					<th> category</th>
					</thead>
				  <tbody>
						<?php
						$sql_query0="SELECT * FROM mentor_details order by (id) desc";
	      $result0=mysqli_query($conn,$sql_query0);
	   while($row0=mysqli_fetch_assoc($result0))
		 {  ?>
				<tr>
				  <td><?php echo $row0['name'];?></td>
					<td><?php echo $row0['uid'];?></td>
					<td><?php echo $row0['about'];?></td>
					<td><?php echo $row0['type'];?></td>
				</tr><?php

			}
	?></tbody>
        </table>
    </div></center>

</body>
</html>
