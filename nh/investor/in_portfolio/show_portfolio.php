<?php
require "../../stableconnect.php";
if($_SERVER["REQUEST_METHOD"] == "GET"){
    $id = $_GET['id'];
    $sql = "SELECT * from in_portfolio_details WHERE portfolio_id = '$id'";
    $product = "SELECT * from in_portfolio_product_details WHERE portfolio_id = '$id'";
    $result = mysqli_query($conn,$sql);
    $product_result = mysqli_query($conn,$product);

    $data = mysqli_fetch_assoc($result);
    $data2 = mysqli_fetch_all($product_result,MYSQLI_ASSOC);
    if (!(mysqli_num_rows($result) > 0)){
    }

    $phrase = $data['phrase'];
    $name = $data['name'];
    $intro = $data['intro'];
    $about = $data['about'];
    $address = $data['address'];
    $phone = $data['phone'];
    $photo = $data['photo_url'];


    echo ('<!doctype html>
    <html class="no-js" lang="">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <title>Portfolio</title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="apple-touch-icon" href="apple-touch-icon.png">


            <link rel="stylesheet" href="assets/css/navmenu.css">
            <link rel="stylesheet" href="assets/fonts/stylesheet.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/jquery.fancybox.css">
            <link rel="stylesheet" href="assets/css/font-awesome.min.css">
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/plugins.css" />
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/responsive.css" />

            <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        </head>
        <body data-spy="scroll" data-target=".navbar-collapse">
            <section id="home" class="home">
                <div class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="main_home_slider text-center">
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1>'.$name .'</h1>
<br>
<img src="'.$photo.'" class="img-circle" style="max-width:25%;" alt="">
                                            <div class="whiseparator"></div>
                                            <p class="subtitle">'.$phrase.'</p>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <a class="mouse-scroll" href="#introduction">
                            <span class="mouse">
                                <span class="mouse-movement"></span>
                            </span>
                            <span class="mouse-message fadeIn">scroll</span>
                        </a>

                    </div>
                </div>
            </section>


            <section id="introduction" class="introduction">
                <div class="container">
                    <div class="row">
                        <div class="main_introduction sections">
                            <div class="head_title text-center wow fadeInUp" data-wow-duration="700ms">
                                <h2>Introduction</h2>
                                <div class="separator"></div>
                                <p>'.$intro.'</p>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="main_introduction sections">
                        <div class="head_title text-center wow fadeInUp" data-wow-duration="700ms">
                            <h2>About</h2>
                            <div class="separator"></div>
                            <p>'.$about.'</p>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio" class="portfolio"><div class="container">
            <div class="row">
                <div class="main_mix_content text-center sections">
                    <div class="head_title text-center wow fadeInUp" data-wow-duration="700ms">
                        <h2>OUR PORTFOLIO</h2>
                        <div class="separator"></div>
                    </div>

                    <div id="mixcontent" class="mixcontent">');

    $c = 0;
    $coun = count($data2);
    while($c<$coun){
    echo('<div class="col-sm-4 mix cat1 cat2 ">
    <div class="single_mixi_portfolio">
    <img src="assets/images/pf6.jpg" alt="" />
    <div class="mixi_portfolio_overlay">
    <div class="overflow_hover_text">
    <h2>'.$data2[$c]['product_name'].'</h2>
    <p>'.$data2[$c]['about'].'</p>
    <div class="separator2"></div>
    </div>
    </div>
    </div>
    </div>');
    $c=$c+1;

    }

echo('<!-- START SCROLL TO TOP  -->
<div class="gap"></div>
</div>
</div>
</div>
</div>
</section>
<section id="about" class="about">
<div class="container">
    <div class="row">
        <div class="main_introduction sections">
            <div class="head_title text-center wow fadeInUp" data-wow-duration="700ms">
                <h2>Contact Details</h2>
                <div class="separator"></div>
                <p>Email : '.$id.'</p>
                <p>Address : '.$address.'</p>
                <p>Phone : '.$phone.'</p>
            </div>

        </div>
    </div>
</div>
</section>
<div class="scrollup">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
</div>

<script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>

<script src="assets/js/jquery.easypiechart.min.js"></script>
<script src="assets/js/jquery.mixitup.min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script src="assets/js/jquery.magnific-popup.js"></script>
<script src="assets/js/jquery.fancybox.pack.js"></script>




<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
');

}
else{
    header("Location: ../index.php");
}
?>
