<?php
$finalpr=0;
$canbook=true;
require "stableconnect.php";
require "beginit.php";
if(!$loggedin)
{header("location:signin.php");
exit();
}
$email=$_SESSION["useremailgov"];
?>
<br><br>


<section >

<div class="container div34" >
<h2 class="text-center" style="color:dodgerblue"> My Cart</h2>
 <div id="maintable">
 <?php if(!$canbook) echo "<br><h4 class=\"text-center\" style=\"color:black\">You need to sign in to book a room.</h4>";?>
	<br>

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


$result0=mysqli_query($conn,$sql_query) or die(mysqli_error($conn)) ;
if(mysqli_num_rows($result0)>0)
{

	while($row0=mysqli_fetch_assoc($result0))
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
    $query22="SELECT * FROM room_type_details WHERE id='$roomtype'";
		$result22=mysqli_query($conn,$query22);
		$row22=mysqli_fetch_assoc($result22);
$roomtype=$row22['name'];

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

		?>
		     <div class="container-fluid divmcr2" >
	            <div class="mcr">
                 <div class="mcr2">	<span class="lardata"><i class="fa fa-map-marker"></i>&nbsp; <?php echo $centername;?>, <?php echo $cityname;?>, <?php echo $statename;?></span>
	            &nbsp;&nbsp;<span class="lardata2"><i class="fa fa-inr"></i> <?php echo $price;?>.00 /day</span>
				</div>
				<div class="lar3">
 <b>Room Name: </b> <?php echo $roomno;?>	&nbsp;&nbsp;
 <b>Occupancy: </b> <?php echo $occupancy;?> &nbsp;&nbsp;
 <b>Room type: </b> <?php echo $roomtype;?> &nbsp;&nbsp;
 			<b>Description: </b><?php echo $facility;?>	<br>
				<b>Center Address: </b> <?php echo $centeradd;?>

			<b>Check-in: </b> &nbsp; <?php echo $getbkfrom;?>&nbsp;&nbsp;;
				<b>Check-out: </b> &nbsp;<?php echo $getbktill;?>
				<br><span class="lardata3">Total Room Price: <i class="fa fa-inr"></i> <?php echo $fp=calprice($price,$getbkfrom,$getbktill); $finalpr+=$fp;?>.00 </span>

	</div>

				<div align="center"><button id="btncart<?php echo $id?>" class="whitebtn" style="max-width:150px;" onclick="removefromcart(<?php echo $id?>)">Remove from cart</button></div>

				</div><BR><BR>
	       </div>
		<?php
}
$isbooked=0;

}
else
{
	?>
	<h4 class="text-center" > Opps! Sorry your cart is empty.
	</h4>

	<?php
 }}


?></div>
</div><BR><BR><BR>
<?php if($finalpr!=0)
{?>
<div class="container div34">
<div class="row">
<div class="col-sm-4">

<span class="lardata" >Final Price:  &nbsp;</span>
</div>
<div class="col-sm-4">
<span class="lardata3"style="color:green"><i class="fa fa-inr"></i><?php echo $finalpr;?></span>
</div>
<div class="col-sm-4">

 <a href="paynow.php" class="inputButton" style="max-width:150px;" > Make Payment</a>
</div></div></div><?php } ?>  </section>
<script>
		$("#hcart").attr('id','activeh');

		 function removefromcart(dd) {
		var dd1=$("#bkfrom").val();
		var dd2=$("#bktill").val();
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
document.getElementById("btncart"+dd).innerHTML=xmlhttp.responseText;
location.reload();
 }
  }
 xmlhttp.open("GET","removecart.php?roomid="+dd,true);

  xmlhttp.send();


        }</script>
		<script src="jquery-ui-1.12.1\jquery-ui.js"></script>

	 <script>
  $(function() {
     $( "#bkfrom" ).datepicker({ dateFormat: 'yy-mm-dd'});
}); $(function() {
     $( "#bktill" ).datepicker({ dateFormat: 'yy-mm-dd'});
});

</script>
</head>
</body>
