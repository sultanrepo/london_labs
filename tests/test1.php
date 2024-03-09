<?php

session_start();
$_SESSION['data'] = "Data";
if (isset($_SESSION['data'])) {
    echo $_SESSION['data'];
}

$address = 'https://' . $_SERVER['SERVER_NAME'];
echo $address;
echo $_SERVER['HTTP_ORIGIN'];

// remove all session variables
session_unset();

// destroy the session
session_destroy();

?>