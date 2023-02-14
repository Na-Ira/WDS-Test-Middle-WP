<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 *
 * @package WordPress
 * @subpackage wdstestmiddle-child
 * @since wdstestmiddle-child
 */

?>
</main>
<!-- main -->


<footer class="footer">
   <div class="logo text-center">
      <?php 
            if ( function_exists( 'the_custom_logo' ) ) {
                 the_custom_logo();
            }
			?>
   </div>
   <nav class="nav">
      <?php
							wp_nav_menu(
								array(
									'theme_location' => 'secondary',
									'items_wrap'     => '%3$s',
									'depth'          => 1,
									'container'      => false,
									'menu_class'     => 'navbar-nav d-flex flex-row',
									'li_class'       => 'nav-item',
                           'a_class'        => 'nav-link',
									'fallback_cb'    => false,
									'walker'         => new WP_Bootstrap_Navwalker(),
								)
							);
					?>
   </nav>
   <p class="copyright mb-0 text-center">
      Copyright &copy; 2021 All right reserved
   </p>
</footer>

</div>
<!-- wrapper -->

<?php wp_footer(); ?>

</body>

</html>
