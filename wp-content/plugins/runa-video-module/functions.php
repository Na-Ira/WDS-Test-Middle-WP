<?php

add_action('wp_enqueue_scripts', 'runa_video_script');

function runa_video_script()
{
	// video-js css
	wp_register_style(
		'video-css',
		plugins_url('css/video-js.min.css', __FILE__),
		array(),
		'1.0'
	);
	wp_enqueue_style('video-css');

	// video-js css
	wp_register_style(
		'video',
		plugins_url('css/runa-video-module.css', __FILE__),
		array(),
		time()
	);
	wp_enqueue_style('video');

	// video-js js
	wp_enqueue_script(
		'video-js',
		plugins_url('js/video.min.js', __FILE__),
		array(),
		'1.0',
		true
	);
	// runa-video-module-init js
	wp_enqueue_script(
		'video-module-init',
		plugins_url('js/runa-video-module-init.js', __FILE__),
		array(),
		time(),
		true
	);
}

// Register Plugin
add_action('init', 'runa_video_module_cpt_registers');
function runa_video_module_cpt_registers()
{
	$labels = array(
		'name'                  => _x('Video Module', 'royalfasade'),
		'singular_name'         => _x('Video Module', 'royalfasade'),
		'menu_name'             => _x('Video Module', 'Admin Menu text', 'royalfasade'),
		'name_admin_bar'        => _x('Video Module', 'Add New on Toolbar', 'royalfasade'),
		'add_new'               => __('New Video', 'royalfasade'),
		'add_new_item'          => __('Add New Video', 'royalfasade'),
		'new_item'              => __('New Video', 'royalfasade'),
		'edit_item'             => __('Edit Video', 'royalfasade'),
		'view_item'             => __('View Video', 'royalfasade'),
		'all_items'             => __('All Video', 'royalfasade'),
		'parent_item_colon'     => __('Parent Video:', 'royalfasade'),
		'not_found'             => __('No Video found.', 'royalfasade'),
		'not_found_in_trash'    => __('No Video found in Trash.', 'royalfasade'),
		'insert_into_item'      => _x('Insert into Video', 'royalfasade'),
		'uploaded_to_this_item' => _x('Uploaded to this Video', 'royalfasade'),
	);

	$args = array(
		'labels'             => $labels,
		'label'              => __('Video Module', 'royalfasade'),
		'description'        => __('Video Module', 'royalfasade'),
		'taxonomies'         => array('video_category'),
		'public'             => true,
		'publicly_queryable' => true,
		'menu_icon'          => 'dashicons-embed-video',
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array('slug' => 'video-module'),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => 20,
		'supports'           => array('title', 'thumbnail'),
		'show_in_rest'       => true,
	);

	register_post_type('video_module', $args);

	// Register Taxonomy
	register_taxonomy(
		'video_category',
		'video_module',
		array(
			'label'        => __('Video Module', 'royalfasade'),
			'rewrite'      => array('slug' => 'video_module/video_category'),
			'hierarchical' => true
		)
	);
}
