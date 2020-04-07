<?php
require_once ("vendor/autoload.php");

$client = new Google_Client();
$client->setApplicationName("Pull From Youtube");
$client->setDeveloperKey("AIzaSyAsx47U815DS5IgnHcoMNtxMMUg_Wa39lc");
//$client->addScope(GOOGLE_SERVICE_YOUTUBE::YOUTUBE_FORCE_SSL);
$client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/oauth2callback.php');
// offline access will give you both an access and refresh token so that
// your app can refresh the access token without user interaction.
$client->setAccessType('offline');
// Using "consent" ensures that your application always receives a refresh token.
// If you are not using offline access, you can omit this.
$client->setApprovalPrompt("consent");
$client->setIncludeGrantedScopes(true);   // incremental auth

echo "<pre>";
print_r($client);
echo "</pre>";

$youtube = new Google_Service_YouTube($client);

echo "<pre>";
print_r($youtube);
echo "</pre>";

$channel = $youtube->channels->listChannels('snippet', array('mine' => $mine));