<?php
require "firstadmin.php";
require "stableconnect.php";
?>
    <div class="container signbox">
	    <form class="form-group" action="master_loginback.php" method="post">
		    <h2 align="center">Master Login</h2>
			<h3 align="center" style="color:red"><?php if(isset($_GET['wrongattempt'])) {echo "Invalid email or password.";} ?></h3><br>
            <input required  required class="form-control" type="email" name="email" placeholder="Email"/><br>
			<input required  required class="form-control" type="password" name="password" placeholder="password"/><br>
			<input required  class="inputButton" type="submit" name="submit" value="Submit"/>
        </form>		
	</div>
</body>
</html>