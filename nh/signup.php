<?php
require "beginit.php";
?>
<br><br>
<div style="background: url('images/sign_in_bg.jpg')  no-repeat;border:1px solid ;background-size:cover; margin-top:-60px;">
	<div class="container signbox">
		 <h4 class="text-center"><i class="fa fa-user"></i> Sign Up</h4>
                  <?php if(isset($_GET["loginerror"])) echo "<h5 class=\"text-center\" style=\"color:red\">Unable to send verification code to your email. Please try again.</h5>";?>
			<?php if(isset($_GET["found"])) echo "<h5 class=\"text-center\" style=\"color:red\">This email is already taken by another account. Please try again with different email id.</h5>";?>
			<?php if(isset($_GET["failed"])) echo "<h5 class=\"text-center\" style=\"color:red\">Something went wrong. Try again after sometime.</h5>";?>
	 		 <form id="signupform"class="form" role="form" action="signupback.php" method="post"><br>
    	<input  maxlength="20" class="form-control" type="text" name="name" placeholder="Name"/><br>
			<input   required type="radio" name="gender" value="M" checked> Male </input>&nbsp;&nbsp;
			<input   required type="radio" name="gender" value="F"> Female </input><br><br>
			<input required class="form-control" type="email" name="email" placeholder="Email"/><br>
			<input required class="form-control" maxlength="10" id="phn"type="text" name="phone" placeholder="Phone" onkeypress="return isNumber(event)"/><br>
			<div id="result" class="pass_error"></div>
			<input required  maxlength="16"  class="form-control" type="password" name="password" id="pass" placeholder="Enter Password"/><br>
			<div id="pass_again" class="pass_error"></div>
			<input required  maxlength="16" class="form-control" type="password" name="passwordagain" id="passagain" placeholder="Re enter Password"/><br>
			<div align="center"><input required  type="submit" class="inputButton"name="submit" value="Submit"></div>
        </form>
    </div>
	<br><br><br><br></div>
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
$(document).ready(function() {
$('#pass').keyup(function() {
$('#result').html(checkStrength($('#pass').val()))
})

$('#passagain').keyup(function() {
$('#pass_again').html(checkAStrength($('#passagain').val()))
})

function checkStrength(password) {
var strength = 0
if (password.length < 6) {
$('#result').removeClass()
$('#result').addClass('short')
$("#result").css("color", "#ff0000");
return 'Too short'
}
if (password.length > 7) strength += 1
if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1
if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1
if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
if (strength < 2) {
$('#result').removeClass()
$('#result').addClass('weak')
$("#result").css("color", "#ff0000");
return 'Weak'
} else if (strength == 2) {
$('#result').removeClass()
$('#result').addClass('good')
$("#result").css("color", "#858c1f");
return 'Good'
} else {
$('#result').removeClass()
$('#result').addClass('strong')
$("#result").css("color", "#124804");
return 'Strong'
}
}

function checkAStrength(password) {
if($("#pass").val()!=$("#passagain").val()){
$('#pass_again').removeClass()
$('#pass_again').addClass('password_not_match')
$("#pass_again").css("color", "#ff0000")
$('#pass_again').css('display','block')
return 'Passwords do not match'
}
else{
	$('#pass_again').css('display','none')
	return "";
}}
});
</script>
</body>
<?php require "footer.php"; ?>
