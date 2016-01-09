<?php

// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );

// Flush your rewrite rules
function bones_flush_rewrite_rules() {
	flush_rewrite_rules();
}


function LM_banner_images() { 
	// creating (registering) the custom type 
	register_post_type( 'custom_banners',

		array( 'labels' => array(
			'name' => __( 'MBC Theme - Home Banners', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Custom Banner', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'All Custom Banners', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Banner', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Banner', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Banner', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Banners', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Banners', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the banner image editor', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 200, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'custom_banners', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'custom_banners', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => true,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array('title', 'editor', 'page-attributes')
		) /* end of options */
	); /* end of register post type */
	
}

function LM_banner_content_box() { 
	// creating (registering) the custom type 
	register_post_type( 'banner_content',

		array( 'labels' => array(
			'name' => __( 'MBC Theme - Banner Content', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Banner Content', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'Banner Content', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( '', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( '', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Banner Content', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'Edit Banner Content', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Banner Content', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Banner Content', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the banner image editor', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 201, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'custom_banners', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'custom_banners', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => true,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array('title', 'editor')
		) /* end of options */
	); /* end of register post type */
	
}

function LM_testimonials() {
	
	// creating (registering) the custom type 
	register_post_type( 'testimonials',

		array( 'labels' => array(
			'name' => __( 'MBC Theme - Testimonials', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Testimonial', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'All Testimonials', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Testimonial', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Testimonials', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Testimonial', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Testimonials', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Testimonials', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the Testimonial editor', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 202, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'testimonials', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'testimonials', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => true,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array('title', 'editor', 'page-attributes')
		) /* end of options */
	); /* end of register post type */
}

function LM_featured_content() {
	
	// creating (registering) the custom type 
	register_post_type( 'features',

		array( 'labels' => array(
			'name' => __( 'MBC Theme - Featured Content', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Feature', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'All Features', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Feature', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Features', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Feature', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Features', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Features', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the Featured Content editor', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 203, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'testimonials', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'testimonials', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => true,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array('title', 'editor', 'page-attributes')
		) /* end of options */
	); /* end of register post type */
}

	// adding the function to the Wordpress init
	add_action( 'init', 'LM_banner_images');
	add_action( 'init', 'LM_banner_content_box');
	add_action( 'init', 'LM_testimonials');
	add_action( 'init', 'LM_featured_content');
	

?>