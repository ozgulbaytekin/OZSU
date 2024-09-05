<?php
class Employees {
    public $EmployeeId;
    public $TC;
    public $Name;
    public $UserName;
    public $AddDate;
    public $IsActive;





    public $conn;
    public $GarbageArray;

    public function __construct(){
        $this->conn = mysqli_connect("localhost","root","123456789","ozsu");
        if($this->conn->connect_error){
            die("Bağlantı hatası: ".$this->conn->connect_error);
        }
    }

    public function AddEmployee(){
        $sql = "INSERT INTO employees (TC,Name, UserName) VALUES ('$this->TC','$this->Name', '$this->UserName')";
        $result = $this->conn->query($sql);

        if ($result) {
            return mysqli_insert_id($this->conn);
        } else {
            echo 'Ekleme hatası: ' . $this->conn->error;
            return false;
        }
    }

    public function getEmployeeInfo($EmployeeId) {
        $EmployeeId = mysqli_real_escape_string($this->conn, $EmployeeId);

        $sql = "SELECT * FROM employees WHERE EmployeeId = '$EmployeeId'";
        $result = $this->conn->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }



    public function GetEmployees() {
        $tmpQueryString = "";
        if( isset($this->GarbageArray["SearchItem"]) and $this->GarbageArray["SearchItem"] != "" )
            $tmpQueryString = " WHERE 
                                CONCAT( TC, ' ',  Name, ' ', UserName ) like '%". $this->GarbageArray["SearchItem"] ."%' 
            ";

        $sql = "SELECT * FROM employees" . $tmpQueryString;

        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function DeleteEmployee() {
        $sql = "DELETE FROM employees  WHERE EmployeeId = '". $this->EmployeeId ."' ";

        $result = $this->conn->query($sql);
        return $result;
        }






}
?>
