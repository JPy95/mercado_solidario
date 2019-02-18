<?php
session_start();
include_once('vendor\autoload.php');

$fb = new Facebook\Facebook([
    'app_id' => '795125940865479',
    'app_secret' => '4b090bcaeaddf3a7190c8c87f45de283',
    'default_graph_version' => 'v3.2',
]);

$helper = $fb->getRedirectLoginHelper();
//var_dump($helper);
$permissions = ['email']; // Optional permissions


try {
    if (isset($_SESSION['faceAccessToken'])) {
        $accessToken = $_SESSION['faceAccessToken'];
    } else {
        $accessToken = $helper->getAccessToken();
        var_dump($accessToken);
    }
} catch (Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch (Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}

//var_dump($accessToken);

if (!isset($accessToken)) {
    $url_login = 'http://localhost/FacebookAPI/index.php';
    $loginUrl = $helper->getLoginUrl($url_login, $permissions);
} else {

    $url_login = 'http://localhost/FacebookAPI/index.php';
    $loginUrl = $helper->getLoginUrl($url_login, $permissions);

    if (isset($_SESSION['faceAccessToken'])) {
        $fb->setDefaultAccessToken($_SESSION['faceAccessToken']);
    } else {
        $_SESSION['faceAccessToken'] = (string)$accessToken;
        $oAuth2Client = $fb->getOAuth2Client();
        $_SESSION['faceAccessToken'] = $oAuth2Client->getLongLivedAccessToken($_SESSION['faceAccessToken']);
        $fb->setDefaultAccessToken($_SESSION['faceAccessToken']);
    }
}

try {
    // Returns a `Facebook\FacebookResponse` object
    $response = $fb->get('/me?fields=name,picture,email');
    $user = $response->getGraphUser();
    var_dump($user);
} catch (Facebook\Exceptions\FacebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch (Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}


?>