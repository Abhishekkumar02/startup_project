<?php
require "beginadmin.php";
?>
<body>

<div class="container signbox">
<h4 class="text-center"><i class="fa fa-plus"></i> Post News</h4>
<?php if(isset($_GET["success"])) echo "<h5 class=\"text-center\" style=\"color:green\">News has been posted successfully</h5>";?>
<?php if(isset($_GET["failed"])) echo "<h5 class=\"text-center\" style=\"color:red\">Something went wrong. Try again after sometime.</h5>";?>

<form class="form" action="add_newsback.php" method="POST">
  <input required   type="text" class="form-control"  placeholder="Title" name="title" ><br>
  <input required   type="text" class="form-control"  placeholder="Description" name="msg" ><br>

	<div align="center"><input required  required type="submit" class="inputButton"name="submit" value="Submit"></div>
	</form>
	</div>

</body>
</html>
