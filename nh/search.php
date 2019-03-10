
<?php
require "stableconnect.php";
require "firstfile.php";

?>

<script src="js/jquery.min.js"></script>
<?php
$query="SELECT * FROM state_details";
$result=mysqli_query($conn,$query);
?>
<select required name="state" id="state">
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
<select required name="city" id="city">
    <option value="">Select state first</option>
</select>

<select required name="center" id="center">
    <option value="">Select city first</option>
</select>
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
                data:'city_id='+cityID,
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
