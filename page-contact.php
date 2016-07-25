<?php

/*
	Template Name: Contact Page, No Sidebar
*/

get_header();  ?>

<div class="main">
  <div class="container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      
      <?php /* CONTACT */ ?>
      <section class="contact">
        <?php $contact = new WP_Query('page_id=74'); ?>
          <?php if ( $contact->have_posts() ) while ( $contact->have_posts() ) : $contact->the_post(); ?>
            <?php get_template_part('partials/contact' ); ?>
          <?php endwhile; ?> 
        <?php wp_reset_postdata(); ?>
      </section><!-- /.contact -->
    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>