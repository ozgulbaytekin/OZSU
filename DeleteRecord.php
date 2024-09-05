<?php
if (isset($_POST['EmployeeId']) && $_POST['EmployeeId'] !== "") {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/ozsu/Employee/EmployeeHelper.php");
    $delete_employee = new Employees();
    $delete_employee->EmployeeId = $_POST['EmployeeId'];
    $delete_employee->DeleteEmployee();

    unset($delete_employee);
    echo $_POST['EmployeeId'] . " numaralı çalışan kaydı silindi.";
}

if (isset($_POST['InfirmaryId']) && $_POST['InfirmaryId'] !== "") {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/ozsu/Infirmary/InfirmaryHelper.php");
    $delete_infirmary_record = new Infirmaries();
    $delete_infirmary_record->InfirmaryId = $_POST['InfirmaryId'];
    $delete_infirmary_record->DeleteInfirmaryRecord();

    unset($delete_infirmary_record);
    echo $_POST['InfirmaryId'] . " numaralı revir kaydı silindi.";
}

if (isset($_POST['ProductionId']) && $_POST['ProductionId'] !== "") {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/ozsu/Production/ProductionHelper.php");
    $delete_production_record = new Productions();
    $delete_production_record->ProductionId = $_POST['ProductionId'];
    $delete_production_record->DeleteProduction();

    unset($delete_production_record);
    echo $_POST['ProductionId'] . " numaralı üretim kaydı silindi.";
}

if (isset($_POST['SaleId']) && $_POST['SaleId'] !== "") {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/ozsu/Sale/SaleHelper.php");
    $delete_sale_record = new Sales();
    $delete_sale_record->SaleId = $_POST['SaleId'];
    $delete_sale_record->DeleteSale();

    unset($delete_sale_record);
    echo $_POST['SaleId'] . " numaralı satış kaydı silindi.";
}

if (isset($_POST['StockId']) && $_POST['StockId'] !== "") {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/ozsu/Stock/StockHelper.php");
    $delete_stock_record = new Stocks();
    $delete_stock_record->StockId = $_POST['StockId'];
    $delete_stock_record->DeleteStock();

    unset($delete_stock_record);
    echo $_POST['StockId'] . " numaralı stok kaydı silindi.";
}
?>
