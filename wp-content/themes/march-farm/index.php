<?php
get_header(); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
          <?php edit_post_link(); ?>
      <?php endwhile; else: ?>
          <?php _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); ?>
      <?php endif; ?>
      <?php include "inc/flex.php" ?>
      <?php if ( is_front_page() ) {
          // your menu code goes here for home page
          include "inc/parts/map.php";
      } ?>
      <?php include "inc/megafooter.php" ?>
      <?php include "inc/footer.php" ?>
  </body>
  <?php wp_footer(); ?>
</html>
