<?php

class Plugin_Shortcode {

    public function display_latest_tweets() {
        $twitter_api = new Twitter_API();
        $tweets = $twitter_api->get_tweets('getter'); // Replace 'getter' with any username

        $output = '<ul>';
        foreach ($tweets as $tweet) {
            $output .= '<li>' . $tweet->text . '</li>';
        }
        $output .= '</ul>';

        return $output;
    }
}
