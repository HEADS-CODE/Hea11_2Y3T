<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #2e1a47;
            font-family: 'Readex Pro', sans-serif;
            color: white;
            text-align: center;
            padding-top: 100px;
        }

        .nav-link {
            color: #7a4bff;
            background: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            margin: 10px;
            display: inline-block;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <a href="reset_password.php" class="nav-link">Reset Password</a>
    <a href="logout.php" class="nav-link" style="background:#ff4b4b; color:white;">Logout</a>
</body>

</html>