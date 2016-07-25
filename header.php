<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<!-- The input needs to be beside the nav -->
<input type="checkbox" id="toggle" name="toggle">
<!-- These are siblings -->
<ul class="nav">
    <li><a href='<?php the_permalink(22); ?>'>Home</a></li>
    <li><a href='<?php the_permalink(24); ?>'>About</a></li>
    <li><a href='<?php the_permalink(214); ?>'>Work With Me</a></li>
    <li><a href='<?php the_permalink(51); ?>'>Portfolio</a></li>
    <li><a href='<?php the_permalink(74); ?>'>Contact</a></li>
    <li><a href='<?php the_permalink(72); ?>'>Blog</a></li>
</ul>

<div class="wrapper">

<header>

  <div class="container banner">
    <h1 class="main_site_title">
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      <br>
      Web design & Development
    </h1>
    </a>

    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>


  </div> <!-- /.container -->
</header><!--/.header-->


<label for="toggle">☰ Menu</label>
<h2 class="headline"><?php bloginfo('description' ); ?></h2>
