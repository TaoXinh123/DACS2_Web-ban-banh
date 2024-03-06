<?php 
    define('Access', TRUE);
    include "./AdditionalPHP/startSession.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="makecake/css/animate.css">
    <link rel="stylesheet" href="makecake/css/owl.carousel.min.css">
    <link rel="stylesheet" href="makecake/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="makecake/css/aos.css">

    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="makecake/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="makecake/css/jquery.timepicker.css">


    <link rel="stylesheet" href="makecake/css/flaticon.css">
    <link rel="stylesheet" href="makecake/css/icomoon.css">
    <link rel="stylesheet" href="makecake/style.css">
    <script src="https://kit.fontawesome.com/0e16635bd7.js" crossorigin="anonymous"></script>
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!--========== BOXICONS ==========-->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Boulangerie | Make your cake</title>
</head>


    <body>
        <?php $page = 'makeyourcake';?>
       

        <!--Start Navigation Bar-->
        <?php include './Includes/MobileNavBar.php';?>
        <!--End Navigation Bar-->


        <!--Start Navigation Bar @media 1200px-->
        <?php include './Includes/PcNavBar.php';?>
        <!--End Navigation Bar @media 1200px-->

        
        <!--Start Wave Image-->
        <!-- <div class="wave-image-group">
            <div class="wave-image footer-wave">
                <img src="Assets/images/1.index/NavBar_WavePink.png">
            </div>
        </div> -->
        <!--End Wave Image-->
        
    <!-- navigation ends -->

    <!-- slider  section start -->
    <!-- <section class="home-slider owl-carousel js-fullheight">
        <div class="slider-item js-fullheight" style="background-image: url(makecake/images/bg_1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text js-fullheight justify-content-center align-items-center"
                    data-scrollax-parent="true">

                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Beleniss</span>
                        <h1 class="mb-4">Birthday Cake</h1>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image: url(makecake/images/bg_2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text js-fullheight justify-content-center align-items-center"
                    data-scrollax-parent="true">

                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Beleniss</span>
                        <h1 class="mb-4">Wedding Cake</h1>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image: url(makecake/images/bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text js-fullheight justify-content-center align-items-center"
                    data-scrollax-parent="true">

                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Beleniss</span>
                        <h1 class="mb-4">Beleniss Special Dessert</h1>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image: url(makecake/images/bg_4.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text js-fullheight justify-content-center align-items-center"
                    data-scrollax-parent="true">

                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Beleniss</span>
                        <h1 class="mb-4">Beleniss Special Pastries</h1>
                    </div>

                </div>
            </div>
        </div>
    </section> -->
    <!-- slider  section end  -->

    <!-- featured section starts  -->
    <!-- <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="featured">
                        <div class="row"> -->
                            <!-- <div class="col-md-3">
                                <div class="featured-menus ftco-animate">
                                    <div class="menu-img img" style="background-image: url(makecake/images/b1.jpg);"></div>
                                    <div class="text text-center">
                                        <h3>Desert</h3>
                                        <p><span>Chocolate</span>,
                                            <span>Sprinkles</span>,<span>Strawberry</span>,<span>Waffers</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="featured-menus ftco-animate">
                                    <div class="menu-img img" style="background-image: url(makecake/images/b2.jpg);"></div>
                                    <div class="text text-center">
                                        <h3>Chocolate Cake</h3>
                                        <p><span>Chocolate</span>,
                                            <span>Sprinkles</span>,<span>Strawberry</span>,<span>Waffers</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="featured-menus ftco-animate">
                                    <div class="menu-img img" style="background-image: url(makecake/images/b3.jpg);"></div>
                                    <div class="text text-center">
                                        <h3>Pastry</h3>
                                        <p><span>Chocolate</span>,
                                            <span>Sprinkles</span>,<span>Strawberry</span>,<span>Waffers</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="featured-menus ftco-animate">
                                    <div class="menu-img img" style="background-image: url(makecake/images/b4.jpg);"></div>
                                    <div class="text text-center">
                                        <h3>Donuts</h3>
                                        <p><span>Chocolate</span>,
                                            <span>Sprinkles</span>,<span>Strawberry</span>,<span>Waffers</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- featured section ends  -->


    <!-- about us section starts  -->

    <section class="ftco-wrap-about" id="about">
        <div class="intro">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="intro_content">
                            <div class="intro_subtitle page_subtitle">About Us</div>
                            <div class="intro_title">
                                <h2>Beautiful Story</h2>
                            </div>
                            <div class="intro_text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, voluptatum, earum
                                    corrupti molestiae id, alias quaerat qui expedita voluptatibus sed magnam aperiam
                                    quos! Illum quo nobis repellat possimus alias reiciendis quas pariatur, labore
                                    maxime blanditiis. Nam perferendis veritatis necessitatibus? Animi distinctio at et
                                    assumenda doloremque possimus unde doloribus aliquid nobis.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-md-6 intro_col">
                                <div class="intro_image"><img src="makecake/images/intro_1.jpg" alt="intro"></div>
                            </div>
                            <div class="col-xl-4 col-md-6 intro_col">
                                <div class="intro_image"><img src="makecake/images/intro_2.jpg" alt="intro"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    


    <!-- about us section ends  -->

    <!-- gallery section starts  -->
    
    <!-- gallery section ends  -->

    <!-- menu section starts -->
   
    <!-- menu section ends -->

    <!-- testimonial section starts -->
    <section class="ftco-section testimony-section img" id="testimonial"
        style="background-image: url(makecake/images/bg_1.jpg);">
    </section>

    <!-- testimonial section ends -->

    <!-- staff section --- chef starts -->


    <!-- staff section --- chef ends -->

    <!-- order a cake section starts -->

    
    <!-- order a cake section ends -->

    <!-- blog section starts -->
    <section class="ftco-section bg-light" id="blog">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Blog</span>
                    <h2 class="mb-4">Recent Posts</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-cat-widget">
                        <div class="content relative">
                            <div class="overlay overlay-bg"></div>
                            <a href="#" target="_blank">
                                <div class="thumb">
                                    <img src="makecake/images/cat-widget1.jpg" alt=""
                                        class="content-image img-fluid d-block mx-auto">
                                </div>
                                <div class="content-details">
                                    <h4 class="content-title mx-auto text-uppercase">Social Life</h4>
                                    <span></span>
                                    <p>Enjoy your social life.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-cat-widget">
                        <div class="content relative">
                            <div class="overlay overlay-bg"></div>
                            <a href="#" target="_blank">
                                <div class="thumb">
                                    <img src="makecake/images/cat-widget2.jpg" alt=""
                                        class="content-image img-fluid d-block mx-auto">
                                </div>
                                <div class="content-details">
                                    <h4 class="content-title mx-auto text-uppercase">Politics</h4>
                                    <span></span>
                                    <p>Be a part of politics.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-cat-widget">
                        <div class="content relative">
                            <div class="overlay overlay-bg"></div>
                            <a href="#" target="_blank">
                                <div class="thumb">
                                    <img src="makecake/images/cat-widget3.jpg" alt=""
                                        class="content-image img-fluid d-block mx-auto">
                                </div>
                                <div class="content-details">
                                    <h4 class="content-title mx-auto text-uppercase">Cake</h4>
                                    <span></span>
                                    <p>Let the cake be finished.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section ends -->

    <!-- footer section starts -->
   

        <!--Start Footer-->
        <?php include './Includes/Footer.php';?>
        <!--End Footer-->

        
        <!-- Start Bottom Nav -->
       
        <!-- End Bottom Nav -->
    </body>
</html>