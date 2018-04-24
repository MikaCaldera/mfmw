<!-- This is a ternary operator that chooses the default hero if an overide wasnt chosen on a ind page -->

<?php
$herourl = get_field('hero') ? get_field('hero') : get_field('default_hero', 'option');
?>
<header class="hero" style="background: url(<?= $herourl ?>) no-repeat;    background-size: cover;">
  <div class="hero-inner">
    <div class="search">
      <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
        <input id="wpsearch" type="search" class="search-field"
        placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
        value="<?php echo get_search_query() ?>" name="s"
        title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
        
        <span type="submit" class="search-submit"><i class="fa fa-search"></i></span>
      </form>
    </div>
    <div class="mx-auto logo-hold">
      <img src="<?php the_field('logo', 'option'); ?>">
    </div>
  </div>
</header>