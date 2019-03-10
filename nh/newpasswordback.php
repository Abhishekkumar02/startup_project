<?php
require "stableconnect.php";
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$email=$_SESSION["fruser"];
$password=htmlentities(mysqli_real_escape_string($conn,$_POST["pass"]));
if(empty($password)||empty($email))
exit();
$password=sha1($password);
 $query_upload="UPDATE user_details SET user_password='$password' WHERE user_id='$email'";
if(mysqli_query($conn,$query_upload))
{
    header("Location:signin.php?changesuccess=true");
    session_destroy();
    }    else
echo "Something went wrong";
	}
?>
