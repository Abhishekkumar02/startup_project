<?php
  require "stableconnect.php";
  require "checkadmin.php";
  if(empty($tid))
  exit();
	$sq="SELECT * FROM transaction_details WHERE id='$tid'";
	$result = mysqli_query($conn,$sq);
	$row=mysqli_fetch_assoc($result);
  $status = $row['status'];
  $roomid = $row['room_id'];
  if($status=='0')
    {
   $sql_query ="UPDATE transaction_details SET status='1' WHERE id='$tid'";
    if(mysqli_query($conn,$sql_query))
    echo "Check Out";
    else echo "Something went wrong. Try again.";
    }
    else if($status=='1')
			{
	    $sql_query ="UPDATE transaction_details SET status='2' WHERE id='$tid'";
			if(mysqli_query($conn,$sql_query))
    {
      $sql_query ="DELETE FROM bookingdata WHERE id='$roomid'";
			mysqli_query($conn,$sql_query);
			echo "Checked Out";
    }  else echo "Something went wrong. Try again.";
			}
      else if($status=='2')
  		{
        echo "Already checked out";
		  }
?>
