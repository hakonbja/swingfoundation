<?php


function swifo_scripts() {
	$ver = '1.1';
  // Theme stylesheet
	wp_enqueue_style( 'swifo-style', get_stylesheet_uri(), '', $ver );

	// Javascript
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', '', $ver, false);

}

add_action( 'wp_enqueue_scripts', 'swifo_scripts' );

add_theme_support(  'post-thumbnails', array( 'post', 'page' )  );

function register_my_menus() {
  register_nav_menus(
		array(
			'header-navbar'=> __( 'Header Navbar' ),
			'quicklinks' => __( 'Quicklinks'),
			'footer-menu' => __( 'Footer Menu')
			// 'front-page-navbar' => __( 'Front Page Navbar')
			)
		);
}
add_action( 'init', 'register_my_menus' );

?>
