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
<h4 class="text-center"><i class="fa fa-plus"></i> Add Rooms</h4>
<div class="contaner" id="form2">
  <?php if(isset($_GET["success"])) echo "<h4 class=\"text-center\" style=\"color:green\"> Room added successfully.</h4>";?>
    <?php if(isset($_GET["failed"])) echo "<h4 class=\"text-center\" style=\"color:red\"> Something went wrong. Try again after sometime</h4>";?>

<form class="form" action="addroomback.php" method="POST">


  <select required class="form-control" id="select" name="type">
            <option value="">Room Type</option>
            <?php
            $query22="SELECT * FROM room_type_details";
            $res22=mysqli_query($conn,$query22);
            while ($row22=mysqli_fetch_assoc($res22)) {
              echo '<option value="'.$row22['id'].'">'.$row22['name'].'</option>';
            }?>  </select><br>
    	  <input required  required type="text" class="form-control"  placeholder="Room Number" name="room" ><br>
      <input required  required type="text" class="form-control"  placeholder="Price" name="price" ><br>
      <input required  required type="text" class="form-control"  placeholder="Room Description" name="desc" ><br>
     <input required  required type="number" class="form-control"  placeholder="Occupancy" name="occupancy" ><br>

	<div align="center"><input required  required type="submit" class="inputButton"name="submit" value="Submit"></div>
</form>
		</div>
	</form>
	</div>

</body></html>
