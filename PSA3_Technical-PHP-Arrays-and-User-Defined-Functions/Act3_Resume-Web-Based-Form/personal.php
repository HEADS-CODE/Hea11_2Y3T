<?php require("data.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Personal Information</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <table>
            <!--Title-->
            <tr>
                <td colspan="2" class="title">
                    <b>Personal Information</b>
                </td>
            </tr>
            <!--Content-->
            <tr>
                <td colspan="2">
                    <table>
                        <tr>
                            <td><b>Full Name</b></td>
                            <td><?= $fullName; ?></td>
                        </tr>
                        <tr>
                            <td><b>Email</b></td>
                            <td><?= $email; ?></td>
                        </tr>
                        <tr>
                            <td><b>Phone</b></td>
                            <td><?= $phone; ?></td>
                        </tr>
                        <tr>
                            <td><b>Address</b></td>
                            <td><?= $address; ?></td>
                        </tr>
                        <tr>
                            <td><b>Birthdate</b></td>
                            <td><?= $birthdate; ?></td>
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