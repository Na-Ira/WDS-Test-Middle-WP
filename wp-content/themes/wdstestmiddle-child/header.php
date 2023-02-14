<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 *
 * @package WordPress
 * @subpackage wdstestmiddle-child
 * @since wdstestmiddle-child
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <!-- ##### favicon ##### -->
      <link rel="icon" type="image/png" sizes="32x32"
         href="<?php echo get_theme_file_uri(); ?>/assets/img/favicon-32x32.png" />
      <link rel="icon" type="image/png" sizes="16x16"
         href="<?php echo get_theme_file_uri(); ?>/assets/img/favicon-16x16.png" />
      <link rel="shortcut icon" href="<?php echo get_theme_file_uri(); ?>/assets/img/favicon.ico" />

      <?php wp_head(); ?>
   </head>

   <body id="page-top">
      <div class="wrapper">
         <!-- ========== Loader ========== -->
         <div class="loading">
            <div class="box">
               <div class="text-load">John <span>Doe</span></div>
               <div class="progress">
                  <div class="line"></div>
               </div>
            </div>
         </div>
         <!-- ========= header =========== -->
         <header class="header">
            <nav class="navbar fixed-top navbar-expand-lg" id="mainNav">
               <div class="container-fluid navbar-container">
                  <a class="navbar-brand" href="<?php echo home_url( ); ?>">
                     <?php 
                     if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                     }
                     ?>
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                     data-bs-target=".navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="wrap-menunavigation">
                        <span class="menu-bar">
                           <svg class="ham ham-rotate ham4" viewBox="0 0 100 100" width="60"
                              onclick="this.classList.toggle('active')">
                              <path class="line top"
                                 d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
                              <path class="line middle" d="m 70,50 h -40" />
                              <path class="line bottom"
                                 d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
                           </svg>
                        </span>
                     </span>
                  </button>
                  <!-- Navigation-->
                  <?php 
                     wp_nav_menu( 
                        array ( 
                           'theme_location'  => 'primary',
                           'depth'           => 5,
                           'container'       => 'div',
                           'container_class' => 'collapse navbar-collapse',
                           'menu_class'      => 'navbar-nav ms-auto py-4 py-lg-0',
                           'li_class'        => 'nav-item',
                           'a_class'         => 'nav-link',
                           'active_class'    => 'active',
                           'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                           'fallback_cb'     => false,
                           'walker'          => new WP_Bootstrap_Navwalker(),
                        ) 
                     ); 
                  ?>
               </div>
            </nav>
         </header>
