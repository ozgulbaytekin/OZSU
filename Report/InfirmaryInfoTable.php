<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/ozsu/Infirmary/InfirmaryHelper.php");
$EmployeeId = $_GET["EmployeeId"];



$getInfirmaryInfo = new Infirmaries();
$infirmaryInfo = $getInfirmaryInfo->getInfirmaryInfo($EmployeeId);
unset($getInfirmaryInfo);
?>
<table>
    <tr>
        <td>InfirmaryId</td>
        <td>EmployeeId</td>
        <td>Name</td>
        <td>Eye</td>
        <td>Ear</td>
        <td>Skin</td>
        <td>AddDate</td>
    </tr>
    <?php foreach ($infirmaryInfo as $data) { ?>
        <tr>
            <td><?php echo $data["InfirmaryId"]; ?></td>
            <td><?php echo $data["EmployeeId"]; ?></td>
            <td><?php echo $data["Name"]; ?></td>
            <td><?php echo $data["Eye"]; ?></td>
            <td><?php echo $data["Ear"]; ?></td>
            <td><?php echo $data["Skin"]; ?></td>
            <td><?php echo $data["AddDate"]; ?></td>
        </tr>
    <?php } ?>
</table>
