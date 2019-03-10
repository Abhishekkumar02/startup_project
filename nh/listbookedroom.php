<?php
require "stableconnect.php";
require "beginit.php";
if(!$loggedin)
{
	header("location:signin.php");
	exit();
}
$finalpr=0;
?>

<section >

<div class="container-fluid div34">
 <div id="maintable">
<h2 class="text-center" style="color:dodgerblue"> My Booked Rooms</h2>
	<br>
<div class=" div456">
<?php

function calprice($rid,$gbf,$gbt)
{
$d1=strtotime($gbf);
 $d2=strtotime($gbt);
$diff1=floor((($d2-$d1)/86400)+1);
return $diff1*$rid;
}

$email=$_SESSION["useremailgov"];
$sql_query="SELECT * FROM booking_details WHERE user_id='$email'";
$result_query=mysqli_query($conn,$sql_query);
 mysqli_num_rows($result_query);
if(mysqli_num_rows($result_query)>0)
{
	while($row_query0=mysqli_fetch_assoc($result_query))
	{
		$booking_id=$row_query0["booking_id"];
		$bookedon=$row_query0["booked_on"];
	?>
  <?php

		$sq11="SELECT * FROM transaction_details WHERE booking_id='$booking_id'";
		$re11=mysqli_query($conn,$sq11);
	while($row_query=mysqli_fetch_assoc($re11))
	{
    $room_id=$row_query["room_id"];
    $tid=$row_query["id"];
    $cancelled=$row_query["cancelled"];
    $status=$row_query["status"];

		$bkfrom=$row_query["check_in"];
		$bktill=$row_query["check_out"];

		$sq11="SELECT * FROM room_details WHERE room_id='$room_id'";

		$row2=mysqli_fetch_assoc(mysqli_query($conn,$sq11));
		$roomno=htmlentities($row2["room_name"]);
		$price=htmlentities($row2["price"]);
		$center=htmlentities($row2["center_id"]);
		$roomtype=htmlentities($row2["fac_type"]);
		$occupancy=htmlentities($row2["capacity"]);
		$facility=htmlentities($row2["room_desc"]);
		$query22="SELECT * FROM room_type_details WHERE id='$roomtype'";
		$result22=mysqli_query($conn,$query22);
		$row22=mysqli_fetch_assoc($result22);
$roomtype=$row22['name'];
			$id=$room_id;
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
			$statename=$row["state_name"];?>
		 <div class="container-fluid divmcr2" >
	            <div class="mcr">
          	<div class="mcr2">	<span class="lardata"><i class="fa fa-map-marker"></i>&nbsp; <?php echo $centername;?>, <?php echo $cityname;?>, <?php echo $statename;?></span>
	            &nbsp;&nbsp;<span class="lardata2"><i class="fa fa-inr"></i> <?php echo $price;?>.00 /day</span>
				</div>
				<div class="lar3">
 <b>Room Name: </b> <?php echo $roomno;?>	&nbsp;&nbsp;
<b>Room Type: </b> <?php echo $roomtype;?>	<br>
  <b>Occupancy: </b> <?php echo $occupancy;?> &nbsp;&nbsp;
				<b>Description: </b><?php echo $facility;?>	<br>
				<b>Center Address: </b> <?php echo $centeradd;?>


				<b>Check-in: </b> &nbsp; <?php echo $bkfrom;?>&nbsp;&nbsp;;
				<b>Check-out: </b> &nbsp;<?php echo $bktill;?>
				<br><span class="lardata3">Total Room Price: <i class="fa fa-inr"></i> <?php echo $fp=calprice($price,$bkfrom,$bktill); $finalpr+=$fp;?>.00 </span>
        <br><div align="center">
      <?php if($cancelled=='0'&&$status=='0') {?>    <button  id="btncancel<?php echo $tid?>" class="whitebtn" style="max-width:150px;" onclick="cancelbooking(<?php echo $tid?>)">Cancel Booking</button>
<?php } else if($status=='0') { ?>
  <h4 class="text-center" style="color:red;font-weight:bold">This booking has been cancelled</h4>
  <?php
}?></div>
	</div>


				</div><BR><BR>
	       </div>

		<?php
	}
	?>
	<?php
}}
?></div></div></div>

</section>
<script type="text/javascript">
	$("#hrooms").attr('id','activeh');
  function cancelbooking(dd) {
    if(!confirm("Are you sure?"))
    return;
      var xmlhttp;
         if (window.XMLHttpRequest)
             xmlhttp = new XMLHttpRequest();
         else if (window.ActiveXObject)
             xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
         else
             throw new Error("Ajax is not supported by this browser");
        xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("btncancel"+dd).innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("GET","cancelbookingback.php?tid="+dd,true);

xmlhttp.send();
}
  </script>

<?php
require "footer.php";?>
</body>
