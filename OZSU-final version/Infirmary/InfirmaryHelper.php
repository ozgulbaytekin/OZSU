<?php
class Infirmaries {
    public $InfirmaryId;
    public $EmployeeId;
    public $Name;
    public $Eye;
    public $Ear;
    public $Skin;




    public $conn;

    public function __construct(){
        $this->conn = mysqli_connect("localhost","root","123456789","ozsu");
        if($this->conn->connect_error){
            die("Bağlantı hatası: ".$this->conn->connect_error);
        }
    }




    public function AddInfirmaryRecord() {
        $sql = "INSERT INTO infirmaries (EmployeeId, Name, Eye, Ear, Skin) 
                VALUES ('". $this->EmployeeId. "', '". $this->Name. "', '". $this->Eye. "', '". $this->Ear. "', '". $this->Skin. "')";

        $result = $this->conn->query($sql);

        if ($result) {
            return mysqli_insert_id($this->conn);
        } else {
            echo 'Ekleme hatası: ' . $this->conn->error;
            return false;
        }
    }
    public function getInfirmaryInfo($EmployeeId) {
        $EmployeeId = mysqli_real_escape_string($this->conn, $EmployeeId);

        $sql = "SELECT * FROM infirmaries WHERE EmployeeId = '$EmployeeId'";
        $result = $this->conn->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }



    public function GetInfirmaryRecords() {//buraya joinli bir şeyler eklenecekmiş

        $tmpQueryString = "";
        if( isset($this->GarbageArray["SearchItem"]) and $this->GarbageArray["SearchItem"] != "" )
            $tmpQueryString = " WHERE 
                                CONCAT( EmployeeId, ' ',  Name, ' ', Eye,' ',Ear,' ',Skin ) like '%". $this->GarbageArray["SearchItem"] ."%' 
            ";

        $sql = "SELECT * FROM infirmaries" . $tmpQueryString;

        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function DeleteInfirmaryRecord() {
        $sql = "DELETE FROM infirmaries  WHERE InfirmaryId = '". $this->InfirmaryId ."' ";
        $result = $this->conn->query($sql);
        return $result;
    }



}
?>