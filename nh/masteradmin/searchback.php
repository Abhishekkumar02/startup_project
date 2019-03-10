<?php
require "stableconnect.php";


if(isset($_POST["state_id"]) && !empty($_POST["state_id"])){
    $query="SELECT * FROM city_details WHERE state_id = '$state_id'";
 $result=mysqli_query($conn,$query);
 if( mysqli_num_rows($result)> 0)
 {
        echo '<option value="">Select City</option>';
        while($row=mysqli_fetch_assoc($result))
		{
            echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
        }
    }
	else{
        echo '<option value="">City not available</option>';
    }
}

if(isset($_POST["city_id"]) && !empty($_POST["city_id"])){

    $query="SELECT * FROM center_details WHERE city_id='$city_id' ";
 $result=mysqli_query($conn,$query);
 if( mysqli_num_rows($result)> 0)
 {
        echo '<option value="">Select Center</option>';
        while($row=mysqli_fetch_assoc($result))
		{
            echo '<option value="'.$row['center_id'].'">'.$row['center_name'].'</option>';
        }
    }
	else{
        echo '<option value="">Center not available</option>';
    }
}
