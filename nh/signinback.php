<?php
require "stableconnect.php";
require "checkuser.php";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($password)||empty($email))
	exit();
	$password=sha1($password);
	$sql_query="SELECT * FROM user_details WHERE user_id='$email' AND user_password='$password' AND valid='1'";
	$result=mysqli_query($conn,$sql_query);
	if(mysqli_num_rows($result)>0)
	{
		$_SESSION["useremailgov"]=$email;
$_SESSION['name'] = mysqli_fetch_assoc($result)['uid'];
if($rewrite==true)
{
	header("location:".$rdurl."?reload=true");
	clearredirect();
}else {
	header("location:index.php");
}

	}
	else
	header("location:signin.php?wrongattempt=true");

}
?>
