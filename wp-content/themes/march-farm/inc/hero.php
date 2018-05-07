<!-- This is a ternary operator that chooses the default hero if an overide wasnt chosen on a ind page -->

<?php
$herourl = get_field( 'hero' ) ? get_field( 'hero' ) : get_field( 'default_hero', 'option' );

// active hours
$dayofweek = date('w'); // returns an index from 0 to 6 starting with sunday as 0 - this is today's day of the week
$all_hours = array(
        0 => get_field('sunday_hours', 'option') ? get_field('sunday_hours', 'option') : "closed",
        1 => get_field('monday_hours', 'option') ? get_field('monday_hours', 'option') : "closed",
        2 => get_field('tuesday_hours', 'option') ? get_field('tuesday_hours', 'option') : "closed",
        3 => get_field('wednesday_hours', 'option') ? get_field('wednesday_hours', 'option') : "closed",
        4 => get_field('thursday_hours', 'option') ? get_field('thursday_hours', 'option') : "closed",
        5 => get_field('friday_hours', 'option') ? get_field('friday_hours', 'option') : "closed",
        6 => get_field('saturday_hours', 'option') ? get_field('saturday_hours', 'option') : "closed",
);
// get the value, set it to the active hours variable
$active_hours = $all_hours[$dayofweek];
?>
<header class="hero" style="background: url(<?= $herourl ?>) no-repeat;    background-size: cover;">
    <div class="hero-inner">
        <div class="hours">
            <div id="active-hours-wrapper">
                <a id="active-hours-link" href="<?php echo site_url( 'our-farm/contact-us/' ); ?>">
                    <button><i id="hoursclock" class="material-icons">access_time</i></button>
                    <span>Today: &nbsp;</span>

                    <span id="active-hours-text"><?php echo $active_hours; ?> </span>
                    <i id="active-hours-arrow"></i>
<!--                    <span>&nbsp;&nbsp; </span>-->
                </a>
            </div>

        </div>


        <div class="search">
            <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                <input id="wpsearch" type="search" class="search-field"
                       placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
                       value="<?php echo get_search_query() ?>" name="s"
                       title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>"/>
                <button type="submit"><i id="search-icon" class="material-icons">search</i></button>
            </form>
        </div>
        <div class="mx-auto logo-hold">
            <img src="<?php the_field( 'logo', 'option' ); ?>">
        </div>
    </div>
</header>