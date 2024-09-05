<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/ozsu/Stock/StockHelper.php");

$getStocks = new Stocks();
$getStocks->GarbageArray["SearchItem"] = $_POST["ProductName"];
$temp = $getStocks->ProductionGetStock();

foreach ($temp as $data){
    ?>
    <label><input type="radio" name="rdoStock" id="rdoStock" onclick="StockInfoTable(<?php echo $data['StockId'];?>);"  value="<?php echo $data['StockId']; ?>"> <?php echo $data["ProductName"]; ?> <?php echo $data["StocksAmount"]; ?> <?php echo $data["UnitPrice"]; ?> </label> <br>
    <?php
}
?>