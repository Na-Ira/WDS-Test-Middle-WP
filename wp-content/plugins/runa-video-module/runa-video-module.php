<?php
foreach ($page_ids as $page_id) { // loop through each page ID
?>
   <div class="container-video">
      <video class="my-video video-js vjs-default-skin vjs-big-play-centered video-js-responsive-container" autoplay>
         <source src="<?php the_field('video_mp4', $page_id); ?>" type="video/mp4">
         </source>
         <source src="<?php the_field('video_webm', $page_id); ?>" type="video/webm">
         </source>
      </video>
      <div class="content-video" id="contentVideo">
         <div class="content-video-container">
            <div class="content-video-container-inner">
               <h5 class="content-video-above-title"><?php the_field('above_title', $page_id); ?></h5>
               <h1 class="content-video-title"><?php the_field('title_h1', $page_id); ?></h1>
               <p class="content-video-subtitle">
                  <?php the_field('sub_title', $page_id); ?>
               </p>
               <?php
               $link = get_field('link_btn', $page_id);
               if ($link) : ?>
                  <a class="btn video-btn" href="<?php echo esc_url($link); ?>"><?php the_field('link_btn_text', $page_id); ?></a>
               <?php endif; ?>
            </div>

         </div>

      </div>
   </div>
<?php
}
?>
