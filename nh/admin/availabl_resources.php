<?php
require "stableconnect.php";
 if(isset($_POST['submit'])) {
	  
	    $query = "INSERT INTO resources(resource_name,resource_quantity) VALUES ('$resource_name','$quantity')";
	    mysqli_query($conn,$query);
		header('location:add_resources.php?done=true');
    }
?>
