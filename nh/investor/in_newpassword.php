<?php
require "stableconnect.php";
require "beginit.php";

?>
<br><br>

        <div class="container signbox">
		 <h4 class="text-center"><i class="fa fa-sign-in"></i> Enter new password</h4>
           <?php if(isset($_GET["wrongattempt"])) echo "<h4 class=\"text-center\" style=\"color:red\">Wrong Password</h4>";?>
		   <br><form id="form1" class="form" role="form" action="in_newpasswordback.php" method="post"><br>
        	<input required  maxlength="16" required class="form-control" type="password" name="pass" id="pass" placeholder="Enter Password"/><br>
			<input required  maxlength="16" required class="form-control" type="password" name="passwordagain" id="passagain" placeholder="Reenter Password"/>
			<br><div align="center"><input required  type="submit" class="inputButton"name="submit" value="Submit"/></div><br>
        </form><br>

		</div>

  <script type="text/javascript">
$("#form1").submit( function(e)
{

if($("#pass").val()!=$("#passagain").val())
{
e.preventDefault();
alert("Passwords do not match. Please try again.");
}
else
if($("#pass").val().length>16||$("#pass").val().length<8)
{

e.preventDefault();
alert("Password length must be between 8 to 16 character.");

}});</script>

</body>
