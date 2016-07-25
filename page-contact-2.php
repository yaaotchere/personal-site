<?php

/*
	Template Name: Secondary Contact, No Sidebar
*/

/* Layout A is, Header, Title/Image, Content, Freebie, CTA, Footer

Pages = Home and Contact
*/

get_header();  ?>

<div class="main">
  <div class="container">
    <?//php echo mab_get_actionbox(257) ?>
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?//php the_title(); ?></h2>
      <div class="yaa-pic">
        <?php $img = wp_get_attachment_image(189); ?>
        <figure class="yaa-pic-circular">
          <?php echo $img ?>
        </figure>
        
      </div>

      <div class="content_wrapper_gutter">
        <?php the_content(); ?>
      </div>

      <!-- <div class="cta-wrapper">
        <div class="cta_box"></div>
        <div class="cta_box"></div>
        <div class="cta_box"></div>
      </div> -->

      

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>