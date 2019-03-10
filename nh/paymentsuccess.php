<?php
$finalpr=0;
require "stableconnect.php";
require "beginit.php";
if(!$loggedin)
{
	header("location:signin.php");
	exit();
}
$emailold=$_SESSION["useremailgov"];
/*$firstname="Shivam Saxena";
$amount="4000";
$txnid="alsgdhcqe22";
*/
$status=mysqli_real_escape_string($conn,$_POST["status"]);
$firstname=mysqli_real_escape_string($conn,$_POST["firstname"]);
$amount=mysqli_real_escape_string($conn,$_POST["amount"]);
$txnid=mysqli_real_escape_string($conn,$_POST["txnid"]);
$posted_hash=mysqli_real_escape_string($conn,$_POST["hash"]);
$key=mysqli_real_escape_string($conn,$_POST["key"]);
$productinfo=mysqli_real_escape_string($conn,$_POST["productinfo"]);
$email=mysqli_real_escape_string($conn,$_POST["email"]);
$salt="1QxBsGHt2t";


If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;

                  }
	else {

        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
}
		 $hash = hash("sha512", $retHashSeq);

       if ($hash != $posted_hash) {
	       echo "Invalid Transaction. Please try again";
		   }
	   else {


$sq11="SELECT * FROM cart_details WHERE user_id='$emailold'";
$row=(mysqli_fetch_assoc(mysqli_query($conn,$sq11)));
$room_id=$row["room_id"];
$sq11="SELECT * FROM room_details WHERE room_id='$room_id'";
$row0=(mysqli_fetch_assoc(mysqli_query($conn,$sq11)));

$roomno=htmlentities($row0["room_name"]);
		$price=htmlentities($row0["price"]);
		$center=htmlentities($row0["center_id"]);
		$roomtype=htmlentities($row0["fac_type"]);
		switch($roomtype)
		{
			case '1':$roomtype="Training Room"; break;
			case '2':$roomtype="Incubator Room"; break;

		}

		$occupancy=htmlentities($row0["capacity"]);
		$facility=htmlentities($row0["room_desc"]);
 $s11="SELECT * FROM center_details WHERE center_id='$center'";
			$r11=mysqli_query($conn,$s11);
			$row=mysqli_fetch_assoc($r11);
			$centername=$row["center_name"];
			$center=$row["center_address"];
			$getcity=$row["city_id"];

			$s11="SELECT * FROM city_details WHERE city_id='$getcity'";
			$r11=mysqli_query($conn,$s11);
			$row=mysqli_fetch_assoc($r11);
			$city=$row["city_name"];
			$getstate=$row["state_id"];

			$s11="SELECT * FROM state_details WHERE state_id='$getstate'";
			$r11=mysqli_query($conn,$s11);
			$row=mysqli_fetch_assoc($r11);
			$state=$row["state_name"];
	$sq33="INSERT INTO booking_details(user_id,booked_on,payment_amount,transaction_id) VALUES('$emailold','$date','$amount','$txnid')";
		mysqli_query($conn,$sq33);
	$sq44="SELECT * FROM booking_details WHERE user_id='$email' ORDER BY (booking_id) DESC";
		$ro44=mysqli_fetch_assoc(mysqli_query($conn,$sq44));
		$booking_id=$ro44["booking_id"];


?>

<div class="container" style="background:white">
<br><br><br><h4 class="text-center">Transaction Successful. Make a copy of your transaction for proof.</h4><br>
<table class="table table-striped">
<thead>
<th>Name</th>
<th>Value</th>
</thead>
<tbody>
<tr><td>First Name</td><td><?php echo $firstname;?></td></tr>
<tr><td>Email</td><td><?php echo $emailold;?></td></tr>
<tr><td>Amount</td><td><?php echo $amount;?></td></tr>
<tr><td>Transaction id</td><td><?php echo $txnid;?></td></tr>
</tbody>
</table>
<div >
<br><h4 class="text-center">List of booked incubation services </h4><br>
 <?php
 {
function calprice($rid,$gbf,$gbt)
{
$d1=strtotime($gbf);
 $d2=strtotime($gbt);
$diff1=floor((($d2-$d1)/86400)+1);
return $diff1*$rid;
}
	 $sql_query="SELECT * FROM cart_details WHERE user_id='$email'";


$result0=mysqli_query($conn,$sql_query) ;
if(mysqli_num_rows($result0)>0)
{while($row0=mysqli_fetch_assoc($result0))
	{
			$code=$row0["room_id"];
			$getbkfrom=$row0["check_in"];
			$getbktill=$row0["check_out"];
		$sq11="SELECT * FROM room_details WHERE room_id='$code'";

		$row2=mysqli_fetch_assoc(mysqli_query($conn,$sq11));
		$roomno=htmlentities($row2["room_name"]);
		$price=htmlentities($row2["price"]);
		$center=htmlentities($row2["center_id"]);
		$roomtype=htmlentities($row2["fac_type"]);

		$occupancy=htmlentities($row2["capacity"]);
		$facility=htmlentities($row2["room_desc"]);

			$id=$code;
			$s11="SELECT * FROM center_details WHERE center_id='$center'";
			$r11=mysqli_query($conn,$s11);
			$row=mysqli_fetch_assoc($r11);
			$centername=$row["center_name"];
			$centeradd=$row["center_address"];
			$city_id=$row["city_id"];

			$s11="SELECT * FROM city_details WHERE city_id='$city_id'";
			$r11=mysqli_query($conn,$s11);
			$row=mysqli_fetch_assoc($r11);
			$cityname=$row["city_name"];
			$state_id=$row["state_id"];

			$s11="SELECT * FROM state_details WHERE state_id='$state_id'";
			$r11=mysqli_query($conn,$s11);
			$row=mysqli_fetch_assoc($r11);
			$statename=$row["state_name"];
	$sq331="INSERT INTO transaction_details(booking_id,room_id,check_in,check_out) VALUES('$booking_id','$id','$getbkfrom','$getbktill')";
	mysqli_query($conn,$sq331);
?>
		     <div class="container-fluid divmcr2" >
	            <div class="mcr">
            <div class="mcr2">	<span class="lardata"><i class="fa fa-map-marker"></i>&nbsp; <?php echo $centername;?>, <?php echo $cityname;?>, <?php echo $statename;?></span>
	            &nbsp;&nbsp;<span class="lardata2"><i class="fa fa-inr"></i> <?php echo $price;?>.00 /day</span>
				</div>
				<div class="lar3">
 <b>Room Name: </b> <?php echo $roomno;?>	&nbsp;&nbsp;
 <b>Occupancy: </b> <?php echo $occupancy;?> &nbsp;&nbsp;
				<b>Description: </b><?php echo $facility;?>	<br>
				<b>Center Address: </b> <?php echo $centeradd;?>


				<b>Check-in: </b> &nbsp; <?php echo $getbkfrom;?>&nbsp&nbsp;;
				<b>Check-out: </b> &nbsp;<?php echo $getbktill;?>
				<br><span class="lardata3">Total Room Price: <i class="fa fa-inr"></i> <?php echo $fp=calprice($price,$getbkfrom,$getbktill); $finalpr+=$fp;?>.00 </span>

	</div>


				</div><BR><BR>
	       </div>
		<?php
}

}}


?></div><br></div>
</div><?php
	         $sq332="DELETE FROM cart_details WHERE user_id='$email'";
	mysqli_query($conn,$sq332) or die(mysqli_error($conn));
	   }

?>
<br><br>
<div align="center"><button class="inputButton" style="max-width:150px;" onclick="printit()"><i class="fa fa-print"></i> Print</button></div>
<br><br><br>
<script>
function printit()
{
	window.print();
}
</script>
