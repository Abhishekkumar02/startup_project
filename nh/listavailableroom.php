<?php
$canbook=true;
require "stableconnect.php";
require "beginit.php";
if($loggedin)
{
$cabook=true;
$email=$_SESSION["useremailgov"];
}
else
	$canbook=false;
$query="SELECT * FROM state_details";
$result=mysqli_query($conn,$query);


 {
	 if($_SERVER["REQUEST_METHOD"]=="POST")
   {
		 if(empty($state)||empty($city)||empty($center)||empty($bkfrom)||empty($bktill))
		  exit();
	 $_SESSION['s_state']=$getstate=$state;
	 $_SESSION['s_type']=$gettype=$type;
	 $_SESSION['s_city']=$getcity=$city;
	 $_SESSION['s_center']=$getcenter=$center;
	 $_SESSION['s_bkfrom']=$_SESSION["justbkfrom"]=$getbkfrom=$bkfrom;
	 $_SESSION['s_bktill']=$_SESSION["justbktill"]=$getbktill=$bktill;
	}
	else {
		if(isset($_GET['reload']))
		{
			if(isset($_SESSION['s_state']))
			{
				$getstate=$_SESSION['s_state'];
			}
			else
			exit();
			if(isset($_SESSION['s_type']))
			{
				$gettype=$_SESSION['s_type'];
			}
			else
			exit();
			if(isset($_SESSION['s_city']))
			{
				$getcity=$_SESSION['s_city'];
			}
			else
			exit();
			if(isset($_SESSION['s_center']))
			{
				$getcenter=$_SESSION['s_center'];
			}
			else
			exit();
			if(isset($_SESSION['s_bkfrom']))
			{
				$getbkfrom=$_SESSION['s_bkfrom'];
			}
			else
			exit();
			if(isset($_SESSION['s_bktill']))
			{
				$getbktill=$_SESSION['s_bktill'];
			}
			else
			exit();
		}
	}
	 $yesroom=false;

?>
<div id="sticky-anchor"></div>


<section>

<div class="container-fluid div34">
 <div id="maintable">
<h2 class="text-center" style="color:dodgerblue"> Available Rooms</h2>
<h4 class="text-center"> Adding a room into cart will book it for you for sometime.<br> You have 10 mins to make payment otherwise it will be removed from your cart.</h4>
<?php if(!$loggedin) {?><h4 class="text-center"> You need to sign in to book a room</h4>
<?php } ?>
	<br>
<div class=" div456">

 <?php if(strtotime($getbkfrom) <= strtotime(date("y-m-d")))
	 {
		 ?>

		 <h2 class="text-center" style="color:red"> Invalid Dates</h2>

		 <?php
		 exit();
	 }
else if((strtotime($getbktill)<strtotime($getbkfrom)))
{
	?>
		 <h2 class="text-center" style="color:red"> Invalid dates.</h2>

	<?php
	exit();
}
function calprice($rid,$gbf,$gbt)
{
$d1=strtotime($gbf);
 $d2=strtotime($gbt);
$diff1=floor((($d2-$d1)/86400)+1);
return $diff1*$rid;
}
	 $sql_query="SELECT * FROM room_details r WHERE center_id='$getcenter' AND room_id NOT IN (SELECT room_id FROM cart_details)";
if($gettype!="")
	$sql_query=$sql_query." AND fac_type='$gettype'";


$result0=mysqli_query($conn,$sql_query);
if(mysqli_num_rows($result0)>0)
{
	$isbooked=0;
echo '<h4 class="text-center" style="color:green">'. mysqli_num_rows($result0).' rooms are available from '.$getbkfrom.' to '.$getbktill.'</h4>';
	while($row0=mysqli_fetch_assoc($result0))
	{
			$code=$row0["room_id"];
		$roomno=htmlentities($row0["room_name"]);
		$price=htmlentities($row0["price"]);
		$center=htmlentities($row0["center_id"]);
		$roomtype=htmlentities($row0["fac_type"]);
		$query22="SELECT * FROM room_type_details WHERE id='$roomtype'";
		$result22=mysqli_query($conn,$query22);
		$row22=mysqli_fetch_assoc($result22);


		$occupancy=htmlentities($row0["capacity"]);
		$facility=htmlentities($row0["room_desc"]);

	$sql_query="SELECT * FROM transaction_details WHERE room_id='$code'";
	 $result=mysqli_query($conn,$sql_query);

	while($row=mysqli_fetch_assoc($result))
		{

		//	$id=$row["booking_id"];
	$sql_query1="SELECT * FROM transaction_details WHERE room_id='$code' AND ( (check_in>'$getbkfrom' AND check_out>'$getbktill') OR (check_in<'$getbkfrom' AND check_out<'$getbktill')) ";
$result1=mysqli_query($conn,$sql_query1);
if(mysqli_num_rows($result1)<1)
{
	$isbooked=1;
	}
	}

	if($isbooked==0)
	{
		$yesroom=true;
			$id=$code;
			$s11="SELECT * FROM center_details WHERE center_id='$center'";
			$r11=mysqli_query($conn,$s11);
			$row=mysqli_fetch_assoc($r11);
			$centername=$row["center_name"];
			$centeradd=$row["center_address"];

			$s11="SELECT * FROM city_details WHERE city_id='$getcity'";
			$r11=mysqli_query($conn,$s11);
			$row=mysqli_fetch_assoc($r11);
			$cityname=$row["city_name"];

			$s11="SELECT * FROM state_details WHERE state_id='$getstate'";
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
<b>Room Type: </b> <?php echo $row22['name'];?>	<br>
  <b>Occupancy: </b> <?php echo $occupancy;?> &nbsp;&nbsp;
				<b>Description: </b><?php echo $facility;?>	<br>
				<b>Center Address: </b> <?php echo $centeradd;?>


				<div class="lar3">
					<form class="form-inline">

				<input required  readonly type="hidden" placeholder="yy-mm-dd"  value="<?php echo $getbkfrom;?>" id="bkfrom<?php echo $id?>" name="bkfrom"  class="form-control" />
				&nbsp;
<input required  readonly type="hidden" placeholder="yyyy-mm-dd"  id="bktill<?php echo $id?>"  value="<?php echo $getbktill;?>" name="bktill"class="form-control" /></form>
	</div>
	</div>
			<?php
			if($loggedin)
			{
				$sq78="SELECT * FROM cart_details WHERE room_id='$code' AND user_id='$email'";

				if(mysqli_num_rows(mysqli_query($conn,$sq78))<1)
			{
				?>
				<div align="center"><button  id="btncart<?php echo $id?>" class="whitebtn" style="max-width:150px;" onclick="addtocart(<?php echo $id?>)">Add to cart</button></div>
				<br>

				<?php
			}
			else
			{ ?>
		<div align="center"><span class="whitebtn" style="max-width:150px;" >Already in cart</span></div>
			<br><?php }}
			else {
				?>
				<div align="center"><a class="whitebtn" href="signin.php?reurl=listavailableroom.php" style="max-width:150px;" >Signin to add to cart</a></div>
				<?php
			}?>

				</div><BR><BR>
	       </div>
<?php
}
else
{


		$yesroom=true;
			$id=$code;
			$s11="SELECT * FROM center_details WHERE center_id='$center'";
			$r11=mysqli_query($conn,$s11);
			$row=mysqli_fetch_assoc($r11);
			$centername=$row["center_name"];
			$centeradd=$row["center_address"];

			$s11="SELECT * FROM city_details WHERE city_id='$getcity'";
			$r11=mysqli_query($conn,$s11);
			$row=mysqli_fetch_assoc($r11);
			$cityname=$row["city_name"];

			$s11="SELECT * FROM state_details WHERE state_id='$getstate'";
			$r11=mysqli_query($conn,$s11);
			$row=mysqli_fetch_assoc($r11);
			$statename=$row["state_name"];

		?>
		      <div class="container-fluid divmcr2" style="background:lightyellow">
	            <div class="mcr" style="background:lightyellow">

				<div class="mcr2">	<span class="lardata"><i class="fa fa-map-marker"></i>&nbsp; <?php echo $centername;?>, <?php echo $cityname;?>, <?php echo $statename;?></span>
	            &nbsp;&nbsp;<span class="lardata2"><i class="fa fa-inr"></i> <?php echo $price;?>.00 /day</span>
				</div>
				<div class="lar3">
 <b>Room Name: </b> <?php echo $roomno;?>	&nbsp;&nbsp;
<b>Room Type: </b> <?php echo $roomtype;?>	<br>
  <b>Occupancy: </b> <?php echo $occupancy;?> &nbsp;&nbsp;
				<b>Description: </b><?php echo $facility;?>	<br>
				<b>Center Address: </b> <?php echo $centeradd;?>



	</div>
				<b>This is room is booked between your given time interval.</b>
			<div align="center"><a href="showfree.php?roomno=<?php echo $roomno;?>" class="whitebtn" style="max-width:150px;" > Show Free Dates</a></div>
				</div><BR><BR>
	       </div>
			<?php
}


$isbooked=0;

}}
if(!$yesroom)
{
	?>
	<h4 class="text-center" > Sorry there is no room availbale for you.
	Try again with different search filters.</h4>

	<?php
}

}
?></div>
</div>
</section>
<script>

		 function addtocart(dd) {
		var dd1=$("#bkfrom"+dd).val();
		var dd2=$("#bktill"+dd).val();
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
  }
  }
 xmlhttp.open("GET","addcart.php?roomid="+dd+"&bkfrom="+dd1+"&bktill="+dd2,true);

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
<script type="text/javascript">
$(document).ready(function(){
    $('#state').on('click',function(){
        var stateID = $(this).val();

        if(stateID){
            $.ajax({
                type:'POST',
                url:'searchback.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                    $('#center').html('<option value="">Select city first</option>');
                }
            });
        }else{
            $('#city').html('<option value="">Select City</option>');
            $('#center').html('<option value="">Select Center</option>');
        }
    });

    $('#city').on('click',function(){
        var cityID = $(this).val();
        if(cityID){
            $.ajax({
                type:'POST',
                url:'searchback.php',
                data:'city_id='+cityID,
                success:function(html){
                    $('#center').html(html);
                }
            });
        }else{
            $('#center').html('<option value="">Select Center</option>');
        }
    });
});
</script>

</head>
<?php
require "footer.php";?>
</body>
