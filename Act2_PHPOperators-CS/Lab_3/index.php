<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Two-Digit Decimal Combination</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <hr>
    <h2>Two-Digit Decimal Combination</h2>
    <hr><div class="output">
        <?php
        $count = 0;
        for ($i = 0; $i <= 99; $i++) {
            //Printed in a comma Delimited format.
            if ($i < 10) {
                echo "0" . $i . ", ";
            } else {
                echo $i . ", ";
            }
            $count++;
            if ($count % 19 == 0) {
                echo "<br>";
            }
        }
        ?>
    <hr></div>
</body>
</html> 