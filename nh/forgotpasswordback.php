<?php
require "stableconnect.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($email))
	exit();
$sql = "SELECT * FROM user_details WHERE user_id='$email' AND valid='1'";
$result=mysqli_query($conn,$sql) ;

if (mysqli_num_rows($result) > 0)
{
	$sendcode=mt_rand(100000,999999);
session_start();
$_SESSION["fruser"]=$email;
if(!sendvmail($email,$sendcode))
{
  header("Location:forgotpassword.php?failed=true");
  exit();
}
$query_upload="UPDATE user_details SET vercode='$sendcode' WHERE user_id='$email'";
if(mysqli_query($conn,$query_upload) )
{
  header("Location:enterpasswordcode.php");
}else {
  header("Location:forgotpassword.php?failed=true");
}	}
	else header("Location:forgotpassword.php?emailerr=true");

}
?>
