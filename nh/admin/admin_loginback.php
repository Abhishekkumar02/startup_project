<?php
require "stableconnect.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
if(isset($_POST['submit'])) {
	   if(empty($email)||empty($password))
		 exit();
	    $query = "SELECT * from admin_details WHERE admin_id='$email' AND admin_password='$password'";
	    $result = mysqli_query($conn,$query);
	    if(mysqli_num_rows($result)>0) {
		    session_start();
	 	    $_SESSION['adminemail'] = $email;
		   header('location:index.php');
	    } else {
			header('location:adminsignin.php?wrongattempt=true');
		}
}
}
?>
