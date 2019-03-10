<?php
require "stableconnect.php";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
if(empty($name)||empty($subject)||empty($query)||empty($user_email))
exit();
	 $sql_query="INSERT INTO query_details(subject,query,name,email,date) values('$subject','$query','$name','$user_email','$date')";
 if(mysqli_query($conn,$sql_query))
 header("location:query.php?success=true");
else
header("location:query.php?failed=true");

}
?>
