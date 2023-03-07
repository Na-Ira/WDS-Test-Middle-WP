<?php

add_action('wp_enqueue_scripts', 'portfolio_gallery_script');
 
function portfolio_gallery_script() {

      // glightbox css
      wp_register_style( 
         'glightbox', 
         plugins_url('css/glightbox.min.css', __FILE__), 
         array(),
         "1.0" 
      );
      wp_enqueue_style( 'glightbox' );

      // gallery css
      wp_register_style( 
         'portfolio-gallery', 
         plugins_url('css/portfolio-gallery.css', __FILE__), 
         array(),
         time() 
      );
      wp_enqueue_style( 'portfolio-gallery' );

      // glightbox js
      wp_enqueue_script(
         'glightbox', 
         plugins_url('js/glightbox.min.js', __FILE__),
         array(),
         "1.0",
         true
         );

      // glightbox js
      wp_enqueue_script(
         'portfolio-gallery', 
         plugins_url('js/portfolio-gallery.js', __FILE__),
         array(),
         time(),
         true
         );

}

/**
 * 
 * 
 * ========= Plugin Portfolio Gallery  =========
 *
 */
// Register Plugin
add_action( 'init', 'portfolio_gallery' );
function portfolio_gallery() {
	$labels = array(
		'name'                  => _x( 'Portfolio Gallery', 'Post Type General Name', 'wdstestmiddle-child' ),
		'singular_name'         => _x( 'Portfolio Gallery', 'Post Type General Name', 'wdstestmiddle-child' ),
		'menu_name'             => _x( 'Portfolio Gallery', 'Admin Menu text', 'wdstestmiddle-child' ),
		'name_admin_bar'        => _x( 'Custom Portfolio Gallery', 'Add New on Toolbar', 'wdstestmiddle-child' ),
		'add_new'               => __( 'New Portfolio', 'wdstestmiddle-child' ),
		'add_new_item'          => __( 'Add New Portfolio', 'wdstestmiddle-child' ),
		'new_item'              => __( 'New Portfolio', 'wdstestmiddle-child' ),
		'edit_item'             => __( 'Edit Portfolio', 'wdstestmiddle-child' ),
		'view_item'             => __( 'View Portfolio', 'wdstestmiddle-child' ),
		'all_items'             => __( 'All Portfolio', 'wdstestmiddle-child' ),
		'parent_item_colon'     => __( 'Parent Portfolio:', 'wdstestmiddle-child' ),
		'not_found'             => __( 'No portfolio found.', 'wdstestmiddle-child' ),
		'not_found_in_trash'    => __( 'No portfolio found in Trash.', 'wdstestmiddle-child' ),
		'insert_into_item'      => _x( 'Insert into Portfolio', 'wdstestmiddle-child' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Portfolio', 'wdstestmiddle-child' ),
	);

	$args = array(
		'labels'             => $labels,
		'label'              => __( 'Portfolio Gallery', 'wdstestmiddle-child' ),
		'description'        => __( 'Portfolio Gallery', 'wdstestmiddle-child' ),
		'taxonomies'         => array( 'portfolio_category' ),
		'public'             => true,
		'publicly_queryable' => true,
		'menu_icon'          => 'dashicons-format-gallery',
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio-gallery' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => 20,
		'supports'           => array( 'title', 'thumbnail'),
		'show_in_rest'       => true,
	);

	register_post_type( 'portfolio-gallery', $args );

	// Register Taxonomy
	register_taxonomy( 
		'portfolio_category', 
		'folio_gallery', 
		array(
		'label'        => __( 'Portfolio name', 'wdstestmiddle-child' ),
		'rewrite'      => array( 'slug' => 'folio_gallery/portfolio_category' ),
		'hierarchical' => true
  ) );
}

