<?php
require "stableconnect.php";
require "beginit.php";

?>
<br><br>

        <div class="container signbox">
		 <h4 class="text-center"><i class="fa fa-sign-in"></i> Enter verification code</h4>
		 <?php if(isset($_GET["failed"])) echo "<h5 class=\"text-center\" style=\"color:red\">Something went wrong. Try again after sometime.</h5>";?>
   <?php if(isset($_GET["wrongattempt"])) echo "<h5 class=\"text-center\" style=\"color:red\">Wrong Verification Code</h5>";?>
		   <br>
		   <form class="form" role="form" action="verifyemail.php" method="post"><br>
         	<input required  maxlength="6" class="form-control" type="text" name="vercode" placeholder="Verification Code"/><br>
			<div align="center"><input required  type="submit" class="inputButton"name="submit" value="Submit"/></div><br>
        </form><br>

		</div>



</body>
