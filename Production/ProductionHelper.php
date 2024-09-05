<?php
class Productions {
    public $ProductionId;
    public $StockId;
    public $ProductName;
    public $Amount;
    public $Cost;
    public $CreatorEmployeeName;
    public $AddDate;
    public $IsActive;
    public $conn;

    public function __construct(){
        $this->conn = mysqli_connect("localhost","root","123456789","ozsu");
        if($this->conn->connect_error){
            die("Bağlantı hatası: ".$this->conn->connect_error);
        }
    }

    public function AddProduction() {
        $sql = "INSERT INTO productions (ProductName, Amount, Cost, CreatorEmployeeName) 
                VALUES ('". $this->ProductName. "', '". $this->Amount. "', '". $this->Cost. "', '". $this->CreatorEmployeeName. "')";

        $result = $this->conn->query($sql);

        if ($result) {
            return mysqli_insert_id($this->conn);
        } else {
            echo 'Ekleme hatası: ' . $this->conn->error;
            return false;
        }
    }


    public function GetProductions() {
        $sql = "SELECT * FROM productions";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function DeleteProduction() {
        $sql = "DELETE FROM productions  WHERE ProductionId = '". $this->ProductionId ."' ";
        $result = $this->conn->query($sql);
        return $result;
        }




}
?>
