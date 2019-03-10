<?php
require "beginadmin.php";
require "stableconnect.php";
?>
    <div class="container signbox">
	    <h4 align="center"><?php if(isset($_GET['done'])) {echo "Admin has been added successfully.";} ?></h4>
	    <form class="form-group" action="add_adminback.php" method="post">
		    <h2 align="center">Add admin</h2>
            <input required  required class="form-control" type="text" name="admin_name" placeholder="Name"/><br>

            <select required class="form-control" name="state" id="state">
            <option value="">Select State</option>
    <?php

$query="SELECT * FROM state_details";
$result=mysqli_query($conn,$query);
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
            </select><br>
            <select required class="form-control" name="city" id="city">
            <option value="">Select City</option>
            </select><br>

            <select required class="form-control" name="center" id="center">
                <option value="">Select Center</option>
            </select><br>
			<input required  required class="form-control" type="email" name="admin_email" placeholder="Email"/><br>
			<input required  required class="form-control" type="password" name="password" placeholder="password"/><br>
			<input required  class="form-control" type="text" name="admin_desc" placeholder="Description"/><br>
			<input required  class="inputButton" type="submit" name="submit" value="Submit"/>
        </form>
	</div>
</body>
</html>
</form>

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
