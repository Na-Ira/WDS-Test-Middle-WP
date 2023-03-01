<?php 
/**
 * Plugin Name: Custom Contact Form
 * Plugin URI: https://github.com/Na-Ira/WDS-Test-Middle-WP/tree/main/wp-content/plugins/custom-contact-form
 * Author: Iryna Nahorna
 * Author URI: https://folio-ira.nastmobile.com/
 * Text Domain: custom-contact-form
 * Description: This plugin for "Get in Touch" form
 * Version: 1.0
 **/

 /**
  * Initializing plugin code (must have in main file)
  */
add_action('plugins_loaded', 'custom_contact_form_plugin');

function custom_contact_form_plugin() {
    require_once plugin_dir_path( __FILE__ ) . 'functions.php';
    require_once plugin_dir_path( __FILE__ ) . 'process/index.php';
}

/**
 * Shiotcode plugin
 */
 add_shortcode("contact_form", "custom_contact_form_field");

 /**
 * Activation hook (must have in main file) 
 */
register_activation_hook( __FILE__, 'custom_contact_form_field' );

function custom_contact_form_field() {

   // Create a string variable to hold content
   $content = '';

   $content .= '<form class="contact-form" id="contact_form" method="#">';

   $content .= '<div class="contact-form-container">';

   $content .= '<div class="mb-3" data-aos="fade-right" data-aos-offset="200" data-aos-duration="400">';
   $content .= '<input type="text" class="form-control required your_name" id="your_name" name="name" placeholder="Name"/>';
   $content .= '</div>';

   $content .= '<div class="mb-3" data-aos="fade-right" data-aos-offset="200" data-aos-duration="500">';
   $content .= '<input type="email" class="form-control required your_email" id="your_email" name="email" placeholder="Email" />';
   $content .= '</div>';

   $content .= '<div class="mb-3" data-aos="fade-right" data-aos-offset="200" data-aos-duration="600">';
   $content .= '<textarea class="form-control required your_comment" id="your_comment" name="comment" rows="5" placeholder="Write something..." ></textarea>';
   $content .= '</div>';

   $content .= '<button class="btn btn-success" type="submit" name="form_contact_submit" id="form_contact_submit">';
   $content .= '<span class="submit-btn"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd"
   d="M1.81818 4.85267L9.39603 11.5885C9.74047 11.8947 10.2595 11.8947 10.604 11.5885L18.1818 4.85267V15.4545C18.1818 15.9566 17.7748 16.3636 17.2727 16.3636H2.72727C2.22519 16.3636 1.81818 15.9566 1.81818 15.4545V4.85267ZM3.1865 3.63635H16.8134L9.99995 9.69276L3.1865 3.63635Z"
   fill="white" /></svg></span> ';
   $content .= 'Submit Message';
   $content .= '</button>';

   $content .= '</div>';

   $content .= '</form>';


   return $content;

}

?>
