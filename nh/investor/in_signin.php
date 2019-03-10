<?php
require "stableconnect.php";
require "beginit.php";
?>
<div style="background: url('645.jpg') fixed no-repeat; margin-top:-50px;">
<br><br>
<div class="container signbox">
		 <h4 class="text-center"><i class="fa fa-sign-in"></i> Investor Sign In</h4>
           <?php if(isset($_GET["wrongattempt"])) echo "<h4 class=\"text-center\" style=\"color:red\">Wrong Password or Username</h4>";?>
		   <?php if(isset($_GET["changesuccess"])) echo "<h4 class=\"text-center\" style=\"color:green\">Password has been changed successfully.</h4>";?>
		   <br><form class="form" role="form" action="in_signinback.php" method="post"><br>
         	<input required  required  class="form-control" type="email" name="company_email" placeholder="Email" maxlength="50"/><br>
			<input required  required  class="form-control" type="password" name="password" placeholder="Password" minlength="6" maxlength="15"/><br>
			<div align="center"><input required  required type="submit" class="inputButton"name="submit" value="Signin"/></div><br>
        </form><br>
		<h5 class="text-center"><a href="in_forgotpassword.php" class="link1"> Forgot password</a></h5>

		</div>		<br><br><br><br>
</div>
</body>

<?php require "footer.php"; ?>
