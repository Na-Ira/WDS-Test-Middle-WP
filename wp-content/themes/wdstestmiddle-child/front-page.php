<?php
/**
 * The main template file
 * @package WordPress
 * @subpackage wdstestmiddle-child
 * @since wdstestmiddle-child 1.0
 */

get_header(); ?>

<!-- ========= main ========= -->
    <main class="main">
        <!-- hero section -->
        <section class="hero d-flex" id="home">
          <div
            class="hero-container d-grid align-items-center position-relative"
          >
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
            <div
              class="testimonials-header d-flex w-1170 justify-content-between m-auto"
            >
              <h2 data-aos="fade-right" data-aos-duration="700">
                What My&nbsp;<span>Clients Say</span>
              </h2>
              <div class="nav-slider">
                <div
                  class="splide__arrows splide__arrows--ltr position-relative w-100"
                >
                  <!-- Prev btn -->
                  <button
                    class="splide__arrow splide__arrow--prev"
                    type="button"
                    aria-label="Previous slide"
                    aria-controls="splide01-track"
                  >
                    <svg
                      width="20"
                      height="20"
                      viewBox="0 0 20 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <g clip-path="url(#clip0_1_100)">
                        <path
                          d="M0.229141 9.44706C0.229376 9.44683 0.22957 9.44655 0.229843 9.44632L4.31203 5.38382C4.61785 5.07949 5.1125 5.08062 5.41691 5.38648C5.72129 5.6923 5.72012 6.18695 5.4143 6.49132L2.67352 9.21882H19.2188C19.6502 9.21882 20 9.56858 20 10.0001C20 10.4316 19.6502 10.7813 19.2188 10.7813H2.67355L5.41426 13.5088C5.72008 13.8132 5.72125 14.3078 5.41687 14.6137C5.11246 14.9196 4.61777 14.9206 4.31199 14.6163L0.229805 10.5538C0.22957 10.5536 0.229374 10.5533 0.229101 10.5531C-0.0768757 10.2477 -0.0758991 9.75143 0.229141 9.44706Z"
                          fill="black"
                        />
                      </g>
                      <defs>
                        <clipPath id="clip0_1_100">
                          <rect
                            width="20"
                            height="20"
                            fill="white"
                            transform="matrix(-1 0 0 1 20 0)"
                          />
                        </clipPath>
                      </defs>
                    </svg>
                  </button>
                  <!-- Next btn -->
                  <button
                    class="splide__arrow splide__arrow--next"
                    type="button"
                    aria-label="Next slide"
                    aria-controls="splide01-track"
                  >
                    <svg
                      width="20"
                      height="20"
                      viewBox="0 0 20 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <g clip-path="url(#clip0_1_94)">
                        <path
                          d="M19.7709 9.44706C19.7706 9.44683 19.7704 9.44655 19.7702 9.44632L15.688 5.38382C15.3821 5.07949 14.8875 5.08062 14.5831 5.38648C14.2787 5.6923 14.2799 6.18695 14.5857 6.49132L17.3265 9.21882H0.78125C0.349766 9.21882 0 9.56858 0 10.0001C0 10.4316 0.349766 10.7813 0.78125 10.7813H17.3264L14.5857 13.5088C14.2799 13.8132 14.2788 14.3078 14.5831 14.6137C14.8875 14.9196 15.3822 14.9206 15.688 14.6163L19.7702 10.5538C19.7704 10.5536 19.7706 10.5533 19.7709 10.5531C20.0769 10.2477 20.0759 9.75143 19.7709 9.44706Z"
                          fill="black"
                        />
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
            </div>

            <!-- Slider  -->
            <div id="wrap-testimonial" class="splide-container">
              <div class="splide__track">
                <div class="splide__list">
                  <!-- splide__slide 1 -->
                  <div
                    class="splide__slide"
                    data-splide-html-video="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/testimonials/videoplayback.mp4"
                  >
                    <div class="splide-slide-container position-relative">
                      <div class="splide-container-inner">
                        <div
                          class="splide__slide__container splide__slide__container--has-video"
                        >
                          <img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/testimonials/preview1.jpg"
                            alt="Preview 1"
                          />
                        </div>
                        <div class="splide-text">
                          <p class="splide-text__testimonials pb-20">
                            “Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Adipiscing diam, tortor, egestas euismod neque
                            venenatis, viverra. Ante nibh morbi egestas quam
                            lorem ipsum. Eget sit praesent a laoreet. Mi,
                            phasellus quis mauris sollicitudin non. Iaculis ac
                            duis mauris enim. “
                          </p>
                          <p class="name mb-0">Frank Hardy</p>
                          <p class="position mb-0">Your Marketing Crew CEO</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- splide__slide 2 -->
                  <div
                    class="splide__slide"
                    data-splide-html-video="/img/testimonials/videoplayback.mp4"
                  >
                    <div class="splide-slide-container position-relative">
                      <div class="splide-container-inner">
                        <div
                          class="splide__slide__container splide__slide__container--has-video"
                        >
                          <img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/testimonials/preview2.jpg"
                            alt="Preview 2"
                          />
                        </div>
                        <div class="splide-text">
                          <p class="splide-text__testimonials pb-20">
                            “Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Adipiscing diam, tortor, egestas euismod neque
                            venenatis, viverra. Ante nibh morbi egestas quam
                            lorem ipsum. Eget sit praesent a laoreet. Mi,
                            phasellus quis mauris sollicitudin non. Iaculis ac
                            duis mauris enim. “
                          </p>
                          <p class="name mb-0">Frank Hardy</p>
                          <p class="position mb-0">Your Marketing Crew CEO</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- splide__slide 3 -->
                  <div
                    class="splide__slide"
                    data-splide-html-video="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/testimonials/videoplayback.mp4"
                  >
                    <div class="splide-slide-container position-relative">
                      <div class="splide-container-inner">
                        <div
                          class="splide__slide__container splide__slide__container--has-video"
                        >
                          <img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/testimonials/preview3.jpg"
                            alt="Preview 3"
                          />
                        </div>
                        <div class="splide-text">
                          <p class="splide-text__testimonials pb-20">
                            “Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Adipiscing diam, tortor, egestas euismod neque
                            venenatis, viverra. Ante nibh morbi egestas quam
                            lorem ipsum. Eget sit praesent a laoreet. Mi,
                            phasellus quis mauris sollicitudin non. Iaculis ac
                            duis mauris enim. “
                          </p>
                          <p class="name mb-0">Frank Hardy</p>
                          <p class="position mb-0">Your Marketing Crew CEO</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- progress bar -->
              <div class="my-slider-progress-container w-1170">
                <div class="my-slider-progress-inner">
                  <span class="number">01</span>
                  <div class="my-slider-progress">
                    <div class="my-slider-progress-bar"></div>
                  </div>
                  <span class="number">03</span>
                </div>
              </div>
            </div>
          </div>
        </section>

		 <!-- contact section -->
			<section class="contact" id="contact">
          <div class="contact-container d-grid position-relative w-1170 m-auto">
            <div class="personal-contact">
              <h2
                data-aos="fade-left"
                data-aos-offset="200"
                data-aos-duration="600"
              >
                Get in Touch
              </h2>
              <div class="address">
                <a href="mailto:hello@domainexample.com"
                  >hello@domainexample.com</a
                >
                <p class="mb-0">237 Haylee Islands Suite 960</p>
              </div>
            </div>
            <div class="contact-form">
              <form method="post">
                <div class="contact-form-container">
                  <div
                    class="mb-3"
                    data-aos="fade-right"
                    data-aos-offset="200"
                    data-aos-duration="400"
                  >
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      placeholder="Name"
                    />
                  </div>
                  <div
                    class="mb-3"
                    data-aos="fade-right"
                    data-aos-offset="200"
                    data-aos-duration="500"
                  >
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      placeholder="Email"
                    />
                  </div>
                  <div
                    class="mb-0"
                    data-aos="fade-right"
                    data-aos-offset="200"
                    data-aos-duration="500"
                  >
                    <textarea
                      class="form-control"
                      id="message"
                      rows="5"
                      placeholder="Write something..."
                    ></textarea>
                  </div>
                  <button class="btn btn-success" type="submit">
                    <span class="submit-btn">
                      <svg
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M1.81818 4.85267L9.39603 11.5885C9.74047 11.8947 10.2595 11.8947 10.604 11.5885L18.1818 4.85267V15.4545C18.1818 15.9566 17.7748 16.3636 17.2727 16.3636H2.72727C2.22519 16.3636 1.81818 15.9566 1.81818 15.4545V4.85267ZM3.1865 3.63635H16.8134L9.99995 9.69276L3.1865 3.63635Z"
                          fill="white"
                        />
                      </svg>
                    </span>
                    Submit Message
                  </button>
                </div>
              </form>
            </div>
          </div>
        </section>

<?php get_footer(); ?>
