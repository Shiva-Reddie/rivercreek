<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">

    <title>Rivercreek Lofts
    </title>

    <meta name="description" content="">

    <meta name="keywords" content=" ">

    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"> -->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/sib-styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.min.css">

    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="assets/icons/icomoon/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="icons/favicon.svg">
    <link rel="apple-touch-icon-precomposed" href="assets/icons/favicon.svg">
    <link rel="stylesheet" href="https://tunatheme.com/tf/html/quarter-preview/quarter/css/font-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="assets/css/neighborhood.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body class="popup-loader">
    <!-- wrapper -->
    <div id="wrapper">

        <!-- .preload -->
        <div id="loading">
            <div id="loading-center">
                <div class="loader-container">
                    <div class="wrap-loader">
                        <div class="loader">
                        </div>
                        <div class="icon">
                            <img src="assets/images/logo/loading.png" alt="logo_icon">
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.preload -->

        <div class="tf-top-bar d-none">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-bar-inner wow fadeInLeft" data-wow-duration="1.5s">
                            <ul class="top-bar-info">
                                <li>
                                    <lord-icon src="https://cdn.lordicon.com/tftaqjwp.json" trigger="loop" colors="primary:#ffffff" style="width:20px;height:20px">
                                    </lord-icon>
                                    <p><span class="fw-7"> <a href="tel:513-204-1432">513-204-1432</a></span></p>
                                </li>
                                <li style="position: relative;" class="ms-5">
                                    <lord-icon style="position: absolute;left: -40px;" class="mail_lordicon" src="https://cdn.lordicon.com/aycieyht.json" trigger="loop" stroke="bold" colors="primary:#ffffff" style="width:30px;height:40px">
                                    </lord-icon>
                                    <p> <a href="mailto:rivercreeklofts@gmail.com">rivercreeklofts@gmail.com</a></p>
                                </li>
                            </ul>
                            <div class="wrap-social wow fadeInRight" data-wow-duration="1.5s">
                                <p>Follow us</p>
                                <ul class="tf-social  style-2">
                                    <li>
                                        <a href="#">
                                            <i class="icon-fb"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-X"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-linked"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-ins"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- .header -->
        <header id="header-main" class="header header-fixed">
            <div class="header-inner">
                <div class="container-fluid ">
                    <div class="row d-flex align-items-center">
                        <div class="col-2">
                            <div class="header-inner-wrap">
                                <div class="header-logo wow fadeInLeft" data-wow-duration="1.5s">
                                    <a href="index.php" class="site-logo">
                                        <img id="logo_header" alt="" src="assets/img/river-creek-logoo.png">
                                    </a>
                                </div>

                            </div>

                        </div>
                        <div class="col-10">

                            <nav class="main-menu wow fadeInRight" data-wow-duration="1.5s">
                                <ul class="navigation">
                                    <?php
                                    // Get current page filename
                                    $current_page = basename($_SERVER['PHP_SELF']);
                                    ?>

                                    <li class="<?php echo $current_page == 'index.php' ? 'current-menu' : ''; ?>">
                                        <a href="./index.php">Home</a>
                                    </li>

                                    <li class="<?php echo $current_page == 'aminities.php' ? 'current-menu' : ''; ?>">
                                        <a href="./aminities.php">Aminities</a>
                                    </li>

                                    <li class="<?php echo $current_page == 'floor-plans.php' ? 'current-menu' : ''; ?>">
                                        <a href="floor-plans.php">Floor Plans</a>
                                    </li>

                                    <li class="<?php echo $current_page == 'neighborhood.php' ? 'current-menu' : ''; ?>">
                                        <a href="./neighborhood.php">Neighborhood</a>
                                    </li>

                                    <li class="<?php echo $current_page == 'gallery.php' ? 'current-menu' : ''; ?>">
                                        <a href="./gallery.php">Gallery</a>
                                    </li>

                                    <li class="<?php echo $current_page == 'schedule.php' ? 'current-menu' : ''; ?>">
                                        <a href="schedule-a-tour.php">Schedule a tour</a>
                                    </li>

                                    <li class="<?php echo $current_page == 'contact.php' ? 'current-menu' : ''; ?>">
                                        <a href="./contact.php">Contact us</a>
                                    </li>
                                    <div class="number">

                                        <a href="tel:937-546-5687"> <i class="fa-solid fa-phone me-3"></i> 
                                        937-546-5687 
                                    </a>
                                    </div>
                                </ul>



                            </nav>

                            <div class="header-right ">

                                <div class="mobile-button" data-bs-toggle="offcanvas" data-bs-target="#menu-mobile" aria-controls="menu-mobile">
                                    <i class="icon-menu"><i class="fa-solid fa-bars"></i></i>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
    </div>
    </div>
    </header><!-- /.header -->




    <!-- mobile-nav -->
    <div class="offcanvas offcanvas-start mobile-nav-wrap " tabindex="-1" id="menu-mobile" aria-labelledby="menu-mobile">
        <div class="offcanvas-header top-nav-mobile">
            <div class="offcanvas-title">
                <a href="index.html"><img src="images/logo/logo%402x.png" alt=""></a>
            </div>
            <div data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="icon-close"></i>
            </div>
        </div>
        <div class="offcanvas-body inner-mobile-nav">
            <div class="mb-body">
                <ul id="menu-mobile-menu">
                    <li class="menu-item  current-menu-item">
                        <a href="#dropdown-menu-one" class="item-menu-mobile collapsed" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-one">
                            Home
                        </a>

                    </li>
                    <li class="menu-item ">
                        <a href="#dropdown-menu-two" class="item-menu-mobile collapsed" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-two">
                            About
                        </a>

                    </li>
                    <li class="menu-item ">
                        <a href="#dropdown-menu-four" class="item-menu-mobile collapsed" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-four">
                            Properties
                        </a>

                    </li>

                    <li class="menu-item ">
                        <a href="contact.html" class="item-menu-mobile "> Contact</a>
                    </li>
                </ul>
                <div class="support">
                    <a href="#" class="text-need"> Need help?</a>
                    <ul class="mb-info">
                        <li>Call Us Now: <span class="number">+91 888 552 6751</span></li>
                        <li>Support 24/7: <a href="mailto:rivercreeklofts@gmail.com">rivercreeklofts@gmail.com</a></li>
                        <li>
                            <div class="wrap-social">
                                <p>Follow us:</p>
                                <ul class="tf-social  style-2">
                                    <li>
                                        <a href="#">
                                            <i class="icon-fb"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-X"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-linked"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-ins"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- /mobile-nav -->