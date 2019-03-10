<?php
require "stableconnect.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($email))
$sql = "SELECT * FROM investor_details WHERE company_email='$email' AND valid='1'";
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
$query_upload="UPDATE investor_details SET vercode='$sendcode' WHERE company_email='$email'";
if(mysqli_query($conn,$query_upload) )
{
  header("Location:in_enterpasswordcode.php");
}else {
  header("Location:in_forgotpassword.php?failed=true");
}	}
	else header("Location:in_forgotpassword.php?emailerr=true");

}
?>
