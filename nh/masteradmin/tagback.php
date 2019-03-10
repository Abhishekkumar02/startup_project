<?php
require "stableconnect.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
if(empty($tag))
exit();
	$query="INSERT INTO tag(tag) VALUES('$tag')";
	if(mysqli_query($conn,$query))
  header("location:tags.php?success=true");
else {
  header("location:tags.php?failed=false");
}
}
?>
