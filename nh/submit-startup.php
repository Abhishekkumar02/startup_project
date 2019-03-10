<?php
require "stableconnect.php";
require "beginit.php";

$query="SELECT * FROM state_details";
$result=mysqli_query($conn,$query);
$query1="SELECT * FROM startup_type_details order by (name) asc";
$result1=mysqli_query($conn,$query1);
if(!$loggedin)
{
  header("location:signin.php?reurl=submit-startup.php");
exit();
}
?>
<div style="background: url('images/success.jpg') fixed no-repeat; margin-top:-40px; background-size:cover;"><br><br><br>

<div class="container" id="submit-start"><br>
<h2 class="text-center">Submit Startup</h2><br>
<form onsubmit="return validate()" action="submitstartupback.php" method="post">
  <?php if(isset($_GET["success"])) echo "<h4 class=\"text-center\" style=\"color:greeen\">Your Startup has been submitted successfully</h4>";?>
  <?php if(isset($_GET["failed"])) echo "<h4 class=\"text-center\" style=\"color:red\">Something went wrong. Try again after sometime</h4>";?>
  <?php if(isset($_GET["found"])) echo "<h4 class=\"text-center\" style=\"color:blue\">This incorporation no. already exists. Please check your details.</h4>";?>
  <div class="form-group">
    <label for="name">Startup Name:</label>
    <input required  type="text" name="name" class="form-control" id="name" required>
  </div>
  <div class="form-group">

    <label for="incn">Incorporation No.(If you have registered.):</label>
     <div id="incno_result"></div>
     <input required  type="text" name="incorporation_no" class="form-control" id="incno" maxlength="21" >
  </div>
  <div class="form-group">
    <label for="website">Website :</label>
    <input required  type="text"
		 name="website" class="form-control" id="website">
  </div>
  <div class="form-group">
    <label for="mobile">Mobile or Phone :</label>
    <input required  maxlength="10" type="phone" name="phone" class="form-control" id="mobile" required>
  </div>
	<div class="form-group">
		<label >Startup Type :</label>

	<select required class="form-control" name="type" required>
	    <option value="">Select Type</option>
	    <?php
	    if(mysqli_num_rows($result1) > 0){
	        while($row1=mysqli_fetch_assoc($result1))
			{echo '<option value="'.$row1['id'].'">'.$row1['name'].'</option>';
	      }
	    }
		else
		{echo '<option value="">Type not available</option>';
	    }
	    ?>
	</select></div>
	<div class="form-group">
      <label>Address:</label>
      <textarea class="form-control" rows="5" name="address" required></textarea>
    </div>
	<div class="form-group">
		<label >State :</label>

	<select required class="form-control" name="state" id="state">
	    <option value="">Select State</option>
	    <?php
	    if(mysqli_num_rows($result) > 0){
	        while($row=mysqli_fetch_assoc($result))
			{
				echo '<option value="'.$row['state_id'].'">'.$row['state_name'].'</option>';
	      }
	    }
		else
		{
			echo '<option value="">State not available</option>';
	    }
	    ?>
	</select></div>
	<div class="form-group">
		<label >City :</label>
<select required class="form-control"  name="city" id="city">
	    <option value="">Select City</option>
	</select></div>
	<div class="form-group">
    <label for="website">Pincode :</label>
    <input required  type="text"
		 name="pincode" class="form-control" id="website" required>
  </div>
	<div class="form-group">
		<label>Name of authorized representative :</label>
		<input required  type="text"
		 name="representative" class="form-control" required>
	</div>
	<div class="form-group">
		<label>Mail ID:</label>
		<input required  type="email"
		 name="user_email" class="form-control" required>
	</div>

  <div class="text-center">
		<button type="submit" class="btn btn-primary button1">Submit Now >></button></div>
</form> <br><br>
</div><br><br></div>

<script>

var numberPattern = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;

$(document).ready(function() {
$('#incno').keyup(function() {
$('#incno_result').html(checkIncu($('#incno').val()))
});

function checkIncu(incu_number) {
var check = 0;
var company = 0;
var year = 0;
var ty = 0;
var ro=0;
var incu = $("#incno").val();
if (check==0){
if(incu.indexOf('U') == 0 || incu.indexOf('L')== 0){
	check = 1;
}
else{
	check=0;
}
}

if (company==0){
	var company_d = incu.substring(1, 6)
	if (check_if_number(company_d)){
		company = 1
	}
	else {company=0}
}
var state = incu.substring(6, 8)
if (year==0){
	var yea = incu.substring(8, 12)
	if (check_if_number(yea)){
		year = 1
	}
	else {year=0}
}


if(ty == 0){
	var typ = incu.substring(12, 15)
	if(typ.indexOf('PLC') == 0 || typ.indexOf('PTC')== 0){
	ty = 1;
}
else{
	ty=0;
}
}


if (ro==0){
	var roc = incu.substring(15, 21)
	if (check_if_number(roc) && roc.length == 6){
		ro = 1
		console.log("correct number")
                $('#incno_result').css('display','none')

	}
	else {ro=0;console.log("Incorrect")
	$('#incno_result').text("Invalid Number")
	$("#incno_result").css("color", "#ff0000")
	$('#incno_result').css('display','block')
	sumbit = 0
}

if(incu.length>21){
	$('#incno_result').text("Invalid ");
	$("#incno_result").css("color", "#ff0000");
	$('#incno_result').css('display','block');
	sumbit = 0;
}

}

if (ro==1 && ty ==1 && year==1 && company == 1 && check==1){
	submit = 1;
	$('#incno_result').css('display','none')
	return "";
}
else {
	$('#incno_result').text("Invalid")
	$("#incno_result").css("color", "#ff0000")
	$('#incno_result').css('display','block')
	sumbit = 0
}

}});

function check_if_number(number){
if(numberPattern.test(number)) {return true;}
else{return false;}
}




</script><script>
$(document).ready(function(){
    $('#state').on('click',function(){
        var stateID = $(this).val();

        if(stateID){
            $.ajax({
                type:'POST',
                url:'searchback.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                    $('#center').html('<option value="">Select city first</option>');
                }
            });
        }else{
            $('#city').html('<option value="">Select City</option>');
            $('#center').html('<option value="">Select Center</option>');
        }
    });
});
function validate()
{
  var incu = $("#incno").val();
  if(incu.length==21&&submit==1){
  return true;}
  return false;
}
</script>
<?php require "footer.php"; ?>
