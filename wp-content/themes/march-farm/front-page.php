<?php
/*
Front Page
*/
?><?php get_header(); ?>
        <?php include "inc/flex.php" ?>        
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
        <?php include "inc/parts/map.php" ?>
        <?php include "inc/megafooter.php" ?>
        <?php include "inc/footer.php" ?>
  </body>
  <?php wp_footer(); ?>
</html>
