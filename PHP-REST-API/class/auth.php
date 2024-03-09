<?php

error_reporting(E_ALL ^ E_NOTICE);  
date_default_timezone_set("Asia/Calcutta");

class auth {
    private $conn;
    private $db_table = "users";

    private $db_table_1 =  "user_track";
    private $id;
    private $test_center_id;
    private $name;
    private $sex;
    private $mobile_no;
    private $email;
    private $password;
    private $user_type;
    private $status;
    private $created_at;
    private $updated_at;

    public function setMobile($mobile) {
        $this->mobile_no = $mobile;
    }

    public function getMobile() {
        return $this->mobile_no;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getPassword() {
        return $this->password;
    }


    public function __construct($db) {
        $this->conn = $db;
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function signin() {
        $sqlQuery = "SELECT * FROM ".$this->db_table." WHERE mobile_no=? AND password=?";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->bindParam(1, $this->mobile_no);
        $stmt->bindParam(2, $this->password);
        $stmt->execute();
        $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->id = $dataRow['id'];
        $this->test_center_id = $dataRow['test_center_id'];
        $this->mobile_no = $dataRow['mobile_no'];
        $this->created_at = date("Y-m-d H:i:s");
        //print_r($dataRow);
        //echo "Stmt:".$stmt->rowCount()."|";
        //echo "RowCount:".count($dataRow)."|";
        //echo $dataRow['id'];
        //$count = $dataRow->rowCount();
        if ($stmt->rowCount() == 0) {
            return false;
        } else {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();//Start session if none exists/already started
            }
            $_SESSION['dataData'] = $dataRow['id'];
            //Setting Cookies
            $cookie_name = "ztxret2twrlab8re";
            $cookie_value = $this->test_center_id;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
            $sqlQuery_1 = "INSERT INTO " . $this->db_table_1. " ". "
            SET
                user_id= :user_id,
                last_login_date_time= :last_login_login";
            try {
                $stmt_1 = $this->conn->prepare($sqlQuery_1);
                $stmt_1->bindParam(":user_id", $this->id);
                $stmt_1->bindParam(":last_login_login", $this->created_at);
                if ($stmt_1->execute()) {
                    return true;
                }      
            } catch(Exception $e) {
                //echo $sqlQuery_1 . "<br>" . $e->getMessage();
                return false;
            }
        }
    }

}

?>