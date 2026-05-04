<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Measure Conversion Chart - Lengths (UK)</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>MEASURE CONVERSION CHART - LENGTHS (UK)</h1>

<?php
function createTable($title, $rows) {
    echo "<table>";
    echo "<tr><th colspan='4' class='section-title'>$title</th></tr>";

    foreach ($rows as $row) {
        echo "<tr>";
        foreach ($row as $col) {
            echo "<td>$col</td>";
        }
        echo "</tr>";
    }

    echo "</table><br>";
}

// DATA
$metric = [
    ["1 centimetre", "=", "10 millimetres", "1 cm = 10 mm"],
    ["1 decimetre", "=", "10 centimetres", "1 dm = 10 cm"],
    ["1 metre", "=", "100 centimetres", "1 m = 100 cm"],
    ["1 kilometre", "=", "1000 metres", "1 km = 1000 m"]
];

$imperial = [
    ["1 foot", "=", "12 inches", "1 ft = 12 in"],
    ["1 yard", "=", "3 feet", "1 yd = 3 ft"],
    ["1 chain", "=", "22 yards", "1 ch = 22 yd"],
    ["1 furlong", "=", "220 yards", "1 fur = 220 yd"],
    ["1 mile", "=", "1760 yards", "1 mi = 1760 yd"]
];

$metric_to_imp = [
    ["1 millimetre", "=", "0.03937 inches", "1 mm = 0.03937 in"],
    ["1 centimetre", "=", "0.39370 inches", "1 cm = 0.39370 in"],
    ["1 metre", "=", "39.37008 inches", "1 m = 39.37008 in"],
    ["1 metre", "=", "3.28084 feet", "1 m = 3.28084 ft"],
    ["1 metre", "=", "1.09361 yards", "1 m = 1.09361 yd"],
    ["1 kilometre", "=", "1093.6133 yards", "1 km = 1093.6133 yd"],
    ["1 kilometre", "=", "0.62137 miles", "1 km = 0.62137 mi"]
];

$imp_to_metric = [
    ["1 inch", "=", "2.54 centimetres", "1 in = 2.54 cm"],
    ["1 foot", "=", "30.48 centimetres", "1 ft = 30.48 cm"],
    ["1 yard", "=", "91.44 centimetres", "1 yd = 91.44 cm"],
    ["1 yard", "=", "0.9144 metres", "1 yd = 0.9144 m"],
    ["1 mile", "=", "1609.344 metres", "1 mi = 1609.344 m"],
    ["1 mile", "=", "1.609344 kilometres", "1 mi = 1.609344 km"]
];

// OUTPUT TABLES
createTable("METRIC CONVERSIONS", $metric);
createTable("IMPERIAL CONVERSIONS", $imperial);
createTable("METRIC -> IMPERIAL CONVERSIONS", $metric_to_imp);
createTable("IMPERIAL -> METRIC CONVERSIONS", $imp_to_metric);
?>

</body>
</html>