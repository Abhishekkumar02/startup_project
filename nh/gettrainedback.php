<?php
require "stableconnect.php";
require "checkuser.php";
if(!$loggedin)
{
	header('location:signin.php');
exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$email=$_SESSION["useremailgov"];
	if(empty($name)||empty($email)||empty($user_email)||empty($course))
	exit();
	 $sql_query="INSERT INTO request_trained_details(name,user_id,user_email,course,date) values('$name','$email','$user_email','$course','$date')";
 if(mysqli_query($conn,$sql_query))
 header("location:training.php?tsuccess=true");
else
header("location:training.php?tfailed=true");

}
?>
