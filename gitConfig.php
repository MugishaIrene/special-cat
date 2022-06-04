<?php
// Start session
if(!session_id()){
    session_start();
}

// Include Github client library 
require_once 'Github_OAuth_Client.php';

/*
 * Configuration and setup GitHub API
 */
$clientID         = 'bc7eb283bf999b6d8683';
$clientSecret     = '92f7c2389f131c73d17364d539a9be770cba170c';
$redirectURL     = 'http://localhost/special_cat/special-cat/home.php';

$gitClient = new Github_OAuth_Client(array(
    'client_id' => $clientID,
    'client_secret' => $clientSecret,
    'redirect_uri' => $redirectURL,
));


// Try to get the access token
if(isset($_SESSION['access_token'])){
    $accessToken = $_SESSION['access_token'];
}