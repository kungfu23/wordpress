<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package resto
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo(get_template_directory_uri()); ?>/shipsun.com/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo(get_template_directory_uri()); ?>/shipsun.com/img/favicon.ico" type="image/x-icon" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo(get_template_directory_uri()); ?>/shipsun.com/css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo(get_template_directory_uri()); ?>/shipsun.com/css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo(get_template_directory_uri()); ?>/shipsun.com/css/camera.css" type="text/css" media="screen">
    <link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300' rel='stylesheet' type='text/css'>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'resto' ); ?></a>

<!--	<header id="masthead" class="site-header">-->
<!--		<div class="site-branding">-->
<!--			--><?php
//			the_custom_logo();
//			if ( is_front_page() && is_home() ) : ?>
<!--				<h1 class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></h1>-->
<!--			--><?php //else : ?>
<!--				<p class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></p>-->
<!--			--><?php
//			endif;
//
//			$description = get_bloginfo( 'description', 'display' );
//			if ( $description || is_customize_preview() ) : ?>
<!--				<p class="site-description">--><?php //echo $description; /* WPCS: xss ok. */ ?><!--</p>-->
<!--			--><?php
//			endif; ?>
<!--		</div><!-- .site-branding -->-->
<!---->
<!--		<nav id="site-navigation" class="main-navigation">-->
<!--			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">--><?php //esc_html_e( 'Primary Menu', 'resto' ); ?><!--</button>-->
<!--			--><?php
//				wp_nav_menu( array(
//					'theme_location' => 'menu-1',
//					'menu_id'        => 'primary-menu',
//				) );
//			?>
<!--		</nav><!-- #site-navigation -->-->
<!--	</header><!-- #masthead -->-->


    <!--============================== header =================================-->

    <header class="extra">
        <div class="box-header">
            <div class="box-header-white">
                <div class="navbar navbar_ clearfix">
                    <h1 class="brand"><a href="#"><img alt="Agrolux" src="<?php echo(get_template_directory_uri()); ?>/shipsun.com/img/logo.png"></a></h1>
                    <div class="nav-collapse nav-collapse_  collapse">
                        <ul class="list-soc">
                            <li><a href="#" class="soc-email"><img alt="" src="<?php echo(get_template_directory_uri()); ?>/shipsun.com/img/ico_email.png"></a></li>
                        </ul>
                        <ul class="nav sf-menu">
                            <li class="active"><a href="index-2.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="coverage.html">Coverage Areas</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="callUs">CALL US AT 1-800-221-1480</div>
                </div>


            </div>
        </div>
    </header>



    <div id="content" class="extra-content">
