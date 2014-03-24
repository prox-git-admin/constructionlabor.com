<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<!-- SET: Mobile Specific Metas --> 
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- END: Mobile Specific Metas -->

<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!-- SET: SCRIPTS -->
<script src="<?php bloginfo( 'template_url' ); ?>/js/modernizr.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/respond.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.hoverizr.js"></script>

<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/all.jquery.settings.js"></script>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<link href="<?php bloginfo( 'template_url' ); ?>/css/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body>
<!-- Header -->
<div class="header">
       	<div class="headerInner"></div>
	    <div class="container">
        	<div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/clcLogo.png" width="300" height="87" alt=" "></a></div>
            <div class="topLinks">
            <?php dynamic_sidebar('Top link'); ?>
               
                <i class="clearBoth"></i>
            </div>
         </div>

    <i class="clearBoth"></i>
</div>
<!-- Header End -->
<!-- Navigation -->
<div id="nav">
	<div class="container">
		<div class="nav">
            <a href="#" id="menuid">Menu</a>
           
           <?php wp_nav_menu( array('menu' => 'Top_Nav', 'menu_id' => '', 'menu_class' => '', 'container' => '' )); ?>
            <i class="clearBoth"></i>
        </div>
         <?php dynamic_sidebar('Contact'); ?>
        
        <i class="clearBoth"></i>
    </div>
</div>
<!-- Navigation End -->
