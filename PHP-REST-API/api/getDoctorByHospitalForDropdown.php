<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    include_once '../config/database.php';
    include_once '../class/doctor.php';
    $database = new Database();
    $db = $database->getConnection();
    $item = new doctor($db);
    $item->hospital_id = isset($_GET['id']) ? $_GET['id'] : die();
    $stmt = $item->getDoctorByHospitalForDropdown();
    $itemCount = $stmt->rowCount();
    if ( $itemCount > 0 ) {
        $doctorArr = array();
        $doctorArr["body"] = array();
        $doctorArr["status"] = "success";
        $doctorArr["itemCount"] = $itemCount;
        while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
            extract($row);
            $e = array (
                "id" => $doctor_id,
                // "hospital_id" => $hospital_id,
                "doctor_name" => $doctor_name,
                // "doctor_degree" => $doctor_degree,
                // "doctor_percentage" => $doctor_percentage,
                // "status" => $status,
                // "created_at" => $created_at,
                // "updated_at" => $updated_at
            );
            array_push($doctorArr["body"], $e);
        }
        echo json_encode($doctorArr);
    } else {
        //http_response_code(404);
        echo json_encode(
            array(
                "status" => "error",
                "message" => "No record found")
        );
    }
?>