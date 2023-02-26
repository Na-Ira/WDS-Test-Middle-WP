<?php
/**
 * 
 * Custom Contact form functions
 *
 */


 /**
  * Ajax call
  */
add_action( 'wp_enqueue_scripts', 'ajax_form_scripts' );
function ajax_form_scripts() {

	/**
	 * Process form fields
	 */
	wp_enqueue_script( 'jquery-form' );

	/**
	 * Ajax script file
	 */
	wp_enqueue_script(
		'contact-form',
		plugins_url( 'js/contact-form.js', __FILE__ ),
		array( 'jquery' ),
		'1.0',
		true
	);

	/**
	 * Setting ajax object data
	 */
	wp_localize_script(
		'contact-form',
		'contact_form_object',
		array(
			'url'   => admin_url( 'admin-ajax.php' ),
			'nonce' => wp_create_nonce( 'contact-form-nonce' ),
		)
	);
}
