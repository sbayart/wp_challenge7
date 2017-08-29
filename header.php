<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Flatfy</title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/static/external/bootstrap/dist/css/bootstrap.min.css';?>">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/static/external/font-awesome/css/font-awesome.min.css'; ?>">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/static/external/OwlCarousel2-2.2.1/dist/assets/owl.carousel.min.css'; ?>">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/static/external/OwlCarousel2-2.2.1/dist/assets/owl.theme.default.min.css'; ?>">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri()?>" >
        <link href="https://fonts.googleapis.com/css?family=Arvo|Lato" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="container-fluid conthead">
                <div class="headerback">
                    <h1>Flatfy</h1>
                    <h2>Clean &amp; minimal Theme </h2>
                    <div class="buttons">
                        <p class="twitter"><a href="#">Twitter</a></p>
                        <p class="download"><a href="#">Free Download</a></p>
                    </div>
                    <div class="circleheader">
                        <img class="circle" src="<?php echo get_stylesheet_directory_uri() . '/static/images/circle.png';?>" alt="circle">
                    </div>
                </div>
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Flatfy</a>
                    </div>
					<?php
                        $args = array (
                            'container' => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id' => 'bs-example-navbar-collapse-1',
                            'menu_class' => 'nav navbar-nav navbar-right',
                            'menu' => 'navbar',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            );
                            
                        wp_nav_menu($args)
					?>
                </nav>
            </div>
        </header>
