<?php 

$path = preg_replace('/wp-content.*$/','',__DIR__);

require_once($path."wp-load.php");

if(isset($_POST['formContactSubmit']) && $_POST['formContactSubmit'] == "1") {

   // get the information from post submit
   $name = sanitize_text_field($_POST['name']);
   $email = sanitize_email($_POST['email']);
   $comments = sanitize_textarea_field($_POST['comments']);

   // write email information for sending to admin
   $to = 'narinaua@gmail.com';
   $subject = 'Form Get in Touch';
   $message = '';

   $message .= "Name: $name \n\n";
   $message .= "Email: $email \n\n";

   $comments = wpautop($comments);
   $comments = str_replace("<p>", "", $comments);
   $comments = str_replace("</p>", "", $comments);

   $message .= "Comments: $comments\n";
   $message .= 'Thank you!';

   wp_mail($to, $subject, $message);



   // return something for the user
   $return = [];
   $return['success'] = 1;
   $return['message'] = 'Thanks, your email was sent successfully';

   echo json_encode($return);

}

?>
