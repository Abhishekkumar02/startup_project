<?php
require "stableconnect.php";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($password)||empty($email))
	exit();
	$password=sha1($password);
	$sql_query="SELECT * FROM user_details WHERE user_id='$email' AND user_password='$password'";
	$result=mysqli_query($conn,$sql_query);
	if(mysqli_num_rows($result)>0)
	{
		session_start();
		$_SESSION["useremailgov"]=$email;
	header("location:index.php?");

	}
	else
	header("location:signin.php?wrongattempt=true");

}
?>
