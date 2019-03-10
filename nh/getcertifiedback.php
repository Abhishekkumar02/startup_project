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
	if(empty($name)||empty($email)||empty($user_email)||empty($startup))
	exit();
	 $sql_query="INSERT INTO request_certified_details(name,user_id,user_email,startup,date) values('$name','$email','$user_email','$startup','$date')";
 if(mysqli_query($conn,$sql_query))
 header("location:training.php?csuccess=true");
else
header("location:training.php?cfailed=true");

}
?>
