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
    <body class="blue-grey lighten-5">
        <header>
            <nav class="blue-grey darken-4 top-nav" style="height:80px">
                <div class="container">
                    <div class="nav-wrapper"><a class="page-title">International Conference on Soft Computing in Engineering</a></div>
                </div>
            </nav>
            <div class=""></div>
            <div class="slider">
                <ul class="slides">
                    <li>
                        <img src="<?php echo base_url()?>/img/home.jpg"> <!-- random image -->
                        <div class="caption right-align">
                            <h3 class="white-text text-lighten-1">Left Aligned Caption</h3>
                            <h5 class="light white-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="<?php echo base_url()?>/img/home.jpg"> <!-- random image -->
                        <div class="caption right-align">
                            <h3 class="white-text text-lighten-1">Left Aligned Caption</h3>
                            <h5 class="light white-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="<?php echo base_url()?>/img/home.jpg"> <!-- random image -->
                        <div class="caption right-align">
                            <h3 class="white-text text-lighten-1">Left Aligned Caption</h3>
                            <h5 class="light white-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                </ul>
            </div>
             <div class="navbar">
                <nav class="blue-grey darken-4">
                    <ul class="right hide-on-med-and-down">
                        <li><a href="<?php echo base_url();?>index.php/home">Home</a></li>
                        <li><a href="#!">Call for Papers</a></li>
                        <li><a href="<?php echo base_url();?>index.php/home/committee">Committee</a></li>
                        <li><a href="#!">Submissions</a></li>
                        <li><a href="<?php echo base_url();?>index.php/home/reg">Registrations</a></li>
                        <li><a href="<?php echo base_url();?>index.php/home/about">About</a></li>
                        <li><a href="<?php echo base_url();?>index.php/home/agenda">Program</a></li>
                        <li><a href="#!">Venue</a></li>
                        <li><a href="<?php echo base_url();?>index.php/home/contact">Contact Us</a></li>

                    </ul>
                    <ul id="indigo darken-4 slide-out" class="side-nav">
                        <li><a href="#!">Home</a></li>
                        <li><a href="#!">About</a></li>
                        <li><a href="#!">Societies</a></li>
                        <li><a href="#!">Journals A-Z</a></li>
                        <li><a href="#!">Conferences</a></li>
                        <li><a href="#!">Policies</a></li>
                        <li><a href="#!">Contact Us</a></li>
                    </ul>
                    <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                </nav>
            </div>
        </header>