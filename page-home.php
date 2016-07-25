<?php

/*
	Template Name: Home Page, No Sidebar
*/

get_header();  ?>

<div class="main">
  <div class="container">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <div class="column_large">
        <div class="yaa-pic">
          <?php $img = wp_get_attachment_image(189); ?>
          <figure class="yaa-pic-circular">
            <?php echo $img ?>
          </figure>
          
        </div>

        <div class="content_wrapper_gutter home_box">
          <?php the_content(); ?>
        </div>
      </div>

      <div class="action_box">
        <?php echo mab_get_actionbox(257); ?>
      </div>

      <div class="second_home">
        <?php the_field('second_wysiwyg'); ?>
      </div>

      

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>