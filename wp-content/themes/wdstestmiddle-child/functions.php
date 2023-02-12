<?php
/**
 * Child theme functions
 *
 * Functions file for child theme, enqueues parent and child stylesheets by default.
 *
 * @since   1.0.0
 * @package aa
 */
  
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
if ( ! function_exists( 'aa_enqueue_styles' ) ) {
    // Add enqueue function to the desired action.
    add_action( 'wp_enqueue_scripts', 'aa_enqueue_styles' );
     
    /**
     * Enqueue Styles.
     *
     * Enqueue parent style and child styles where parent are the dependency
     * for child styles so that parent styles always get enqueued first.
     *
     * @since 1.0.0
     */
    function aa_enqueue_styles() {
        // Parent style variable.
        $parent_style = 'parent-style';
         
        // Enqueue Parent theme's stylesheet.
        wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
         
        // Enqueue Child theme's stylesheet.
        // Setting 'parent-style' as a dependency will ensure that the child theme stylesheet loads after it.
        wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ) );
    }
}

/*
======= Disable unnecessary parent theme styles =====================
*/
add_action( 'wp_enqueue_scripts', 'remove_parent_style', 100);
function remove_parent_style() {
    wp_dequeue_style( 'parent-style' );
    wp_deregister_style( 'parent-style' );
}

add_action( 'wp_enqueue_scripts', 'remove_twenty_twenty_one_print_style', 100);
function remove_twenty_twenty_one_print_style() {
    wp_dequeue_style( 'twenty-twenty-one-print-style' );
    wp_deregister_style( 'twenty-twenty-one-print-style' );
}

add_action( 'wp_enqueue_scripts', 'remove_twenty_twenty_one_style_inline', 100);
function remove_twenty_twenty_one_style_inline() {
    wp_dequeue_style( 'twenty-twenty-one-style-inline' );
    wp_deregister_style( 'twenty-twenty-one-style-inline' );
}

add_action( 'wp_enqueue_scripts', 'remove_classic_theme_styles', 100);
function remove_classic_theme_styles() {
    wp_dequeue_style( 'classic-theme-styles' );
    wp_deregister_style( 'classic-theme-styles' );
}

add_action( 'wp_enqueue_scripts', 'remove_twenty_twenty_one_style', 100);
function remove_twenty_twenty_one_style() {
    wp_dequeue_style( 'twenty-twenty-one-style' );
    wp_deregister_style( 'twenty-twenty-one-style' );
}

add_action( 'wp_enqueue_scripts', 'remove_twenty_twenty_one_responsive_embeds_script', 100);
function remove_twenty_twenty_one_responsive_embeds_script() {
    wp_dequeue_script( 'twenty-twenty-one-responsive-embeds-script' );
    wp_deregister_script( 'twenty-twenty-one-responsive-embeds-script' );
}

/* 
======= Add styles and scripts js ==================================
*/

add_action('wp_enqueue_scripts', 'my_styles_and_scripts');
function my_styles_and_scripts() {	
    /*
    Styles ---------------------
    */
	// vendor css
	wp_register_style( 'vendor', get_stylesheet_directory_uri() . '/assets/css/vendor.css', array() );
	wp_enqueue_style( 'vendor' );

   // variables css
	wp_register_style( 'variables', get_stylesheet_directory_uri() . '/assets/css/variables.css', array() );
	wp_enqueue_style( 'variables' );

    /*
    Script ------------------------
    */
    // Bootstrap
	wp_enqueue_script( 
		'bootstrap', 
		get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js',
		array(),
		time(),
		true // true - in footer, false – in header
	);

    // Aos
	wp_enqueue_script( 
		'aos', 
		get_stylesheet_directory_uri() . '/assets/js/aos.min.js',
		array(),
		time(),
		true
	);

    // Splide
	wp_enqueue_script( 
		'splide', 
		get_stylesheet_directory_uri() . '/assets/js/splide.min.js',
		array(),
		time(),
		true
	);

    // Splide video
	wp_enqueue_script( 
		'splide-video-js', 
		get_stylesheet_directory_uri() . '/assets/js/splide-extension-video.min.js',
		array(),
		time(),
		true
	);

    // Main
	wp_enqueue_script( 
		'main', 
		get_stylesheet_directory_uri() . '/assets/js/main.js',
		array(),
		time(),
		true
	);
}



