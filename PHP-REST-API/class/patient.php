<?php

error_reporting(E_ALL ^ E_NOTICE);  
date_default_timezone_set("Asia/Calcutta");

class patient{
    private $conn;
    private $db_table = "patient";
    public $db_test = "patient_test";
    
    //Column
    public $id;
    public $lab_id;
    public $patient_name;
    public $patient_age;
    public $patient_sex;
    public $patient_mobile_no;
    public $patient_email;
    public $patient_ref;
    public $patient_hospital;
    public $patient_hospital_name;
    public $patient_doctor;
    public $patient_doctor_name;
    public $patient_discount;
    public $patient_staus;
    public $patient_tests;
    public $patient_img;
    public $patient_created_at;
    public $patient_updated_at;

    //Patient Test
    public $patient_test_id;
    public $patient_test_name;
    public $patient_test_cat_id;
    public $patient_test_cat_name;
    public $patient_test_amount;
    public $patient_test_total_amount;
    //DB Connection
    public function __construct($db) {
        $this->conn = $db;
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }

    public function getPatientUniqueId() {
        $sqlQuery = "SELECT id FROM " . $this->db_table . " ORDER BY id DESC LIMIT 1";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }

    public function getTestIDByTestName($testName) {
        $sqlQuery = "SELECT id, category_id FROM tests WHERE test_name=:test_name";
        $stmt = $this->conn->prepare($sqlQuery);
        try {
            $stmt->bindParam(":test_name", $testName);
            if ( $stmt->execute() ) {
                return $stmt;           
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo $sqlQuery . "<br>" . $e->getMessage();
            return false;
        }
    }

    public function getlabIdByUserID($userID) {
        $sqlQuery = "SELECT test_center_id FROM users WHERE id=?";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->bindParam(1, $userID);
        $stmt->execute();
        return $stmt;
    }

    public function insertPatientTests($testID, $testCatID, $patientID) {
        $sqlQuery = "INSERT INTO " . $this->db_test . "
        SET
            patient_id = :patient_id,
            lab_id = :lab_id,
            test_id = :test_id,
            test_cat_id = :test_cat_id,
            status = :status,
            created_at = :created_at,
            updated_at = :updated_at";

        $stmt = $this->conn->prepare($sqlQuery);
        try {
            $this->patient_created_at = date("Y-m-d H:i:s");
            $this->patient_updated_at = date("Y-m-d H:i:s");

            $stmt->bindParam(":patient_id", $patientID);
            $stmt->bindParam(":lab_id", $this->lab_id);
            $stmt->bindParam("test_id", $testID);
            $stmt->bindParam("test_cat_id", $testCatID);
            $stmt->bindParam(":status", $this->patient_staus);
            $stmt->bindParam(":created_at", $this->patient_created_at);
            $stmt->bindParam(":updated_at", $this->patient_updated_at);
            if ( $stmt->execute() ) {
                return true;
            } else {
                return false;
            }

        } catch (Exception $e) {
            echo $sqlQuery . "<br>" . $e->getMessage();
            return false;
        }
    }

    public function updatePatientTests($testID, $testCatID, $patientID) {
        $sqlQuery_getTestID = "SELECT * FROM ". $this->db_test ."
            WHERE  patient_id = :patient_id ";
        $stmt_getTestID = $this->conn->prepare($sqlQuery_getTestID);
        $stmt_getTestID->bindParam(":patient_id", $patientID);
        $stmt_getTestID->execute();
        $itemCount = $stmt_getTestID->rowCount();

        if ( $itemCount > 0 ) {
            while ( $rows = $stmt_getTestID->fetch(PDO::FETCH_ASSOC) ) {
                
            }
        }
        
        $sqlQuery = "UPDATE " . $this->db_test . "
        SET
            patient_id = :patient_id,
            lab_id = :lab_id,
            test_id = :test_id,
            test_cat_id = :test_cat_id,
            status = :status,
            updated_at = :updated_at
        WHERE
                ";

        $stmt = $this->conn->prepare($sqlQuery);
        try {
            $this->patient_created_at = date("Y-m-d H:i:s");
            $this->patient_updated_at = date("Y-m-d H:i:s");

            $stmt->bindParam(":patient_id", $patientID);
            $stmt->bindParam(":lab_id", $this->lab_id);
            $stmt->bindParam("test_id", $testID);
            $stmt->bindParam("test_cat_id", $testCatID);
            $stmt->bindParam(":status", $this->patient_staus);
            $stmt->bindParam(":created_at", $this->patient_created_at);
            $stmt->bindParam(":updated_at", $this->patient_updated_at);
            if ( $stmt->execute() ) {
                return true;
            } else {
                return false;
            }

        } catch (Exception $e) {
            echo $sqlQuery . "<br>" . $e->getMessage();
            return false;
        }
    }


    //Add New Patient
    public function addNewPatient() {
        if (session_status() == PHP_SESSION_NONE) {
           session_start();//Start session if none exists/already started
        }
        $stmtLabID = $this->getlabIdByUserID($_SESSION["dataData"]);
        $rowLabID = $stmtLabID->fetch(PDO::FETCH_ASSOC);
        $labID = $rowLabID['test_center_id'];
        $this->lab_id = $labID;

        try {
            
            $sqlQuery = "INSERT INTO ". $this->db_table. " 
            SET
                id = :id,
                lab_id = :lab_id,
                patient_name = :patient_name, 
                patient_age = :patient_age, 
                sex = :patient_sex , 
                patient_mobile_no = :patient_mobile_no , 
                patient_email = :patient_email ,
                patient_ref = :patient_ref , 
                hospital = :patient_hospital , 
                doctor = :patient_doctor , 
                discount_perc = :patient_discount , 
                status = :patient_staus , 
                created_at = :patient_created_at , 
                updated_at = :patient_updated_at";
            
            $stmt = $this->conn->prepare($sqlQuery);
            //Transaction Begin
            // $this->conn->beginTransaction();

            //Sanitize Patient
            $this->lab_id = htmlspecialchars(strip_tags($this->lab_id));
            $this->patient_name = htmlspecialchars(strip_tags($this->patient_name));
            $this->patient_age = htmlspecialchars(strip_tags($this->patient_age));
            $this->patient_sex = htmlspecialchars(strip_tags($this->patient_sex));
            $this->patient_mobile_no = htmlspecialchars(strip_tags($this->patient_mobile_no));
            $this->patient_email = htmlspecialchars(strip_tags($this->patient_email));
            $this->patient_ref = htmlspecialchars(strip_tags($this->patient_ref));
            $this->patient_hospital = htmlspecialchars(strip_tags($this->patient_hospital));
            $this->patient_doctor = htmlspecialchars(strip_tags($this->patient_doctor));
            $this->patient_discount = htmlspecialchars(strip_tags($this->patient_discount));
            $this->patient_staus = htmlspecialchars(strip_tags($this->patient_staus));
            $this->patient_img = htmlspecialchars(strip_tags($this->patient_img));
            $this->patient_created_at = date("Y-m-d H:i:s");
            $this->patient_updated_at = date("Y-m-d H:i:s");

            $stmt0 = $this->getPatientUniqueId();
            $row = $stmt0->fetch(PDO::FETCH_ASSOC);
            //print_r($row);
            //extract($row);
            $exeID = $row['id'];
            $this->id = $exeID + 1;
            //$this->id = "1";
            //echo "ID:" . $this->id;
            //Bind Data
            $stmt->bindParam(":id", $this->id);
            $stmt->bindParam(":lab_id", $this->lab_id);
            $stmt->bindParam(":patient_name", $this->patient_name);
            $stmt->bindParam(":patient_age", $this->patient_age);
            $stmt->bindParam(":patient_sex", $this->patient_sex);
            $stmt->bindParam(":patient_mobile_no", $this->patient_mobile_no);
            $stmt->bindParam(":patient_email", $this->patient_email);
            $stmt->bindParam(":patient_ref", $this->patient_ref);
            $stmt->bindParam(":patient_hospital", $this->patient_hospital);
            $stmt->bindParam(":patient_doctor", $this->patient_doctor);
            $stmt->bindParam(":patient_discount", $this->patient_discount);
            $stmt->bindParam(":patient_staus", $this->patient_staus);
            $stmt->bindParam(":patient_created_at", $this->patient_created_at);
            $stmt->bindParam(":patient_updated_at", $this->patient_updated_at);
            //print_r($stmt);
            if ($stmt->execute()) {
                $testNames = $this->patient_tests;
                $testNameWithout = str_replace( array( '[',']' ), ' ', $testNames);
                $testNameArray = explode(',', $testNameWithout );
                for ($i = 0; $i < count($testNameArray); $i++) {
                    $testN = trim(str_replace('"', '', $testNameArray[$i]));
                    $stmtTestID = $this->getTestIDByTestName($testN);
                    if ( $stmtTestID != false ) {
                        $rowDataTestID = $stmtTestID->fetch(PDO::FETCH_ASSOC);
                        $testID = $rowDataTestID['id'];
                        $testCatID = $rowDataTestID['category_id'];
                        $result = $this->insertPatientTests($testID, $testCatID, $this->id);
                        if ( $result == true ) {
                            // $this->conn->commit();
                            //return true;
                        } else {
                            // $this->conn->rollback();
                            return false;
                        }
                    } else {
                        echo "Error While Fetching TestID";
                    }
                }
                return true;
            }
            return false;
        } catch (Exception $e){
            // if ( $this->conn->inTransaction() ) {
            // $this->conn->rollback();
            // }
            echo $sqlQuery . "<br>" . $e->getMessage();
            return false;
        }
        
    }


    //Update Patient
    public function updatePatient() {
        if (session_status() == PHP_SESSION_NONE) {
           session_start();//Start session if none exists/already started
        }
        // $stmtLabID = $this->getlabIdByUserID($_SESSION["dataData"]);
        // $rowLabID = $stmtLabID->fetch(PDO::FETCH_ASSOC);
        // $labID = $rowLabID['test_center_id'];
        // $this->lab_id = $labID;
        try {
            $sqlQuery = "UPDATE ". $this->db_table. " 
            SET
                patient_name = :patient_name, 
                patient_age = :patient_age, 
                sex = :patient_sex , 
                patient_mobile_no = :patient_mobile_no , 
                patient_email = :patient_email ,
                patient_ref = :patient_ref , 
                hospital = :patient_hospital , 
                doctor = :patient_doctor , 
                discount_perc = :patient_discount , 
                status = :patient_staus , 
                updated_at = :patient_updated_at
            WHERE
                id = :id
                ";
                        
            $stmt = $this->conn->prepare($sqlQuery);
            //Transaction Begin
            // $this->conn->beginTransaction();

            //Sanitize Patient
            $this->patient_name = htmlspecialchars(strip_tags($this->patient_name));
            $this->patient_age = htmlspecialchars(strip_tags($this->patient_age));
            $this->patient_sex = htmlspecialchars(strip_tags($this->patient_sex));
            $this->patient_mobile_no = htmlspecialchars(strip_tags($this->patient_mobile_no));
            $this->patient_email = htmlspecialchars(strip_tags($this->patient_email));
            $this->patient_ref = htmlspecialchars(strip_tags($this->patient_ref));
            $this->patient_hospital = htmlspecialchars(strip_tags($this->patient_hospital));
            $this->patient_doctor = htmlspecialchars(strip_tags($this->patient_doctor));
            $this->patient_discount = htmlspecialchars(strip_tags($this->patient_discount));
            $this->patient_staus = htmlspecialchars(strip_tags($this->patient_staus));
            //$this->patient_img = htmlspecialchars(strip_tags($this->patient_img));
            $this->patient_updated_at = date("Y-m-d H:i:s");

            /*
            $stmt0 = $this->getPatientUniqueId();
            $row = $stmt0->fetch(PDO::FETCH_ASSOC);
            */
            //print_r($row);
            //extract($row);
            /*
            $exeID = $row['id'];
            $this->id = $exeID + 1;
            */
            //$this->id = "1";
            //echo "ID:" . $this->id;
            //Bind Data
            $stmt->bindParam(":lab_id", $this->lab_id);
            $stmt->bindParam(":patient_name", $this->patient_name);
            $stmt->bindParam(":patient_age", $this->patient_age);
            $stmt->bindParam(":patient_sex", $this->patient_sex);
            $stmt->bindParam(":patient_mobile_no", $this->patient_mobile_no);
            $stmt->bindParam(":patient_email", $this->patient_email);
            $stmt->bindParam(":patient_ref", $this->patient_ref);
            $stmt->bindParam(":patient_hospital", $this->patient_hospital);
            $stmt->bindParam(":patient_doctor", $this->patient_doctor);
            $stmt->bindParam(":patient_discount", $this->patient_discount);
            $stmt->bindParam(":patient_staus", $this->patient_staus);
            $stmt->bindParam(":patient_updated_at", $this->patient_updated_at);
            $stmt->bindParam(":id", $this->id);
            //print_r($stmt);
            if ($stmt->execute()) {
                $testNames = $this->patient_tests;
                $testNameWithout = str_replace( array( '[',']' ), ' ', $testNames);
                $testNameArray = explode(',', $testNameWithout );
                //Delete Existing Tests And Insert Selected Tests
                $sqlQueryForDelete = "DELETE FROM " . $this->db_test . " 
                `patient_test` WHERE patient_id= :patient_id";
                //...........!
                for ($i = 0; $i < count($testNameArray); $i++) {
                    $testN = trim(str_replace('"', '', $testNameArray[$i]));
                    $stmtTestID = $this->getTestIDByTestName($testN);
                    if ( $stmtTestID != false ) {
                        $rowDataTestID = $stmtTestID->fetch(PDO::FETCH_ASSOC);
                        $testID = $rowDataTestID['id'];
                        $testCatID = $rowDataTestID['category_id'];
                        $result = $this->updatePatientTests($testID, $testCatID, $this->id);
                        if ( $result == true ) {
                            // $this->conn->commit();
                            //return true;
                        } else {
                            // $this->conn->rollback();
                            return false;
                        }
                    } else {
                        echo "Error While Fetching TestID";
                    }
                }
                return true;
            }
            return false;
        } catch (Exception $e) {
            // if ( $this->conn->inTransaction() ) {
            // $this->conn->rollback();
            // }
            echo $sqlQuery . "<br>" . $e->getMessage();
            return false;
        }
    }

    
    public function getPatientList() {
        $sqlQuery = "SELECT 
          patient.id, 
          patient.lab_id, 
          patient.patient_name, 
          patient.patient_age, 
          patient.sex, 
          patient.patient_mobile_no, 
          patient.patient_email, 
          patient.patient_ref, 
          patient.hospital, 
          patient.doctor, 
          patient.discount_perc, 
          patient.status, 
          patient.img, 
          patient.created_at, 
          patient.updated_at, 
          patient_test.test_id, 
          patient_test.test_cat_id, 
          (
            SELECT 
              hospital_name 
            FROM 
              hospitals 
            WHERE 
              hospital_id = patient.hospital
          ) AS hospital_name, 
          (
            SELECT 
              doctor_name 
            FROM 
              doctors 
            WHERE 
              doctor_id = patient.doctor
          ) AS doctor_name, 
          IF(patient.hospital > 0, 'Doctor referance', 'Self referance') as referance 
        FROM 
          patient 
          INNER JOIN patient_test ON patient.id = patient_test.patient_id
          AND patient.lab_id = :lab_id;
        ";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->bindParam(":lab_id", $this->lab_id);
        $stmt->execute();
        $itemCount = $stmt->rowCount();

        if ($itemCount > 0) {
            $patientArr = array();
            $patientArr["body"] = array();
            $patientArr["status"] = "200";
            $patientArr['itemCount'] = $itemCount;
            //$count = 0;
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                //$patientArr[$count];
                extract($row);
                //Total Amount Logic will be here...!
                $this->patient_test_total_amount = 0;
                $this->id = $id;
                $sqlQueryTest = "SELECT * FROM `patient_test` WHERE patient_id=:patient_id";
                $stmtTest = $this->conn->prepare($sqlQueryTest);
                $stmtTest->bindParam(":patient_id", $this->id);
                $stmtTest->execute();
                while ($rowTest = $stmtTest->fetch(PDO::FETCH_ASSOC)) {
                    $testID = $rowTest['id'];
                    $this->patient_test_id = $row['test_id'];

                    $sqlQueryAmount = "SELECT * FROM `tests` WHERE id = :test_id";
                    $stmtAmount = $this->conn->prepare($sqlQueryAmount);
                    $stmtAmount->bindParam(":test_id", $this->patient_test_id);
                    $stmtAmount->execute();
                    while( $row3 = $stmtAmount->fetch(PDO::FETCH_ASSOC)) {
                        $this->patient_test_name = $row3['test_name'];
                        $this->patient_test_amount = $row3['price'];
                        $this->patient_test_total_amount = $this->patient_test_total_amount + $row3['price'];
                    }
                }
                $e = array(
                    "id" => $id,
                    "lab_id" => $lab_id,
                    "patient_name" => $patient_name,
                    "patient_age" => $patient_age,
                    "sex" => $sex,
                    "patient_mobile_no" => $patient_mobile_no,
                    "patient_email" => $patient_email,
                    "patient-ref" => $patient_ref,
                    "hospital" => $hospital,
                    "doctor" => $doctor,
                    "discount_perc" => $discount_perc,
                    "status" => $status,
                    "img" => $img,
                    "created_at" => $created_at,
                    "updated_at" => $updated_at,
                    "test_id" => $test_id,
                    "test_cat_id" => $test_cat_id,
                    "hospital_name" => $hospital_name,
                    "doctor_name" => $doctor_name,
                    "referance" => $referance,
                    "patient_test_total_amount" => $this->patient_test_total_amount
                );
                array_push($patientArr["body"], $e);
                //$count = $count + 1;
            }
            echo json_encode($patientArr);
        } else {
            echo json_encode(
                array(
                    "response_code" => 404,
                    "status" => "error",
                    "message" => "No Data Found"
                )
            );
        }
    }

