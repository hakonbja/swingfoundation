<?php


function swifo_scripts() {
  // Theme stylesheet
	wp_enqueue_style( 'swifo-style', get_stylesheet_uri() );

	// Javascript
	if (is_front_page()) {
  	wp_enqueue_script('front-page', get_template_directory_uri() . '/assets/js/front-page.js', array(), null, false);
	}
}

add_action( 'wp_enqueue_scripts', 'swifo_scripts' );

// add_theme_support( 'menus' );

function register_my_menus() {
  register_nav_menus(
		array(
			'header-navbar'=> __( 'Header Navbar' ),
			'quicklinks' => __( 'Quicklinks'),
			// 'front-page-navbar' => __( 'Front Page Navbar')
			)
		);
}
add_action( 'init', 'register_my_menus' );

?>
