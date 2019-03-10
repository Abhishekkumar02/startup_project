<?php
require "stableconnect.php";
require "beginadmin.php";
if(!$loggedin)
{
	header("location:adminsignin.php");
	exit();
	}
?>
<br><br><br>
<center>
	<div id="tablediv">
      <table class="table table-striped"id="t01">
		      <thead>
					<th> Room no.</th>
					<th> Price</th>
					<th> Roomtype</th>
					<th> Description</th>
					<th> Occupancy</th>
				  <th> Total Booking</th>
				  <th> Action</th>
				  <th> Action</th>
				  </thead>
				  <tbody><?php

      $adminemail = $_SESSION['adminemail'];
     $sql_query0="SELECT * FROM admin_details WHERE admin_id='$adminemail'";
      $result0=mysqli_query($conn,$sql_query0);
	   $row0=mysqli_fetch_assoc($result0);
		$getcenter = $row0["center_id"];

		if(isset($_POST['searchroom'])) {
			$roomno = mysqli_real_escape_string($conn,$_POST['roomno']);
			$sql_query="SELECT * FROM room_details WHERE center_id='$getcenter' AND room_name='$roomno'";
		}
		else {

        $sql_query="SELECT * FROM room_details WHERE center_id='$getcenter'";
        }
		$result=mysqli_query($conn,$sql_query) or die(mysqli_error($conn));
		if(mysqli_num_rows($result)<1) {
		    ?><center><h2>No room found</h2></center><?php
	    }
		if(mysqli_num_rows($result)>0) {
			while($row=mysqli_fetch_assoc($result)) {
				    $id = $row['room_id'];
			      $roomno = htmlentities($row['room_name']);
				    $price = htmlentities($row['price']);
		        $occupancy = htmlentities($row['capacity']);
						$roomtype = htmlentities($row['fac_type']);
						$about = htmlentities($row['room_desc']);
		        $sl="SELECT * FROM transaction_details WHERE room_id='$id';";
				$re=mysqli_query($conn,$sl);
				$totalbk=mysqli_num_rows($re);
				$query22="SELECT * FROM room_type_details WHERE id='$roomtype'";
		    $result22=mysqli_query($conn,$query22);
		    $row22=mysqli_fetch_assoc($result22);
				?>
				<tr>
				  <td><?php echo $roomno." ";?></td>
					<td><i class="fa fa-inr"></i> <?php echo $price;?>.00</td>
					<td><?php echo $row22['name']." ";?></td>
					<td><?php echo $about." ";?></td>
					<td><?php echo $occupancy." ";?></td>
					<td><?php echo $totalbk." ";?></td>
					<td><a class="whitebtn" href="roomclients.php?roomcode=<?php echo $id;?>&roomno=<?php echo $roomno;?>"> View Booking Details</a></td>
				  <td><a class="whitebtn" href="checkfreeback.php?roomno=<?php echo $roomno;?>"> View Free Dates</a></td>

			    </tr><?php
			}
		}

	?></tbody>
        </table>
    </div>
	</center>
</body>
</html>
