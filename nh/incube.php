<?php
require "stableconnect.php";
require "beginit.php";
$query="SELECT * FROM state_details";
$result=mysqli_query($conn,$query);
$fix=false;
if(isset($_GET['rty']))
$fix=true;
?>
<div class="topsearch" style="background:url('images/ss.jpg') no-repeat  fixed; margin-top: -30px;">
<br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<h1 class="text-center" style="color:white;">Find Incubation Centers</h1>
<br><div id="sticky-anchor"></div>
<div id="sticky-anchor"></div>

<div  id="sticky" class="container-fluid"  id="searchbox">
<div  class="searchbox" align="center">
<form id="searchform"  class="form-inline" action="listavailableroom.php" method="post">

<select required class="srchinput" name="state" id="state">
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
<select required class="srchinput"  name="city" id="city">
    <option value="">Select City</option>
</select>

<select required  class="srchinput" name="center" id="center">
    <option value="">Select Center</option>
</select>
<select   class="srchinput" name="type" id="type">
    <option value="">Select Type (All)</option>
    <?php
    $query22="SELECT * FROM room_type_details";
    $res22=mysqli_query($conn,$query22);
    while ($row22=mysqli_fetch_assoc($res22)) {
    	?><option value="<?php echo $row22['id'];?>" <?php if($fix==true) if($rty==$row22['id']) echo "Selected"; ?>>  <?php echo $row22['name']; ?></option>';
  <?php  }?>
</select>
<input required   type="text" placeholder="Check In" required  id="bkfrom" name="bkfrom"  class="srchinput" />
<input required   type="text" placeholder="Check Out" required id="bktill" name="bktill"class="srchinput" />
<input required   type="submit" class="searchbtn" value="Search" />
</form>
</div>	</div>
<br><br><br><br><br><br><br>

<br><br><br><br><br><br><br></div>



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

<script type="text/javascript">
$("#hincube").attr('id','activeh');

$("#form1").submit(function(e)
{

var mili1=Date.parse($("#bkfrom").val());
var mili2=Date.parse($("#bktill").val());

var days=((mili2-mili1)/(1000*60*60*24));
if(days<=0)
{
	alert("Invalid Dates");
	e.preventDefault();
}
});
</script>
<script src="jquery-ui-1.12.1\jquery-ui.js"></script>

	 <script>
  $(function() {
     $( "#bkfrom" ).datepicker({ dateFormat: 'yy-mm-dd'});
}); $(function() {
     $( "#bktill" ).datepicker({ dateFormat: 'yy-mm-dd'});
});
</script>
<?php
require "footer.php";?>
</body>
</html>
