<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    include_once '../config/database.php';
    include_once '../class/patient.php';

    if (session_status() == PHP_SESSION_NONE) {
        session_start();//Start session if none exists/already started
    }

    if ( $ajaxStatus == true || $_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == 'GET' ) {
    $headers = getallheaders();
    if (isset($headers['token'])) {
        $header_token = $headers['token'];
        if ($header_token != $_SESSION['token']) {
            echo "ERROR: Tokens dont match";
            exit;
        }
    } else {
        echo "ERROR: No token sent";
        exit;
    }
    if ($ajaxStatus == true || $_SERVER['REQUEST_METHOD'] == 'POST') {//POST call
        if (isset($_SERVER['HTTP_ORIGIN'])) {
            $address = 'https://' . $_SERVER['SERVER_NAME'];
            if (strpos($address, $_SERVER['HTTP_ORIGIN']) == 0) {
                $database = new Database();
                $db = $database->getConnection();
                $items = new patient($db);
                $items->id = isset($_GET['id']) ? $_GET['id'] : die();
                $items->getPatientTestList();
            }
            } else {
                echo "POST ERROR: No Origin header";
            }
        }
    } else {
        echo "ERROR: Not a GET or POST request";
        exit;
    }

?>