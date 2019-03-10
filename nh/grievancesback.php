<?php
require "stableconnect.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($name)||empty($email)||empty($phone)||empty($city)||empty($address)||empty($category)||empty($pincode)||empty($website)||empty($comment))
	exit();
	echo $qq="INSERT INTO grievances_details(name,email,contact_no,city,address,category,pincode,website,msg,date) VALUES('$name','$email','$phone','$city','$address','$category','$pincode','$website','$comment','$date')";
	if(mysqli_query($conn,$qq))
	header("location:grievances.php?success=true");
		else
		header("location:grievances.php?failed=true");
}

?>
