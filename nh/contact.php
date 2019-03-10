<?php
require "stableconnect.php";
require "beginit.php";
	
?>
<br><br><br><br>
<h1 class="text-center"> Have a query ? Just drop a message.We will get back to you as soon as possible.</h1>
<br>
<div class="container" style="max-width:400px; border:2px solid black;">
<br><br>
<form action="/action_page.php">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input required  type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="name">Name:</label>
    <input required  type="text" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="msg">Message :</label>
    <textarea class="form-control" rows="5" id="msg"></textarea>
  </div><br>
  <div class="text-center"><button type="submit" class="btn btn-primary button1">Submit >></button>
</div></form><br>
</div>
<br><br><br>
<?php require "footer.php"; ?>