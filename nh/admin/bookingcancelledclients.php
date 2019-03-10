<?php
require "stableconnect.php";
require "beginadmin.php";
?>
<br><br><br>

<h3  class="text-center"><b><?php if(!isset($_POST["searchemail"])) echo "List of guests of room ".$roomno;?></b></h3>
<center> <div id="tablediv">
                 <table class="table table-striped"id="t01">
		          <thead>
					<th> Name</th>
					<th> Email</th>
          <th> Phone</th>
          <th> Room</th>
				    <th> From</th>
				    <th> Till</th>
					<th> Action</th>
				  </thead>
				  <tbody><?php
        if(isset($_POST['searchemail'])) {
			 $sq23="SELECT * FROM admin_details WHERE admin_id='$adminemail'";
			$re23=mysqli_query($conn,$sq23) ;
			$row23=mysqli_fetch_assoc($re23);
			$jcenter=$row23["center_id"];
			$clientemail=mysqli_real_escape_string($conn,$_POST["clientemail"]);
        $sq45="SELECT * FROM booking_details WHERE user_id='$clientemail'";
		$re45=mysqli_query($conn,$sq45);
		$row45=mysqli_fetch_assoc($re45);
		$code45=$row45["booking_id"];
		  $sql_query="SELECT * FROM transaction_details WHERE booking_id='$code45' AND cancelled='1'";

		}
		else
		{
	    $roomcode=$_GET["roomcode"];
        $sql_query="SELECT * FROM transaction_details WHERE room_id='$roomcode'";
		}
        $result=mysqli_query($conn,$sql_query);
		if(mysqli_num_rows($result)<1) {
		    ?><center><h2>No guest found.</h2></center><?php
	    }
		if(mysqli_num_rows($result)>0)
		{
			while($row00=mysqli_fetch_assoc($result))
				{
				$booking_id = htmlentities($row00['booking_id']);
				$tid=$troom_id = htmlentities($row00['id']);
				$bkfrom = htmlentities($row00['check_in']);
		        $bktill = htmlentities($row00['check_out']);
            $status = htmlentities($row00['status']);
            $room_id=htmlentities($row00['room_id']);
            $cancelled=htmlentities($row00['cancelled']);

            $s2345="SELECT * FROM room_details WHERE room_id='$room_id'";
        				$result2345=mysqli_query($conn,$s2345);
        				$row=mysqli_fetch_assoc($result2345);
        				$room_name = htmlentities($row['room_name']);
        		    $s234="SELECT * FROM booking_details WHERE booking_id='$booking_id'";
            				$result234=mysqli_query($conn,$s234);
            				$row=mysqli_fetch_assoc($result234);
            				$clientemail = htmlentities($row['user_id']);
            				$id = $row['booking_id'];
            			$sq2="SELECT * FROM user_details WHERE user_id='$clientemail'";
        $re2=mysqli_query($conn,$sq2);
		$ro2=mysqli_fetch_assoc($re2);
		 $name=$ro2["user_name"];
		$phone=$ro2["user_phone"];
				   ?>
				<tr>
				    <td><?php echo $name;?></td>
					<td><?php echo $clientemail;?></td>
          <td><?php echo $phone;?></td>
          <td><?php echo $room_name;?></td>
				    <td><?php echo $bkfrom;?></td>
				    <td><?php echo $bktill;?></td>
				    <td><center><button onclick="changestatus(<?php echo $tid;?>);" class="whitebtn"  id="clink<?php echo $tid;?>">
              <?php if($status==1) echo "Check-out"; else if($status==0) echo "Check-in"; else echo "Checked out";?></button></center>
              <?php if($cancelled=='1') echo "<br>Booking has been cancelled"?>
			  </td>  </tr><?php
			}
		}
	?></tbody>
        </table>
    </div></center>
	<script type="text/javascript">


function changestatus(tid)
{

	$.ajax({
		url:"changestatus.php?tid="+tid,
		type:"GET",
		data:"",
		success:function(data, textStatus, jqXHR)
        {
      $("#clink"+tid).html(data);
    }
	}
	);
}
  </script>
</body>
</html>
