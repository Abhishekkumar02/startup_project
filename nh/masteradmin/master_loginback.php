<?php
require "stableconnect.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{

if(isset($_POST['submit'])) {
	   if(empty($email)||empty($password))
		 exit();
	    $query = "SELECT * from master_admin WHERE master_id='$email' AND master_password='$password'";
	    $result = mysqli_query($conn,$query);
	    if(mysqli_num_rows($result)>0) {
		    session_start();
	 	    $_SESSION['masteradminemail'] = $email;
		   header('location:index.php');
	    } else {
			header('location:master_login.php?wrongattempt=true');
		}
}
}
?>
