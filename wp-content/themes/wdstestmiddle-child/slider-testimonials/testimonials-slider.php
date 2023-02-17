<?php 
/**
 * Testimonials Slider Plugin
**/
?>

<!-- Splide css -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/css/vendor/slider/splide.min.css' ?>">

<!-- Splide video css -->
<link rel="stylesheet"
   href="<?php echo get_stylesheet_directory_uri() . '/assets/css/vendor/slider/splide-extension-video.min.css' ?>">


<div class="nav-slider">
   <div class="splide__arrows splide__arrows--ltr position-relative w-100">
      <!-- Prev btn -->
      <button class="splide__arrow splide__arrow--prev" type="button" aria-label="Previous slide"
         aria-controls="splide01-track">
         <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_1_100)">
               <path
                  d="M0.229141 9.44706C0.229376 9.44683 0.22957 9.44655 0.229843 9.44632L4.31203 5.38382C4.61785 5.07949 5.1125 5.08062 5.41691 5.38648C5.72129 5.6923 5.72012 6.18695 5.4143 6.49132L2.67352 9.21882H19.2188C19.6502 9.21882 20 9.56858 20 10.0001C20 10.4316 19.6502 10.7813 19.2188 10.7813H2.67355L5.41426 13.5088C5.72008 13.8132 5.72125 14.3078 5.41687 14.6137C5.11246 14.9196 4.61777 14.9206 4.31199 14.6163L0.229805 10.5538C0.22957 10.5536 0.229374 10.5533 0.229101 10.5531C-0.0768757 10.2477 -0.0758991 9.75143 0.229141 9.44706Z"
                  fill="black" />
            </g>
            <defs>
               <clipPath id="clip0_1_100">
                  <rect width="20" height="20" fill="white" transform="matrix(-1 0 0 1 20 0)" />
               </clipPath>
            </defs>
         </svg>
      </button>
      <!-- Next btn -->
      <button class="splide__arrow splide__arrow--next" type="button" aria-label="Next slide"
         aria-controls="splide01-track">
         <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_1_94)">
               <path
                  d="M19.7709 9.44706C19.7706 9.44683 19.7704 9.44655 19.7702 9.44632L15.688 5.38382C15.3821 5.07949 14.8875 5.08062 14.5831 5.38648C14.2787 5.6923 14.2799 6.18695 14.5857 6.49132L17.3265 9.21882H0.78125C0.349766 9.21882 0 9.56858 0 10.0001C0 10.4316 0.349766 10.7813 0.78125 10.7813H17.3264L14.5857 13.5088C14.2799 13.8132 14.2788 14.3078 14.5831 14.6137C14.8875 14.9196 15.3822 14.9206 15.688 14.6163L19.7702 10.5538C19.7704 10.5536 19.7706 10.5533 19.7709 10.5531C20.0769 10.2477 20.0759 9.75143 19.7709 9.44706Z"
                  fill="black" />
            </g>
            <defs>
               <clipPath id="clip0_1_94">
                  <rect width="20" height="20" fill="black" />
               </clipPath>
            </defs>
         </svg>
      </button>
   </div>
</div>
<!-- .nav-slider -->
</div>
<!-- .testimonials-header -->



<!-- ======== Slider =============== -->
<!--
** Get array slider
-->
<?php
		$args_array = array(
			'posts_per_page' => -1,
			'post_type'      => 'tst_slider',
			'post_status'    => 'publish',
			'orderby'        => 'post_type',
        	'order'          => 'DESC'
		);
		 $get_tst_slider_posts = get_posts( $args_array );
?>



<div id="wrap-testimonial" class="splide-container">
   <div class="splide__track">
      <div class="splide__list">
         <?php
             if ( $get_tst_slider_posts ) {
               foreach ( $get_tst_slider_posts as $post ) :
               setup_postdata( $post );
         ?>
         <!-- .splide__slide -->
         <div class="splide__slide" data-splide-html-video="<?php the_field('link_video'); ?>">
            <div class="splide-slide-container position-relative">
               <div class="splide-container-inner">
                  <div class="splide__slide__container splide__slide__container--has-video">
                     <?php 
                     $image = get_field('img_slide');
                     if( !empty( $image ) ): ?>
                     <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                     <?php endif; ?>
                  </div>
                  <div class="splide-text">
                     <p class="splide-text__testimonials pb-20">
                        <?php the_field('text_testimonials'); ?>
                     </p>
                     <p class="name mb-0"><?php the_field('client_name'); ?></p>
                     <p class="position mb-0"><?php the_field('client_position'); ?></p>
                  </div>
               </div>
            </div>
         </div>
         <!-- end .splide__slide -->
         <?php
               endforeach; 
               wp_reset_postdata();
               }
            ?>
      </div>
   </div>

   <!-- Progress bar -->
   <div class="my-slider-progress-container w-1170">
      <div class="my-slider-progress-inner">
         <div class="splide__pagination--number">
            <div class="my-slider-progress">
               <div class="my-slider-progress-bar"></div>
            </div>
         </div>
      </div>
   </div>
</div>


<!-- Splide js -->
<script src="<?php echo get_stylesheet_directory_uri() . '/assets/js/vendor/splide.min.js' ?>"></script>
<!-- Splide video js -->
<script src="<?php echo get_stylesheet_directory_uri() . '/assets/js/vendor/splide-extension-video.min.js' ?>">
</script>

<!-- ========== Splide Slider =========== -->
<!-- Init Slider -->
<script>
document.addEventListener('DOMContentLoaded', function() {
   const splide = new Splide(".splide", {
      type: "loop",
      gap: "2.5rem",
      pagination: true,
      perPage: 1,
      perMove: 1,
      trimSpace: "move",
      focus: "center",
      cover: true,
      video: {
         loop: false,
         mute: true,
      },
   });

   /**
    * Progress bar
    */ 
   
   const bar = splide.root.querySelector(".my-slider-progress-bar");

   // Updates the bar width whenever the carousel moves:
   splide.on("mounted move", function() {
      let end = splide.Components.Controller.getEnd() + 1;
      let rate = Math.min((splide.index + 1) / end, 1);
      bar.style.width = String(100 * rate) + "%";
   });

   /** 
    * Pagination
    * */ 
   splide.on('pagination:mounted', function(data) {
      data.list.classList.add('splide__pagination--number');

      data.items.forEach(function(item) {
         item.button.textContent = '0' + String(item.page + 1);
      });
   });

   splide.mount(window.splide.Extensions);
});
</script>
<!-- End Splide Slider -->
