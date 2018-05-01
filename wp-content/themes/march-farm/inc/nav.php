<?php
/*
Navigation
*/
?>
<!-- Navigation https://github.com/wp-bootstrap/wp-bootstrap-navwalker -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="<?php echo get_template_directory_uri(); ?>/img/marchfarm-logo.svg" alt="march farm"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar"
                aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
		<?php
		wp_nav_menu( [
			'menu'            => 'top',
			'theme_location'  => 'top',
			'container'       => 'div',
			'container_id'    => 'bs4navbar',
			'container_class' => 'collapse navbar-collapse',
			'menu_id'         => false,
			'menu_class'      => 'navbar-nav mr-auto',
			'depth'           => 2,
			'fallback_cb'     => 'bs4navwalker::fallback',
			'walker'          => new bs4navwalker()
		] );
		?>
		<?php if ( have_rows( 'social_widget', 'option' ) ): ?>
            <ul class="navbar-nav social-menu">
				<?php while ( have_rows( 'social_widget', 'option' ) ): the_row(); ?>
                    <li class="social"><a class="nav-link" href="<?php the_sub_field( 'link' ); ?>"> <i
                                    class="fa fa-fw <?php the_sub_field( 'font_icon' ); ?>"></i></a></li>
				<?php endwhile; ?>
            </ul>
		<?php endif; ?>
    </div>
</nav>
