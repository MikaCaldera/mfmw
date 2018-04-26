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
        <h2> Testing </h2>
       <div class="">
            <section class="container blurbhold" >
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
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
