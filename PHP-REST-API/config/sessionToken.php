<?php

$token = bin2hex(random_bytes(64));
$_SESSION["token"] = $token;

?>