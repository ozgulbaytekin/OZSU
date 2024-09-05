<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/ozsu/Employee/EmployeeHelper.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/ozsu/Infirmary/InfirmaryHelper.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/ozsu/Stock/StockHelper.php");

$getEmployees = new Employees();
$getEmployees->GarbageArray["SearchItem"] = $_POST["Name"];
$temp = $getEmployees->GetEmployees();


foreach ($temp as $data){
    ?>
    <label><input type="radio" name="rdoEmployee" id="rdoEmployee" onclick="EmployeeInfoTable(<?php echo $data['EmployeeId'];?>); InfirmaryInfoTable(<?php echo $data['EmployeeId'];?>)"  value="<?php echo $data['EmployeeId']; ?>">   <?php echo $data["TC"]; ?> <?php echo $data["Name"]; ?> <?php echo $data["UserName"]; ?> </label> <br>
    <?php
}
?>