<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
    <!-- Head -->

    <head>
        <title>C.I Algus</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">

        <link href="<?php echo url_for('stylesheets/css/JiSlider.css'); ?>" rel="stylesheet">
        <!-- banner js-->

        <link rel="stylesheet" href="<?php echo url_for('stylesheets/css/flexslider.css'); ?>" type="text/css" media="screen" />
        <!-- Testimonials js-->

        <link href="<?php echo url_for('stylesheets/css/simplelightbox.min.css'); ?>" rel='stylesheet' type='text/css'>
        <!-- lightbox css -->
        <!-- gallery js -->

        <!-- default css files -->
        <link rel="stylesheet" href="<?php echo url_for('stylesheets/css/bootstrap.css'); ?>" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo url_for('stylesheets/css/style.css'); ?>" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo url_for('stylesheets/css/font-awesome.min.css'); ?>" />
        <?php include(SHARED_PATH . "/staff_header_css.php"); ?>

        <!-- default css files -->

        <!--web font-->
        <link href="//fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,devanagari,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
        <!--//web font-->
        <script src='https://www.google.com/recaptcha/api.js' async defer></script>

    </head>

    <!-- Body -->

    <body>

        <!-- banner -->
        <div class="main_section_agile" id="home">
            <a class="navbar-brand logoBrand" href="<?php echo url_for("/index.php"); ?>"><span class="lightGreen">CI</span><span class="bgGreen">Algues</span><span class="yearLogo"><sub>2018</sub></span></a>
            <div class="container-fluide">
                <div class="agileits_w3layouts_banner_nav">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header navbar-left">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                            <nav class="menu--iris">
                                <ul class="nav navbar-nav menu__list ">
                                    <li class="dropdown "> 
                                        <a class="dropdown-toggle " data-toggle="dropdown" href="#"><b>Autre Gestions </b><span class="caret"></span></a>
                                        <ul id="lang" class="dropdown-menu">
                                            <li class="dropdown-link"><a href="<?php echo url_for("/staff/commite/index.php"); ?>" ><b>Comitees</b></a></li>
                                            <li class="dropdown-link"><a href="<?php echo url_for("/staff/calendar/index.php"); ?>"><b>Calendar</b></a></li>
                                            <li class="dropdown-link"><a href="<?php echo url_for("/staff/theme/index.php"); ?>"><b>Thème</b></a></li>
                                            <li class="dropdown-link"><a href="<?php echo url_for("/staff/accueil/index.php"); ?>"><b>Accueil & presentation</b></a></li>
                                            <li class="dropdown-link"><a href="<?php echo url_for("/staff/frais/index.php"); ?>"><b>frais</b></a></li>
                                            <li class="dropdown-link"><a href="<?php echo url_for("/staff/programme/index.php"); ?>"><b>Programme</b></a></li>
                                        </ul>
                                    </li>
                                    <li class=" menu__item"><a href="<?php echo url_for("/staff/inscription/index.php"); ?>" class=" menu__link"><b>Demande d'Inscription</b></a></li>
                                    <!--<li class=" menu__item"><a href="<?php echo url_for("/staff/commite/index.php"); ?>" class=" menu__link"><b>Gestion des Comitees</b></a></li>-->
                                    <li class=" menu__item"><a href="<?php echo url_for("/staff/articles/index.php"); ?>" class=" menu__link"><b>Gestion des Article</b></a></li>
                                    <li class=" menu__item"><a href="<?php echo url_for("/staff/users/index.php"); ?>" class=" menu__link"><b>Gestion des User</b></a></li>
                                    <li class=" menu__item"><a href="<?php echo url_for("/staff/contactme/index.php"); ?>" class=" menu__link"><b>Boite Reception</b></a></li>
                                    <li class=" menu__item"><a href="<?php echo url_for("/staff/connection/logout.php"); ?>" class=" menu__link"><b>se Deconnecter</b></a></li>
                                    <!--<li class=" menu__item"><a href="<?php // echo url_for("/staff/calendar/index.php"); ?>" class=" menu__link"><b>Gestion des Calendar</b></a></li>-->

                                    

                                </ul>
<!--                                <div class="w3_agileits_social">
                                    <div class="social-icon">
                                        <a href="<?php // echo url_for("/staff/connection/logout.php"); ?>" class=" "><i class="fa fa-sign-out"></i> déconnecter</a>
                                    </div>
                                </div>-->
                            </nav>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

<!--<input type="color" value="#aebe27" >-->