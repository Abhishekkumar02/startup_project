<?php
require "stableconnect.php";
require "checkuser.php";
if(!$loggedin)
{  header("location:signin.php");
exit();
}
$user_id=$_SESSION["useremailgov"];
if(empty($roomid))
exit();
$qu11="DELETE FROM cart_details WHERE room_id='$roomid'";
if(mysqli_query($conn,$qu11))
echo "Removed";
else
echo "Error in removing";

?>
