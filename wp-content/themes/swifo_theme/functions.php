<?php


function swifo_scripts() {
	$ver = filemtime( get_stylesheet_directory() . '/style.css' );
  // Theme stylesheet
	wp_enqueue_style( 'swifo-style', get_stylesheet_uri(), '', filemtime( get_stylesheet_directory() . '/style.css' ) );

	// Javascript
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', '', filemtime( get_template_directory() . '/assets/js/main.js' ), false);
}

add_action( 'wp_enqueue_scripts', 'swifo_scripts' );

add_theme_support(  'post-thumbnails', array( 'post', 'page', 'events' )  );

function register_my_menus() {
  register_nav_menus(
		array(
			'header-navbar'=> __( 'Header Navbar' ),
			'quicklinks' => __( 'Quicklinks'),
			'footer-menu' => __( 'Footer Menu')
			)
		);
}
add_action( 'init', 'register_my_menus' );

/* Custom meta box for Events */
function event_get_meta_box( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = array(
		'id' => 'event_meta_boxes',
		'title' => esc_html__( 'News' ),
		'post_types' => array( 'events' ),
		'context' => 'side',
		'priority' => 'high',
		'autosave' => 'false',
		'fields' => array(
			array(
				'id' => $prefix . 'start_date',
				'type' => 'date',
				'name' => esc_html__( 'Date' ),
			),
			array(
				'id' => $prefix . 'end_date',
				'type' => 'date',
				'name' => esc_html__( 'End Date'),
			),
			array(
				'id' => $prefix . 'start_time',
				'name' => esc_html__( 'Start time'),
				'type' => 'time',
			),
			array(
				'id' => $prefix . 'end_time',
				'name' => esc_html__( 'End time'),
				'type' => 'time',
			),
			array(
				'id' => $prefix . 'location',
				'type' => 'text',
				'name' => esc_html__( 'Location'),
			),
			array(
				'id' => $prefix . 'fb_event',
				'type' => 'url',
				'name' => esc_html__( 'FB Event'),
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

// add custom post type Event
function create_posttype() {

	$labels = array(
		'name'                => _x( 'Events', 'Post Type General Name'),
		'singular_name'       => _x( 'Event', 'Post Type Singular Name'),
		'menu_name'           => __( 'Events'),
		'parent_item_colon'   => __( 'Parent Event'),
		'all_items'           => __( 'All Events'),
		'view_item'           => __( 'View Event'),
		'add_new_item'        => __( 'Add New Event'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Event'),
		'update_item'         => __( 'Update Event'),
		'search_items'        => __( 'Search Event'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash'),
);

$args = array(
	'label'               => __( 'events'),
	'description'         => __( 'Events organized by Swing Foundation'),
	'labels'              => $labels,
	// Features this CPT supports in Post Editor
	'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions',),
	/* A hierarchical CPT is like Pages and can have
	* Parent and child items. A non-hierarchical CPT
	* is like Posts.
	*/ 
	'hierarchical'        => false,
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'show_in_nav_menus'   => true,
	'show_in_admin_bar'   => true,
	'menu_position'       => 5,
	'can_export'          => true,
	'has_archive'         => true,
	'exclude_from_search' => false,
	'publicly_queryable'  => true,
	'capability_type'     => 'page',
	'menu_icon'						=> 'dashicons-calendar-alt'
);
 
	register_post_type( 'events', $args );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

?>
