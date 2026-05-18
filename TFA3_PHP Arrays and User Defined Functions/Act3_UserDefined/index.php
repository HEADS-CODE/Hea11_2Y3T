<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Defined Function</title>

    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: auto;
            font-family: Arial;
        }

        td,
        th {
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

    //User Defined Function
    function my_function($a, $b, $c)
    {

        //Computation
        $sum = $a + $b + $c;
        $diff = $a - $b - $c;
        $product = $a * $b * $c;
        $quotient = $a / $b / $c;

        //Display Table
        echo "<table>";
        echo "<tr><th colspan='2'>My Parameter values: $a, $b, $c</th></tr>";
        echo "<tr><td>Addition</td><td>$sum</td></tr>";
        echo "<tr><td>Subtraction</td><td>$diff</td></tr>";
        echo "<tr><td>Multiplication</td><td>$product</td></tr>";
        echo "<tr><td>Division</td><td>$quotient</td></tr>";
        echo "</table>";
    }

    //Function Call
    my_function(25, 13, 6);

    ?>

</body>
</html>