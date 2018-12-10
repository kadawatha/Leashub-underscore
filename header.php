<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package leashub
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
   <!--start with header section-->
    <meta charset="UTF-8" />
    <meta name="keywords" content="Leasehub" />

    <link rel="shortcut icon" href="<?php bloginfo( 'stylesheet_directory' ) ?>/images/favicon-lg - Copy.ico" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');  ?>/css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');  ?>/css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');  ?>/css/font-awesome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //Custom-Files -->

    <!-- Web-Fonts -->
    <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700&amp;subset=devanagari,latin-ext" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=latin-ext"
          rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Great+Vibes&amp;subset=latin-ext" rel="stylesheet">
    <!-- //Web-Fonts -->

	<?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'leashub' ); ?></a>



    <div class="main-banner-w3ls">
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <a class="navbar-brand" href="index.html">
                    <img src="<?php bloginfo( 'stylesheet_directory' ) ?>/images/logo.png" class="logo img-fluid-1" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-toggle" aria-controls="navbarNavAltMarkup"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-toggle " id="navbarNavAltMarkup">




                    <ul class="navbar-nav mx-lg-auto">
                   	<?php
                   							$args = array(
                   								'menu'        => 'header-menu',
                   								'menu_class'  => 'nav navbar-nav',
                   								'container'   => 'false'
                   							);
                   							wp_nav_menu( $args );
                   ?>

                    </ul>




                    <div class="header-social-w3ls text-center mt-lg-0 mt-4">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="mx-1">
                                <a href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                </a>
                            </li>


                            <li>
                                <a href="#">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </li>


                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- //header -->
        <!-- banner text -->











