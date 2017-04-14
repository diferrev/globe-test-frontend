<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Globe</title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Roboto:400" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/slick-theme.css">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php bloginfo('url');?>">
                        <img src="<?php bloginfo('template_url');?>/assets/img/globe-logo.png" alt="Globe Hosting">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Web Hosting</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Standard Hosting</a></li>
                                <li><a href="#">Professional Hosting</a></li>
                                <li><a href="#">Advanced Hosting</a></li>
                                <li><a href="#">Unlimited Hosting</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>