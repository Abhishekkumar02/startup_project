<?php
require "stableconnect.php";

require "checkadmin.php";
if(!$loggedin)
{
	header("location:adminsignin.php");
	exit();
}	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		session_start();
		$email= $_SESSION['adminemail'] ;
		$qq="select * from admin_details where admin_id='$email'";
		$qq=mysqli_query($conn,$qq);
		if(mysqli_num_rows($qq)<1)
		{
			header("location:addroom.php?failed=true");
			exit();
		}
		$row=mysqli_fetch_assoc($qq);
	$center_id = $row['center_id'];
	if(empty($room)||empty($type)||empty($desc)||empty($price)||empty($occupancy))
	exit();
	$query="INSERT INTO room_details(room_name,center_id,fac_type,room_desc,price,capacity) VALUES('$room','$center_id','$type','$desc','$price','$occupancy')";
	if(mysqli_query($conn,$query))
	header("location:addroom.php?success=true");
else {
	header("location:addroom.php?failed=true");

}}
?>
