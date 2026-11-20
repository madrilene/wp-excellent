<?php

/**
 * The header.
 *
 * Template that displays all of the <head> section. #main is opened here and closed in footer.php.
 *
 * @package wp-excellent
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <meta name="theme-color" content="#FFD000">

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/favicons/favicon.ico" sizes="any">
  <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/favicons/favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/favicons/apple-touch-icon.png"><!-- 180×180 -->
  <link rel="manifest" crossorigin="use-credentials" href="<?php echo esc_url(get_template_directory_uri()); ?>/site.webmanifest">

  <link rel="preload" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/fonts/redhat/red-hat-display-v7-latin-900.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/fonts/atkinson/atkinson-hyperlegible-regular.woff2" as="font" type="font/woff2" crossorigin>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <a href="#main" class="skip-link | button"> <?php esc_html_e('Jump to main content', 'wp-excellent'); ?></a>

  <?php get_template_part('template-parts/header/site', 'header'); ?>

  <main id="main" class="flow">