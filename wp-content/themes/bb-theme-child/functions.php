<?php

// Defines
define( 'FL_CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'FL_CHILD_THEME_URL', get_stylesheet_directory_uri() );

// Classes
require_once 'classes/class-fl-child-theme.php';

// Actions
add_action( 'wp_enqueue_scripts', 'FLChildTheme::enqueue_scripts', 1000 );

##### Shortcodes ######
add_shortcode('hwm_yt_playlist', 'hwm_yt_playlist');
add_shortcode('hwm_yt_autoplay', 'hwm_yt_autoplay');

// Autoplays Youtube Videos
function hwm_yt_autoplay( $atts ) {
	// set up default parameters
    extract( shortcode_atts( array(
     'id' => '', // youtube ID
    ), $atts) );

    $render = <<<EMBED

<div class="yt-container">
<iframe class="yt-video" src='https://www.youtube.com/embed/$id?autoplay=1&mute=1' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
</div>

EMBED;

    return $render;
}

function hwm_yt_playlist( $atts ) {

    // set up default parameters
    extract( shortcode_atts( array(
     'id' => '', // youtube ID
     'count' => '-1', // Default to all entries [1 - infinite]
    ), $atts) );

    $api_key = "AIzaSyAh3PaMpMkdvZd7-q5_-FIunKv53TQLjoU";
    //$id = "PLQku2G6wJE-vXSo1rs_vrcxTV4Xl1tevH";
    $vendor_dir = FL_CHILD_THEME_DIR . "/vendor";
    require_once "$vendor_dir/autoload.php";
    require_once "$vendor_dir/google/apiclient/src/Google/Client.php";
    require_once "$vendor_dir/google/apiclient-services/src/Google/Service/YouTube.php";

    $client = new Google_Client();
    $client->setDeveloperKey($api_key);
    $youtube = new Google_Service_YouTube($client);

    $nextPageToken = '';
    $render = '<ol>';

    do {
        $playlistItemsResponse = $youtube->playlistItems->listPlaylistItems('snippet', array(
        'playlistId' => $id,
        'maxResults' => 100,
        'pageToken' => $nextPageToken));

        foreach ($playlistItemsResponse['items'] as $playlistItem) {

            //$render .= "<pre>";
            //$render .= print_r($playlistItem, TRUE );
            //$render .= "</pre>";

            $title = $playlistItem['snippet']['title'];
            $vid = $playlistItem['snippet']['resourceId']['videoId'];

            $render .="<li><a href='https://www.youtube.com/watch?v=$vid' target='_blank'>$title</a> ( Film )</li>";

            //$render .= sprintf('<li>%s (%s)</li>', $playlistItem['snippet']['title'], $playlistItem['snippet']['resourceId']['videoId']);
        }

        $nextPageToken = $playlistItemsResponse['nextPageToken'];
    } while ($nextPageToken <> '');

    $render .= '</ol>';

    return $render;

}