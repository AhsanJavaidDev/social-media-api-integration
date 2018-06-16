<?php
require "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

class Twitter_API {

    private $consumer_key = 'ABCD1234EFGH5678IJKL';
    private $consumer_secret = '9876ZYXWVUTSRQPONMLKJIHGFEDCBA4321';
    private $access_token = 'LMNOP1234QRSTU5678VXYZ';
    private $access_token_secret = 'LMNOP1234QRSTU5678VXYZ';

    public function get_tweets($username) {
        $connection = new TwitterOAuth($this->consumer_key, $this->consumer_secret, $this->access_token, $this->access_token_secret);
        $content = $connection->get("statuses/user_timeline", ["screen_name" => $username]);

        return $content;
    }
}
