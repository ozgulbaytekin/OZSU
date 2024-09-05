<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/ozsu/Employee/EmployeeHelper.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/ozsu/Infirmary/InfirmaryHelper.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/ozsu/Production/ProductionHelper.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/ozsu/Sale/SaleHelper.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/ozsu/Stock/StockHelper.php");

$save_employee = new Employees();
$save_infirmary_record = new Infirmaries();
$save_production = new Productions();
$save_sale = new Sales();
$save_stock = new Stocks();

//Çalışan kaydı eklemek için
if (
    (isset($_POST['TC']) and $_POST['TC'] != "") AND
    (isset($_POST['Name']) and $_POST['Name'] != "") AND
    (isset($_POST['UserName']) and $_POST['UserName'] != "")
)
{
    $TC = $_POST['TC'];
    $Name = $_POST['Name'];
    $UserName = $_POST['UserName'];

    $save_employee->TC = $TC;
    $save_employee->Name = $Name;
    $save_employee->UserName = $UserName;
    $save_employee->AddEmployee();

    if ($save_employee) {

        echo "Form saved successfully!";
    } else {

        echo "Failed to submit the form.";
    }
}


//Revir kaydı eklemek için
if (
    (isset($_POST['rdoEmployee']) and $_POST['rdoEmployee'] != "") AND
    (isset($_POST['Name']) and $_POST['Name'] != "") AND
    (
        (isset($_POST['Eye']) and $_POST['Eye'] != "") OR
        (isset($_POST['Ear']) and $_POST['Ear'] != "") OR
        (isset($_POST['Skin']) and $_POST['Skin'] != "")
    )
) {
    $EmployeeId = $_POST['rdoEmployee'];
    $Name = $_POST['Name'];

    $save_infirmary_record->EmployeeId = $EmployeeId;
    $save_infirmary_record->Name = $Name;

    if (isset($_POST['Eye']) and $_POST['Eye'] != "") {
        $Eye = $_POST['Eye'];
        $save_infirmary_record->Eye = $Eye;
    }

    if (isset($_POST['Ear']) and $_POST['Ear'] != "") {
        $Ear = $_POST['Ear'];
        $save_infirmary_record->Ear = $Ear;
    }

    if (isset($_POST['Skin']) and $_POST['Skin'] != "") {
        $Skin = $_POST['Skin'];
        $save_infirmary_record->Skin = $Skin;
    }

    $save_infirmary_record->AddInfirmaryRecord();

    if ($save_infirmary_record) {
        echo "Form saved successfully!";
    } else {
        echo "Failed to submit the form.";
    }
} else {
    echo "Please, Check the form.";
}

//Üretim kaydı eklemek için
if (
    (isset($_POST['ProductName']) and $_POST['ProductName'] != "") AND
    (isset($_POST['Amount']) and $_POST['Amount'] != "") AND
    (isset($_POST['Cost']) and $_POST['Cost'] != "") AND
    (isset($_POST['CreatorEmployeeName']) and $_POST['CreatorEmployeeName'] != "")
)
{
    $ProductName = $_POST['ProductName'];
    $Amount = $_POST['Amount'];
    $Cost = $_POST['Cost'];
    $CreatorEmployeeName = $_POST['CreatorEmployeeName'];

    $save_production->ProductName= $ProductName;
    $save_production->Amount = $Amount;
    $save_production->Cost = $Cost;
    $save_production->CreatorEmployeeName = $CreatorEmployeeName;
    $save_production->AddProduction();

    if ($save_production) {

        echo "Form saved successfully!";
    } else {

        echo "Failed to submit the form.";
    }
}


//Satış kaydı eklemek için
if (
    (isset($_POST['ProductionId']) and $_POST['ProductionId'] != "") AND
    (isset($_POST['SalesAmount']) and $_POST['SalesAmount'] != "") AND
    (isset($_POST['SalesPrice']) and $_POST['SalesPrice'] != "") AND
    (isset($_POST['SalesEmployeeId']) and $_POST['SalesEmployeeId'] != "")
)
{

    $ProductionId = $_POST['ProductionId'];
    $SalesAmount = $_POST['SalesAmount'];
    $SalesPrice = $_POST['SalesPrice'];
    $SalesEmployeeId = $_POST['SalesEmployeeId'];

    $save_sale->ProductionId = $ProductionId;
    $save_sale->SalesAmount = $SalesAmount;
    $save_sale->SalesPrice = $SalesPrice;
    $save_sale->SalesEmployeeId = $SalesEmployeeId;
    $save_sale->AddSale();

    if ($save_sale) {

        echo "Form saved successfully!";
    } else {

        echo "Failed to submit the form.";
    }
}


//Stok kaydı eklemek için
if (
    (isset($_POST['ProductName']) and $_POST['ProductName'] != "") AND
    (isset($_POST['StocksAmount']) and $_POST['StocksAmount'] != "") AND
    (isset($_POST['UnitPrice']) and $_POST['UnitPrice'] != "") AND
    (isset($_POST['Name']) and $_POST['Name'] != "")
)
{

    $ProductName = $_POST['ProductName'];
    $StocksAmount = $_POST['StocksAmount'];
    $UnitPrice = $_POST['UnitPrice'];
    $Name = $_POST['Name'];

    $save_stock->ProductName = $ProductName;
    $save_stock->StocksAmount = $StocksAmount;
    $save_stock->UnitPrice= $UnitPrice;
    $save_stock->Name= $Name;
    $save_stock->AddStock();

    if ($save_stock) {

        echo "Form saved successfully!";
    } else {

        echo "Failed to submit the form.";
    }
}


unset($save_employee);
unset($save_infirmary_record);
unset($save_production);
unset($save_sale);
unset($save_stock);
?>