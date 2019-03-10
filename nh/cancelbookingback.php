<?php
require "stableconnect.php";
require "checkuser.php";

if(!$loggedin)
{
  header("location:signin.php");
exit();
}

$user_id=$_SESSION["useremailgov"];
if(empty($tid))
exit();
$qu11="SELECT * FROM transaction_details t,booking_details b WHERE b.user_id='$user_id' AND t.id='$tid' AND t.booking_id=b.booking_id AND cancelled='0' AND t.status='0'";
$res=mysqli_query($conn,$qu11);
if(mysqli_num_rows($res)>0)
{
  $qu11="UPDATE transaction_details SET cancelled='1' WHERE id='$tid'";
  if(mysqli_query($conn,$qu11))
  echo "Booking canceled";
else {
  echo "Something went wrong";
}

}
else {
  echo "Booking cancellation is unavailable";

}
?>
