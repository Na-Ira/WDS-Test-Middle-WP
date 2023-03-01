<?php

add_action('wp_enqueue_scripts', 'slider_testimonials_script');
 
function slider_testimonials_script() {

   // splide css
   wp_register_style( 
      'splide', 
      plugins_url('css/splide.min.css', __FILE__), 
      array(),
      time() 
   );
   wp_enqueue_style( 'splide' );

   // splide css
   wp_register_style( 
      'splide-extension-video', 
      plugins_url('css/splide-extension-video.min.css', __FILE__), 
      array(),
      time() 
   );
   wp_enqueue_style( 'splide-extension-video' );

   // slider css
   wp_register_style( 
      'slider', 
      plugins_url('css/slider.css', __FILE__), 
      array(),
      time() 
   );
   wp_enqueue_style( 'slider' );


   // splide js
   wp_enqueue_script(
      'splide', 
      plugins_url('js/splide.min.js', __FILE__),
      array(),
      '1.0',
      true 
      );

   // splide-extension-video
   wp_enqueue_script(
      'splide-extension-video', 
      plugins_url('js/splide-extension-video.min.js', __FILE__),
      array(),
      time(),
      true 
      );

   // init slider js
   wp_enqueue_script(
      'slider', 
      plugins_url('js/init.js', __FILE__),
      array(),
      time(),
      true 
      );

}


/**
 * 
 * 
 * ========= Plugin TESTIMONIALS SLIDER  =========
 *
 */
// Register Plugin
add_action( 'init', 'testimonials_clients_slider' );
function testimonials_clients_slider() {
	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'wdstestmiddle-child' ),
		'singular_name'         => _x( 'Testimonials', 'Post Type General Name', 'wdstestmiddle-child' ),
		'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'wdstestmiddle-child' ),
		'name_admin_bar'        => _x( 'Custom Testimonials Slider', 'Add New on Toolbar', 'wdstestmiddle-child' ),
		'add_new'               => __( 'New Slide', 'wdstestmiddle-child' ),
		'add_new_item'          => __( 'Add New Slide', 'wdstestmiddle-child' ),
		'new_item'              => __( 'New Slider', 'wdstestmiddle-child' ),
		'edit_item'             => __( 'Edit Slider', 'wdstestmiddle-child' ),
		'view_item'             => __( 'View Slider', 'wdstestmiddle-child' ),
		'all_items'             => __( 'All Sliders', 'wdstestmiddle-child' ),
		'parent_item_colon'     => __( 'Parent Slider:', 'wdstestmiddle-child' ),
		'not_found'             => __( 'No slider found.', 'wdstestmiddle-child' ),
		'not_found_in_trash'    => __( 'No slider found in Trash.', 'wdstestmiddle-child' ),
		'insert_into_item'      => _x( 'Insert into Slider', 'wdstestmiddle-child' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Slider', 'wdstestmiddle-child' ),
	);

	$args = array(
		'labels'             => $labels,
		'label'              => __( 'Testimonials', 'wdstestmiddle-child' ),
		'description'        => __( 'Slider What My CLients Say', 'wdstestmiddle-child' ),
		'taxonomies'         => array( 'slider_category' ),
		'public'             => true,
		'publicly_queryable' => true,
		'menu_icon'          => 'dashicons-buddicons-buddypress-logo',
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slider' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => 20,
		'supports'           => array( 'title', 'thumbnail'),
		'show_in_rest'       => true,
	);

	register_post_type( 'tst_slider', $args );

	// Register Taxonomy
	register_taxonomy( 
		'slider_category', 
		'tst_slider', 
		array(
		'label'        => __( 'Client name', 'wdstestmiddle-child' ),
		'rewrite'      => array( 'slug' => 'tst_slider/slider_category' ),
		'hierarchical' => true
  ) );
}
