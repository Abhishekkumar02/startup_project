<?php
require "stableconnect.php";
require "beginadmin.php";
if(!$loggedin)
{
    header("location:adminsignin.php");
exit();
}
?>
<br><br><br><br>
<h3  class="text-center">Dashboard</h3>
<div class="row" style="background:white;padding:20px 20px;">
                <div class="col-lg-3 col-md-6">
                    <div class="panel " style="background:purple;color:white">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-university fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>View Rooms</div>
                                </div>
                            </div>
                        </div>
                        <a href="viewrooms.php" class="dashlink">
                            <div class="panel-footer ">
                                <span class="pull-left">Show Me</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel "  style="background:darkorange;color:white">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-plus fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Add Rooms</div>
                                </div>
                            </div>
                        </div>
                       <a href="addroom.php" class="dashlink">
                             <div class="panel-footer">
                               <span class="pull-left">Show Me</span>
                                 <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel"  style="background:dodgerblue;color:white">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Search Person</div>
                                </div>
                            </div>
                        </div>
                      <a href="searchpeople.php" class="dashlink">
                              <div class="panel-footer">
                                 <span class="pull-left">Show Me</span>
                               <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


				<div class="col-lg-3 col-md-6">
                    <div class="panel"  style="background:royalblue;color:white">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-search fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Search Room</div>
                                </div>
                            </div>
                        </div>
                      <a href="searchroom.php" class="dashlink">
                              <div class="panel-footer">
                                 <span class="pull-left">Show Me</span>
                               <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


            </div>
