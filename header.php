<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sidd
 */

?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="theme-color" content="#384D9D">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.min.css">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro|Source+Serif+Pro:700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">

<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


  <?php
  if ( is_front_page() && !is_paged() ) {
  ?>
  <section id="about">
  	<div class="header_wrap">
  		<div class="row">
  			<div class="medium-4 large-4 medium-push-8 large-push-8 columns">
  				<div class="image-logo-wrap">
  					<img src="<?php echo get_template_directory_uri(); ?>/img/sidd.jpg" alt="Siddharth Ashok"/>
  					<div class="overlay"></div>
  				</div>

  				<h1 class="sidd"><span>Siddharth Ashok</span></h1>
  			</div>

  			<div class="medium-8 large-7 medium-pull-4 large-pull-5 columns">
  				<h2>About</h2>
  				<p>I'm Siddharth Ashok, I code and make stuff. Currently working with Indian-Swedish Web agency <a href="http://nextbigthing.in/" target="_blank">Next Big Thing Media</a> as Front-End and WordPress developer.</p>

  				<p>I believe in staying curious, learning constantly, and never giving up. I enjoy creating performant interfaces and working on challenging projects.</p>

  				<p>Currently living in the land of sun and sea - Goa, you can follow my story on <a href="https://www.instagram.com/siddharthashok/" target="_blank">Instagram</a>, <a href="https://twitter.com/siddharthashok" target="_blank">tweet me</a> or simply mail me at <a href="mailto:hello@sidd.in">hello@sidd.in</a>.</p>
  			</div>
  		</div>
  	</div>
  </section>

  <?php } else {?>

    <header class="site-header">
    		<div class="row">
    			<div class="medium-12 columns">
            <div class="float-left logo-home-link-wrap">
              <a href="<?php echo site_url(); ?>">
        				<div class="image-logo-wrap"></div>
        				<h1 class="sidd"><span>Siddharth Ashok</span></h1>
              </a>
            </div>
            <div class="float-right">
              <nav id="site-navigation" class="main-navigation" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
              </nav><!-- #site-navigation -->
            </div>
    			</div>
    		</div>
    </header>


  <?php } ?>
