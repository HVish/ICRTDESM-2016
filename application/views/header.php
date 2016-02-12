<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
    <head>
        <title>JICSC</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="<?php echo base_url();?>css/materialize.css" media="screen,projection">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url();?>css/styles.css">
        <link rel="stylesheet" href="<?php echo base_url();?>css/override.css">
        <script type="text/javascript" src="<?php echo base_url();?>js/jquery-2.2.0.js"></script>
    </head>
    <body class="container">
       <header>
            <!--nav class="white top-nav" style="height:80px">
                <div>
                    <div class="nav-wrapper">
                        <a class="left"><img class="responsive-img" src="<?php echo base_url()?>img/logo conference only text.png" /></a>
                        <a class="page-title black-text">International Conference on Soft Computing in Engineering</a>
                        <a class="right"><img class="responsive-img" src="<?php echo base_url()?>img/trans.png" /></a>
                    </div>
                </div>
            </nav-->
            <div class="row valign-wrapper top-nav">
                <div class="col s12 m2 l2 valign">
                    <img class="responsive-img left" src="<?php echo base_url()?>img/logo conference only text.png" />
                </div>
                <div class="col s12 m8 l9 valign center-align">
                    <a class="page-title black-text">International Conference on Soft Computing in Engineering</a>
                </div>
                <div class="col s12 m2 l2 valign">
                    <img class="responsive-img right" src="<?php echo base_url()?>img/trans.png" />
                </div>
            </div>
            <div class="slider">
                <ul class="slides">
                    <li>
                        <img src="<?php echo base_url()?>/img/conference.jpg"> <!-- random image -->

                    </li>
                    <li>
                        <img src="<?php echo base_url()?>/img/jecrc-Foundation6.jpg"> <!-- random image -->

                    </li>
                    <li>
                        <img src="<?php echo base_url()?>/img/jecrc-main.jpg"> <!-- random image -->
                    </li>
                     <li>
                        <img src="<?php echo base_url()?>/img/jecrc-foundation4.jpg"> <!-- random image -->
                    </li>
                </ul>
            </div>
             <div class="navbar">
                <nav class="blue-grey darken-4">
                    <ul class="left hide-on-med-and-down">
                        <li><a href="<?php echo base_url();?>index.php/home">Home</a></li>
                        <li><a href="<?php echo base_url();?>index.php/home/callforpaper">Call for Papers</a></li>
                        <li><a href="<?php echo base_url();?>index.php/home/committee">Committee</a></li>
                        <li><a href="<?php echo base_url();?>index.php/home/submission">Submissions</a></li>
                        <li><a href="<?php echo base_url();?>index.php/home/reg">Registrations</a></li>
                        <li><a href="<?php echo base_url();?>index.php/home/events">Program</a></li>
                        <li><a href="<?php echo base_url();?>index.php/home/venue">Venue</a></li>
                        <li><a href="<?php echo base_url();?>index.php/home/contact">Contact Us</a></li>

                    </ul>
                    <ul id="indigo darken-4 slide-out" class="side-nav">
                        <li><a href="<?php echo base_url();?>index.php/home">Home</a></li>
                        <li><a href="<?php echo base_url();?>index.php/home/callforpaper">Call for Papers</a></li>
                        <li><a href="<?php echo base_url();?>index.php/home/committee">Committee</a></li>
                        <li><a href="#!">Submissions</a></li>
                        <li><a href="<?php echo base_url();?>index.php/home/reg">Registrations</a></li>
                        <li><a href="<?php echo base_url();?>index.php/home/events">Program</a></li>
                        <li><a href="#!">Venue</a></li>
                        <li><a href="<?php echo base_url();?>index.php/home/contact">Contact Us</a></li>
                    </ul>
                    <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                </nav>
            </div>
            <div class="fixed-action-btn vertical click-to-toggle" style="bottom: 45px; right: 9px;">
                <a class="btn-floating btn-large blue-grey darken-2">
                  <i class="large material-icons">supervisor_account</i>
                </a>
                <ul>
                    <li><a href="https://www.facebook.com/JECRCfoundation/" class="btn-floating white tooltipped" data-position="top" data-delay="50" data-tooltip="Facebok"><img class="responsive-img" src="<?php echo base_url();?>img/facebook.png"></a></li>
                    <li><a class="btn-floating white tooltipped" data-position="top" data-delay="50" data-tooltip="Twitter"><img class="responsive-img" src="<?php echo base_url();?>img/Twitter.ico" /></a></a></li>
                    <li><a class="btn-floating white tooltipped" data-position="top" data-delay="50" data-tooltip="Goggle+"><img class="responsive-img" src="<?php echo base_url();?>img/google.png" /></a></li>
                </ul>
            </div>
        </header>