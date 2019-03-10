<?php
require "stableconnect.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	session_start();
$email=$_SESSION["veremail"];
if(empty($email)||empty($vercode))
exit();
$sql = "SELECT * FROM user_details WHERE user_id='$email' AND vercode='$vercode'";

$result=mysqli_query($conn,$sql) ;

if (mysqli_num_rows($result) > 0)
 {
	 $sql = "UPDATE user_details SET valid='1' WHERE user_id='$email'";
if(mysqli_query($conn,$sql))
{
	$_SESSION["useremailgov"]=$email;
	header("Location:index.php");
	}
	else {
		header("location:enteremailcode.php?failed=true");
}
}
	else
	header("Location:enteremailcode.php?wrongattempt=true");

}
?>
