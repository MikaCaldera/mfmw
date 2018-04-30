<?php
/*
Template Name: Sidebar Template
Template Post Type: page, post
*/
?>
<?php get_header(); ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-9 mt-3 mb-4">  
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; else: ?>
            <?php _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); ?>
            <?php endif; ?>
        </div>
        <div class="col-lg-3 mt-4">
          <?php include "inc/sidebar.php" ?>
        </div>

      </div>
      
    </div>

      <?php include "inc/megafooter.php" ?>
      <?php include "inc/footer.php" ?>
  </body>
  <?php wp_footer(); ?>
</html>
