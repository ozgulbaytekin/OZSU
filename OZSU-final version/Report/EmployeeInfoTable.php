<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/ozsu/Employee/EmployeeHelper.php");
$EmployeeId = $_GET["EmployeeId"];



$getEmployeeInfo = new Employees();
$employeeInfo = $getEmployeeInfo->getEmployeeInfo($EmployeeId);

unset($getEmployeeInfo);

?>
<table>
    <tr>
        <td>Employee Id</td>
        <td>Name</td>
        <td>UserName</td>
        <td>AddDate</td>
    </tr>
    <?php foreach ($employeeInfo as $data) { ?>
        <tr>
            <td><?php echo $data["EmployeeId"]; ?></td>
            <td><?php echo $data["Name"]; ?></td>
            <td><?php echo $data["UserName"]; ?></td>
            <td><?php echo $data["AddDate"]; ?></td>
        </tr>
    <?php } ?>
</table>
