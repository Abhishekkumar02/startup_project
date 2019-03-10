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
<center> <div id="tablediv">
                 <table class="table table-striped"id="t01">
		          <thead>
					<th> Room no.</th>
					<th> Price</th>
					<th> Roomtype</th>
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
			$sql_query="SELECT * FROM room_details WHERE center_id='$getcenter' AND room_name='$roomno'";
		}
		else {

        $sql_query="SELECT * FROM room_details WHERE center_id='$getcenter'";
        }
		$result=mysqli_query($conn,$sql_query) or die(mysqli_error($conn));
		if(mysqli_num_rows($result)<1) {
		    ?><center><h2>No room added.</h2></center><?php
	    }
		if(mysqli_num_rows($result)>0) {
			while($row=mysqli_fetch_assoc($result)) {
				$id = $row['room_id'];
			    $roomno = htmlentities($row['room_name']);
				$price = htmlentities($row['price']);
		        $occupancy = htmlentities($row['capacity']);
		        $roomtype = htmlentities($row['fac_type']);
		        $sl="SELECT * FROM transaction_details WHERE room_id='$id';";
				$re=mysqli_query($conn,$sl) or die(mysqli_error($conn));;
				$totalbk=mysqli_num_rows($re);
			switch($roomtype)
		{
			case '1':$roomtype="Training Room"; break;
			case '2':$roomtype="Incubator Room"; break;

		}
	          ?>
				<tr>
				    <td><?php echo $roomno." ";?></td>
					 <td><i class="fa fa-inr"></i> <?php echo $price;?>.00</td>
					<td><?php echo $roomtype." ";?></td>
				   <td><?php echo $totalbk." ";?></td>
				   <td><a class="whitebtn" href="roomclients.php?roomcode=<?php echo $id;?>&roomno=<?php echo $roomno;?>"> View Booking Details</a></td>
				   <td><a class="whitebtn" href="checkfreeback.php?roomno=<?php echo $roomno;?>"> View Free Dates</a></td>

			    </tr><?php
			}
		}

	?></tbody>
        </table>
    </div></center>
	<script>
	$("#hhome").attr('id','activeh');
	</script>
</body>
</html>
