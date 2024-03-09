<?php

class doctor {

    private $conn;
    private $db_table = "doctors";
    //Colums
    public $doctor_id;
    public $hospital_id;
    public $doctor_name;
    public $doctor_degree;
    public $doctor_percentage;
    public $status;
    public $created_at;
    public $updated_at;
    //DB Connection
    public function __construct($db) {
        $this->conn = $db;
    }

    // GET ALL Doctors
    public function getAllDoctors() {
        $sqlQuery = "SELECT * FROM . $this->db_table";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }

    // GET ALL Doctors By Hospital ID
    public function getDoctorByHospitalForDropdown() {
        $sqlQuery = "SELECT doctor_id, doctor_name FROM ". $this->db_table." WHERE hospital_id=?";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->bindParam(1, $this->hospital_id);
        $stmt->execute();
        return $stmt;
    }

    // Read Single
    public function getSingleDoctor() {
        $sqlQuery = "SELECT * FROM . $this->db_table . WHERE id=?";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->bindParam(1, $this->doctor_id);
        $stmt->execute();
        $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->hospital_id = $dataRow['hospital_id'];
        $this->doctor_name = $dataRow['doctor_name'];
        $this->doctor_degree = $dataRow['doctor_degree'];
        $this->doctor_percentage = $dataRow['doctor_percentage'];
        $this->status = $dataRow['status'];
        $this->created_at = $dataRow['created_at'];
        $this->updated_at = $dataRow['updated_at'];

    }
}

?>