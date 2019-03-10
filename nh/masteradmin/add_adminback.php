<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
require "stableconnect.php";
    if(isset($_POST['submit'])) {
if(empty($admin_email)||empty($admin_name)||empty($password)||empty($center)||empty($admin_desc))
exit();
		$query="INSERT INTO admin_details (admin_id,admin_name,admin_password,center_id,admin_desc) Values('$admin_email','$admin_name','$password','$center','$admin_desc')";
		$result = mysqli_query($conn,$query);
		header('location:adminsignup.php?done=true');
	}
}
?>
