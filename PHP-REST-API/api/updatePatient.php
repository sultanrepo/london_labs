<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    include_once '../config/database.php';
    include_once '../class/patient.php';

    $data_ajaxCall = json_decode(file_get_contents("php://input"));
    $ajaxStatus = $data_ajaxCall->ajax_call;

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
                    //echo "POST SUCCESS! [token = session token], [HTTP origin = server host]";
                    //Do the POST request
                    $database = new Database();
                    $db = $database->getConnection();
                    $item = new patient($db);
                    $data = json_decode(file_get_contents("php://input"));
                    $item->id = $data->patient_id_for_update;
                    $item->patient_name = $data->patient_name;
                    $item->patient_age = $data->patient_age;
                    $item->patient_sex = $data->patient_sex;
                    $item->patient_mobile_no = $data->patient_mobile;
                    $item->patient_email = $data->patient_email;
                    $item->patient_ref = $data->patient_ref;
                    $item->patient_hospital = $data->patient_hospital;
                    $item->patient_doctor = $data->patient_doctor;
                    $item->patient_discount = $data->patient_discount;
                    $item->patient_staus = $data->patient_status;
                    $item->patient_tests = stripslashes($data->patient_tests);

                    $resp = $item->addNewPatient(); 

                    if ($resp == true) {
                        echo json_encode(array('success' => true));                    } 
                    if ( $resp == false ) {
                        echo json_encode(array('success' => false));
                    }
                }
            } else {
                echo "POST ERROR: No Origin header";
            }
        }
    } else {
        echo "ERROR: Not a GET or POST request";
        exit;
    }



    // $database = new Database();
    // $db = $database->getConnection();
    // $item = new patient($db);
    // $data = json_decode(file_get_contents("php://input"));
    // $item->patient_name = $data->patient_name;
    // $item->patient_age = $data->patient_age;
    // $item->patient_sex = $data->patient_sex;
    // $item->patient_mobile_no = $data->patient_mobile;
    // $item->patient_email = $data->patient_email;
    // $item->patient_hospital = $data->patient_hospital;
    // $item->patient_doctor = $data->patient_doctor;
    // $item->patient_discount = $data->patient_discount;
    // $item->patient_staus = $data->patient_status;
    // $item->patient_tests = $data->patient_tests;

    // $resp = $item->addNewPatient(); 
    
    // if ($resp == true) {
    //     echo "success";
    // } 
    // if ( $resp == false ) {
    //     echo "error";
    // }


?>