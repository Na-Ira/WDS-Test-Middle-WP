<?php
/**
 * 
 * Template for Page
 *
 */

get_header('page');
?>

<section class="page px-0 py-0">
   <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <header class="py-5 px-5 point-releases">
         <?php the_title( '<h3 class="page-title py-5 px-5 mt-5">', '</h3>' ); ?>
      </header>

      <div class="page-container container pt-5">

         <div class="py-5 m-auto mb-5">
            <?php the_content(); ?>
         </div>

      </div><!-- .entry-content -->


   </article><!-- #post-<?php the_ID(); ?> -->
</section>

<?php

get_footer('page');
