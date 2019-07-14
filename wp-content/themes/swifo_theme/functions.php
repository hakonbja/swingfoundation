<?php


function swifo_scripts() {
	$ver = filemtime( get_stylesheet_directory() . '/style.css' );
  // Theme stylesheet
	wp_enqueue_style( 'swifo-style', get_stylesheet_uri(), '', filemtime( get_stylesheet_directory() . '/style.css' ) );

	// Javascript
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', '', filemtime( get_template_directory() . '/assets/js/main.js' ), false);

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

/* Custom Meta Box for News - which type */

function news_get_meta_box( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = array(
		'id' => 'news_type',
		'title' => esc_html__( 'News', 'metabox-online-generator' ),
		'post_types' => array( 'post' ),
		'context' => 'side',
		'priority' => 'high',
		'autosave' => 'true',
		'fields' => array(
			array(
				'id' => $prefix . 'news_type',
				'name' => esc_html__( 'Type of News', 'metabox-online-generator' ),
				'type' => 'select',
				'placeholder' => esc_html__( '-- Select type --', 'metabox-online-generator' ),
				'options' => array(
					'Event' => 'Event',
					'Story' => 'Story',
				),
			),
		),
	);

	return $meta_boxes;
}
// add_filter( 'rwmb_meta_boxes', 'news_get_meta_box' );

/* Custom meta box for Events */
function event_get_meta_box( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = array(
		'id' => 'event_meta_boxes',
		'title' => esc_html__( 'News', 'metabox-online-generator' ),
		'post_types' => array('post' ),
		'context' => 'side',
		'priority' => 'high',
		'autosave' => 'false',
		'fields' => array(
			array(
				'id' => $prefix . 'news_type',
				'name' => esc_html__( 'Type of News', 'metabox-online-generator' ),
				'type' => 'select',
				'placeholder' => esc_html__( '-- Select type --', 'metabox-online-generator' ),
				'options' => array(
					'Event' => 'Event',
					'Story' => 'Story',
				),
			),
			array(
				'id' => $prefix . 'date',
				'type' => 'date',
				'name' => esc_html__( 'Date', 'metabox-online-generator' ),
			),
			// array(
			// 	'id' => $prefix . 'end_date',
			// 	'type' => 'date',
			// 	'name' => esc_html__( 'End Date (if any)', 'metabox-online-generator' ),
			// ),
			array(
				'id' => $prefix . 'start_time',
				'name' => esc_html__( 'Start time', 'metabox-online-generator' ),
				'type' => 'time',
			),
			array(
				'id' => $prefix . 'end_time',
				'name' => esc_html__( 'End time', 'metabox-online-generator' ),
				'type' => 'time',
			),
			array(
				'id' => $prefix . 'location',
				'type' => 'text',
				'name' => esc_html__( 'Location', 'metabox-online-generator' ),
			),
			// array(
			// 	'id' => $prefix . 'map_location',
			// 	'type' => 'map',
			// 	'name' => esc_html__( 'Map location', 'metabox-online-generator' ),
			// ),
			array(
				'id' => $prefix . 'fb_event',
				'type' => 'url',
				'name' => esc_html__( 'FB Event', 'metabox-online-generator' ),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'event_get_meta_box' );



/* Small helper functions */
function debug_to_console( $data ) {
	$output = $data;
	if ( is_array( $output ) )
			$output = implode( ',', $output);

	echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
	echo "<script>console.log($data);</script>";
}

?>
