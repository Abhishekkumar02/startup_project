<?php
require "stableconnect.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($name))
	exit();
	$query="INSERT INTO startup_type_details(name) VALUES('$name')";
	if(mysqli_query($conn,$query))
  header("location:add_startup_type.php?success=true");
else {
  header("location:add_startup_type.php?failed=true");
}
}
?>
