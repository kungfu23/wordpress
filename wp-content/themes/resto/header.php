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

                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'extra-menu',
                                'menu_id'        => 'primary-menu',
                                'container_class' => 'my_extra_menu_class',
                                'menu_class' => 'nav sf-menu',
                                'container' => 'ul',
                                'menu_order'       => 'ASC',
                            ) );
                        ?>


                    </div>
                    <div class="callUs">CALL US AT 1-800-221-1480</div>
                </div>




    <div id="content" class="extra-content">
