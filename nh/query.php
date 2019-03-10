<?php
require "stableconnect.php";
require "beginit.php";

?>
<br><br><br><br><br><br>
<div class="container" id="submit-start"><br>
<h2 class="text-center">Tell us your problem</h2><br>
<?php if(isset($_GET["success"])) echo "<h4 class=\"text-center\" style=\"color:greeen\">Your query has been submitted successfully</h4>";?>
	<?php if(isset($_GET["failed"])) echo "<h4 class=\"text-center\" style=\"color:red\">Something went wrong. Try again after sometime</h4>";?>
<form action="queryback.php" method="post">
	<div class="form-group">
    <label >Name:</label>
    <input required  type="text" name="name" class="form-control">
  </div>
	<div class="form-group">
    <label >Email:</label>
    <input required  type="email" name="user_email" class="form-control">
  </div>
	<div class="form-group">
    <label >Subject:</label>
    <input required  type="text" name="subject" class="form-control">
  </div>
   <div class="form-group">
    <label >Your Query :</label>
    <textarea class="form-control" name="query" rows="5" ></textarea>
  </div><br>
  <div class="text-center"><button type="submit" class="btn btn-primary button1">Submit Now >></button></div>
</form> <br><br>
</div><br><br>

<?php require "footer.php"; ?>
