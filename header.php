<?php
/**
 * The header.
 *
 * Template that displays all of the <head> section. #main is opened here and closed in footer.php.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-excellent
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport"
        content="width=device-width">

  <!-- <meta http-equiv="Content-Security-Policy"
        content="upgrade-insecure-requests; block-all-mixed-content"> -->

  <link rel="profile"
        href="http://gmpg.org/xfn/11">
  <link rel="pingback"
        href="<?php bloginfo('pingback_url'); ?>">
  <link rel="icon"
        href="<?php echo get_template_directory_uri(); ?>/favicon.ico"
        sizes="any">
  <link rel="icon"
        href="<?php echo get_template_directory_uri(); ?>/favicon.svg"
        type="image/svg+xml">
  <link rel="apple-touch-icon"
        href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png"><!-- 180×180 -->
  <link rel="manifest"
        href="<?php echo get_template_directory_uri(); ?>/manifest.webmanifest">

  <?php wp_head(); ?>
</head>

<body <?php body_class(''); ?>>

  <a href="#main"
     class="skip-link | button"> JUMP </a>

  <header class="site-head">

    <div class="inner | splitter | wrapper">
      <figure class="flex">
        <!-- logo -->
        <a class="brand"
           href="<?php echo get_bloginfo('url'); ?>">


          <svg width="92"
               height="93"
               viewBox="0 0 92 93"
               fill="none"
               xmlns="http://www.w3.org/2000/svg">
            <path d="M53.4844 39.1842L28.7357 63.9329M53.4844 39.1842L17.1863 2.88617C-2.86061 22.9331 -2.86061 55.4354 17.1863 75.4825C37.2332 95.5295 69.7356 95.5295 89.7827 75.4825L53.4844 39.1842ZM53.4844 39.1842L55.1346 77.1326L53.4844 39.1842ZM53.4844 39.1842H17.1863H53.4844Z"
                  stroke="black"
                  stroke-width="4"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
          </svg>



        </a>
      </figure>

      <?php get_template_part('template-parts/menus/main'); ?>

    </div>

  </header>

  <main id="main"
        class="flow">