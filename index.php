<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>System Administration</title>
    <meta name="description" content="">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/wmsu.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li class="current"><a class="smoothscroll" href="#home"
                                                    style="background-color: white; text-align: center;padding-left: 10px;     border-radius: 6px;"
                                                    style="font-family: FontAwesome;font-style: normal;">Home</a></li>
                                            <li><a class="smoothscroll" href="#about"
                                                    style="background-color: white; text-align: center;padding-left: 10px;     border-radius: 6px;"
                                                    style="font-family: FontAwesome;font-style: normal;"
                                                    class="fas fa-user">About Me</a></li>
                                            <li><a class="smoothscroll" href="#education"
                                                    style="background-color: white; text-align: center;padding-left: 10px;     border-radius: 6px;"
                                                    style="font-family: FontAwesome;font-style: normal;"
                                                    class="fas fa-book">Education</a></li>

                                            <li><a class="smoothscroll" href="#album"
                                                    style="background-color: white; text-align: center;padding-left: 10px;     border-radius: 6px;"
                                                    style="font-family: FontAwesome;font-style: normal;"
                                                    class="fas fa-camera">Album</a></li>
                                            <li><a class="smoothscroll" href="#contact"
                                                    style="background-color: white; text-align: center;padding-left: 10px;     border-radius: 6px;"
                                                    style="font-family: FontAwesome;font-style: normal;"
                                                    class="fas fa-camera">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li class="current"><a class="smoothscroll" href="#home"
                                                    style="background-color: white; text-align: center;padding-left: 10px;     border-radius: 6px;"
                                                    style="font-family: FontAwesome;font-style: normal;">Home</a></li>
                                            <li><a class="smoothscroll" href="#about"
                                                    style="background-color: white; text-align: center;padding-left: 10px;     border-radius: 6px;"
                                                    style="font-family: FontAwesome;font-style: normal;"
                                                    class="fas fa-user">About Me</a></li>
                                            <li><a class="smoothscroll" href="#education"
                                                    style="background-color: white; text-align: center;padding-left: 10px;     border-radius: 6px;"
                                                    style="font-family: FontAwesome;font-style: normal;"
                                                    class="fas fa-book">Education</a></li>
                                               <li><a class="smoothscroll" href="#OJT" style="font-family: 'Evogria', sans-serif;"
                                                style="font-family: FontAwesome;font-style: normal;"class="fa-solid fa-briefcase">OJT</a></li> 
                                            <li><a class="smoothscroll" href="#album"
                                                    style="background-color: white; text-align: center;padding-left: 10px;     border-radius: 6px;"
                                                    style="font-family: FontAwesome;font-style: normal;"
                                                    class="fas fa-camera">Album</a></li>
                                            <li><a class="smoothscroll" href="#contact"
                                                    style="background-color: white; text-align: center;padding-left: 10px;     border-radius: 6px;"
                                                    style="font-family: FontAwesome;font-style: normal;"
                                                    class="fas fa-camera">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header> -->
    <?php
    $u_qry = $conn->query("SELECT * FROM users where id = 1");
    foreach ($u_qry->fetch_array() as $k => $v) {
        if (!is_numeric($k)) {
            $user[$k] = $v;
        }
    }
    $c_qry = $conn->query("SELECT * FROM contacts");
    while ($row = $c_qry->fetch_assoc()) {
        $contact[$row['meta_field']] = $row['meta_value'];
    }
    // var_dump($contact['facebook']);
    ?>
    <!-- header-end -->
    <section id="home">
        <style>
            @media screen and (max-width: 768px) {

                /* Adjust styles for smaller screens */
                .slider_text {
                    width: 100%;
                    margin-left: 0;
                    text-align: center;
                }

                .my_img {
                    display: none;
                }
            }
        </style>
        <div class="slider_area">
            <div class="single_slider  d-flex align-items-center slider_bg_1">
                <div class="container">
                    <div class="row align-items-center position-relative">
                        <div class="col-lg-9">
                            <div class="slider_text">
                                <h3 style="font-size: 50px;">Hi , I'm
                                    <?php echo isset($user) ? ucwords($user['firstname'] . '  ' . $user['middlename'] . '  ' . $user['lastname']) : ""; ?>
                                    <br>
                                    <span style="font-size: 30px;">
                                        <?php echo stripslashes($_settings->info('course')) ?>
                                    </span>
                                </h3>
                                <a class="boxed-btn3-line" href="asiya.pdf">Download CV</a>
                            </div>
                        </div>
                        <div class="my_img d-none d-lg-block">
                            <img src="<?php echo validate_image($_settings->userdata('avatar')) ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider_area_start 
        <div class="slider_area" style="background: #cbb38f">
            <div class="single_slider  d-flex align-items-center slider_bg_1">
                <div class="container">
                    <div class="row align-items-center position-relative">
                        <div class="col-lg-12">
                            <div class="slider_text">
                                <h3 style="color: white;text-align: left; margin-left: -50px;">
                                    <?php echo isset($user) ? ucwords($user['firstname'] . '  ' . $user['middlename'] . '  ' . $user['lastname']) : ""; ?>
                                </h3>
                                <h2
                                    style="text-align: left;font-size: 2em;margin-left: -50px;color: white;font-family: Verdana, sans-serif;margin-top: -50px;width: 40%;">
                                    <?php echo stripslashes($_settings->info('course')) ?>
                                </h2>
                                <ul class="social-links" style="margin-left: -65px;">
                                    <li><a target="_blank" href="<?php echo $contact['facebook'] ?>"><i
                                                style="font-size: 34px;color:white;" class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a target="_blank" href="mailto:<?php echo $contact['email'] ?>"><i
                                                style="font-size: 34px;color:white;" class="fa fa-google"></i></a></li>
                                    <li><a target="_blank" href="<?php echo $contact['instagram'] ?>"><i
                                                style="font-size: 34px;color:white;" class="fa fa-instagram"></i></a>
                                    </li>
                                         <li><a target ="_blank" href="<?php echo $contact['twitter'] ?>"><i style="font-size: 34px;"class="fa fa-twitter"></i></a></li> 
                                </ul>
                                <a href="asiya.pdf" class="boxed-btn3-line"
                                    style="margin-left: -50px; margin-top: 1rem">Download CV</a>
                            </div>
                        </div>
                        <div class="my_img d-none d-lg-block">
                            <img src="<?php echo validate_image($_settings->userdata('avatar')) ?>" id="cimg" alt=""
                                width="100%" height="auto">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
        <!-- slider_area_end -->
        <section id="about">
            <div class="download_area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="download_text">
                                <h3>I'm
                                    <?php echo isset($user) ? ucwords($user['firstname'] . '  ' . $user['middlename'] . '  ' . $user['lastname']) : ""; ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="download_left">
                                <p style="font-size: 24px;" id="about_me">
                                    <?php include "about.html"; ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1 col-md-6" style="margin-top: 18%">
                            <div class="progress_skills">
                                <div class="col-lg-4" style="display: flex;
                  justify-content: center;">
                                    <div class="media contact-info">
                                        <span class="contact-info__icon"><i class="ti-home"
                                                style="color: black"></i></span>
                                        <div class="media-body">
                                            <h3>
                                                <?php echo $contact['address'] ?>
                                            </h3>
                                            <p style="color: black"><i class="ti-phone" style="color: black"></i>
                                                <?php echo $contact['mobile'] ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- service_area start  -->
        <style>
            .boxed-btn3-line {
                color: #ffffff !important;
                display: inline-block;
                padding: 17px 49px;
                font-family: "Roboto", sans-serif;
                font-size: 16px;
                font-weight: 550;
                border: 0;
                border: 1px solid #ffffff;
                -webkit-border-radius: 0px;
                -moz-border-radius: 0px;
                border-radius: 0px;
                text-transform: capitalize;
                -webkit-transition: 0.5s;
                -moz-transition: 0.5s;
                -o-transition: 0.5s;
                transition: 0.5s;
                cursor: pointer;
            }

            .service_area .single_service {
                border: 1px solid white;
                padding: 45px 30px;
                border-radius: 10px;
                margin-bottom: 30px;
            }

            .gallery_area {
                background: #cbb390;
                padding-top: 120px;
                padding-bottom: 120px;
            }

            .download_area {
                padding: 110px 0 90px 0;
                background: #cbb390;
            }

            .slider_bg_1 {
                background-color: #4f0b16;
            }
        </style>
        <section id="education">
            <div class="service_area" style=" background-color: #4f0b16;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section_title mb-50">
                                <h3 style="color: white;">Educational Attainment</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single_service text-center">
                                <div class="icon">
                                    <h3 style="color: white;">Kindergarten</h3>
                                </div>
                                <h3 style="color: white;">
                                    Kajatian Elementary School
                                </h3>
                                <p style="color: white;">2005-2006</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single_service text-center">
                                <div class="icon">
                                    <h3 style="color: white;">Elementary</h3>
                                </div>
                                <h3 style="color: white;">
                                    Kajatian Elementary School
                                </h3>
                                <p style="color: white;">2006-2012</p>
                            </div>
                        </div>
                        <div style="color: white;" class="col-lg-4 col-md-6">
                            <div class="single_service text-center">
                                <div class="icon">
                                    <h3 style="color: white;">High School</h3>
                                </div>
                                <h3 style="color: white;">
                                    Islamic Institute of the Philippines
                                </h3>
                                <p style="color: white;">2012-2016</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single_service text-center">
                                <div class="icon">
                                    <h3 style="color: white;">Senior High</h3>
                                </div>
                                <h3 style="color: white;">
                                    Islamic Institute of the Philippines
                                </h3>
                                <p style="color: white;">2016-2018</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single_service text-center">
                                <div class="icon">
                                    <h3 style="color: white;">College</h3>
                                </div>
                                <h3 style="color: white;">
                                    Western Mindanao State University
                                </h3>
                                <p style="color: white;">Current</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service_area end  -->

        <!-- gallery_area start  -->
        <section id="album">
            <div class="gallery_area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section_title mb-50">
                                <h3>Photography</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single_gallery">
                                        <div class="thumb">
                                            <img src="img/banner/asiya/1.jpg" alt="">
                                        </div>
                                        <div class="gallery_heading">

                                        </div>
                                    </div>
                                    <div class="single_gallery">
                                        <div class="thumb">
                                            <img src="img/banner/asiya/2.jpg" alt="">
                                        </div>
                                        <div class="gallery_heading">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single_gallery">
                                        <div class="thumb">
                                            <img src="img/banner/asiya/3.jpg" alt="">
                                        </div>
                                        <div class="gallery_heading">

                                        </div>
                                    </div>
                                    <div class="single_gallery">
                                        <div class="thumb">
                                            <img src="img/banner/asiya/4.jpg" alt="">
                                        </div>
                                        <div class="gallery_heading">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery_area end  -->

        <!-- testimonial_area  
        <div class="testimonial_area ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title">
                            <h3>What Clients say</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testmonial_active owl-carousel">
                            <div class="single_carousel">
                                <div class="row">
                                    <div class="col-xl-9 col-md-9">
                                        <div class="single_testmonial">
                                            <p>“There are many variations of passages of Lorem Ipsum available, but the majority
                                                have suffered alteration in some form by injected humour or randomised words
                                                which don’t look even slightly believable. If you are going to use a passage.
                                            </p>
                                            <div class="testmonial_author">
                                                <div class="thumb">
                                                    <img src="img/case/testmonial.png" alt="">
                                                </div>
                                                <div class="author_name">
                                                    <h3>Kalvin Piterson</h3>
                                                    <span>Business Owner</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_carousel">
                                <div class="row">
                                    <div class="col-xl-9 col-md-9">
                                        <div class="single_testmonial">
                                            <p>“There are many variations of passages of Lorem Ipsum available, but the majority
                                                have suffered alteration in some form by injected humour or randomised words
                                                which don’t look even slightly believable. If you are going to use a passage.
                                            </p>
                                            <div class="testmonial_author">
                                                <div class="thumb">
                                                    <img src="img/case/testmonial.png" alt="">
                                                </div>
                                                <div class="author_name">
                                                    <h3>Kalvin Piterson</h3>
                                                    <span>Business Owner</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_carousel">
                                <div class="row">
                                    <div class="col-xl-9 col-md-9">
                                        <div class="single_testmonial">
                                            <p>“There are many variations of passages of Lorem Ipsum available, but the majority
                                                have suffered alteration in some form by injected humour or randomised words
                                                which don’t look even slightly believable. If you are going to use a passage.
                                            </p>
                                            <div class="testmonial_author">
                                                <div class="thumb">
                                                    <img src="img/case/testmonial.png" alt="">
                                                </div>
                                                <div class="author_name">
                                                    <h3>Kalvin Piterson</h3>
                                                    <span>Business Owner</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- /testimonial_area  -->
        <section id="contact">
            <style>
                .social-wrapper {
                    display: flex;
                    justify-content: center;
                }

                .social-links {
                    display: flex;
                    list-style: none;
                    margin: 0;
                    padding: 0;
                }

                .social-links li {
                    margin: 0 10px;
                }

                .social-links a {
                    display: block;
                    padding: 5px;
                    font-size: 18px;
                    color: #333;
                }
            </style>
            <div class="social-wrapper" style="margin-top: 20px; margin-bottom: 20px;">
                <ul class="social-links">
                    <li><a target="_blank" href="<?php echo $contact['facebook'] ?>"><i style="font-size: 34px;"
                                class="fa fa-facebook"></i></a></li>
                    <li><a target="_blank" href="mailto:<?php echo $contact['email'] ?>"><i style="font-size: 34px;"
                                class="fa fa-google"></i></a></li>
                    <li><a target="_blank" href="<?php echo $contact['instagram'] ?>"><i style="font-size: 34px;"
                                class="fa fa-instagram"></i></a></li>
                    <!--      <li><a target ="_blank" href="<?php echo $contact['twitter'] ?>"><i style="font-size: 34px;"class="fa fa-twitter"></i></a></li> -->
                </ul>
            </div>
            <!--  <div class="col-lg-4" style="display: flex;
                  justify-content: center;">
                    <div class="media contact-info">
                      <span class="contact-info__icon"><i class="ti-home"style="color: black"></i></span>
                      <div class="media-body">
                        <h3><?php echo $contact['address'] ?></h3>
                        <p style="color: black"><?php echo $contact['mobile'] ?></p>
                      </div>
                    </div>
          </div> -->
        </section>
        <!-- footer start -->
        <footer class="footer" style="background-color: aqua;">
            <div class="copy-right_text">

                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center" style="color: white">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>document.write(new Date().getFullYear());</script> <i class="fa fa-heart-o"
                                    aria-hidden="true"></i> <a href="" target="_blank"></a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--/ footer end  -->

        <!-- link that opens popup -->
        <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
        <!-- JS here -->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/scrollIt.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/nice-select.min.js"></script>
        <script src="js/jquery.slicknav.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <!-- <script src="js/gijgo.min.js"></script> -->
        <script src="js/slick.min.js"></script>



        <!--contact js-->
        <script src="js/contact.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/mail-script.js"></script>


        <script src="js/main.js"></script>
</body>

</html>