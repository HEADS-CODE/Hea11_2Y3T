<?php require("data.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Career Objective</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <table>
            <!--Title-->
            <tr>
                <td colspan="2" class="title">
                    <b>Career Objective</b>
                </td>
            </tr>
            <!--Content-->
            <tr>
                <td colspan="2">
                    <?= $objective; ?>
                </td>
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