<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/ozsu/Stock/StockHelper.php");
$EmployeeId = $_GET["EmployeeId"];



$getStockInfo = new Stocks();
$stockInfo = $getStockInfo->getStockInfo($EmployeeId);
unset($getInfirmaryInfo);

?>
<table>
    <tr>

        <td>StockId</td>
        <td>ProductName</td>
        <td>StocksAmount</td>
        <td>UnitPrice</td>
        <td>Name</td>
        <td>AddDate</td>
    </tr>
    <?php foreach ($stockInfo as $data) { ?>
        <tr>
            <td><?php echo $data["StockId"]; ?></td>
            <td><?php echo $data["ProductName"]; ?></td>
            <td><?php echo $data["StocksAmount"]; ?></td>
            <td><?php echo $data["UnitPrice"]; ?></td>
            <td><?php echo $data["Name"]; ?></td>
            <td><?php echo $data["AddDate"]; ?></td>
        </tr>
    <?php } ?>
</table>
