<?php
require "in_checkuser.php";
require "firstfile.php";
if($loggedin)
{
$company_email=$_SESSION["in_useremailgov"];
$s12="SELECT * FROM investor_details WHERE company_email='$company_email'";
$row=mysqli_fetch_assoc(mysqli_query($conn,$s12));
$name=$row["company_name"];
}
?>

   <nav class="navbar navbar-custom" id="navigation">
 <div class="container-fluid">
   <div class="navbar-header">
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
       <i class="fa fa-bars " ></i>
     </button>
     <a class="navbar-brand" id="main-lnk" href="index.php">VEDA INVESTOR</a>
   </div>
   <div class="navbar-collapse collapse" id="myNavbar">
     <ul class="nav navbar-nav navbar-right">

 <?php
	   if($loggedin)
	   {
		   ?>
       <li><a id="hhome" class="hlinks" href="index.php">Home</a></li>
       <li><a id="hlinks"  class="hlinks" href="in_portfolio/show_portfolio.php?id=<?php echo $company_email;?>"  title="My Portfolio"><span class="fa fa-user"></span> <?php echo $name;?></a></li>
     <li><a id="hlinks" class="hlinks" href="in_signout.php"><span class="fa fa-sign-out"></span> Sign Out</a></li>

		   <?php
	   }
	   else
	   {
       ?>
   <li><a id="hsignin" class="hlinks" href="in_signin.php"><span class="fa fa-sign-in"></span> Sign In</a></li>
       <li><a id="hsignup" class="hlinks" href="in_signup.php"><span class="fa fa-user"></span> Sign Up</a></li>
	   <?php } ?> </ul>
   </div>
 </div>
</nav>
