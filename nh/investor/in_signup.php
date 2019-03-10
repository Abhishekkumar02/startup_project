<?php
require "beginit.php";
?>
<br><br>
	<div class="container signbox">
		 <h4 class="text-center">
			 <i class="fa fa-user"></i>Investor Sign Up</h4>
                  <?php if(isset($_GET["loginerror"])) echo "<h5 class=\"text-center\" style=\"color:red\">Unable to send verification code to your email. Please try again.</h5>";?>
										<?php if(isset($_GET["found"])) echo "<h5 class=\"text-center\" style=\"color:red\">This email is already taken by another account. Please try again with different email id.</h5>";?>
											<?php if(isset($_GET["failed"])) echo "<h5 class=\"text-center\" style=\"color:red\">Something went wrong.</h5>";?>
	 		 <form id="signupform"class="form" role="form" action="in_signupback.php" method="post"><br>
      <input required  maxlength="100" required class="form-control" type="text" name="company_name" placeholder="Company Name"/><br>
			<input required  maxlength="100" required class="form-control" type="email" name="company_email" placeholder="Company_Email"/><br>
			<input required  maxlength="100" required class="form-control" type="text" name="phone" placeholder="Company Contact No."/><br>
			<textarea class="form-control" name="company_address" rows="5" placeholder="Company Address"></textarea><br>
			<input required  required class="form-control" type="text" id="incno" name="incorporation_no" placeholder="Incorporation No."/><br>
			<input required  maxlength="100" required class="form-control" type="text" name="since" placeholder="Since(Company established year)"/><br>
			<input required  maxlength="100" required class="form-control" type="text" name="website" placeholder="Website"/><br>
			<input required  maxlength="16" required class="form-control" type="password" name="password" id="pass" placeholder="Enter Password"/><br>
			<input required  maxlength="16" required class="form-control" type="password" name="passwordagain" id="passagain" placeholder="Reenter Password"/><br>
			<textarea class="form-control" name="about" rows="5" placeholder="Description"></textarea><br>
			<div align="center"><input required  type="submit" class="inputButton"name="submit" value="Submit"></div>
        </form>
    </div>
	<br><br><br><br><br><br><br>
	<script src="jquery-ui-1.12.1\jquery-ui.js"></script>

	 <script>
	 $("#hsignup").attr('id','activeh');
  $(function() {

     $( "#date1" ).datepicker({ dateFormat: 'yy-mm-dd'});
});

$("#signupform").submit( function(e)
{
if($("#pass").val()!=$("#passagain").val())
{
e.preventDefault();
alert("Passwords do not match. Please try again.");
}
else
if($("#pass").val().length<8)
{

e.preventDefault();
alert("Password length must be between 8 to 16 character.");

}
else
if($("#phn").val().length!=10)
{

e.preventDefault();
alert("Invalid Phone Number");

}});
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>
</body>
<?php require "footer.php"; ?>
