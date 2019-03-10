<?php
require "beginadmin.php";
require "stableconnect.php";

?>
<body>

<div class="container signbox">
<h4 class="text-center"><i class="fa fa-plus"></i> Add Mentor</h4>
<?php if(isset($_GET["success"])) echo "<h5 class=\"text-center\" style=\"color:green\">Mentor has been addded successfully</h5>";?>
<?php if(isset($_GET["failed"])) echo "<h5 class=\"text-center\" style=\"color:red\">Something went wrong. Try again after sometime.</h5>";?>

<form class="form" action="add_mentorback.php" method="POST">
<div class="form-group">
  <label for="sel1">Choose type:</label>
  <select class="form-control" id="types" name="tpy">
<?php
$query = "SELECT tag FROM tag";
$query_run = mysqli_query($conn,$query);

while($query_row = mysqli_fetch_assoc($query_run)){
echo("<option>".$query_row['tag']."</option>");
}

?>
  </select>
</div>

<input required  required type="text" class="form-control"  placeholder="Mentor Name" name="name" ><br>
<input required  required type="text" class="form-control"  placeholder="About" name="about" ><br>
<div align="center"><input required  required type="submit" class="inputButton"name="submit" value="Submit"></div>
</form>
</div>

</body>
</html>
