<?php
require "stableconnect.php";
require "checkadmin.php";
if(!$loggedin)
{
	header("location:adminsignin.php");
	exit();
}
 $email=$_SESSION["adminemail"];
 if(isset($_POST['submit'])) {

	    $query="SELECT * FROM admin_details WHERE admin_id='$email'";
		$result=mysqli_query($conn,$query);
		$row=mysqli_fetch_assoc($result);
		$center_id=$row['center_id'];

		  $query = "INSERT INTO resources(resource_name,resource_quantity,resource_price,center_id) VALUES ('$resource_name','$quantity','$price','$center_id')";
	    if(mysqli_query($conn,$query))
		header('location:add_resources.php?done=true');
    }
?>
