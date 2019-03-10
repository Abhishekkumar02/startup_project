<?php
require "stableconnect.php";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($company_email)||empty($password))
	exit();
	$password=sha1($password);
	$sql_query="SELECT * FROM investor_details WHERE company_email='$company_email' AND password='$password'";
	$result=mysqli_query($conn,$sql_query);
	if(mysqli_num_rows($result)>0)
	{
		session_start();
		$_SESSION["in_useremailgov"]=$company_email;
	header("location:index.php");

	}
	else
	header("location:in_signin.php?wrongattempt=true");

}
?>
