<?php
require "stableconnect.php";
require "beginadmin.php";
?>

<?php
$query="SELECT * FROM state_details";
$result=mysqli_query($conn,$query);


?>
<body>
<div class="container signbox">
<h4 class="text-center"><i class="fa fa-plus"></i> Add City</h4>
<?php if(isset($_GET["success"])) echo "<h5 class=\"text-center\" style=\"color:green\">City has been addded successfully</h5>";?>
<?php if(isset($_GET["failed"])) echo "<h5 class=\"text-center\" style=\"color:red\">Something went wrong. Try again after sometime.</h5>";?>
<form id="cityform"class="form" action="cityback.php" method="POST">
    <div class="form-group" align="center" >
<select  required class="form-control" name="state" id="state">
    <option value="">Select State</option>
    <?php
	mysqli_num_rows($result);
    if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result))
		{
            echo '<option value="'.$row['state_id'].'">'.$row['state_name'].'</option>';
        }
    }else{
        echo '<option value="">State not available</option>';
    }
    ?>
</select>
    	<br><input required  required type="text" class="form-control"  placeholder="City Name" name="city"><br>
    <input required  required type="text" class="form-control" id="pin" maxlength="6" placeholder="Pincode" name="pincode"><br>

	<div align="center"><input required  required type="submit" class="inputButton"name="submit" value="Submit"></div>
	</div>
	</form>
	</div>
	<script type="text/javascript">
	$("#cityform").submit(function (e)
	{
		if($("#pin").val()length!=6)
		{
			alert("Invalid Pincode");
		e.preventDefault();
		}
	});</script>
</body></html>
