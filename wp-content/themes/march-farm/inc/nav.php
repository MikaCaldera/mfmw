<?php
/*
Navigation
*/
?>
<!-- Navigation https://github.com/wp-bootstrap/wp-bootstrap-navwalker -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img src="<?php echo get_stylesheet_directory_uri();?>/img/marchfarm-logo.svg" alt="march farm"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span><i class="icon fa fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
    <?php
      wp_nav_menu( array(
        'menu'              => 'Main Menu',
        'theme_location'    => 'main-menu',
        'depth'             => 3,
        'container'         => '',
        'container_class'   => '',
        'container_id'      => 'bs-example-navbar-collapse-1',
        'menu_class'        => 'navbar-nav justify-content-center',
        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
        'walker'            => new wp_bootstrap_navwalker())
       );
    ?>
    <?php if( have_rows('social_widget', 'option') ): ?>
      <ul class="navbar-nav social-menu">
        <?php while( have_rows('social_widget', 'option') ): the_row(); ?>
            <li class="social"><a class="nav-link" href="<?php the_sub_field('link'); ?>"> <i class="fa fa-fw <?php the_sub_field('font_icon'); ?>"></i></a></li>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>
    </div>
  </div>
</nav>