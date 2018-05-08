<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="March Farm">
    <meta name="author" content="Mika Caldera">

    <!-- Icons & Favicons -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <link href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png" rel="apple-touch-icon" />

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

    <?php wp_head(); ?>
    <?php the_field('header_scripts', 'option'); ?>
    <?php $postid = get_the_ID(); ?>
  </head>
   <body class="page<?= $postid; ?>">
    <?php include "inc/hero.php" ?>
    <?php include "inc/nav.php" ?>