    function getPatientTestList() {
        $this->patient_test_total_amount = 0;
        $count = 1;
        try {
            $sqlQuery = "SELECT * FROM `patient_test` WHERE patient_id = :id";
            $this->id = htmlspecialchars(strip_tags($this->id));
            $stmt1 = $this->conn->prepare($sqlQuery);
            $stmt1->bindParam(":id", $this->id);
            $stmt1->execute();
            $itemCount = $stmt1->rowCount();
            $patientTestListArr = array();
            $patientTestListArr["body"] = array();
            $patientTestListArr["total_amount"] = 0;
            $patientTestListArr["status"] = "200";
            $patientTestListArr["itemCount"] = $itemCount;
            if ( $itemCount != 0 ) {
                while( $row = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                    $id           = $row['id'];
                    $patient_id   = $row['patient_id'];
                    $lab_id       = $row['lab_id'];
                    $test_id      = $row['test_id'];
                    $this->patient_test_id = $row['test_id'];
                    $test_cat_id  = $row['test_cat_id'];
                    $this->patient_test_cat_id = $row['test_cat_id'];
                    $status       = $row['status'];
                    $created_at   = $row['created_at'];
                    $updated_at   = $row['updated_at'];
                
                    //getting Test Category Name
                    $sqlQuery2 = "SELECT * FROM `tests_categories` WHERE id = :test_cat_id";
                    $stmt2 = $this->conn->prepare($sqlQuery2);
                    $stmt2->bindParam(":test_cat_id", $this->patient_test_cat_id);
                    $stmt2->execute();
                    while( $row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                        $this->patient_test_cat_name = $row2['cat_name'];
                    }
                
                    //Getting Test Name
                    $sqlQuery3 = "SELECT * FROM `tests` WHERE id = :test_id";
                    $stmt3 = $this->conn->prepare($sqlQuery3);
                    $stmt3->bindParam(":test_id", $this->patient_test_id);
                    $stmt3->execute();
                    while( $row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
                        $this->patient_test_name = $row3['test_name'];
                        $this->patient_test_amount = $row3['price'];
                        $this->patient_test_total_amount = $this->patient_test_total_amount + $row3['price'];
                    }
                
                    //Getting Patient Name
                    $sqlQuery4 = "SELECT * FROM `patient` WHERE id =:id";
                    $stmt4 = $this->conn->prepare($sqlQuery4);
                    $stmt4->bindParam(":id", $this->id);
                    $stmt4->execute();
                    while( $row4 = $stmt4->fetch(PDO::FETCH_ASSOC) ) {
                        $this->patient_name = $row4['patient_name'];
                    }

                    $e = array(
                        "sno" => $count,
                        "patient_name" => $this->patient_name,
                        "test_cat_name" => $this->patient_test_cat_name,
                        "test_name" => $this->patient_test_name,
                        "amount" => $this->patient_test_amount
                    );
                    array_push($patientTestListArr["body"], $e);
                    $count++;
                }
                $patientTestListArr["total_amount"] = $this->patient_test_total_amount;
                echo json_encode($patientTestListArr);
                //return $patientTestListArr;
            } else {
                echo json_encode(
                    array(
                        "response_code" => 404,
                        "status" => "error",
                        "message" => "No Data Found"
                    )
                );
            }
        } catch(Exception $e) {
            echo $sqlQuery . "<br>" . $e->getMessage();
            return false;
        }
    }

