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
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #2e1a47;
            font-family: 'Readex Pro', sans-serif;
            color: white;
            text-align: center;
            padding-top: 100px;
        }

        .logout-btn {
            background: #ff4b4b;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <br><br>
    <a href="logout.php" class="logout-btn">Logout</a>
</body>

</html>