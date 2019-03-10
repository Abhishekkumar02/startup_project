<?php
require "stableconnect.php";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($password)||empty($email))
	exit();
	$password=sha1($password);
$sql = "SELECT * FROM user_details WHERE user_id='$email' and valid='1'";

$result=mysqli_query($conn,$sql) ;

if (mysqli_num_rows($result) > 0)
 {
	 header("location:signup.php?found=true");
	 exit();
 }
	$sendcode=mt_rand(100000,999999);


if(!sendvmail($email,$sendcode))
{
  header("Location:forgotpassword.php?failed=true");
  exit();
}

	 $sql_query="INSERT INTO user_details(user_name,user_id,user_password,user_gender,user_date,user_phone,vercode,valid) VALUES('$name','$email','$password','$gender','$date','$phone','$sendcode','0')";

	if(mysqli_query($conn,$sql_query))
	{
	session_start();
	$_SESSION["veremail"]=$email;
	header("location:enteremailcode.php");
}
else {

	header("location:signup.php?failed=true");
}
}
?>
