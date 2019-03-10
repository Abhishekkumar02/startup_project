<?php
require "stableconnect.php";
require "beginit.php";

$query="SELECT * FROM state_details";
$result=mysqli_query($conn,$query);
?>
<div class="container signbox">
<div class="row">
    <div class="col-md-12">
    <form action="grievancesback.php" method="post"  id="contact_form">
<center><h2 id="w">Lodge Grievance</h2></center>
<?php if(isset($_GET["success"])) echo "<h5 class=\"text-center\" style=\"color:green\">Your grievance has been submitted successfully</h5>";?>
<?php if(isset($_GET["failed"])) echo "<h5 class=\"text-center\" style=\"color:red\">Something went wrong. Try again after sometime.</h5>";?>

<br><br>
  <div class="col-md-12 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="name" maxlength="50" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
  <br><br>
  <br>
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="Enter your email" maxlength="50" class="form-control"  type="text">
    </div>
  </div>
  <br><br>
  <br>
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" maxlength="50" placeholder="Contact No." class="form-control" type="text">
    </div>
  </div>
  <br><br>
  <br>
          <div class="col-md-12 selectContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
              <select required class="form-control" name="state"  id="state">
                  <option value="">Select State</option>
                  <?php
                  if(mysqli_num_rows($result) > 0){
                      while($row=mysqli_fetch_assoc($result))
              		{
                          echo '<option value="'.$row['state_id'].'">'.$row['state_name'].'</option>';
                      }
                  }
              	else{
                      echo '<option value="">State not available</option>';
                  }
                  ?>
              </select>
        </div>
      </div>
      <br>
      <br><br>
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>

        <select required class="form-control"  name="city" id="city">
            <option value="">Select City</option>
        </select>    </div>
  </div>
  <br><br><br>

          <div class="col-md-12 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
        <input name="address" maxlength="50" placeholder="Address" class="form-control" type="text">
          </div>
        </div>
        <br><br>
        <br>
      <div class="col-md-12 selectContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
<select name="category" class="form-control selectpicker" >
  <option value="" >Enter Category</option>
  <option value="1">Start up</option>
  <option value="2">Incubaters</option>
  </select>
  </div>
  </div>
  <br><br><br>
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="pincode" maxlength="6" placeholder=" Enter Pin Code" class="form-control"  type="text">
    </div>
</div>
<br>
<br><br>


   <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
  <input name="website" placeholder="Website link" class="form-control" type="text">
    </div>
  </div><br>
  <br><br>

    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea class="form-control" row="5" name="comment" placeholder="Project Description"></textarea>
  </div>
  </div><br>
  <br>
  <br><br>

  <div class="col-md-12">
   <center> <button type="submit" class="whitebtn " >Submit</button></center>
  </div>
</div><br><br><br>


</fieldset>
</form>
</div>
</div>
</div>
    </div>
    <script type="text/javascript">
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

        $('#city').on('click',function(){
            var cityID = $(this).val();
            if(cityID){
                $.ajax({
                    type:'POST',
                    url:'searchback.php',
                    data:'city_id='+cityID,
                    success:function(html){
                        $('#center').html(html);
                    }
                });
            }else{
                $('#center').html('<option value="">Select Center</option>');
            }
        });
    });
    </script>
