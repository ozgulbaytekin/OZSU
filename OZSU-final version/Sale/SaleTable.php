<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/ozsu/Sale/SaleHelper.php");?>
<table>
    <tr>

        <td>     </td>
        <td>SaleId</td>
        <td>ProductionId</td>
        <td>SalesAmount</td>
        <td>SalesPrice</td>
        <td>SalesEmployeeId</td>
        <td>IsPayment</td>
        <td>AddDate</td>

    </tr>
    <?php

    $getSales = new Sales();
    $temp = $getSales->GetSales();

    foreach ($temp as $data){
        ?>
        <tr>

            <td><button class='btn btn-danger' onclick="DeleteSale(<?php echo $data['SaleId']; ?>);">Delete</button></td>
            <td><?php echo $data["SaleId"]; ?></td>
            <td><?php echo $data["ProductionId"]; ?></td>
            <td><?php echo $data["SalesAmount"]; ?></td>
            <td><?php echo $data["SalesPrice"]; ?></td>
            <td><?php echo $data["SalesEmployeeId"]; ?></td>
            <td><?php echo $data["IsPayment"]; ?></td>
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
