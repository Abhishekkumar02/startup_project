<?php
require "stableconnect.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
if(empty($state))
exit();
	$query="INSERT INTO state_details(state_name) VALUES('$state')";
	if(mysqli_query($conn,$query))
  header("location:state.php?state=true");
else {
  header("location:state.php?state=true");
}
}
?>
