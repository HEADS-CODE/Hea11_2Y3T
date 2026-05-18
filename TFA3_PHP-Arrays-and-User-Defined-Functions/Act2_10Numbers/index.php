<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array List Computation</title>

    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: auto;
            font-family: Arial;
        }

        td, th {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

<?php

//Array Declaration
$nums10 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

//Values Initialize
$sum = 0;
$diff = $nums10[0];
$product = 1;
$quotient = $nums10[0];

//Calculation Loop
foreach ($nums10 as $index => $num) {
    $sum += $num;
    $product *= $num;

    if ($index > 0) {
        $diff -= $num;
        $quotient /= $num;
    }
}

?>

<!-- Table Display -->
<table>
    <tr>
        <th colspan="2">
            Array List:
            <?php
                foreach ($nums10 as $num) {
                    echo $num . ", ";
                }
            ?>
        </th>
    </tr>
    <tr>
        <td>Addition</td>
        <td><?php echo $sum; ?></td>
    </tr>
    <tr>
        <td>Subtraction</td>
        <td><?php echo $diff; ?></td>
    </tr>
    <tr>
        <td>Multiplication</td>
        <td><?php echo $product; ?></td>
    </tr>
    <tr>
        <td>Division</td>
        <td><?php echo $quotient; ?></td>
    </tr>
</table>

</body>
</html>