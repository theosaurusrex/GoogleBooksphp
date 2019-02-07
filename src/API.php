<?php

class API
{
    // keys as properties
    public $setApplicationName = "Google Books PHP";
    public $setDeveloperKey = "AIzaSyDJkM-1kKkhl0ohzoBohDxaH5mK9yi4gTg";

    public function getAppName () {
        return $this->setApplicationName;
    }
    public function getAPIKey () {
        return $this->setDeveloperKey;
    }
}; 

$googleApi = new API;   
echo $googleApi->setApplicationName + " echo";
echo $googleApi->setDeveloperKey + " echo";
$googleApi->getAppName();
$googleApi->getAPIKey();
// ========= Google API keys as objects
//     $client = new Google_Client();
//     $client->setApplicationName("Google Books PHP");
//     $client->setDeveloperKey("AIzaSyDJkM-1kKkhl0ohzoBohDxaH5mK9yi4gTg");    

?>