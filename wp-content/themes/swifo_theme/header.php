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
      <!-- <meta name="description" content="Swing dance school in Amsterdam that teaches Lindy Hop, Solo Jazz & Charleston."> -->
      <title><?php bloginfo('name'); ?> | Swing dance school Amsterdam</title>
      <link rel="profile" href="http://gmpg.org/xfn/11" />
      <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
      <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
      <?php wp_head(); ?>
    </head>

    <?php if ( !is_front_page() ) { ?>
      <header>
        <div class="container">
          <h1 class="minibar mb-seablue page-header"><?php echo get_the_title(); ?></h1>
        </div>
        <div class="bar bar-darkblue">
          <div class="container">
            <?php wp_nav_menu( array( 'theme_location' => 'header-navbar', 'menu_class' => 'navbar') ); ?>
          </div>
        </div>
      </header>
    <?php } ?>
