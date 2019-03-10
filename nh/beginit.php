<?php
require "checkuser.php";
require "firstfile.php";
if($loggedin)
{
$email=$_SESSION["useremailgov"];
$s12="SELECT * FROM user_details WHERE user_id='$email'";
$row=mysqli_fetch_assoc(mysqli_query($conn,$s12));
$name=$row["user_name"];
}
?>
<div class="container-fluid" id="masthead">
<div class="col-sm-4"><a href="https://www.skilldevelopment.gov.in" ><img class="img-responsive" src="images/mymin.png"></img></a></div>
<div id="sun"><img class="img-responsive" src="images/sunrise.png"></img></div>
</div>
 <nav class="navbar navbar-custom" id="navigation">
 <div class="container-fluid">
   <div class="navbar-header">
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
       <i class="fa fa-bars " ></i>
     </button>
     <a class="navbar-brand" href="index.php" style="color:white; font-size:20px;">VEDA</a>
   </div>
   <div class="navbar-collapse collapse" id="myNavbar">
     <ul class="nav navbar-nav navbar-right">
       <li><a id="hhome" class="hlinks" href="index.php">Home</a></li>
       <li><a id="hstartups" class="hlinks" href="startup.php">Startups</a></li>
       <li><a id="hincube" class="dropdown-toggle hlinks drop" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Incubation <span class="caret"></span></a>
         <ul class="dropdown-menu">
                     <li><a href="incubation_process.php">Incubation Process</a></li>
                     <li><a href="incube.php">Find Incubators</a></li>
                   </ul>
       </li>
       <li><a id="hincube" class="hlinks"  href="investor/">Investors</a></li>
       <li><a id="htrain" class="hlinks" href="training.php">Trainings</a></li>
       <li><a id="htrain" class="hlinks" href="listnews.php">News</a></li>

 <?php
	   if($loggedin)
	   {
      $co=countnoti($email);
       ?>
          <li><a id="hcart"  class="hlinks" href="mycart.php">My Cart</a></li>
        <li><a id="hrooms"  class="hlinks" href="listbookedroom.php">Booked Rooms</a></li>
      <li><a id="hlinks"  class="hlinks dropdown-toggle " title="<?php echo $email; ?>" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
        <span <?php if($co>0) echo 'class="imgnoti"';?> ><?php echo $name;?> </span></a>
       <ul class="dropdown-menu">
         <li><a href="portfolio/show_portfolio.php?id=shivamsaxena2206@gmail.com">Show Portfolio</a></li>
         <li><a href="listnotifications.php"> <?php if($co>0) echo '<span class="ncir">'.$co.'</span>'?> Notifications </a></li>
       <li><a id="hlinks" href="signout.php"><span class="fa fa-sign-out"></span> Sign Out</a></li></ul></li>
<?php }
	   else
	   { ?>
   <li><a id="hsignin"  class="hlinks" href="signin.php"><span class="fa fa-sign-in"></span> Sign In</a></li>
       <li><a id="hsignup"  class="hlinks" href="signup.php"><span class="fa fa-user"></span> Sign Up</a></li>
	   <?php } ?> </ul>
   </div>
 </div>
</nav>
