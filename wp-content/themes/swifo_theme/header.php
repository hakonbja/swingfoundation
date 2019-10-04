<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130239553-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-130239553-1');
    </script>

    <!-- favicon settings start-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/assets/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- favicon settings finished-->

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo('name'); ?> | Swing dance school Amsterdam</title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    
    <?php wp_head(); ?>
  </head>
  
  <body <?php body_class(); ?>>

    <header>
      <?php if ( !is_front_page() ) { ?>
        <div class="not-front">
          <div id="js-header-top" class="header-background">

          </div>
          <div class="container">
            <h1 class="minibar mb-seablue page-header"><?php echo get_the_title(); ?></h1>
          </div>

        </div>
      <?php } ?>
      <nav class="navbar">

        <div class="hamburger-menu" id="js-hamburger">
          <span></span>
        </div>

        <div class="navbar__desktop__wrapper" id="js-navbar__desktop__wrapper">
          <a href="<?php echo get_site_url(); ?>" class="img-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-navbar-mobile.svg" alt="Swing Foundation logo" class="navbar__logo__desktop" id="js-navbar__logo__desktop"></a>
          <?php wp_nav_menu( array( 'theme_location' => 'header-navbar', 'container_class' => 'navbar__desktop container') ); ?>
        </div>

        <div class="navbar__mobile__wrapper" id="js-navbar__mobile__wrapper">
          <a href="<?php echo get_site_url(); ?>" class="img-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-navbar-mobile.svg" alt="Swing Foundation logo" class="navbar__logo__mobile" id="js-navbar__logo__mobile"></a>
          <?php wp_nav_menu( array( 'theme_location' => 'header-navbar', 'container_class' => 'navbar__mobile', 'container_id' => 'js-navbar__mobile') ); ?>

        </div>

      </nav>
    </header>
