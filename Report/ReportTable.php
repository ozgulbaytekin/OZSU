<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/ozsu/Infirmary/InfirmaryHelper.php");?>
<table>
    <tr>

        <td>     </td>
        <td>InfirmaryId</td>
        <td>EmployeeId</td>
        <td>Eye</td>
        <td>Ear</td>
        <td>Skin</td>
        <td>AddDate</td>
    </tr>
    <?php

    $getInfirmaries = new Infirmaries();
    $temp = $getInfirmaries->GetInfirmaryRecords();

    foreach ($temp as $data){
        ?>
        <tr>


            <td><?php echo $data["EmployeeId"]; ?></td>
            <td><?php echo $data["Name"]; ?></td>
            <td><?php echo $data["Eye"]; ?></td>
            <td><?php echo $data["Ear"]; ?></td>
            <td><?php echo $data["Skin"]; ?></td>
            <td><?php echo $data["AddDate"]; ?></td>
        </tr>

        <?php
    }
    ?>



    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            color: #333;
            font-family: Arial, sans-serif;
            font-size: 14px;
            text-align: left;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);

            margin-top: 50px;
            margin-bottom: 50px;
        }
        table th {

            color: #fff;
            font-weight: bold;
            padding: 100px;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-top: 1px solid #fff;
            border-bottom: 1px solid #ccc;
        }
        table tr:nth-child(even) td {
            background-color: #f2f2f2;
        }


        table td {
            background-color: #fff;
            padding: 10px;
            border-bottom: 1px solid #ccc;
            font-weight:bold;
        }

    </style>

</table>
