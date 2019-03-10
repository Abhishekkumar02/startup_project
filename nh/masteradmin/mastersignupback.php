<?php
require "stableconnect.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{

 if(isset($_POST['submit'])) {

		if(!($password==$password2)) {
			header('location:mastersignup.php?passerr=true');
		} else {
      if(empty($email)||empty($password))
      exit();
	    $query = "INSERT INTO master_admin(master_id,master_password) VALUES ('$email','$password')";
	    if(mysqli_query($conn,$query))
	    {session_start();
	    $_SESSION["masteradminemail"]=$email;
	    header("location:index.php");
        }}
	}
}
?>
