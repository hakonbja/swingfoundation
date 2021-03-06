<?php


function swifo_scripts() {
	$ver = filemtime( get_stylesheet_directory() . '/style.css' );
  // Theme stylesheet
	wp_enqueue_style( 'swifo-style', get_stylesheet_uri(), '', filemtime( get_stylesheet_directory() . '/style.css' ) );

	// Javascript
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', '', filemtime( get_template_directory() . '/assets/js/main.js' ), false);
  wp_enqueue_script('glider', get_template_directory_uri() . '/assets/js/glider.min.js');
}

add_action( 'wp_enqueue_scripts', 'swifo_scripts' );

add_theme_support(  'post-thumbnails', array( 'post', 'page', 'events', 'teachers', 'classes' )  );

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
		'title' => esc_html__( 'Event details' ),
		'post_types' => array( 'events' ),
		'context' => 'side',
		'priority' => 'high',
		'autosave' => 'false',
		'fields' => array(
			array(
				'id' => $prefix . 'start_date',
				'type' => 'date',
				'name' => esc_html__( 'Start Date' ),
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

/* Registration meta box for Events */
function event_get_reg_meta_box( $meta_boxes ) {
	$prefix = 'reg_';

	$meta_boxes[] = array(
		'id' => 'event_reg_meta_boxes',
		'title' => esc_html__( 'Registration details' ),
		'post_types' => array( 'events' ),
		'context' => 'side',
		'priority' => 'high',
		'autosave' => 'false',
		'fields' => array(
			array(
				'id' => $prefix . 'title',
				'type' => 'text',
				'name' => esc_html__( 'Title' ),
			),
			array(
				'id' => $prefix . 'start_date',
				'type' => 'date',
				'name' => esc_html__( 'Registration Opens' ),
			),
			array(
				'id' => $prefix . 'end_date',
				'type' => 'date',
				'name' => esc_html__( 'Registration Closes'),
			),
			array(
				'id' => $prefix . 'form_url',
				'type' => 'url',
				'name' => esc_html__( 'Form URL'),
			)
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'event_get_reg_meta_box' );

/* Meta box for Classes */
function class_get_meta_box( $meta_boxes ) {
	$prefix = 'class_';

	$meta_boxes[] = array(
		'id' => 'class_meta_boxes',
		'title' => esc_html__( 'Class details' ),
		'post_types' => array( 'classes' ),
		'context' => 'side',
		'priority' => 'high',
		'autosave' => 'false',
		'fields' => array(
			array(
				'id' => $prefix . 'show_on_frontpage',
				'name' => esc_html__( 'Show on Frontpage', 'metabox-online-generator' ),
				'type' => 'radio',
				'placeholder' => '',
				'options' => array(
					'Yes' => esc_html__( 'Yes', 'metabox-online-generator' ),
					'No' => esc_html__( 'No', 'metabox-online-generator' ),
				),
				'inline' => 'true',
				'std' => 'Yes',
			),
			array(
				'id' => $prefix . 'type',
				'type' => 'select',
				'name' => esc_html__( 'Type of Class' ),
				'options' => array(
					'Lindy Hop' => esc_html__( 'Lindy Hop' ),
					'Solo' => esc_html__( 'Solo' ),
				),
				'std' => 'Lindy Hop',
			),
			array(
				'id' => $prefix . 'short_title',
				'type' => 'text',
				'name' => esc_html__( 'Short Title' ),
			),
			array(
				'id' => $prefix . 'weekday',
				'type' => 'select',
				'name' => esc_html__( 'Weekday' ),
				'options' => array(
					'Mondays' => esc_html__( 'Mondays' ),
					'Tuesdays' => esc_html__( 'Tuesdays' ),
					'Wednesdays' => esc_html__( 'Wednesdays' ),
					'Thursdays' => esc_html__( 'Thursdays' ),
					'Fridays' => esc_html__( 'Fridays' ),
					'Saturdays' => esc_html__( 'Saturdays' ),
					'Sundays' => esc_html__( 'Sundays' ),
				),
				'std' => 'Tuesdays',
			),
			array(
				'id' => $prefix . 'start_time',
				'type' => 'time',
				'name' => esc_html__( 'Start Time' ),
			),
			array(
				'id' => $prefix . 'end_time',
				'type' => 'time',
				'name' => esc_html__( 'End Time' ),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'class_get_meta_box' );


/* Small helper functions */
function debug_to_console( $data ) {
	$output = $data;
	if ( is_array( $output ) )
			$output = implode( ',', $output);

	echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
	echo "<script>console.log($data);</script>";
}

// add custom post type Event
function create_events_posttype() {

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
	'label'               => __( 'Events'),
	'description'         => __( 'Events organized by Swing Foundation'),
	'labels'              => $labels,
	// Features this CPT supports in Post Editor
	'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
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
	'menu_position'       => 4,
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
add_action( 'init', 'create_events_posttype' );


// add custom post type FAQ
function create_faq_posttype() {

	$labels = array(
		'name'                => _x( 'FAQ', 'Post Type General Name'),
		'singular_name'       => _x( 'FAQ', 'Post Type Singular Name'),
		'menu_name'           => __( 'FAQs'),
		'parent_item_colon'   => __( 'Parent FAQ'),
		'all_items'           => __( 'All FAQs'),
		'view_item'           => __( 'View FAQ'),
		'add_new_item'        => __( 'Add New FAQ'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit FAQ'),
		'update_item'         => __( 'Update FAQ'),
		'search_items'        => __( 'Search FAQs'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash'),
);

$args = array(
	'label'               => __( 'FAQ'),
	'description'         => __( 'Frequently asked questions'),
	'labels'              => $labels,
	// Features this CPT supports in Post Editor
	'supports'            => array( 'title', 'editor'),
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
	'menu_icon'						=> 'dashicons-editor-help'
);
 
	register_post_type( 'faq', $args );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_faq_posttype' );


// add custom post type Teachers
function create_teachers_posttype() {

	$labels = array(
		'name'                => _x( 'Teachers', 'Post Type General Name'),
		'singular_name'       => _x( 'Teacher', 'Post Type Singular Name'),
		'menu_name'           => __( 'Teachers'),
		'parent_item_colon'   => __( 'Parent Teacher'),
		'all_items'           => __( 'All Teachers'),
		'view_item'           => __( 'View Teacher'),
		'add_new_item'        => __( 'Add New Teacher'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Teacher'),
		'update_item'         => __( 'Update Teacher'),
		'search_items'        => __( 'Search Teachers'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash'),
);

$args = array(
	'label'               => __( 'Teachers'),
	'description'         => __( 'The teachers of Swing Foundation'),
	'labels'              => $labels,
	// Features this CPT supports in Post Editor
	'supports'            => array( 'title', 'editor', 'thumbnail'),
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
	'menu_position'       => 6,
	'can_export'          => true,
	'has_archive'         => true,
	'exclude_from_search' => false,
	'publicly_queryable'  => true,
	'capability_type'     => 'page',
	'menu_icon'						=> 'dashicons-groups'
);
 
	register_post_type( 'teachers', $args );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_teachers_posttype' );

// add custom post type Classes
function create_classes_posttype() {

	$labels = array(
		'name'                => _x( 'Classes', 'Post Type General Name'),
		'singular_name'       => _x( 'Class', 'Post Type Singular Name'),
		'menu_name'           => __( 'Classes'),
		'parent_item_colon'   => __( 'Parent Class'),
		'all_items'           => __( 'All Classes'),
		'view_item'           => __( 'View Class'),
		'add_new_item'        => __( 'Add New Class'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Class'),
		'update_item'         => __( 'Update Class'),
		'search_items'        => __( 'Search Class'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash'),
);

$args = array(
	'label'               => __( 'Classes'),
	'description'         => __( 'Classes offered by Swing Foundation'),
	'labels'              => $labels,
	// Features this CPT supports in Post Editor
	'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes'),
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
	'menu_icon'						=> 'dashicons-welcome-learn-more'
);
 
	register_post_type( 'classes', $args );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_classes_posttype' );

?>
