<?php
require "stableconnect.php";
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$email=$_SESSION["fruser"];
$password=htmlentities(mysqli_real_escape_string($conn,$_POST["pass"]));
$password=sha1($password);
$query_upload="UPDATE investor_details SET password='$password' WHERE company_email='$email'";
mysqli_query($conn,$query_upload);
session_destroy();
header("Location:in_signin.php?changesuccess=true");
	}
?>
