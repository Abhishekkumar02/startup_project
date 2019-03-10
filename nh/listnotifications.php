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
<h2 class="text-center" style="color:dodgerblue"> My Notifications</h2>
	<br>
<div class=" div456">
<?php


$email=$_SESSION["useremailgov"];

$sql_query="SELECT * FROM notification_details WHERE user_id='$email' order by (id) desc";
$result_query=mysqli_query($conn,$sql_query);
 mysqli_num_rows($result_query);
if(mysqli_num_rows($result_query)>0)
{
	while($row_query0=mysqli_fetch_assoc($result_query))
	{
		?>
		 <div class="container-fluid divmcr2" <?php if($row_query0['isnew']=='1') echo 'style="background:ghostwhite !important;font-weight:bold"';?>>
	            <div class="mcr">
								<h3><?php echo $row_query0['title'];?></h3>
					<p><?php echo $row_query0['msg'];?></p>
					<h4><?php echo $row_query0['date'];?></h4>
				</div>
	       </div>

		<?php
	}
	?>
	<?php
}
else echo '<h4 class="text-center">No notifications are found</h4>';

$sql_query="UPDATE notification_details SET isnew='0' WHERE user_id='$email'";
mysqli_query($conn,$sql_query);
?></div></div></div>

</section>

<?php
require "footer.php";?>
</body>
