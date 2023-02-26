<?php
/**
 * The main template file
 */

get_header(); ?>

<!-- hero section -->
<section class="hero d-flex" id="home">
   <div class="hero-container d-grid align-items-center position-relative">
      <div class="hero-text">
         <h1><?php single_post_title(); ?></h1>
         <p class="hero-subtext pb-40 mb-0">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
            dolor magna risus sed. Et dictumst vel.
         </p>
         <button class="btn btn-success" type="button">
            Free Seo Consulting Training
         </button>
      </div>
   </div>
</section>

<!-- about section -->
<section class="about pt-0 px-0" id="about">
   <div class="about-container d-grid">
      <div class="about-text" data-aos="flip-up" data-aos-duration="700">
         <h3>Superstar SEO</h3>
         <p class="about-subtext mb-0 pb-30">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
            amet, platea diam rhoncus, sem tortor, turpis ac tincidunt. Nisi
            adipiscing a suspendisse justo eleifend volutpat et vitae ac.
            Consequat in mi iaculis hendrerit mauris mattis. Lacus risus
            amet at magna urna. Felis nec orci a, quis nullam vel sem nunc
            enim. Sit mi tellus eget commodo augue.
         </p>
         <button class="btn btn-success" type="button">Learn More</button>
      </div>
      <div class="about-img">
         <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/img_devices.png" alt="Devices" />
      </div>
   </div>
</section>

<!-- testimonials section  -->
<section class="testimonials pt-0 px-0" id="testimonials">
   <div class="testimonials-container splide" aria-label="splide-slider">
      <div class="testimonials-header d-flex w-1170 justify-content-between m-auto">
         <h2 data-aos="fade-right" data-aos-duration="700">
            What My&nbsp;<span>Clients Say</span>
         </h2>
         <!-- Slider  -->
         <?php get_template_part ('slider-testimonials/testimonials-slider'); ?>
         <!-- End Slider  -->
      </div>
</section>

<!-- contact section -->
<section class="contact" id="contact">
   <div class="contact-container d-grid position-relative w-1170 m-auto">
      <div class="personal-contact">
         <h2 data-aos="fade-left" data-aos-offset="200" data-aos-duration="600">
            Get in Touch
         </h2>
         <div class="address">
            <a href="mailto:hello@domainexample.com">hello@domainexample.com</a>
            <p class="mb-0">237 Haylee Islands Suite 960</p>
         </div>
      </div>
      <div class="contact-form-wrapper position-relative">
         <form class="contact-form" id="contact_form" method="post">
            <?php echo do_shortcode('[contact_form]'); ?>
         </form>
      </div>
   </div>
</section>

<?php get_footer(); ?>
