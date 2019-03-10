<?php
require "stableconnect.php";
require "checkuser.php";
if(!$loggedin)
{
	header('location:signin.php');
	exit();
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$email=$_SESSION["useremailgov"];
if(!empty($incorporation_no)){
$sql = "SELECT * FROM startup_details WHERE incorporation_no='$incorporation_no' ";

$result=mysqli_query($conn,$sql) ;

if(mysqli_num_rows($result) > 0)
 {
	 header("location:submit-startup.php?found=true");
	 exit();
 }}
if(empty($name)||empty($address)||empty($website)||empty($phone)||empty($email)||empty($city)||empty($type)||empty($representative)||empty($user_email))
exit();

if(empty($incorporation_no))
$incorporation_no="";
	$sql_query="INSERT INTO startup_details(name,incorporation_no,address,website,phone,user_id,date,city,type,representative,email)
	 values('$name','$incorporation_no','$address','$website','$phone','$email','$date','$city','$type','$representative','$user_email')";
 if(mysqli_query($conn,$sql_query))
 header("location:submit-startup.php?success=true");
else
{

header("location:submit-startup.php?failed=true");
}
}
?>
