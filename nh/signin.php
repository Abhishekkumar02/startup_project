<?php
require "stableconnect.php";
require "beginit.php";
if(isset($_GET['reurl']))
setredirect($reurl);
?>
<div style="background: url('images/sign_in_bg.jpg')  no-repeat;border:1px solid red;background-size:cover; margin-top:-20px;">
        <div class="container signbox">
		 <h4 class="text-center"><i class="fa fa-sign-in"></i> Sign In</h4>
           <?php if(isset($_GET["wrongattempt"])) echo "<h4 class=\"text-center\" style=\"color:red\">Wrong Username/Password</h4>";?>
		   <?php if(isset($_GET["changesuccess"])) echo "<h4 class=\"text-center\" style=\"color:green\">Password has been changed successfully.</h4>";?>
		   <br><form class="form" role="form" action="signinback.php" method="post"><br>
         	<input required  required required class="form-control" type="email" name="email" placeholder="Email"/><br>
			<input required  required required class="form-control" type="password" name="password" placeholder="Password"/><br>
			<div align="center"><input required  required type="submit" class="inputButton"name="submit" value="Signin"/></div><br>
        </form><br>
		<h5 class="text-center"><a href="forgotpassword.php" class="link1"> Forgot password</a></h5>

		</div>	<br><br><br><br></div>



  <script src="jquery-ui-1.12.1\jquery-ui.js"></script>
  <script>
  $("#hsignin").attr('id','activeh');
  $(function() {
     $( "#gh" ).datepicker({ dateFormat: 'yy-mm-dd'});
});</script>
</body>

<?php require "footer.php"; ?>
