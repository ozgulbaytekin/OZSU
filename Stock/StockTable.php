<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/ozsu/Stock/StockHelper.php");?>
<table>
    <tr>

        <td>     </td>
        <td>StockId</td>
        <td>ProductName</td>
        <td>StocksAmount</td>
        <td>UnitPrice</td>
        <td>Name</td>
        <td>AddDate</td>

    </tr>
    <?php

    $getStocks= new Stocks();
    $temp = $getStocks->GetStocks();

    foreach ($temp as $data){
        ?>
        <tr>

            <td><button class='btn btn-danger' onclick="DeleteStock(<?php echo $data['StockId']; ?>);">Delete</button></td>
            <td><?php echo $data["StockId"]; ?></td>
            <td><?php echo $data["ProductName"]; ?></td>
            <td><?php echo $data["StocksAmount"]; ?></td>
            <td><?php echo $data["UnitPrice"]; ?></td>
            <td><?php echo $data["Name"]; ?></td>
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
