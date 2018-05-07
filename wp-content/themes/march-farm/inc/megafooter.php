<!-- Footer -->
<footer class="megafooter">
    <div class="container">
        <!-- Logo Row -->
        <div class="row">
            <a class="navbar-brand" href="index.php"><img src="<?php echo get_stylesheet_directory_uri();?>/img/marchfarm-white.svg" alt="march farm"></a>
        </div>
        <!-- row -->
        <div class="row text-center text-md-left">
            <!-- Address-->
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('address') ) : ?> 
            <?php endif; ?> 
            <!-- One -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto footmenu">
            <?php
              wp_nav_menu( array(
                'menu'              => 'Mega Menu One',
                'theme_location'    => 'mega-one',
                'depth'             => 1,
                'container'         => '',
                'container_class'   => '',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'navbar-nav justify-content-center',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new bs4navwalker())
               );
            ?>
            </div>
            <!-- Two -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto footmenu">
                <?php
                  wp_nav_menu( array(
                    'menu'              => 'Mega Menu Two',
                    'theme_location'    => 'mega-two',
                    'depth'             => 1,
                    'container'         => '',
                    'container_class'   => '',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'navbar-nav justify-content-center',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new bs4navwalker())
                   );
                ?>
            </div>

            <!--Call to action-->
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('calltoaction') ) : ?> 
            <?php endif; ?> 

        </div>
        <!-- /row -->
    </div>
</footer>