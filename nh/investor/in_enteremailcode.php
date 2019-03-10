<?php
require "stableconnect.php";
require "beginit.php";
?>
<br><br>
<div class="container signbox">
		 <h4 class="text-center">
			 <i class="fa fa-sign-in"></i> Enter verification code</h4>
           <?php if(isset($_GET["wrongattempt"])) echo "<h5 class=\"text-center\" style=\"color:red\">Wrong Verification Code</h5>";?>
		   <br>
		   <form class="form" role="form" action="in_verifyemail.php" method="post"><br>
         	<input required  required class="form-control" type="text" name="vercode" placeholder="Verification Code"/><br>
			<div align="center">
				<input required  type="submit" class="inputButton" name="submit" value="Submit"/></div><br>
        </form><br>
		</div>
			</body>
