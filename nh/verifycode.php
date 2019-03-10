<?php
require "stableconnect.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	session_start();
$email=$_SESSION["fruser"];
if(empty($email)||empty($vercode))
exit();
$sql = "SELECT * FROM user_details WHERE user_id='$email' AND vercode='$vercode' AND valid='1'";

$result=mysqli_query($conn,$sql) ;

if (mysqli_num_rows($result) > 0)
 {
	 $_SESSION["confirmfr"]=$email;
header("Location:newpassword.php");
	}
	else header("Location:enterpasswordcode.php?wrongattempt=true");

}
?>
