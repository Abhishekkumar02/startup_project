<?php
require "stableconnect.php";
require "beginit.php";
 $roomname=htmlentities(mysqli_real_escape_string($conn,trim($_GET["roomno"])));
$sq11="SELECT * FROM room_details WHERE room_name='$roomname'";
$re11=mysqli_query($conn,$sq11);
$row11=mysqli_fetch_assoc($re11);
$roomid=$row11["room_id"];
$sq11="SELECT * FROM transaction_details WHERE room_id='$roomid'";
$re11=mysqli_query($conn,$sq11);
$f1="";$f2="";
	$temp1="";$temp2="";
	$f1=date('y-m-d');
?><br><br><br>
<h3  class="text-center">The room <b><?php  echo $roomname;?></b> is free in following dates.</h3>

<center> <div id="tablediv" style="background:white">
                 <table class="table table-striped"id="t01">
		          <thead>
					<th> From</th>
					<th> Till</th>
					</thead>
				  <tbody><?php
while($row11=mysqli_fetch_assoc($re11))
{
	$f2=$row11["check_in"];
	$temp1=$row11["check_out"];

    $v1=date('Y-m-d', strtotime($f1. ' + 1 days'));
	$v2=date('Y-m-d', strtotime($f2. ' - 1 days'));
	?>
	<tr>
				    <td><?php echo $v1?></td>
					 <td> <?php echo $v2;?></td>

			    </tr>

	<?php
	$f1=$temp1;
}
    $v1=date('Y-m-d', strtotime($f1. ' + 1 days'));
	$v2="-----------";
?>

	<tr>
				    <td><?php echo $v1?></td>
					 <td> <?php echo $v2;?></td>

			    </tr>
				</tbody></table><br></div>
