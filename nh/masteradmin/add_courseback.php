<?php
require "stableconnect.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($course))
	exit();
	$query="INSERT INTO courses_details(name) VALUES('$course')";
	if(mysqli_query($conn,$query))
  header("location:add_course.php?success=true");
else {
  header("location:add_course.php?failed=true");
}
}
?>
