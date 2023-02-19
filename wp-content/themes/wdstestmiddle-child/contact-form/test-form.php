<?php 
/**
 * Template Name: Contact Form
**/
?>

<?php
if(isset($_POST['submitted'])) {
	if(trim($_POST['contactName']) === '') {
		$nameError = 'Please enter your name.';
		$hasError = true;
	} else {
		$name = trim($_POST['contactName']);
	}

	if(trim($_POST['email']) === '')  {
		$emailError = 'Please enter your email address.';
		$hasError = true;
	} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
		$emailError = 'You entered an invalid email address.';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	if(trim($_POST['comments']) === '') {
		$commentError = 'Please enter a message.';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['comments']));
		} else {
			$comments = trim($_POST['comments']);
		}
	}

	if(!isset($hasError)) {
		$emailTo = get_option('narinaua@gmail.com');
		if (!isset($emailTo) || ($emailTo == '') ){
			$emailTo = get_option('admin_email');
		}
		$subject = '[PHP Snippets] From '.$name;
		$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
		$headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		wp_mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}

} ?>


<div class="entry-content">
   <div class="send-mail">
      <?php if(isset($emailSent) && $emailSent == true) { ?>
      <div class="thanks">
         <p>Thanks, your email was sent successfully.</p>
      </div>
      <?php } else { ?>

      <?php if(isset($hasError) || isset($captchaError)) { ?>
      <div class="error">Sorry, an error occured. </div>
      <?php } ?>
   </div>

   <form id="contactForm" method="post" action="<?php the_permalink(); ?>">
      <!-- <//?php wp_nonce_field( 'faire-don', 'cagnotte-verif' ); ?> -->
      <div class="contact-form-container">
         <div class="mb-3" data-aos="fade-right" data-aos-offset="200" data-aos-duration="400">

            <input type="text" class="form-control required requiredField" id="name" name="contactName"
               placeholder="Name" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" />

            <?php if($nameError != '') { ?>
            <span class="error"><?=$nameError;?></span>
            <?php } ?>

         </div>
         <div class="mb-3" data-aos="fade-right" data-aos-offset="200" data-aos-duration="500">

            <input type="email" class="form-control required requiredField" id="email" name="email" placeholder="Email"
               value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" />

            <?php if($emailError != '') { ?>
            <span class="error"><?=$emailError;?></span>
            <?php } ?>

         </div>
         <div class="mb-0" data-aos="fade-right" data-aos-offset="200" data-aos-duration="500">

            <textarea class="form-control required requiredField" id="message" name="comments" rows="5"
               placeholder="Write something...">
					<?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?>
				</textarea>

            <?php if($commentError != '') { ?>
            <span class="error"><?=$commentError;?></span>
            <?php } ?>

         </div>
         <button class="btn btn-success" type="submit">
            <span class="submit-btn">
               <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                     d="M1.81818 4.85267L9.39603 11.5885C9.74047 11.8947 10.2595 11.8947 10.604 11.5885L18.1818 4.85267V15.4545C18.1818 15.9566 17.7748 16.3636 17.2727 16.3636H2.72727C2.22519 16.3636 1.81818 15.9566 1.81818 15.4545V4.85267ZM3.1865 3.63635H16.8134L9.99995 9.69276L3.1865 3.63635Z"
                     fill="white" />
               </svg>
            </span>
            Submit Message
         </button>
      </div>
      <!-- Checking if the form was sent -->
      <input type="hidden" name="submitted" id="submitted" value="true" />
   </form>

   <?php } ?>
</div>
