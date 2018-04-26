<?php
/*
Template Name: Side Bar
Template Post Type: page
*/
?>
<?php get_header(); ?>
        <!-- Container -->
        <div class="container">
          <div class="row">
            <div class="col-lg-9 mb-4">
               <!-- Content -->
               <div class="content">
                    <section class="container" >
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <?php the_content(); ?>
                             <?php endwhile; else: ?>
                            <?php _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); ?>
                        <?php endif; ?>     
                     </section>
                 </div>  
                <!--  End content -->
              <?php include "inc/flex.php" ?>
            </div>
            <div class="col-lg-3 mb-4">
              <?php include "inc/sidebar.php" ?>
            </div>
          </div>
        </div>
        <!-- /container -->
      <?php include "inc/megafooter.php" ?>
      <?php include "inc/footer.php" ?>
  </body>
  <?php wp_footer(); ?>
</html>
