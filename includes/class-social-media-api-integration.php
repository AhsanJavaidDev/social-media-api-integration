<?php

class Social_Media_API_Integration {

    public function __construct() {
        $this->load_dependencies();
        $this->define_shortcode_hooks();
    }

    private function load_dependencies() {
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-twitter-api.php';
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-shortcode.php';
    }

    private function define_shortcode_hooks() {
        $plugin_shortcode = new Plugin_Shortcode();
        add_shortcode( 'latest_tweets', array($plugin_shortcode, 'display_latest_tweets') );
    }

    public function run() {
        // The run function is left empty as the plugin's functionality is based on shortcode usage
    }
}
