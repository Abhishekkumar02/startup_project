<?php
require "stableconnect.php";
require "beginit.php";

?>
<br><br>

        <div class="container signbox">
		 <h4 class="text-center"><i class="fa fa-sign-in"></i> Enter Your Email id</h4>
           <?php if(isset($_GET["emailerr"])) echo "<h4 class=\"text-center\" style=\"color:red\">Sorry, We could not find your email. Please check it again.</h4>";?>
						 <?php if(isset($_GET["failed"])) echo "<h5 class=\"text-center\" style=\"color:red\">Something went wrong. Try again after sometime.</h5>";?>
<?php if(isset($_GET["loginerr"])) echo "<h4 class=\"text-center\" style=\"color:red\">Error sending verification code please try again.</h4>";?>
		   <br><h4 class="text-center" style="color:green">We will send a verification code to your email id.</h4><br>
		   <form class="form" role="form" action="in_forgotpasswordback.php" method="post"><br>
         	<input required  required class="form-control" type="email" name="email" placeholder="Email"/><br>
			<div align="center"><input required  type="submit" class="inputButton"name="submit" value="Submit"/></div><br>
        </form><br>

		</div>



</body>
