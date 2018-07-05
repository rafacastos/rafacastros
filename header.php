<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Rafael Castro">
    <meta name="robots" content="index,follow">
    <meta name="language" content="pt-BR">
    <meta name="author" content="Rafael Castro | Desenvolvimento Web e Marketing Digital">
    <meta name="classification" content="System">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/imagens/favicon-contmatic.ico" />

    <title>
        <?php wp_title( '|', true, 'right' ); ?>
    </title>

    <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" media="all" />
 

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <!-- <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script> -->


    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/owlcarousel/assets/owl.theme.default.min.css">
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/video.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="container-fluid header" role="navigation">

            <div id="navbar-example" class="menu-principal navbar-static">
                <div class="row" id="line-green"></div>
                <div class="row" id="menu-site">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        
                            <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-js-navbar-collapse">
                                <span class="sr-only">Menu</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <?php
		              wp_nav_menu( array(
		                'menu'              => 'primary',
		                'theme_location'    => 'primary',
		                'depth'             => 2,
		                'container'         => 'div',
		                'container_class'   => 'collapse navbar-collapse bs-example-js-navbar-collapse',
		                'menu_class'        => 'nav navbar-nav',
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                'walker'            => new wp_bootstrap_navwalker())
		            );
		        ?>
                        
                    </div>
                </div>

            </div>

        </nav>
    </header>
