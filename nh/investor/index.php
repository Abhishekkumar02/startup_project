<?php
require "stableconnect.php";
require "beginit.php";
if(!$loggedin)
{
header("location:in_signin.php");
exit();
}
?>
<br><br><br><br><br><br>
<div class="container">
<div class="col-sm-4 hero-feature">
                <div class="thumbnail">
                    <img src="../images/bing.jpg" alt="Startups" style="max-height: 600px; max-width:340px;"></img>
                    <div  id="offi" class="caption">
                        <h3 class="text-center">Highlighted Startups</h4>
                     </div><br>
                    <p class="text-justify" style="font-size:24px;">Get to know the upcoming gems of the industry.View startup portfolio, contact &amp; more.</p>
                    <div class="text-center">
											<a class="btn btn-primary button1" href="viewstartups.php">View StartUps >></a></div><br>
                </div>
            </div>

            <div class="col-sm-4 hero-feature">
                <div class="thumbnail">
                    <img src="../images/gool.jpg" alt="" style="max-height: 400px; max-width:340px;"></img>
                    <div  id="offi" class="caption">
                        <h3 class="text-center">Potential Ideas</h4>
                     </div><br>
                     <p class="text-justify" style="font-size:24px;">Lots of great ideas are seeking funding.Find out the right one for yourself.</p><br><br>
                    <div class="text-center"><a class="btn btn-primary button1" href="viewfundingideas.php">View Ideas >></a></div><br>
                </div>
            </div>

            <div class="col-sm-4 hero-feature">
                <div class="thumbnail">
                    <img src="../images/win.jpg" alt="" style="max-height: 400px; max-width:340px;"></img>
                    <div  id="offi" class="caption">
                        <h3 class="text-center">Investor Portfolio</h4>
                     </div><br>
                     <p class="text-justify" style="font-size:24px;">Build an excellent profile of your business and show off your work to the world.</p><br><br>
                    <div class="text-center"><button class="btn btn-primary button1" onclick="window.location.href='in_portfolio/'">Portfolio >></button></div><br>
                </div>
            </div>
</div>
            <?php require "footer.php"; ?>
