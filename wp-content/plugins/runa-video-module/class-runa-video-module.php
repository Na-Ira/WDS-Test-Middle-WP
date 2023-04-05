<?php
class Runa_Video_Module
{

   public function render_runa_video_module($atts)
   {
      error_log('render_runa_video_module() called with page_ids = ' . $atts['page_ids']);
      /**
       * example hortcode [runa_video_module page_ids="22693,22784,22875"]
       * example hortcode [runa_video_module page_ids="22693"]
       */
      // Parse the shortcode attributes.
      extract(shortcode_atts(array(
         'page_ids' => ''
      ), $atts));

      // Convert the page IDs string to an array.
      $page_ids = explode(',', $page_ids);

      // Render the Video Module HTML for each page ID.
      $output = '';
      foreach ($page_ids as $page_id) {
         ob_start();
         include(RUNA_VIDEO_MODULE_DIR . 'runa-video-module.php');
         $output .= ob_get_clean();
      }

      return $output;
   }
}

// Register the shortcode.
add_shortcode('runa_video_module', array(new Runa_Video_Module(), 'render_runa_video_module'));
