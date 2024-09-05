<?php
class Sales {
    public $SaleId;
    public $ProductionId;
    public $IsPayment;
    public $SalesAmount;
    public $SalesPrice;
    public $SalesEmployeeId;
    public $AddDate;
    public $IsActive;





    public $conn;

    public function __construct(){
        $this->conn = mysqli_connect("localhost","root","123456789","ozsu");
        if($this->conn->connect_error){
            die("Bağlantı hatası: ".$this->conn->connect_error);
        }
    }

    public function AddSale(){
        $sql = "INSERT INTO sales (ProductionId, SalesAmount, SalesPrice, SalesEmployeeId) VALUES ('$this->ProductionId','$this->SalesAmount', '$this->SalesPrice', '$this->SalesEmployeeId')";
        $result = $this->conn->query($sql);

        if ($result) {
            return mysqli_insert_id($this->conn);
        } else {
            echo 'Ekleme hatası: ' . $this->conn->error;
            return false;
        }
    }


    public function GetSales() {
        $sql = "SELECT * FROM sales";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function DeleteSale() {
        $sql = "DELETE FROM sales  WHERE SaleId = '". $this->SaleId ."' ";
        $result = $this->conn->query($sql);
        return $result;
    }





}
?>