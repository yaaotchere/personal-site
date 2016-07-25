<?/* php 

    I am going to re-use this code for each section BUT wrap the get_template_part in a <section> tag with a class of the corresponding "page" ie) home, about, work, contact. This way I don't have to rewrite all this code everywhere */
  ?>

<div class="section_content_wrapper">

  <div class="section_title_wrapper">
    <h1 class="section_title">
      <?php the_title(); ?>
    </h1>
  </div>

  <div class="thumbnail_wrapper_about">
    <?php the_post_thumbnail( ); ?>
  </div>
  
  <div class="section_content_wrapper">
    <?php the_content(); ?>
  </div>

</div>
