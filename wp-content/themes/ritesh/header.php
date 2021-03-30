<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jQueryv1.11.1.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scriptall.js"></script>

<script>

  $(document).ready(function() {

   	$("html").niceScroll();

  });

</script>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
    
</head>

<body>

	<!--<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<div class="search-toggle">
				<a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
			</div>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		</div>

		<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>
	</header>-->
    <header>

	<div class="container">

    	<div class="logo pull-left"><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Ritesh Tiwari"></a></div>

        <div class="nav pull-right">
             <div class="mobmenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
        <ul class="main-nav">

        <li><a id="home-id" href="#home-id-sec"><span>HOME</span></a></li> 

        <li><a id="project-id" href="#project-id-sec"><span>PROJECTS</span></a></li> 

        <li><a id="testimonials-id" href="#testimonials-id-sec"><span>TESTIMONIALS</span></a></li> 

        <li><a id="ask-id" href="#ask-id-sec"><span>ASK</span></a></li> 

                                                                        

        </ul>

        </div>

<div class="clr"></div>

    </div>

            <div class="clr"></div>

        <div class="hrline"></div>

</header>
    <!-- #masthead -->

	
