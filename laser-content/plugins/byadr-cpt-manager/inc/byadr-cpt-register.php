<?php 

if ( ! function_exists('byadr_register_cpt_faq') ) {

// Register Custom Post Type
function byadr_register_cpt_faq() {

	$labels = array(
		'name'                  => _x( 'FAQs', 'Post Type General Name', 'byadr' ),
		'singular_name'         => _x( 'FAQ', 'Post Type Singular Name', 'byadr' ),
		'menu_name'             => __( 'FAQ', 'byadr' ),
		'name_admin_bar'        => __( 'FAQs', 'byadr' ),
		'archives'              => __( 'Item Archives', 'byadr' ),
		'parent_item_colon'     => __( 'Parent Item:', 'byadr' ),
		'all_items'             => __( 'All Items', 'byadr' ),
		'add_new_item'          => __( 'Add New Item', 'byadr' ),
		'add_new'               => __( 'Add New', 'byadr' ),
		'new_item'              => __( 'New Item', 'byadr' ),
		'edit_item'             => __( 'Edit Item', 'byadr' ),
		'update_item'           => __( 'Update Item', 'byadr' ),
		'view_item'             => __( 'View Item', 'byadr' ),
		'search_items'          => __( 'Search Item', 'byadr' ),
		'not_found'             => __( 'Not found', 'byadr' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'byadr' ),
		'featured_image'        => __( 'Featured Image', 'byadr' ),
		'set_featured_image'    => __( 'Set featured image', 'byadr' ),
		'remove_featured_image' => __( 'Remove featured image', 'byadr' ),
		'use_featured_image'    => __( 'Use as featured image', 'byadr' ),
		'insert_into_item'      => __( 'Insert into item', 'byadr' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'byadr' ),
		'items_list'            => __( 'Items list', 'byadr' ),
		'items_list_navigation' => __( 'Items list navigation', 'byadr' ),
		'filter_items_list'     => __( 'Filter items list', 'byadr' ),
	);
	$args = array(
		'label'                 => __( 'FAQ', 'byadr' ),
		'description'           => __( 'Preguntas frecuentes', 'byadr' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 25,
		'menu_icon'             => 'dashicons-welcome-comments',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'faq', $args );

}
add_action( 'init', 'byadr_register_cpt_faq', 0 );

}