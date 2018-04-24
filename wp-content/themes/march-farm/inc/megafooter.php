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
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('megafootone') ) : ?> 
            <?php endif; ?> 
            <!-- Two -->

            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('megafoottwo') ) : ?> 
            <?php endif; ?> 

            <!-- Three -->
 
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('megafootthree') ) : ?> 
            <?php endif; ?> 

            <!--Call to action-->

            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('calltoaction') ) : ?> 
            <?php endif; ?> 

        </div>
        <!-- /row -->
    </div>
</footer>