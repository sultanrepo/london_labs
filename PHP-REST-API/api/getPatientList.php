<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    include_once '../config/database.php';
    include_once '../class/patient.php';
    $database = new Database();
    $db = $database->getConnection();
    $items = new patient($db);
    $items->lab_id = isset($_GET['labID']) ? $_GET['labID'] : die();
    $items->getPatientList();
?>