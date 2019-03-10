<?php
require "stableconnect.php";
require "beginit.php";

?>
<br><br><br><br><br><br>
<div class="container" id="submit-start"><br>
<h2 class="text-center">Give Your Feedback</h2><br>
<?php if(isset($_GET["success"])) echo "<h4 class=\"text-center\" style=\"color:greeen\">Your feedback has been submitted successfully</h4>";?>
	<?php if(isset($_GET["failed"])) echo "<h4 class=\"text-center\" style=\"color:red\">Something went wrong. Try again after sometime</h4>";?>
<form action="feedbackback.php" method="post">
  <div class="form-group">
    <label for="email">Email:</label>
    <input required  type="email" name="user_email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="name">Name:</label>
    <input required  type="name" name="name" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="project">Your Feedback :</label>
    <textarea class="form-control" name="feedback" rows="5" id="project"></textarea>
  </div><br>
  <div class="text-center"><button type="submit" class="btn btn-primary button1">Submit Now >></button></div>
</form> <br><br>
</div><br><br>

<?php require "footer.php"; ?>
