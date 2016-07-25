<?//php display the title of page ID 51 (Portfolio)
 ?>
<?php $title = get_the_title('51'); ?>
<h1 class="section_title"><?php echo $title ?></h1>


<?//php custom loop for showing the content of page ID 51 (Portfolio)  ?>
<?php $content = new WP_Query('page_id=51'); ?>
  <?php if ( $content->have_posts() ) while ( $content->have_posts() ) : $content->the_post(); ?>
    <div class="portfolio_content_wrapper">
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?> 
<?php wp_reset_postdata(); ?>
<?//php end of custom loop for content ?>


<?//php custom loop to show portfolio items ?>
<?php $portfolio = new WP_Query(
                  array(
                        'posts_per_page' => -1,
                        'post_type' => 'portfolio',
                        )
); ?>

<?php if ( $portfolio->have_posts() ) while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>


  <!-- start of portfolio item -->
    <div class="portfolio_wrapper">

      <h3 class="portfolio_item">
        <?php the_title(); ?>
      </h3>

      <?//php what industry is this website ?>
      <span class="industry"><?php the_field('type'); ?></span>

      <?//php tecchnologies used list  ?>
      <?php
        $technologies = get_the_terms($post, 'technology');
             ?>   
         <ul class="tech_used">
           <?php 
           echo "Built with:"."<br>";
           foreach ($technologies as $technology) {
            echo "<li>".$technology->name."</li>";
           } ?>
         </ul> 
        <?//php end technologies used list ?>

      <figure class="portfolio_fig">
        <?php $image = the_post_thumbnail(); ?>
        <img src="<?php echo $image['size']['square'] ?>" alt="">
      </figure>

      <?//php short and sweet description of the website ?>
      <div class="short_desc">
        <?php the_field('short_description'); ?>
      </div>
      
      <div class="live_link">
        <?php if( get_field('url') ): ?>
          <a href="<?php the_field('url'); ?>" class="live_button">See it live</a>
        <?php endif; ?>
      </div>
    </div> <!-- end of portfolio item-->



<?php endwhile; ?> 

<?php wp_reset_postdata(); ?>