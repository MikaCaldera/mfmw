<?php
/*
Template Name: Default Template
Template Post Type: page, post
*/
?>
<?php
get_header(); ?>
      <?php include "inc/flex.php" ?>
      <!-- Content -->
       <div class="content">
            <section class="container" >
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <div class="row mb-3">
                    <div class="col-lg-8">
                       <?php the_content(); ?>
                    </div>
                  </div>
                     <?php endwhile; else: ?>
                    <?php _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); ?>
                <?php endif; ?>     
             </section>
         </div>    
      <?php include "inc/megafooter.php" ?>
      <?php include "inc/footer.php" ?>
  </body>
  <?php wp_footer(); ?>
</html>
