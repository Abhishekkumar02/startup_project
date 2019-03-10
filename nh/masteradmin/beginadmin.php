<?php
require "checkadmin.php";
if(!$loggedin)
{
	header("location:master_login.php");
exit();
}
require "firstadmin.php";
?>
   <nav class="navbar navbar-custom navbar-fixed-top" id="navigation">
 <div class="container-fluid">
   <div class="navbar-header">
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
       <i class="fa fa-bars fa-2x" id="bars"></i>
     </button>
     <a class="navbar-brand" id="main-lnk" href="index.php">VEDA Master Admin</a>
   </div>
   <div class="navbar-collapse collapse" id="myNavbar">
     <ul class="nav navbar-nav navbar-right">
       <li><a id="hhome" class="hlinks" href="index.php">Dashboard</a></li>
      <?php
	   if($loggedin)
	   {
		   ?>
	   <li><a id="hlinks" class="hlinks"  ><span class="fa fa-user"></span> <?php echo $_SESSION["masteradminemail"];?></a></li>
 <li><a id="hlinks"class="hlinks"  href="adminsignout.php"><span class="fa fa-sign-out"></span> Sign Out</a></li>
<?php
	   }
	   else
	   {
       ?>
   <li><a id="hsignin"class="hlinks" href="adminsignin.php"><span class="fa fa-sign-in"></span> Sign In</a></li>
       <li><a id="hsignup" class="hlinks" href="adminsignup.php"><span class="fa fa-user"></span> Sign Up</a></li>
	   <?php } ?> </ul>
   </div>
 </div>
</nav>
