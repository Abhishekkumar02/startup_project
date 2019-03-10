<?php
require "stableconnect.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
if(empty($center_name)||empty($city_id)||empty($center_desc)||empty($center_address))
exit();
	$query="INSERT INTO center_details(center_name,city_id,center_desc,center_address) VALUES('$center','$city_id','$desc','$address')";

	if(mysqli_query($conn,$query))
  header("location:center.php?success=true");
else {
  header("location:center.php?failed=true");
}
}
?>
