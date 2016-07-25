<?php

/*
  Template Name: Layout A, No Pic plus Title
*/

/* Layout A is, Header, Title/Image, Content, Freebie, CTA, Footer

Pages = Home and Contact
*/

get_header();  ?>

<div class="main">
  <div class="container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h1 class="section_title"><?php the_title(); ?></h2>
    
      <div class="content_wrapper_gutter contact">
        <?php the_content(); ?>

      

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>