<?php
/*
Template Name: Search Page
Template Post Type: page
*/?>
<?php get_header(); ?>
    <!-- Search Container -->
    <div class="container">
      <div class="row mt-5">
        <div class="col-lg-12 mb-4">
          <h1 class="blurb-header">Search Results</h1>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
             <h2> <?php the_title(); ?></h2>
             <p><?php the_excerpt(); ?><p>
              <a class="btn btn-light" href="><?php echo get_permalink(); ?>">Read More </a>
          <?php endwhile; else: ?>
              <?php _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <!-- /container -->
<?php include "inc/megafooter.php" ?>
<?php include "inc/footer.php" ?>
</body>
  <?php wp_footer(); ?>
</html>
