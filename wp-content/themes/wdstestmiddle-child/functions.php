<?php
/**
 * Child theme functions
 *
 * Functions file for child theme, enqueues parent and child stylesheets by default.
 *
 * @since   1.0.0
 * @package aa
 */
  
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

    // child-style css
	wp_register_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array() );
	wp_enqueue_style( 'child-style' );

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

/* 
======= NAV MENU ==================================
*/
/**
 * Register Custom Navigation Walker
*/
function register_navwalker(){
	// Connects only to the parent theme
	require_once  get_template_directory() . '/classes/class-wp-bootstrap-navwalker.php';
	// require_once get_theme_file_uri() .'/classes/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// declare a new menu
register_nav_menus( array(
	'primary' => __( 'Header Menu', 'wdstestmiddle-child' ),
) );

// Adds a data attribute for dropdown toggles
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
				$atts['data-bs-auto-close'] = 'outside';
        }
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );



// Adds additional classes to dropdown-menu
function custom_dropdown_class( $classes, $args, $depth ) {
	$animate_classes = 'animate slide-in';
	$add_sub_dropdown = 'submenu-dropdown';

   if ( $classes && $depth === 0 ) {
		$classes[] = $animate_classes;
	}
	elseif ( $classes && $depth > 0 ) {
		$classes[] = $animate_classes . ' ' . $add_sub_dropdown; 
	}

	return $classes;
}
add_filter( 'nav_menu_submenu_css_class', 'custom_dropdown_class', 1, 3 );



/* 
======= END NAV MENU ==================================
*/

	// function special_nav_class ($classes, $item) {
	// 	if (in_array('nav-link', $classes) ){
	// 	  $classes[] .= ' active';
	// 	}
	// 	return $classes;
	//  }
	 
