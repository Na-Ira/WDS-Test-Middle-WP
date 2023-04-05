<?php

/**
 * Plugin Name: Runa Video Module
 * Plugin URI: https://folio-ira.nastmobile.com/
 * Author: Iryna Nahorna
 * Author URI: https://folio-ira.nastmobile.com/
 * Text Domain: runa-video-module
 * Description: This plugin for video player
 * Version: 1.0.0
 **/

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Log errors to file
ini_set('log_errors', 1);
ini_set('error_log', plugin_dir_path(__FILE__) . 'error.log');

// Define a constant for the plugin directory path.
define('RUNA_VIDEO_MODULE_DIR', plugin_dir_path(__FILE__));

// Include the main plugin class file.
require_once(RUNA_VIDEO_MODULE_DIR . 'functions.php');
require_once(RUNA_VIDEO_MODULE_DIR . 'class-runa-video-module.php');

// Instantiate the plugin class.
$runa_video_module_plugin = new Runa_Video_Module();
