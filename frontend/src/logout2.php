<?php
require 'config2.php';

unset($_SESSION['access_token']);

session_destroy();

header('location:http://localhost/Project1/frontend/src/signup.php');

exit();
?>