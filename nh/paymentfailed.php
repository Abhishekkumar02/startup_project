<?php
require "stableconnect.php";
require "checkuser.php";
if(!$loggedin)
{
  header("location:signin.php");
exit();
}

$email=$_SESSION["useremailgov"];
 $sq11="UPDATE cart_details SET locked='0' WHERE user_id='$email'";
mysqli_query($conn,$sq11);
header("location:mycart.php");
?>
