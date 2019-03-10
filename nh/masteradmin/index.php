<?php
require "stableconnect.php";
require "beginadmin.php";
if(!$loggedin)
{
	header("location:master_login.php");
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
                                    <i class="fa fa-plus fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Add State</div>
                                </div>
                            </div>
                        </div>
                        <a href="state.php" class="dashlink">
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
                                    <div>Add City</div>
                                </div>
                            </div>
                        </div>
                       <a href="city.php" class="dashlink">
                             <div class="panel-footer">
                               <span class="pull-left">Show Me</span>
                                 <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel "  style="background:green;color:white">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-plus fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Add Center</div>
                                </div>
                            </div>
                        </div>
                       <a href="center.php" class="dashlink">
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
                                    <i class="fa fa-plus fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Add Admin</div>
                                </div>
                            </div>
                        </div>
                      <a href="adminsignup.php" class="dashlink">
                              <div class="panel-footer">
                                 <span class="pull-left">Show Me</span>
                               <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
								<div class="col-lg-3 col-md-6">
		 							 <div class="panel"  style="background:blue;color:white">
		 									 <div class="panel-heading">
		 											 <div class="row">
		 													 <div class="col-xs-3">
		 															 <i class="fa fa-plus fa-5x"></i>
		 													 </div>
		 													 <div class="col-xs-9 text-right">
		 															 <div>Add Training Course</div>
		 													 </div>
		 											 </div>
		 									 </div>
		 								 <a href="add_course.php" class="dashlink">
		 												 <div class="panel-footer">
		 														<span class="pull-left">Show Me</span>
		 													<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
		 													 <div class="clearfix"></div>
		 											 </div>
		 									 </a>
		 							 </div>
		 					 </div>
							 <div class="col-lg-3 col-md-6">
							 	 <div class="panel"  style="background:red;color:white">
							 			 <div class="panel-heading">
							 					 <div class="row">
							 							 <div class="col-xs-3">
							 									 <i class="fa fa-plus fa-5x"></i>
							 							 </div>
							 							 <div class="col-xs-9 text-right">
							 									 <div>Add startup type </div>
							 							 </div>
							 					 </div>
							 			 </div>
							 		 <a href="add_startup_type.php" class="dashlink">
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
							 									 <i class="fa fa-desktop fa-5x"></i>
							 							 </div>
							 							 <div class="col-xs-9 text-right">
							 									 <div>View certification requests  </div>
							 							 </div>
							 					 </div>
							 			 </div>
							 		 <a href="viewcertificationrequests.php" class="dashlink">
							 						 <div class="panel-footer">
							 								<span class="pull-left">Show Me</span>
							 							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							 							 <div class="clearfix"></div>
							 					 </div>
							 			 </a>
							 	 </div>
							 </div>
							 <div class="col-lg-3 col-md-6">
							 	 <div class="panel"  style="background:green;color:white">
							 			 <div class="panel-heading">
							 					 <div class="row">
							 							 <div class="col-xs-3">
							 									 <i class="fa fa-desktop fa-5x"></i>
							 							 </div>
							 							 <div class="col-xs-9 text-right">
							 									 <div>View training requests </div>
							 							 </div>
							 					 </div>
							 			 </div>
							 		 <a href="viewtrainingrequests.php" class="dashlink">
							 						 <div class="panel-footer">
							 								<span class="pull-left">Show Me</span>
							 							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							 							 <div class="clearfix"></div>
							 					 </div>
							 			 </a>
							 	 </div>
							 </div>
							 <div class="col-lg-3 col-md-6">
							 	 <div class="panel"  style="background:#0a4499;color:white">
							 			 <div class="panel-heading">
							 					 <div class="row">
							 							 <div class="col-xs-3">
							 									 <i class="fa fa-desktop fa-5x"></i>
							 							 </div>
							 							 <div class="col-xs-9 text-right">
							 									 <div>View Feedbacks </div>
							 							 </div>
							 					 </div>
							 			 </div>
							 		 <a href="viewfeedbacks.php" class="dashlink">
							 						 <div class="panel-footer">
							 								<span class="pull-left">Show Me</span>
							 							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							 							 <div class="clearfix"></div>
							 					 </div>
							 			 </a>
							 	 </div>
							 </div>
							 <div class="col-lg-3 col-md-6">
								<div class="panel"  style="background:#0000ab;color:white">
										<div class="panel-heading">
												<div class="row">
														<div class="col-xs-3">
																<i class="fa fa-desktop fa-5x"></i>
														</div>
														<div class="col-xs-9 text-right">
																<div>View Queries </div>
														</div>
												</div>
										</div>
									<a href="viewqueries.php" class="dashlink">
													<div class="panel-footer">
														 <span class="pull-left">Show Me</span>
													 <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
														<div class="clearfix"></div>
												</div>
										</a>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="panel"  style="background:green;color:white">
							 			<div class="panel-heading">
							 					<div class="row">
							 							<div class="col-xs-3">
							 									<i class="fa fa-plus fa-5x"></i>
							 							</div>
							 							<div class="col-xs-9 text-right">
							 									<div>Add Room Type </div>
							 							</div>
							 					</div>
							 			</div>
							 		<a href="add_room_type.php" class="dashlink">
							 						<div class="panel-footer">
							 							 <span class="pull-left">Show Me</span>
							 						 <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							 							<div class="clearfix"></div>
							 					</div>
							 			</a>
							 	</div>
							 </div>	<div class="col-lg-3 col-md-6">
	 								<div class="panel"  style="background:dodgerblue;color:white">
	 							 			<div class="panel-heading">
	 							 					<div class="row">
	 							 							<div class="col-xs-3">
	 							 									<i class="fa fa-plus fa-5x"></i>
	 							 							</div>
	 							 							<div class="col-xs-9 text-right">
	 							 									<div>Add Mentor </div>
	 							 							</div>
	 							 					</div>
	 							 			</div>
	 							 		<a href="add_mentor.php" class="dashlink">
	 							 						<div class="panel-footer">
	 							 							 <span class="pull-left">Show Me</span>
	 							 						 <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	 							 							<div class="clearfix"></div>
	 							 					</div>
	 							 			</a>
	 							 	</div>

	 							 </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel " style="background:purple;color:white">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-plus fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Add Tags</div>
                                </div>
                            </div>
                        </div>
                        <a href="tags.php" class="dashlink">
                            <div class="panel-footer ">
                                <span class="pull-left">Show Me</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


								<div class="col-lg-3 col-md-6">
                    <div class="panel " style="background:red;color:white">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-desktop fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>View Mentors</div>
                                </div>
                            </div>
                        </div>
                        <a href="viewmentors.php" class="dashlink">
                            <div class="panel-footer ">
                                <span class="pull-left">Show Me</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

								<div class="col-lg-3 col-md-6">
										<div class="panel " style="background:limegreen;color:white">
												<div class="panel-heading">
														<div class="row">
																<div class="col-xs-3">
																		<i class="fa fa-plus fa-5x"></i>
																</div>
																<div class="col-xs-9 text-right">
																		<div>Add News</div>
																</div>
														</div>
												</div>
												<a href="add_news.php" class="dashlink">
														<div class="panel-footer ">
																<span class="pull-left">Show Me</span>
																<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
																<div class="clearfix"></div>
														</div>
												</a>
										</div>
								</div><div class="col-lg-3 col-md-6">
										<div class="panel " style="background:royalblue;color:white">
												<div class="panel-heading">
														<div class="row">
																<div class="col-xs-3">
																		<i class="fa fa-desktop fa-5x"></i>
																</div>
																<div class="col-xs-9 text-right">
																		<div>View Grievances</div>
																</div>
														</div>
												</div>
												<a href="viewgrievances.php" class="dashlink">
														<div class="panel-footer ">
																<span class="pull-left">Show Me</span>
																<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
																<div class="clearfix"></div>
														</div>
												</a>
										</div>
								</div>



            </div>
