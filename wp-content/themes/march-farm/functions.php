<?php
//error_reporting(E_ALL);
/**********************************
 * Bootrap & Css & Icons *
 **********************************/

function mc_enqueue_my_scripts() {
    // jQuery is stated as a dependancy of bootstrap-js - it will be loaded by WordPress before the BS scripts

	wp_enqueue_script('tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js', array('jquery'), true);
	wp_enqueue_script('jquery3', 'https://code.jquery.com/jquery-3.3.1.min.js', array('jquery'), true);
    wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array('jquery'), true); // all the bootstrap javascript goodness
   wp_enqueue_script( 'responsive-menyas', get_stylesheet_directory_uri() . '/js/responsive-menus.min.js'); // all
   wp_enqueue_script( 'matchheight', get_stylesheet_directory_uri() . '/js/jquery.matchHeight.min.js'); // all
   wp_enqueue_script( 'bootvalidate', get_stylesheet_directory_uri() . '/js/jqBootstrapValidation.min.js ');
   wp_enqueue_script( 'customjs', get_stylesheet_directory_uri() . '/js/custom.js ');
}
add_action('wp_enqueue_scripts', 'mc_enqueue_my_scripts');


function mc_enqueue_mccode() {
  // tether is required for bootstrap 4

     // jQuery is stated as a dependancy of bootstrap-js - it will be loaded by WordPress before the BS scripts
  wp_enqueue_script( 'featherbox', get_stylesheet_directory_uri() . '/vendor/featherlight/featherlight.min.js');

}
add_action('wp_enqueue_scripts', 'mc_enqueue_mccode');


function mc_enqueue_my_styles() {

    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css' );
    wp_enqueue_style( 'google-material', 'https://fonts.googleapis.com/icon?family=Material+Icons' );
    wp_enqueue_style( 'custom-css', get_stylesheet_directory_uri() . '/css/custom.css' );
    wp_enqueue_style( 'featherlightcss', get_stylesheet_directory_uri() . '/vendor/featherlight/featherlight.min.css');
}

// remove title on homepage MCcoder
add_action('wp_enqueue_scripts', 'mc_enqueue_my_styles');

 function google_fonts() {
  $query_args = array(
    'family' => 'family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i',
    'subset' => 'latin,latin-ext'
  );
  wp_register_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
            }

add_action('wp_enqueue_scripts', 'google_fonts');


// ACF Pro Options Page



if (function_exists('acf_add_options_page')) {



    acf_add_options_page(array(

        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false

    ));



}

function hours_list(){

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

	$hourshtml = "<ul id='hours-list'>";
	$hourshtml .= "<li>Sunday:  " . $all_hours[0] . "</li>";
	$hourshtml .= "<li>Monday:  " . $all_hours[1] . "</li>";
	$hourshtml .= "<li>Tuesday:  " . $all_hours[2] . "</li>";
	$hourshtml .= "<li>Wednesday:  " . $all_hours[3] . "</li>";
	$hourshtml .= "<li>Thursday:  " . $all_hours[4] . "</li>";
	$hourshtml .= "<li>Friday:  " . $all_hours[5] . "</li>";
	$hourshtml .= "<li>Saturday:  " . $all_hours[6] . "</li>";
	$hourshtml .= "</ul>";

	return $hourshtml;
}

add_shortcode('hourslist', 'hours_list');

// lets add us some menus(menus)

// new implementation of bootstrap 4 nav walker
require_once('bs4navwalker.php');
register_nav_menu('top', 'Top menu');

function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'mega-one' => __( 'Mega Menu One' ),
      'mega-two' => __( 'Mega Menu Two' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

 function atg_menu_classes($classes, $item, $args) {
  if($args->theme_location == 'main-menu') {
    $classes[] = 'nav-item';
  }
  return $classes;
}

//add_filter('nav_menu_css_class','atg_menu_classes',1,3);
//require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


// Register Sidebars and widgets

if ( function_exists('register_sidebar') ) {

   register_sidebar(array(
   'name' => 'address',
   'before_widget' => '<div class="col-md-3 col-lg-3 col-xl-3 mx-auto address">',
   'after_widget' => '</div>',
   'before_title' => '<h2>',
   'after_title' => '</h2>'
    ));

   register_sidebar(array(
   'name' => 'megafootone',
   'before_widget' => '<div class="col-md-2 col-lg-2 col-xl-2 mx-auto footmenu">',
   'after_widget' => '</div>',
   'before_title' => '<h2>',
   'after_title' => '</h2>'
    ));

   register_sidebar(array(
   'name' => 'megafoottwo',
   'before_widget' => '<div class="col-md-2 col-lg-2 col-xl-2 mx-auto footmenu">',
   'after_widget' => '</div>',
   'before_title' => '<h2>',
   'after_title' => '</h2>'
   ));
   register_sidebar(array(
   'name' => 'megafootthree',
   'before_widget' => '<div class="col-md-2 col-lg-2 col-xl-2 mx-auto footmenu">',
   'after_widget' => '</div>',
   'before_title' => '<h2>',
   'after_title' => '</h2>'
   ));
         register_sidebar(array(
   'name' => 'calltoaction',
   'before_widget' => '<div class="col-md-3 col-lg-3 col-xl-3 mx-auto cat">',
   'after_widget' => '</div>',
   'before_title' => '<h2>',
   'after_title' => '</h2>'
   ));
   register_sidebar(array(
  'name' => 'sidebar',
  'before_widget' => '<div>',
  'after_widget' => '</div>',
  'before_title' => '<h2>',
  'after_title' => '</h2>'
  ));
}