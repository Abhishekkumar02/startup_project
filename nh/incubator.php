<?php
require "stableconnect.php";
require "beginit.php";?>
	<style>  .carousel-inner img {
            width: 100%;
        }

        .lside {
            max-width: 350px;
            max-height: 350px;
            color: white;
            overflow: hidden;
            position: relative;
        }

        .lside img {
            max-height: 200px;
        }

        .data {
            text-align: center;
            background: rgba(165,25,26,0.5);
            width: 100%;
            height: 100%;
            top: 100%;
			color:white;
            position: absolute;
            transition: all 0.4s linear;
        }

        .lside:hover .data {
            top: 0%;
            transition: all 0.4s linear;
        }
		#faci {background: #A5191A ; color: white;text-decoration: underline; }
		#faci:hover {color: white; }
		#bc { color: #A5191A ;}
		</style>



		<br>
    <div class="container-fluid">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>


                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="images\car3.jpg" alt="Image">

                        </div>

                        <div class="item">
                            <img src="images\car2.jpg" alt="Image">
                            <div class="carousel-caption">
                            </div>
                        </div>

                        <div class="item">
                            <img src="images\car4.jpg" alt="Image">
                            <div class="carousel-caption">

                            </div>
                        </div>

                        <div class="item">
                            <img src="images\car1.jpg" alt="Image">
                            <div class="carousel-caption">
                            </div>
                        </div>
                    </div>

                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <br>
                    </div>
                </div>



        <hr>



	   <div class="container text-center">
        <h3 id="bc" >UPCOMING EVENTS</h3>
        <br>
        <div class="row">
            <div class="col-sm-4" style="margin-top:10px;">
                <div class="lside">
                    <div><img class="img" style="width:100%;" src="incubator\s.jpg"></div>
                    <div class="data">
                        <h1>stitching</h1><br>
                        <p>date-#</p><br>
                        <p>EVENT DETAIL</p>

                    </div>
                </div> <a href="#"><h4>Know more</h4></a>
            </div>
            <div class="col-sm-4" style="margin-top:10px;">
                <div class="lside">
                    <div><img class="img " style="width:100%;" src="incubator\jw.jpg"></div>
                    <div class="data">
                        <h3>Jewellery Designing and Making and Gems and Stone </h3><br>
                        <p>date-#</p><br>
                        <p>EVENT DETAIL</p>
                    </div>
                </div> <a href="#"><h4>Know more</h4></a>
            </div>
            <div class="col-sm-4" style="margin-top:10px;">
                <div class="lside">
                    <div><img class="img" style="width:100%;" src="incubator\mb.gif"></div>

                    <div class="data">
                        <h2>REDP on mobile reparing</h2><br>
                        <p>date-#</p><br>
                        <p>EVENT DETAIL</p>
                    </div>
                </div> <a href="#"><h4>Know more</h4></a>
            </div>
        </div>
    </div>


	<hr>



    <div class="container text-center">
        <h3 id="bc">FACILITES</h3>

        <div class="row">
            <div class="col-sm-4" style="margin-top:10px;">
                <ul class="list-group">
                    <li id="faci" class="list-group-item list-group-item-success"><a id="faci" href="basis.html">Help with business basics</a></li>
                    <br>
                    <li id="faci" class="list-group-item list-group-item-info"><a id="faci" href="#">Networking activities</a></li>
                    <br>
                    <li  id="faci"class="list-group-item list-group-item-warning"><a id="faci" href="#">Marketing assistance</a></li>
                    <br>
                    <li id="faci" class="list-group-item list-group-item-danger"><a id="faci" href="#">Help with accounting/financial management</a></li>
                    <br>
                </ul>
            </div>
            <div class="col-sm-4" style="margin-top:10px;">
                <ul class="list-group">
                    <li id="faci" class="list-group-item list-group-item-success"><a id="faci" href="#">Access to bank loans, loan funds and guarantee programs</a></li>
                    <br>
                    <li id="faci" class="list-group-item list-group-item-info"><a id="faci" href="#">Help with presentation skills</a></li>
                    <br>
                    <li  id="faci"class="list-group-item list-group-item-warning"><a id="faci" href="#">Links to higher education resources</li>
                    <br>
                    <li id="faci" class="list-group-item list-group-item-danger"><a id="faci" href="#">Comprehensive business training programs</li>
                    <br>
                </ul>
            </div>
            <div class="col-sm-4" style="margin-top:10px;">
                <ul class="list-group">
                    <li id="faci" class="list-group-item list-group-item-success"><a id="faci" href="#">Advisory boards and mentors</a></li>
                    <br>
                    <li id="faci" class="list-group-item list-group-item-info"><a id="faci" href="#">Technology commercialization assistanc</a></li>
                    <br>
                    <li id="faci" class="list-group-item list-group-item-warning"><a id="faci" href="#">Access to angel investors or venture capital</a></li>
                    <br>
                    <li id="faci" class="list-group-item list-group-item-danger"><a id="faci" href="#">Intellectual property management</a></li>
                    <br>
                </ul>
            </div>
        </div>
    </div>
    <hr>



    <div class="container text-center">
        <h3 id="bc">Guidelines
        </h3>
    </div>
    <div class="container">
        <h4>Definition:</h4>
        <p>An entity shall be considered a “Startup” if it satisfies the following conditions:<br> It should be a Private Limited Company (including a One Person Company) or Registered Partnership Firm or Limited Liability Partnership and should further
            satisfy the following criteria:</p>
        <ul>
            <li>Should not be more than 5 years from the date of its incorporation/ registration, and</li>
            <li>If its turnover for any of the financial years has not exceeded INR 25 crore, and</li>
            <li>It is working towards innovation, development, deployment or commercialization of new products, processes or services driven by technology or intellectual property.</li>
        </ul>
        <h4>Requirments</h4>
        <ul>
            <li> Startup will have to provide a COMPLETE application form along with all relevant documents to the Incubator – failing which applicatns will not be considered by the Incubator</li>
            <li>Startup will agree to personally visit or interact with the Incubator as per the requirements stipulated by Incubator</li>
            <li>Startup will agree to sign the Undertakings that are given to it by the Incubator and the need of such Undertakings will be explained adequately by the Incubator to the Startups</li>
        </ul>
        <hr>
    </div>


	    <div class="container text-center">
        <h3 id="bc">What We Do</h3>
        <br>
        <div class="row">
            <div class="col-sm-4" style="margin-top:10px;">
                <div class="lside">
                    <div><img class="img" style="width:100%;" src="incubator\gg.jpg"></div>
                    <div class="data">
                        <h1>Training Session</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" style="margin-top:10px;">
                <div class="lside">
                    <div><img class="img " style="width:100%;" src="incubator\clus.jpg"></div>
                    <div class="data">
                        <h1>Cluster</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" style="margin-top:10px;">
                <div class="lside">
                    <div><img class="img" style="width:100%;" src="incubator\rech.jpg"></div>
                    <div class="data">
                        <h1>Research</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-6" style="margin-top:10px;">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse1">TRAINING</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">

                            <p>The different kind of training programmes being organized by the Institute inter-alia include Trainers’ Training Programmes (TTPs); Management Development Programmes (MDPs); Orientation Programmes for Head of Departments (HoDs)
                                and Senior Executives; Entrepreneurship Development Programmes (EDPs); Entrepreneurship-cum-Skill Development Programmes (ESDPs) and specially designed sponsored activities for different target groups.</p>


                        </div>
                    </div>
                </div>
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse2">Research/Evaluation Studies</a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <p>Besides the primary/basic research, the Institute has been undertaking review/evaluation of different government schemes/programmes, training need assessment- Skill Gap studies, industrial potential survey etc. The broad objective
                                of these activities is the promotion of the MSME Sector.</p>
                        </div>
                    </div>
                </div>
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse3">Development of Course Curriculum/Syllabi</a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <p> The Institute has developed Model Syllabi for organizing Entrepreneurship Development Programmes. It also assists in Standardization of Common Training programmes.</p>
                        </div>
                    </div>
                </div>

                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse4">Publications and Training Aids</a>
                            </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                            <p> The Institute has been bringing out different Publications on entrepreneurship and allied subjects. The Institute has also assembled an Entrepreneurship Motivation Training brings out a quarterly Newsletter</p>
                        </div>
                    </div>
                </div>

                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse5">Cluster Interventions</a>
                            </h4>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse">
                            <p> The Institute has been actively involved in undertaking developmental programmes (Soft and Hard Interventions) in Clusters in different capacities. The Institute has so far handled a total of 24 Industrial Clusters.</p>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-sm-6" style="margin-top:10px;">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse6">Incubation Centres</a>
                            </h4>
                        </div>
                        <div id="collapse6" class="panel-collapse collapse">
                            <p>The Incubator sponsored by the Ministry of MSME and functioning at the Campus of the Institute, has been instrumental in providing hands-on training and familiarizing the beneficiaries with the real factory/market conditions/
                                situations in the area of stitching, Mobile Repairing, Home Décor products, Beautician and Art Incubation. Following activities are organized for the same:</p>

                        </div>
                    </div>
                </div>

                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse7">Intellectual Property Facilitation Centre</a>
                            </h4>
                        </div>
                        <div id="collapse7" class="panel-collapse collapse">
                            <p>The Intellectual Property Facilitation Centre, operational at the Campus of the Institute under the auspices of the O/o DC (MSME) provides facilitation/assistance under one roof to the units located in its vicinity for identification,
                                registration, protection and management of Intellectual Property Rights, as a business tool.</p>
                        </div>
                    </div>
                </div>

                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse8">Consultancy Services (National and International)</a>
                            </h4>
                        </div>
                        <div id="collapse8" class="panel-collapse collapse">
                            <p> Offering consultancy services in the area of entrepreneurship especially for MSMEs. It Offers advice and consultancy to other Institutions engaged in entrepreneurial training either in the Government or in the Private Sector.
                                Advising Governments (both Central & State) and foreign Governments as well in the area of entrepreneurship and MSMEs
                            </p>
                        </div>
                    </div>
                </div>

                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse9">E-learning Modules on Different Subjects</a>
                            </h4>
                        </div>
                        <div id="collapse9" class="panel-collapse collapse">
                            <p>Eight e-learning Modules have been created on Cyber Security, Communication Skills, Java Personality Development, Mathematical Modeling, Web Designing & Cloud Computing.</p>
                        </div>
                    </div>
                </div>

                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse10">The E-Module: EDP</a>
                            </h4>
                        </div>
                        <div id="collapse10" class="panel-collapse collapse">
                            <p>The Institute has developed an E-learning Module (Hindi and English) for Entrepreneurship Development Programmes. The course material of the Module has been incorporated in a C.D. which is moderately priced. The Module has
                                been launched in different States.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>


<script type="text/javascript">
$("#hincubator").attr('id','activeh');
</script><?php
require "footer.php"?>

</body>

</html>
