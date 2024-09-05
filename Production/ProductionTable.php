<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/ozsu/Production/ProductionHelper.php");?>
    <table>
        <tr>

            <td>     </td>
            <td>ProductionId</td>
            <td>ProductName</td>
            <td>Amount</td>
            <td>Cost</td>
            <td>CreatorEmployeeName</td>
            <td>AddDate</td>

        </tr>
        <?php

        $getEmployees = new Productions();
        $temp = $getEmployees->GetProductions();

        foreach ($temp as $data){
            ?>
            <tr>

                <td><button class='btn btn-danger' onclick="DeleteProductionRecord(<?php echo $data['ProductionId']; ?>);">Delete</button></td>
                <td><?php echo $data["ProductionId"]; ?></td>
                <td><?php echo $data["ProductName"]; ?></td>
                <td><?php echo $data["Amount"]; ?></td>
                <td><?php echo $data["Cost"]; ?></td>
                <td><?php echo $data["CreatorEmployeeName"]; ?></td>
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
                margin: auto;
                margin-top: 50px;
                margin-bottom: 50px;
            }
            table th {

                color: #fff;
                font-weight: bold;
                padding: 10px;
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
<?php
