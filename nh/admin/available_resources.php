<?php
    require "beginadmin.php";
    require "stableconnect.php";
    session_start();
    $_SESSION['adminemail']='admin@gmail.com';
	?><br>
	    <table class="table table-striped">
		    <thead>
			  <tr>
				<td>Resource name</td>
				<td>Price</td>
				<td>Total Quantity</td>
				<td>Available</td>
		      </tr>
			</thead>
			<tbody>
	<?php
    $query="SELECT * FROM admin_details WHERE admin_id='admin@gmail.com'";
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_assoc($result);
	$center_id=$row['center_id'];
	
	$query2="SELECT * FROM resources WHERE center_id='$center_id'";
	$result2=mysqli_query($conn,$query2);
	while($row=mysqli_fetch_assoc($result2)) {
		$resource_name=$row['resource_name'];
		$resource_quanity=$row['resource_quantity'];
		$resource_price=$row['resource_price'];
		?>
		    <tr>
		        <td><?php echo $resource_name; ?></td>
				<td><?php echo $resource_quanity; ?></td>
				<td><?php echo $resource_price; ?></td>
			</tr>
		<?php
	}
?>          </tbody>
        </table>