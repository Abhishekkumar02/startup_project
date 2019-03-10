<?php
require "stableconnect.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	session_start();
$company_email=$_SESSION["in_veremail"];
if(empty($vercode))
exit();
$sql = "SELECT * FROM investor_details WHERE company_email='$company_email' AND vercode='$vercode'";

$result=mysqli_query($conn,$sql) ;

if (mysqli_num_rows($result) > 0)
 {
$query="UPDATE investor_details SET valid='1' WHERE company_email='$company_email'";
if(mysqli_query($conn,$query))
	{
		$_SESSION["in_useremailgov"]=$company_email;
		header("Location:index.php");

	}
	}
	else header("Location:in_enteremailcode.php?wrongattempt=true");

}
?>
