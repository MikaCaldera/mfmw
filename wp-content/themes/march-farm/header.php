<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Starter Site For March Farm">
    <meta name="author" content="Mika Caldera">
    <link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/path/favicon.ico" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <title><?php wp_title(); ?> - <?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
    <?php the_field('header_scripts', 'option'); ?>
  </head>
   <body class="">
    <?php include "inc/hero.php" ?>
    <?php include "inc/nav.php" ?>
