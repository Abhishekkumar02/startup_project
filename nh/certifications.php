<?php
require "stableconnect.php";
require "beginit.php";
if(!$loggedin)
{
	header('location:signin.php');
exit();
}
$email=$_SESSION['useremailgov'];
$qq="SELECT * FROM startup_details WHERE user_id='$email'";
$res=mysqli_query($conn,$qq);
$qq2="SELECT * FROM courses_details";
$res2=mysqli_query($conn,$qq2);

?>

<br><br><br><br><br>

<div class="container">
<div class="row">
<div class="col-sm-4" style="border:2px solid black;"><br>
<h1 class="text-center">Get Trained</h1>
<br>
<?php if(isset($_GET["tsuccess"])) echo "<h4 class=\"text-center\" style=\"color:greeen\">Your request for training has been submitted successfully</h4>";?>
	<?php if(isset($_GET["tfailed"])) echo "<h4 class=\"text-center\" style=\"color:red\">Something went wrong. Try again after sometime</h4>";?>

<form action="gettrainedback.php" method="post">
  <div class="form-group">
    <label for="name">Email:</label>
    <input required  type="name" name="user_email" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="name">Name:</label>
    <input required  type="name" name="name" class="form-control" id="name">
  </div>
  <div class="form-group">
  <label for="select">Select Course:</label>
	<select type="text" name="course" class="form-control" id="incn" required>
<option value="">Select course</option>
<?php while ($row2=mysqli_fetch_assoc($res2)) {
echo '<option value="'.$row2['id'].'">'.$row2['name'].'</option>';
}?>
	</select>
</div>
  <div class="text-center"><button type="submit" class="btn btn-primary button1">Get Trained >></button></div>
</form><br>
</div>

<div class="col-sm-4">
<br><br><br><br><br><br><br>
<h1 class="text-center">OR</h1>
<br><br><br><br><br><br><br>
</div>


<div class="col-sm-4" style="border:2px solid black;"><br>
<h1 class="text-center">Get Certified</h1>
<br>
<?php if(isset($_GET["csuccess"])) echo "<h4 class=\"text-center\" style=\"color:greeen\">Your request for get certified has been submitted successfully</h4>";?>
	<?php if(isset($_GET["cfailed"])) echo "<h4 class=\"text-center\" style=\"color:red\">Something went wrong. Try again after sometime</h4>";?>

<form action="getcertifiedback.php" method="post">
  <div class="form-group">
    <label for="name">Email:</label>
    <input required  type="name" name="user_email" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="name">Name:</label>
    <input required  type="name" name="name" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="name">StartUp Name</label>
		<select type="text" name="startup" class="form-control" id="incn" required>
<option value="">Select your startup</option>
<?php while ($row=mysqli_fetch_assoc($res)) {
	echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
}?>
		</select></div>
  <div class="text-center"><button type="submit" class="btn btn-primary button1">Get Certified >></button></div>
</form>
<br>
</div>
</div>
</div>
<br><br><br>
<?php require "footer.php"; ?>
