<?php
require "stableconnect.php";
require "beginit.php";
?>
<div style="background: url('images/startupimg.jpg') fixed no-repeat; margin-top:-20px;">
<br><br><br><br><br><br>
<div class="container">
<div class="col-sm-3 hero-feature">
                <div class="thumbnail">
                    <img src="images/bing.jpg" class="img-responsive" style="max-height: 600px; max-width:240px;"></img>
                    <div  id="offi" class="caption">
                        <h3 class="text-center">Submit Your Startup</h4>
                     </div><br>
                    <p class="text-justify" style="font-size:16px;">The program is designed for aspiring enterpreneurs who are willing to convert their idea into the next big startup.</p>
                    <div class="text-center"><button class="btn btn-primary button1" onclick="window.location.href='submit-startup.php'">Submit StartUp >></button></div><br>
                </div>
            </div>

            <div class="col-sm-3 hero-feature">
                <div class="thumbnail">
                    <img src="images/gool.jpg" alt="" style="max-height: 400px; max-width:240px;"></img>
                    <div  id="offi" class="caption">
                        <h3 class="text-center">Potential Investors</h4>
                     </div><br>
                     <p class="text-justify" style="font-size:16px;">Showcase your startups to potentail investors and get funded for your dream project.</p><br>
                    <div class="text-center"><button class="btn btn-primary button1" onclick="window.location.href='getfunding.php'">Apply for Funding >></button></div><br>
                </div>
            </div>

            <div class="col-sm-3 hero-feature">
                <div class="thumbnail">
                    <img src="images/win.jpg" alt="" style="max-height: 400px; max-width:240px;"></img>
                    <div  id="offi" class="caption">
                        <h3 class="text-center">Startup Portfolio</h4>
                     </div><br>
                     <p class="text-justify" style="font-size:16px;">Build an excellent profile of your business and show off your work to the world.</p><br>
                    <div class="text-center"><button class="btn btn-primary button1" onclick="window.location.href='portfolio/'">Portfolio >></button></div><br>
                </div>
            </div>

            <div class="col-sm-3 hero-feature">
                <div class="thumbnail">
                    <img src="images/win.jpg" alt="" style="max-height: 400px; max-width:240px;"></img>
                    <div  id="offi" class="caption">
                        <h3 class="text-center">Feedback</h4>
                     </div><br>
                     <p class="text-justify" style="font-size:16px;">Your feedback will help us to improve our services. Thanks for using our service.</p><br>
                    <div class="text-center"><button class="btn btn-primary button1" onclick="window.location.href='ep_feedback.php'">Give Feedback >></button></div><br>
                </div>
            </div>
</div>
</div>
<script type="text/javascript">
$("#hstartups").attr('id','activeh');
</script>
            <?php require "footer.php"; ?>
