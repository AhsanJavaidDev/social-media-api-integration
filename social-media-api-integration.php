<?php
/**
 * Plugin Name: Advanced Social Media API Integration
 * Plugin URI: https://ahsanjavaid.com/social-media-api-integration
 * Description: This is a WordPress plugin to integrate social media APIs.
 * Version: 1.0.0
 * Author: Ahsan
 * Author URI: ahsanjavaid.com
 * License: GPL2
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

// Include the core class responsible for loading all necessary components of the plugin.
if ( ! class_exists( 'Social_Media_API_Integration' ) ) {
    require_once plugin_dir_path( __FILE__ ) . 'includes/class-social-media-api-integration.php';
}

function run_social_media_api_integration() {
    $sm_api = new Social_Media_API_Integration();
    $sm_api->run();
}

// Call the function that starts the plugin.
run_social_media_api_integration();
