<?php

require_once "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

// define('CONSUMER_KEY', 'aE8wdzK9KIWmKUaOLEw2PPjTY');
// define('CONSUMER_SECRET', 'eNY3pMVuHYDpuiKFBdQUuEuNGQ9RQJh5C0WPKxl1h4YPuPtxDT');
// define('ACCESS_TOKEN', '411513648-fRKE3FtujgsFxNcUVrshxHdr8YXWtjYrzhiaHnNR');
// define('ACCESS_TOKEN_SECRET', 'wlENSzdw0JMWjPSdeNzjKFi1RDVm2CAH70dAzYgDz3t3N');

define('CONSUMER_KEY', '0XkHJqqcVPlMdwRusMIJtOsKm');
define('CONSUMER_SECRET', 'w5hI49LAGABPcwtf4LxYHIdgB7BgDeE0qHkbnRPVYPGP8IsM7R');
define('ACCESS_TOKEN', '902436734494883840-0oxDhUsDKl6YSBrpkWK7UAZKVv4FlXB');
define('ACCESS_TOKEN_SECRET', 'FncrfVC0pZ56vi0uMq2v5pTs7zl7SjdxdDpNalGHhOpnz');


        $conn = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
        $query = array(
                       "q" => "#dominos",
                       "count" => 300,

                       );
        $t = '[';
        $tweets = $conn->get('search/tweets', $query);

        $c = 0;
        foreach ($tweets->statuses as $tweet) {
            $c++;
            $t=$t.'"'.$tweet->text.'",';

        }
        $t=$t.'"what is your name"]';
    echo $t;
    
 ?>