    function getPatientDataForUpdate() {
        try {
            $sqlQuery = "
                  SELECT 
                patient.id, 
                patient.lab_id, 
                patient.patient_name, 
                patient.patient_age, 
                patient.sex, 
                patient.patient_mobile_no, 
                patient.patient_email, 
                patient.patient_ref, 
                patient.hospital, 
                patient.doctor, 
                patient.discount_perc, 
                patient.status, 
                patient.img, 
                patient.created_at, 
                patient.updated_at, 
                (
                  SELECT 
                    hospital_name 
                  FROM 
                    hospitals 
                  WHERE 
                    hospital_id = patient.hospital
                ) AS hospital_name, 
                (
                  SELECT 
                    doctor_name 
                  FROM 
                    doctors 
                  WHERE 
                    doctor_id = patient.doctor
                ) AS doctor_name FROM patient
                WHERE id = :id ;
            ";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(':id', $this->id);
            $stmt->execute();
            $itemCount = $stmt->rowCount();
            if ($itemCount != 0 ) {
                while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
                $patientArr = array();
                $patientArr["body"] = array();
                $patientArr["tests"] = array();
                $patientArr["status"] = "200";
                $patientArr['itemCount'] = $itemCount;
                
                $this->id = $row['id'];
                $this->patient_name = $row['patient_name'];
                $this->patient_age = $row['patient_age'];
                $this->patient_sex = $row['sex'];
                $this->patient_mobile_no = $row['patient_mobile_no'];
                $this->patient_email = $row['patient_email'];
                $this->patient_ref = $row['patient_ref'];
                $this->patient_hospital = $row['hospital'];
                $this->patient_doctor = $row['doctor'];
                $this->patient_discount = $row['discount_perc'];
                $this->patient_staus = $row['status'];
                $this->patient_hospital_name = $row['hospital_name'];
                $this->patient_doctor_name = $row['doctor_name'];
                
                $e = array(
                    "id" => $this->id,
                    "patient_name" => $this->patient_name,
                    "patient_age" => $this->patient_age,
                    "sex" => $this->patient_sex,
                    "patient_mobile_no" => $this->patient_mobile_no,
                    "patient_email" => $this->patient_email,
                    "patient_ref" => $this->patient_ref,
                    "hospital" => $this->patient_hospital,
                    "hospital_name" => $this->patient_hospital_name,
                    "doctor" => $this->patient_doctor,
                    "doctor_name" => $this->patient_doctor_name,
                    "discount_perc" => $this->patient_discount,
                    "status" => $this->patient_staus
                );
                array_push($patientArr["body"],$e);

                $sqlQuery1 = "SELECT * FROM `patient_test` WHERE patient_id = :id";
                $stmt1 = $this->conn->prepare($sqlQuery1);
                $stmt1->bindParam(":id", $this->id);
                $stmt1->execute();
                
                while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                    $this->patient_test_id = $row1['test_id'];
                    $this->patient_test_cat_id = $row1['test_cat_id'];
                    $sqlQuery2 = "SELECT * FROM `tests` WHERE id = :id";
                    $stmt2 = $this->conn->prepare($sqlQuery2);
                    $stmt2->bindParam(":id", $this->patient_test_id);
                    $stmt2->execute();
                    while ( $row2 = $stmt2->fetch(PDO::FETCH_ASSOC) ) {
                        $this->patient_test_name = $row2['test_name'];
                        $e = array(
                            "test_id" => $this->patient_test_id,
                            "test_name" => $this->patient_test_name
                        );
                        array_push($patientArr["tests"], $e);
                    }
                }
                echo json_encode($patientArr);
            }
            } else {
            echo json_encode(
                array(
                    "response_code" => 404,
                    "status" => "error",
                    "message" => "No Data Found"
                )
            );
        }

        } catch ( Exception $e ) {
            $e->getMessage();
        }
    }

}

?>