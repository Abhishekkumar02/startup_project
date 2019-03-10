<?php
require "stableconnect.php";
require "checkuser.php";

if(!$loggedin)
{
  header("location:signin.php");
exit();
  }
if(empty($roomid)||empty($bkfrom)||empty($bktill))
exit();
$user_id=$_SESSION["useremailgov"];
$qq="SELECT * FROM cart_details WHERE room_id='$roomid' AND check_in='$bkfrom' AND check_out='$bktill'";
if(mysqli_num_rows(mysqli_query($conn,$qq))>0)
{
  echo "Someone recently booked this room";
  exit();
}
$qu11="INSERT INTO cart_details(room_id,user_id,check_in,check_out,date) VALUES('$roomid','$user_id','$bkfrom','$bktill','$date')";
if(mysqli_query($conn,$qu11))
echo "Added to cart";
else {
  echo "Something went wrong";
}
?>
