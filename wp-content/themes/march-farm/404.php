<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
get_header(); ?>
<?php get_header(); ?>
      <?php include "inc/flex.php" ?>
        <!-- Content -->
       <div class="content">
            <section class="container " >
              <h1 class="page-title"><?php _e( 'Not Found', 'twentythirteen' ); ?></h1>
               <h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'twentythirteen' ); ?></h2>
          <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>

          <?php get_search_form(); ?>  
             </section>
         </div>  
        <!--  End content -->   
      <?php include "inc/megafooter.php" ?>
      <?php include "inc/footer.php" ?>
  </body>
  <?php wp_footer(); ?>
</html>
