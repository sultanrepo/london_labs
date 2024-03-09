<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    include_once '../config/database.php';
    include_once '../class/auth.php';
    include_once '../config/session.php';

    if (session_status() == PHP_SESSION_NONE) {
        session_start();//Start session if none exists/already started
    }

    if ( $_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == 'GET' ) {
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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {//POST call
            if (isset($_SERVER['HTTP_ORIGIN'])) {
                $address = 'https://' . $_SERVER['SERVER_NAME'];
                if (strpos($address, $_SERVER['HTTP_ORIGIN']) == 0) {
                    //echo "POST SUCCESS! [token = session token], [HTTP origin = server host]";
                    //Do the POST request
                    $database = new Database();
                    $db = $database->getConnection();
                    $item = new auth($db);
                    $mobileno = $_POST['mobileno'];
                    $password = $_POST['password'];
                    $item = new auth($db);
                    $item->setMobile($mobileno);
                    $item->setPassword($password);
                    $resp = $item->signin();
                    if ($resp == true) {
                        
                        echo json_encode(array(
                            'status' => 'success',
                            'message' => 'Login successful'
                        ));
                    } else {
                        echo json_encode(array(
                            'status' => 'error',
                            'message' => 'Login failed'
                        ));
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
    
    // if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //     if(isset($_POST['mobileno']) && isset($_POST['password'])) {
    //         $mobileno = $_POST['mobileno'];
    //         $password = $_POST['password'];
    //         echo $mobileno;
            
    //         if($mobileno == $_SESSION['mobileno'] && $password == $_SESSION['password']) {
    //             $_SESSION['mobileno'] = $mobileno;
    //             $_SESSION['password'] = $password;
                
    //             //$item->update_password($_SESSION['mobileno'], $_SESSION['password']);
                
    //             echo json_encode(array('success' => true));
    //         } else {
    //             echo json_encode(array('success' => false));
    //         }
    //     } else {
    //         echo json_encode(array('success' => false));
    //     }
    // }

?>