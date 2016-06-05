<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:900|Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,900italic,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
 <script src="https://use.fontawesome.com/b71c8a75a7.js"></script>
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body >
	<header>
		<a id="cd-logo" href="#0" style="display:inline-block;"></a>
		<nav id="cd-top-nav">
			<ul>
                    <a class="btn btn-social-icon btn-pinterest" href="#">
                      <span class="fa fa-youtube"></span>
                    </a>
                
                    <a class="btn btn-social-icon btn-github" href="#">
                      <span class="fa fa-steam"></span>
                    </a>
                
                <a class="btn btn-social-icon btn-facebook" href="#">
                      <span class="fa fa-facebook"></span>
                    </a>

                
				<!-- <li><a href="#0">Login</a></li> -->
			</ul>
		</nav>
		<a id="cd-menu-trigger" href="#0"><span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span></a>
	</header>
    

	<main class="cd-main-content">
