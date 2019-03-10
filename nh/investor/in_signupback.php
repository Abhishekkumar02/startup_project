<?php
require "stableconnect.php";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($password)||empty($company_email))
	exit();
	$password=sha1($password);
$sql = "SELECT * FROM investor_details WHERE company_email='$company_email' and valid='1'";

$result=mysqli_query($conn,$sql) ;

if (mysqli_num_rows($result) > 0)
 {
	 header("location:in_signup.php?found=true");
	 exit();
 }
	$sendcode=mt_rand(100000,999999);


if(!sendvmail($company_email,$sendcode))
{
  header("Location:forgotpassword.php?failed=true");
  exit();
}

	echo $sql_query="INSERT INTO investor_details(company_name,company_email,company_address,date,since,about,website,incorporation_no,password,valid,vercode,phone)
	 values('$company_name','$company_email','$company_address','$date','$since','$about','$website','$incorporation_no','$password','0','$sendcode','$phone')";

	if(mysqli_query($conn,$sql_query))
	{
	session_start();
	$_SESSION["in_veremail"]=$company_email;
	header("location:in_enteremailcode.php");
}
else {
	header("location:in_signup.php?failed=true");
}
}
?>
