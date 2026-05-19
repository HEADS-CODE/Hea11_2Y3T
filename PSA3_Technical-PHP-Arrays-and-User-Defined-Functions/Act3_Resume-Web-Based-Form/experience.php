<?php require("data.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Work Experience</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <table>
            <!--Title-->
            <tr>
                <td colspan="2" class="title">
                    <b>Work Experience</b>
                </td>
            </tr>
            <!--Content-->
            <tr>
                <td colspan="2">
                    <table>
                        <tr>
                            <td><b>Event</b></td>
                            <td><b>Role</b></td>
                        </tr>
                        <tr>
                            <td><?= $experience; ?></td>
                            <td><?= $role; ?></td>
                        </tr>
                    </table>
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