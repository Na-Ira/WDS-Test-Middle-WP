<?php
/**
 * Functions file for child theme: wdstestmiddle-child
 */
  
 /**
  * 
  * 
  * ========= Disable unnecessary parent theme styles =========
  * 
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

/**
 * disabling <p> and <br> in the records
 */
remove_filter( 'the_content', 'wpautop' );
/**
 * disabling <p> and <br> in the announce
 */
remove_filter( 'the_excerpt', 'wpautop' );
/**
 * disabling special characters in records
 */
remove_filter( 'the_content', 'wptexturize' );

/**
 * 
 * 
 * ========= Add styles and scripts js =========
 * 
 */

add_action('wp_enqueue_scripts', 'my_styles_and_scripts');
function my_styles_and_scripts() {	
    /** 
	  * ++++++++++ Styles ++++++++++
	 */
	// vendor css
	wp_register_style( 'vendor', 
		get_stylesheet_directory_uri() . '/assets/css/vendor.css', 
		array() 
		);
		wp_enqueue_style( 'vendor' );

   // variables css
	wp_register_style( 'variables', 
		get_stylesheet_directory_uri() . '/assets/css/variables.css', 
		array() 
		);
		wp_enqueue_style( 'variables' );

    // child-style css
	wp_register_style( 'child-style', 
		get_stylesheet_directory_uri() . '/style.css', 
		array(), 
		time() 
		);
		wp_enqueue_style( 'child-style' );

	/**
	 * ++++++++++ Script ++++++++++
	 */
    // Bootstrap
	wp_enqueue_script( 
		'bootstrap', 
		get_stylesheet_directory_uri() . '/assets/js/vendor/bootstrap.bundle.min.js',
		array(),
		time(),
		true 
	);

    // AOS
	wp_enqueue_script( 
		'aos', 
		get_stylesheet_directory_uri() . '/assets/js/vendor/aos.min.js',
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

/**
 * 
 * 
 * ========= For SVG Upload =========
 * 
 */
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
$filetype = wp_check_filetype( $filename, $mimes );
	return [
		 'ext'             => $filetype['ext'],
		 'type'            => $filetype['type'],
		 'proper_filename' => $data['proper_filename']
	];
 
 }, 10, 4 );
 
 add_filter( 'upload_mimes', 'cc_mime_types' );
 function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
 }
 
 add_action( 'admin_head', 'fix_svg' );
 function fix_svg() {
	echo '<style type="text/css">
			.attachment-266x266, .thumbnail img {
				  width: 100% !important;
				  height: auto !important;
			}
			</style>';
 }
/**
 * 
 * 
 * ========= NAV MENU =========
 *
 */
// Register Custom Navigation Walker
function register_navwalker(){
	require_once WP_CONTENT_DIR . '/themes/wdstestmiddle-child/classes/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// Register Nav Menus
register_nav_menus( array(
	'primary' => __( 'Header Menu', 'wdstestmiddle-child' ),
	'secondary' => __( 'Footer Menu', 'wdstestmiddle-child' ),
	'page_menu_header' => __( 'Page Menu Header', 'wdstestmiddle-child' ),
	'page_menu_footer' => __( 'Page Menu Footer', 'wdstestmiddle-child' ),

) );

// Adds a data attribute for dropdown toggles
add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
				$atts['data-bs-auto-close'] = 'outside';
				$atts['type'] = 'button';
        }
    }
    return $atts;
}


// Adds additional classes to dropdown-menu
add_filter( 'nav_menu_submenu_css_class', 'custom_dropdown_class', 10, 4 );
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

/**
 * 
 * 
 * ========= CUSTOM LOGO =========
 * 
 */
add_theme_support( 'custom-logo' );
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 40,
		'width'                => 180,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => ['site-title', 'site-description' ],
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}