<?php
require "beginadmin.php";
require "stableconnect.php";
?>
    <div class="container signbox">
	    <form class="form-group" action="add_resourcesback.php" method="post">
		    <h2 align="center">Add resources</h2>
            <input required  required class="form-control" type="text" name="resource_name" placeholder="Resource name"/><br>
			<input required  required class="form-control" type="number" name="quantity" placeholder="Quantity"/><br>
			<input required  required class="form-control" type="number" name="price" placeholder="Price per unit"/><br>
			<input required  class="form-control btn btn-info" type="submit" name="submit" value="Submit"/>
        </form>		
	</div>
<?php if(isset($_GET['done'])) {
	?><script>alert('Resource added successfully.');</script><?php
}
?>