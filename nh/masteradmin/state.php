<?php
require "beginadmin.php";
?>
<body>

<div class="container signbox">
<h4 class="text-center"><i class="fa fa-plus"></i> Add State</h4>
<?php if(isset($_GET["success"])) echo "<h5 class=\"text-center\" style=\"color:green\">State has been addded successfully</h5>";?>
<?php if(isset($_GET["failed"])) echo "<h5 class=\"text-center\" style=\"color:red\">Something went wrong. Try again after sometime.</h5>";?>

<form class="form" action="stateback.php" method="POST">
    	  <input required  required type="text" class="form-control"  placeholder="State Name" name="state" ><br>

	<div align="center"><input required  required type="submit" class="inputButton"name="submit" value="Submit"></div>
	</form>
	</div>

</body>
</html>
