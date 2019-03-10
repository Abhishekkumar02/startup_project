<?php
require "stableconnect.php";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
if(empty($name)||empty($useremail)||empty($feedback))
exit();
	 $sql_query="INSERT INTO feedback_details(name,user_email,feedback,date) values('$name','$user_email','$feedback','$date')";
 if(mysqli_query($conn,$sql_query))
 header("location:ep_feedback.php?success=true");
else
header("location:ep_feedback.php?failed=true");

}
?>
