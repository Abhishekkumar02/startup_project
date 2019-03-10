<?php
require "stableconnect.php";
require "beginit.php";
	
?>

<br><br><br><br><br><br>
<div class="container" id="submit-start"><br>
<h2 class="text-center">Investor Portfolio</h2><br>
<form action="/action_page.php">
  <div class="form-group">
    <label for="name">Investor Name:</label>
    <input required  type="name" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="name">Investor Image:</label>
    <input required  type="file" id="picture" accept="image/*">
  </div>
  <div class="form-group">
    <label for="address">Address :</label>
    <input required  type="text" class="form-control" id="address">
  </div>
  <div class="form-group">
    <label for="website">Website :</label>
    <input required  type="text" class="form-control" id="website">
  </div>
  <div class="form-group">
    <label for="mobile">Mobile or Phone:</label>
    <input required  type="phone" class="form-control" id="mobile">
  </div>
  <div class="form-group">
    <label for="project">Details :</label>
    <textarea class="form-control" rows="5" id="project"></textarea>
  </div><br>
  <div class="text-center"><button type="submit" class="btn btn-primary button1">Submit Now >></button></div>
</form> <br><br>
</div><br><br>
</body>

<?php require "footer.php"; ?>