<footer class="site_footer">
  <div class="container">
    <?php echo mab_get_actionbox(257); ?>
    <div class="social_media_footer">
      <a href="https://ca.linkedin.com/in/yaaotchere">
        <i class="fa fa-linkedin"></i>
      </a>
      <a href="http://www.twitter.com/yaatotchere">
        <i class="fa fa-twitter"></i> 
      </a>
    </div>
    <span class="footer_notes">
    &#169; <?php the_author(); ?> <?php the_date('Y'); ?> | 
    Photo by <a href="http://www.pamlau.com">Pam Lau</a>  
    </span>
  </div>
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>
</div>
<?php wp_footer(); ?>
</body>
</html>