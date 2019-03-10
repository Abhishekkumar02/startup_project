<?php
require "stableconnect.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	session_start();
$email=$_SESSION["fruser"];
if(empty($vercode))
exit();
$sql = "SELECT * FROM investor_details WHERE company_email='$email' AND vercode='$vercode' AND valid='1'";

$result=mysqli_query($conn,$sql) ;

if (mysqli_num_rows($result) > 0)
 {
	 $_SESSION["confirmfr"]=$email;
header("Location:in_newpassword.php");
	}
	else header("Location:in_enterpasswordcode.php?wrongattempt=true");

}
?>
