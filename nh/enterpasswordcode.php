<?php
require "stableconnect.php";
require "beginit.php";

?>
<br><br>

        <div class="container signbox">
		 <h4 class="text-center"><i class="fa fa-sign-in"></i> Enter verification code</h4>
           <?php if(isset($_GET["wrongattempt"])) echo "<h4 class=\"text-center\" style=\"color:red\">Wrong Verification Code</h4>";?>
		   <br>
		   <form class="form" role="form" action="verifycode.php" method="post"><br>
         	<input   required class="form-control" maxlength="6" type="text" name="vercode" placeholder="Verification Code"/><br>
			<div align="center"><input required  type="submit" class="inputButton"name="submit" value="Submit"/></div><br>
        </form><br>

		</div>



</body>
