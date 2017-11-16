<?php
$langue = (isset($_GET['lang'])) ? $_GET['lang'] : 'Fr';
?>
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

        <link href="<?php echo url_for('stylesheets/css/tableexport.min.css'); ?>" rel="stylesheet">
        <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    </head>

    <!-- Body -->

    <body>

        <!-- banner -->
        <div class="main_section_agile" id="home">
            <a class="navbar-brand logoBrand" href="<?php echo url_for("/index.php"); ?>"><span class="lightGreen">CI</span><span class="bgGreen">Algues</span><span class="yearLogo"><sub>2018</sub></span></a>
            <!--<a  href="<?php // echo url_for("/index.php");             ?>"><img src="<?php // echo url_for("/stylesheets/img/logoCIAlgues.png");             ?>" class="navbar-brand logoBrand" alt="CIAlgues" ></a>-->
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
                                    <li ><a href="<?php echo url_for("/index.php?lang=" . $langue); ?>" class="bordre" ><i class="fa fa-home"></i> <?= $accueil_title; ?></a></li>
                                    <li ><a href="<?php echo url_for("/staff/pages/Presentation.php?lang=" . $langue); ?>" class=" bordre"><i class="fa fa-user"></i> <?= $presentation_menu_title; ?></a></li>

                                    <li ><a href="<?php echo url_for("/staff/pages/Calendrier.php?lang=" . $langue); ?>" class=" bordre"><i class="fa fa-calendar"></i> <?= $calendrier_title; ?></a></li>
                                    <li class="dropdown bordre"> 
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-newspaper-o "></i> Articles
                                            <span class="caret"></span></a>
                                        <ul id="lang" class="dropdown-menu">
                                            <li class="dropdown-link"><a href="<?php echo url_for("/staff/pages/Themes.php?lang=" . $langue); ?>" class=" bordre"><i class="fa fa-tasks"></i> <?= $themes_title; ?></a></li>
                                            <li class="dropdown-link"><a href="<?php echo url_for("/staff/pages/Programme.php?lang=" . $langue); ?>" class=" bordre"><i class="fa fa-list"></i> <?= $programme_title; ?></a></li>
                                            <li class="dropdown-link"><a href="<?php echo url_for("/staff/pages/commite.php?lang=" . $langue); ?>" class=" bordre"><i class="fa fa-group"></i> <?= $comite_menu_title; ?></a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown bordre"> 
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-file "></i> <?= $drobdown_title; ?>
                                            <span class="caret"></span></a>
                                        <ul class="dropdown-menu  ">
                                            <li ><a href="<?php echo url_for("/staff/pages/Inscription.php?lang=" . $langue); ?>" class=" bordre"><i class="fa fa-file"></i> <?= $inscription_menu_title; ?></a></li>
                                            <li ><a href="<?php echo url_for("/staff/pages/FraisInscription.php?lang=" . $langue); ?>" class=" bordre"><i class="fa fa-euro"></i> <?= $frais_menu_title; ?></a></li>
                                        </ul>
                                    </li>

                                    <li ><a href="<?php echo url_for("/staff/pages/Hebergement.php?lang=" . $langue); ?>" class=" bordre"><i class="fa fa-hotel"></i> Hebergement</a></li>
                                    <li ><a href="<?php echo url_for("/staff/pages/Venues.php?lang=" . $langue); ?>" class=" bordre"><i class="fa fa-coffee"></i> Venues</a></li>
                                    <li class="dropdown bordre"> 
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-flag "></i> Langue
                                            <span class="caret"></span></a>
                                        <ul id="lang" class="dropdown-menu">
                                            <li class="dropdown-link"> <a href="<?php echo url_for("/index.php?lang=En"); ?>" class="EnFlag" > Anglais</a></li>
                                            <li class="dropdown-link"> <a href="<?php echo url_for("/index.php?lang=Fr"); ?>"class="FrFlag" > Francais</a></li>
                                        </ul>
                                    </li>

                                    <li ><a href="<?php echo url_for("/staff/pages/Contact.php?lang=" . $langue); ?>" ><i class="fa fa-envelope"></i> Contact</a></li>
                                </ul>
                                <!--                                <div class="w3_agileits_social">
                                                                    <div class="social-icon">
                                                                        <a href="<?php #echo url_for("/staff/connection/login.php");  ?>" class=" "><i class="fa fa-sign-in"></i> Se connecter</a>
                                                                    </div>
                                
                                                                </div>-->

                            </nav>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

<!--<input type="color" value="#aebe27" >-->
