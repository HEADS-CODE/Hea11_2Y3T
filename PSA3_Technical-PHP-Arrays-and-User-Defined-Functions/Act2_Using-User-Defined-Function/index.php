<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volume of Shapes</title>
</head>
<body>

    <?php
    //User Defined Function
    function volume_table($values, $formula, $answer)
    {
        echo "<table>";
        echo "<tr><th colspan='3'>Volume of Shapes</th></tr>";
        echo "<tr><th>Values</th><th>Formula</th><th>Answer</th></tr>";
        echo "<tr>";
        echo "<td>$values</td>";
        echo "<td>$formula</td>";
        echo "<td>$answer</td>";
        echo "</tr>";
        echo "</table>";
    }

    //Function Calls for Different Shapes
    //Cube: V = s^3
    $s = 5;
    volume_table("s = $s", "V = s³", $s * $s * $s);

    //Rectangular Prism: V = l × w × h
    $l = 4;
    $w = 3;
    $h = 2;
    volume_table("l=$l, w=$w, h=$h", "V = l×w×h", $l * $w * $h);

    //Cylinder: V = πr^2h
    $r = 3;
    $h = 5;
    volume_table("r=$r, h=$h", "V = πr²h", pi() * $r * $r * $h);

    //Cone: V = 1/3 πr^2h
    $r = 3;
    $h = 5;
    volume_table("r=$r, h=$h", "V = 1/3 πr²h", (1 / 3) * pi() * $r * $r * $h);

    //Sphere: V = 4/3 πr^3
    $r = 3;
    volume_table("r=$r", "V = 4/3 πr³", (4 / 3) * pi() * $r * $r * $r);

    ?>
</body>

</html>