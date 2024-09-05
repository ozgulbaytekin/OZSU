<?php
class Stocks {
    public $StockId;
    public $ProductName;
    public $StocksAmount;
    public $UnitPrice;
    public $Name;
    public $AddDate;
    public $conn;

    public function __construct(){
        $this->conn = mysqli_connect("localhost","root","123456789","ozsu");
        if($this->conn->connect_error){
            die("Bağlantı hatası: ".$this->conn->connect_error);
        }
    }

    public function AddStock(){
        $sql = "INSERT INTO stocks (ProductName, StocksAmount, UnitPrice,Name) VALUES ('$this->ProductName', '$this->StocksAmount', '$this->UnitPrice', '$this->Name')";
        $result = $this->conn->query($sql);

        if ($result) {
            return mysqli_insert_id($this->conn);
        } else {
            echo 'Ekleme hatası: ' . $this->conn->error;
            return false;
        }
    }


    public function GetStocks() {//buraya joinli bir şeyler eklenecekmiş

        $tmpQueryString = "";
        if( isset($this->GarbageArray["SearchItem"]) and $this->GarbageArray["SearchItem"] != "" )
            $tmpQueryString = " WHERE 
                                CONCAT( ProductName, ' ',  StocksAmount, ' ', UnitPrice,' ',' ',Name,' ',AddDate ) like '%". $this->GarbageArray["SearchItem"] ."%' 
            ";

        $sql = "SELECT * FROM stocks" . $tmpQueryString;

        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function ProductionGetStock() {

        $tmpQueryString = "";
        if( isset($this->GarbageArray["SearchItem"]) and $this->GarbageArray["SearchItem"] != "" )
            $tmpQueryString = " WHERE 
                                CONCAT( ProductName, ' ',  StocksAmount, ' ', UnitPrice ) like '%". $this->GarbageArray["SearchItem"] ."%' 
            ";

        $sql = "SELECT * FROM stocks" . $tmpQueryString;

        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }


    public function DeleteStock() {
        $sql = "DELETE FROM stocks  WHERE StockId = '". $this->StockId ."' ";
        $result = $this->conn->query($sql);
        return $result;
    }
    public function getStockInfo($EmployeeId) {
        $EmployeeId = mysqli_real_escape_string($this->conn, $EmployeeId);

        $sql = "SELECT * FROM employees WHERE EmployeeId = '$EmployeeId'";
        $result = $this->conn->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }




}
?>