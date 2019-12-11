<?php

session_start();
require_once "googleapi/vendor/autoload.php";
//minta acces informasi

$gClient= new Google_client();
$gClient->setClientId("46490809361-i211vej15ggk8m4bk27cdnnq4tn00vhp.apps.googleusercontent.com");
$gClient->setClientSecret("5hlz250nwPMfuXdgOgCbHqMQ");
$gClient->setApplicationName("kecoak oauth");
$gClient->setRedirectUri("http://localhost/Belajar%20Oauth/g-callback.php");
$gClient->addscope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");





?>