<?php 
/**
 * Custom Contact Form
 *
 * Plugin Name: Custom Contact Form
 * Description: This plugin for "Get in Touch" form 
 **/

 /**
 * To Do:
 * 1) Write the form code as a short code
 * 2) Write the process page that it submits to
 * 3) Write the js/ajax that will take the submission
 * 4) Add field validation
 * 5) Write the email send function
 **/

function custom_contact_form_field() {

   // Create a string variable to hold content
   $content = '';

   $content .= '<div class="contact-form-container">';

   $content = '<div id="response_sub"></div>';

   $content .= '<div class="mb-3" data-aos="fade-right" data-aos-offset="200" data-aos-duration="400">';
   $content .= '<input type="text" class="form-control" id="your_name" name="your_name" placeholder="Name" />';
   $content .= '</div>';

   $content .= '<div class="mb-3" data-aos="fade-right" data-aos-offset="200" data-aos-duration="500">';
   $content .= '<input type="email" class="form-control" id="your_email" name="your_email" placeholder="Email" />';
   $content .= '</div>';

   $content .= '<div class="mb-3" data-aos="fade-right" data-aos-offset="200" data-aos-duration="600">';
   $content .= '<textarea class="form-control" id="your_message" name="your_message" rows="5" placeholder="Write something..."></textarea>';
   $content .= '</div>';

   $content .= '<button class="btn btn-success" type="submit" name="form_contact_submit" id="form_contact_submit" onclick="submit_contact_form()">';
   $content .= '<span class="submit-btn"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd"
   d="M1.81818 4.85267L9.39603 11.5885C9.74047 11.8947 10.2595 11.8947 10.604 11.5885L18.1818 4.85267V15.4545C18.1818 15.9566 17.7748 16.3636 17.2727 16.3636H2.72727C2.22519 16.3636 1.81818 15.9566 1.81818 15.4545V4.85267ZM3.1865 3.63635H16.8134L9.99995 9.69276L3.1865 3.63635Z"
   fill="white" /></svg></span> ';
   $content .= 'Submit Message';
   $content .= '</button>';

   $content .= '</div>';


   return $content;

}
add_shortcode("contact_form", "custom_contact_form_field");


function add_js_in_contact_form() { 
  ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="<?php echo home_url( ); ?>/wp-content/plugins/custom-contact-form/js/contact-form.js"></script>
<?php
  
}

add_action('wp_footer', 'add_js_in_contact_form')

?>
