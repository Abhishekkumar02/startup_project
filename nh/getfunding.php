<?php
require "stableconnect.php";
require "beginit.php";
if(!$loggedin)
{
	  header("location:signin.php?reurl=getfunding.php");
exit();
}
$email=$_SESSION['useremailgov'];
if(empty($email))
exit();
	$qq="SELECT * FROM startup_details WHERE user_id='$email'";
	$res=mysqli_query($conn,$qq);

?>
<br><br><br><br><br><br>
<?php if(isset($_GET["success"])) echo "<h4 class=\"text-center\" style=\"color:greeen\">Your request for funding has been submitted successfully</h4>";?>
	<?php if(isset($_GET["failed"])) echo "<h4 class=\"text-center\" style=\"color:red\">Something went wrong. Try again after sometime</h4>";?>

<div class="container" id="submit-start"><br>
<h2 class="text-center">Apply for Funding</h2><br>
<form action="getfundingback.php" method="post">
  <div class="form-group">
    <label for="name">Project Name:</label>
    <input required  type="name" name="name" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="incn">Startup</label>
    <select type="text" name="startup" class="form-control" id="incn" required>
<option value="">Select your startup</option>
<?php while ($row=mysqli_fetch_assoc($res)) {
	echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
}
if(mysqli_num_rows($res)==0)
echo '<br><h4 class="text-center">You need to submit your startup first</h4>';

?>
		</select>
  </div>
  <div class="form-group">
    <label for="project">Project Details :</label>
    <textarea class="form-control" name="about" rows="5" id="project"></textarea>
  </div><br>
  <div class="text-center"><button type="submit" class="btn btn-primary button1">Apply Now >></button></div>
</form> <br><br>
</div><br><br>
</body>

<?php require "footer.php"; ?>
