<?php
require "firstadmin.php";
require "stableconnect.php";
?>
    <div class="container signbox">
	    <form class="form-group" action="mastersignupback.php" method="post">
		    <h2 align="center">Master Signup</h2><br>
            <input required  required class="form-control" type="email" name="email" placeholder="Email"/><br>
			<input required  maxlength="16" required class="form-control" type="password" name="password" placeholder="password"/><br>
			<input required  maxlength="16" required class="form-control" type="password" name="password2" id="pass" placeholder="Re-enter Password"/><br>
			<input required  class="inputButton" type="submit" name="submit" value="Submit"/>
        </form>	
		<h3 align="center" style="color:red"><?php if(isset($_GET['passerr'])) {echo "Enter same password!";}?></h3>
	</div>
</body>
</html>