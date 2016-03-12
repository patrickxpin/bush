<!DOCTYPE html>
<html>
    
    <head>
        <!-- META SECTION -->
        <title> <?php if (isset($title)) { echo $title; }?> </title> 
        <link rel="shortcut icon" href="<?php echo HTTP_IMAGES_PATH; ?>favicon.png">
        <meta name="description" content="<?php if(isset($description)) { echo $description; } ?>">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- END META SECTION --> 
        <!--JQuery Script-->
        <script type="text/javascript" src="<?php echo HTTP_JS_PATH; ?>plugins/jquery-2.2.0.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="<?php echo HTTP_CSS_PATH; ?>bootstrap.min.css" media="screen" />

        <link rel="stylesheet" type="text/css" href="<?php echo HTTP_CSS_PATH; ?>layout.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo HTTP_CSS_PATH; ?>font-awesome/css/font-awesome.min.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo HTTP_CSS_PATH; ?>animate.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo HTTP_CSS_PATH; ?>essentials.css" media="screen" /> 
        <link rel="stylesheet" type="text/css" href="<?php echo HTTP_CSS_PATH; ?>magnific-popup.css" media="screen" />
        <link href="<?php echo HTTP_CSS_PATH; ?>layout-responsive.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo HTTP_CSS_PATH; ?>color_scheme/orange.css" rel="stylesheet" type="text/css" />
        
        <?php if ( $this->uri->rsegment(1) == 'index'): ?>   
        
            <link rel="stylesheet" type="text/css" href="<?php echo HTTP_CSS_PATH; ?>owl-carousel/owl.carousel.css" media="screen" />
            <link rel="stylesheet" type="text/css" href="<?php echo HTTP_CSS_PATH; ?>owl-carousel/owl.theme.css" media="screen" />
            <link rel="stylesheet" type="text/css" href="<?php echo HTTP_CSS_PATH; ?>owl-carousel/owl.transitions.css" media="screen" />
            <link rel="stylesheet" type="text/css" href="<?php echo HTTP_CSS_PATH; ?>magnific-popup/magnific-popup.css" media="screen" />
            <link rel="stylesheet" type="text/css" href="<?php echo HTTP_CSS_PATH; ?>magnific-popup/magnific-popup.css" media="screen" />
            <link rel="stylesheet" type="text/css" href="<?php echo HTTP_CSS_PATH; ?>animate.css" media="screen" />
            <link rel="stylesheet" type="text/css" href="<?php echo HTTP_CSS_PATH; ?>superslides.css" media="screen" />
            <link rel="stylesheet" type="text/css" href="<?php echo HTTP_CSS_PATH; ?>revolution-slider/settings.css" media="screen" />
        <?php endif; ?>
        <?php if ( $this->uri->rsegment(2) == 'gallery' ): ?>
            <link rel="stylesheet" type="text/css" href="<?php echo HTTP_CSS_PATH; ?>nanogallery/nanogallery.css" media="screen" />
        <?php endif; ?> 
        <?php if ( $this->uri->rsegment(1) == 'multimedia'): ?>
            <link rel="stylesheet" type="text/css" href="<?php echo HTTP_CSS_PATH; ?>video/style.min.css" media="screen" />
        <?php endif; ?> 
        
    </head>

    <body>
        <!-- TOP NAV -->
        <header id="topNav">
            <div class="container">

                <!-- Mobile Menu Button -->
                <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Logo text or image -->
                <a class="logo" href="<?php echo site_url('index'); ?>">
                    <img src="<?php echo HTTP_IMAGES_PATH; ?>logo.png" alt="Bush Contractors Co Ltd" />
                </a>

                <!-- Top Nav -->
                <div class="navbar-collapse nav-main-collapse collapse pull-right">
                    <nav class="nav-main mega-menu">
                        <ul class="nav nav-pills nav-main scroll-menu" id="topMain">
                            <li><a href="<?php echo site_url('index'); ?>">Home </a> </li>
                            <li><a href="<?php echo site_url('index/about'); ?>">About Us </a> </li>
                            <li class="dropdown mega-menu-item mega-menu-two-columns">
                                <a class="dropdown-toggle" href="<?php echo site_url('index/services'); ?>">
                                    Services <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="mega-menu-content">
                                            <div class="row"> 
                                                <div class="col-md-6">
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <span class="mega-menu-sub-title">Building & Construction</span>
                                                            <ul class="sub-menu"> 
                                                                <li><a href="<?php echo site_url('index/services'); ?>"><i class="fa fa-star-o"></i> Design</a></li>
                                                                <li><a href="<?php echo site_url('index/services'); ?>"><i class="fa fa-check-square-o"></i> Building</a></li>
                                                                <li><a href="<?php echo site_url('index/services'); ?>"><i class="fa fa-check-square-o"></i> Wiring & Electrification</a></li> 
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>  
                                                <div class="col-md-6">
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <span class="mega-menu-sub-title">Civil Works</span>
                                                            <ul class="sub-menu"> 
                                                                <li><a href="<?php echo site_url('index/services'); ?>"><i class="fa fa-star-o"></i> Civil Constructions</a></li>
                                                                <li><a href="<?php echo site_url('index/services'); ?>"><i class="fa fa-check-square-o"></i> Supply</a></li>  
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div> 
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li> 
                            <li><a href="<?php echo site_url('index/portfolio'); ?>">Our Portfolio </a> </li>
                            <li><a href="<?php echo site_url('index/contact'); ?>">Contact Us </a> </li>

                            <!-- GLOBAL SEARCH -->
                            <li class="search">
                                <!-- search form -->
                                <form method="get" action="#" class="input-group pull-right">
                                    <input type="text" class="form-control" name="k" id="k" value="" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary notransition"><i class="fa fa-search"></i></button>
                                    </span>
                                </form>
                                <!-- /search form -->
                            </li>
                            <!-- /GLOBAL SEARCH -->

                        </ul>
                    </nav>
                </div>
                <!-- /Top Nav -->

            </div>
        </header>

        <span id="header_shadow"></span>
        <!-- /TOP NAV -->
 