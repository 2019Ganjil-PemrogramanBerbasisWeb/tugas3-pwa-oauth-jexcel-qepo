<?php

require_once "config.php";
if(isset($_GET['access_token'])){
    $gClient->setAccessToken($_SESSION['access_token']);
}
if(isset($_GET['code'])){
    $token= $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
    $_SESSION['access_token'] = $token;
}

$oAuth = new Google_Service_Oauth2($gClient);
$userData = $oAuth->userinfo_v2_me->get();
//echo "<pre>";
//var_dump($userData);

$_SESSION['email'] = $userData['email'];
$_SESSION['name'] = $userData['name'];
$_SESSION['gambar'] = $userData['picture'];

header('Location: index.php');

?>