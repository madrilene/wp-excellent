<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport"
        content="width=device-width">

  <!-- <meta http-equiv="Content-Security-Policy"
        content="upgrade-insecure-requests; block-all-mixed-content"> -->

  <link rel="profile"
        href="http://gmpg.org/xfn/11">
  <link rel="pingback"
        href="<?php bloginfo( 'pingback_url' ); ?>">
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

<body <?php body_class( 'bg-white' ); ?>>

  <a href="#main"
     class="skip-link"> JUMP </a>


  <header>

    <?php get_template_part( 'template-parts/menus/secondary' ); ?>

    <div class="relative">
      <figure class="flex">
        <!-- logo -->
        <a href="<?php echo get_bloginfo( 'url' ); ?>">

          <img class="lg:hidden"
               src="<?php  bloginfo('template_directory')  ?>/assets/images/logo/logo-mobile.svg"
               alt="Logo mobile"
               width="401"
               height="183">
          <img class="hidden lg:block"
               src="<?php bloginfo('template_directory')  ?>/assets/images/logo/logo-desktop.svg"
               alt="Logo Desktop"
               width="177"
               height="128">
        </a>
      </figure>
    </div>

    <!-- Mobile menu button -->
    <button type="button"
            class="inline-flex items-center"
            aria-controls="mobile-menu"
            aria-expanded="false"
            data-id="nav-toggle">
      <span class="sr-only">Menu</span>

      <svg class="menuClosedIcon block h-8 w-8"
           xmlns="http://www.w3.org/2000/svg"
           fill="none"
           viewBox="0 0 24 24"
           stroke="currentColor"
           aria-hidden="true">
        <path stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2.5"
              d="M4 6h16M4 12h16M4 18h16" />
      </svg>

      <svg class=" menuOpenIcon hidden h-8 w-8"
           xmlns="http://www.w3.org/2000/svg"
           fill="none"
           viewBox="0 0 24 24"
           stroke="currentColor"
           aria-hidden="true">
        <path stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2.5"
              d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>


    <div class="block md:hidden"> <?php get_template_part( 'template-parts/menus/main', 'mobile' ); ?></div>
    <div class="hidden md:block"> <?php get_template_part( 'template-parts/menus/main' ); ?></div>


  </header>



  <main id="main"
        class="flow">