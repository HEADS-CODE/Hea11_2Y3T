<?php
session_start();
include 'db_config.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$msg = "";
$user = $_SESSION['username'];

if (isset($_POST['reset'])) {

    $current_input = $_POST['current_pass'];
    $new_pass = $_POST['new_pass'];
    $confirm_new = $_POST['confirm_new'];

    $sql = "SELECT password FROM tbl_accounts WHERE username='$user'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($current_input != $row['password']) {
        $msg = "Current password is not the same with the old password";
    } elseif ($new_pass != $confirm_new) {
        $msg = "New password and Re-Enter new password should be the same.";
    } else {

        $update = "UPDATE tbl_accounts
                   SET password='$new_pass'
                   WHERE username='$user'";

        if (mysqli_query($conn, $update)) {
            $msg = "Password reset successfully!";
        } else {
            $msg = "Error updating password.";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Reset Password</title>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #2e1a47;
            font-family: 'Readex Pro', sans-serif;
            display: flex;
            justify-content: center;
            padding-top: 100px;
        }

        .main-box {
            background: white;
            border-radius: 15px;
            padding: 30px;
            width: 350px;
        }

        .message {
            background: #f4efff;
            border: 1px solid #7a4bff;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 15px;
            text-align: center;
            font-size: 13px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #7a4bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        a {
            color: #7a4bff;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="main-box">

        <h3>Reset Password</h3>

        <?php
        if ($msg != "") {
            echo "<div class='message'>$msg</div>";
        }
        ?>

        <form method="POST">

            <input type="password" name="current_pass" placeholder="Current Password" required>

            <input type="password" name="new_pass" placeholder="New Password" required>

            <input type="password" name="confirm_new" placeholder="Re-Enter New Password" required>

            <button type="submit" name="reset">
                Update Password
            </button>

        </form>

        <p style="text-align:center; margin-top:15px;">
            <a href="home.php">Back to Home</a>
        </p>

    </div>

</body>

</html>