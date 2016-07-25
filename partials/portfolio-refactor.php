<div class="portfolio_wrapper">
  <div class="portfolio_item">
    <?php $portfolio = new WP_Query(
                array(
                      'posts_per_page' => -1,
                      'post_type' => 'portfolio',
                      )
         ); ?>

         <?php if ( $potfolio->have_posts() ) while ( $potfolio->have_posts() ) : $potfolio->the_post(); ?>
           <?php the_post_thumbnail(); ?>
         

         <?php endwhile; ?>
         <?php wp_reset_postdata(); ?>
  </div>
</div>