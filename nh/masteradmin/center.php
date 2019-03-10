<?php
require "stableconnect.php";
require "beginadmin.php";
?>

<script src="js/jquery.min.js"></script>
<?php
$query="SELECT * FROM state_details";
$result=mysqli_query($conn,$query);
?>

<div class="container signbox">
<h4 class="text-center"><i class="fa fa-plus"></i> Add Center</h4>
<?php if(isset($_GET["success"])) echo "<h5 class=\"text-center\" style=\"color:green\">Center has been addded successfully</h5>";?>
<?php if(isset($_GET["failed"])) echo "<h5 class=\"text-center\" style=\"color:red\">Something went wrong. Try again after sometime.</h5>";?>

<form class="form" action="centerback.php" method="POST">
<select required class="form-control" name="state" id="state">
    <option value="">Select State</option>
    <?php
    if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result))
		{
            echo '<option value="'.$row['state_id'].'">'.$row['state_name'].'</option>';
        }
    }else{
        echo '<option value="">State not available</option>';
    }
    ?>
</select><br>
<select required class="form-control" name="city_id" id="city">
    <option value="">Select city</option>
</select><br>

    	  <input required  required  class="form-control" type="text" class="form-control"  placeholder="Center Name" name="center" ><br>
     <input required  required  class="form-control"type="text" class="form-control"  placeholder="Description" name="desc" ><br>
     <textarea required class="form-control" type="text" class="form-control"  placeholder="Address" name="address" ></textarea><br>

	<div align="center"><input required  required type="submit" class="inputButton"name="submit" value="Submit"></div>
	</form>
<script type="text/javascript">
$(document).ready(function(){
    $('#state').on('change',function(){
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
            $('#city').html('<option value="">Select state first</option>');
            $('#center').html('<option value="">Select city first</option>');
        }
    });

    $('#city').on('change',function(){
        var cityID = $(this).val();
        if(cityID){
            $.ajax({
                type:'POST',
                url:'searchback.php',
                data:'city_id='+stateID,
                success:function(html){
                    $('#center').html(html);
                }
            });
        }else{
            $('#center').html('<option value="">Select city first</option>');
        }
    });
});
</script>
