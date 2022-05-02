<?php

//session_start();

require 'vendor/autoload.php';


$google_client = new Google_Client();

$google_client -> setClientId('871066160987-cpulq3h8dfv81a45l8lrv4gup18dc09k.apps.googleusercontent.com');

$google_client -> setClientSecret('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');


$google_client -> setRedirectUri('http://localhost/Project1/frontend/src/profile.php');


$google_client -> addScope('email');

$google_client -> addScope('profile');

?>