<?php require("data.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Skills</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <table>
            <!--Title-->
            <tr>
                <td colspan="2" class="title">
                    <b>Skills</b>
                </td>
            </tr>
            <!--Content-->
            <tr>
                <?php
                foreach ($skills as $skill) {
                    echo "<tr><td>-> $skill</td></tr>";
                }
                ?>
            </tr>
            <!--Back Btn-->
            <tr>
                <td colspan="2">
                    <a href="index.php">← Back to Menu</a>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>