<?php
require "stableconnect.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($city)||empty($state)||empty($pincode))
	exit();
	 $sql="SELECT * FROM city_details WHERE city_name='$city' AND state_id='$state'";
	if(mysqli_num_rows(mysqli_query($conn,$sql))<1)
	{
	$query="INSERT INTO city_details(city_name,state_id,pincode) VALUES('$city','$state','$pincode')";

	if(mysqli_query($conn,$query))
	header("location:city.php?success=true");
	else {
	header("location:city.php?failed=true");}
}
else {
	echo "Already added";
}
}
?>
