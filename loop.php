<?php $blog = get_the_title(72); ?>
<h1 class="section_title blog"><?php echo $blog ?></h2>

<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			Please check back for my latest updates soon!
			<?//php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			

			<section class="entry-content">
        <div class="blog_thumbnail_wrapper">
          <?php the_post_thumbnail('blog'); ?>
      
        <?//php the_excerpt(); ?>
  				<?//php the_content('Continue reading <span class="meta-nav">&rarr;</span>'); ?>
  				
          <?/*php wp_link_pages( array(
            'before' => '<div class="page-link"> Pages:',
            'after' => '</div>'
          )); */?>
          </div>
            
    			
          <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
              <?php the_title(); ?>
            </a>
          </h2>
          <span class="date_blog"><?php the_date(); ?></span>
          <div class="line"></div>
        </section><!-- .entry-content -->

        <div class="teaser">
          <?php the_excerpt(); ?>
        </div>

			<footer>
				<p><?//php the_tags('Tags: ', ', ', '<br>'); ?>  <?//php the_category(', '); ?></p>
        <p><?//php comments_popup_link('Respond to this post &raquo;', '1 Response &raquo;', '% Responses &raquo;'); ?></p>
        <p><?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?></p>
			</footer>

		</article><!-- #post-## -->

		<?php comments_template( '', true ); ?>


<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>
