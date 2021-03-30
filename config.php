<?php
require_once 'vendor/autoload.php';
$google_client = new Google_Client();
$google_client->setClientId('1044595307318-511cjmtorg1n8o64j10ui81gbdbbjdql.apps.googleusercontent.com');
$google_client->setClientSecret('K7IrCynUMvXcuev161eJkrAE');
$google_client->setRedirectUri('http://localhost/project/userlogin2.php');
$google_client->addScope('email');
$google_client->addScope('profile');
session_start();
?>