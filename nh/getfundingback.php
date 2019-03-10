<?php
require "stableconnect.php";
require "checkuser.php";
if(!$loggedin)
header('location:signin.php');
if($_SERVER["REQUEST_METHOD"] == "POST")
{

	$email=$_SESSION["useremailgov"];
	if(empty($id)||empty($email)||empty($about)||empty($startup)||empty($date))
	exit();
$sql = "SELECT * FROM startup_details WHERE id='$startup' ";

$result=mysqli_query($conn,$sql) ;

if (mysqli_num_rows($result) < 1)
 {header("location:getfunding.php?failed=true");
	 exit();
 }

	$sql_query="INSERT INTO request_funding_details(name,user_id,about,startup,date) values('$name','$email','$about','$startup','$date')";
 if(mysqli_query($conn,$sql_query))
 header("location:getfunding.php?success=true");
else
header("location:getfunding.php?failed=true");

}
?>
