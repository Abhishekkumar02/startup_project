<?php
require "stableconnect.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($title)||empty($msg))
	exit();
	echo $query="INSERT INTO news_details(title,msg,date) VALUES('$title','$msg','$date')";
	if(mysqli_query($conn,$query))
  header("location:add_news.php?success=true");
else {
  header("location:add_news.php?failed=true");
}
}
?>
