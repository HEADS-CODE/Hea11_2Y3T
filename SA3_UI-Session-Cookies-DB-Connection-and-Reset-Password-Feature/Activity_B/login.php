<?php
session_start();
include 'db_config.php';

$error = "";

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM tbl_accounts WHERE username='$user' AND password='$pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $user;

        if (isset($_POST['remember'])) {
            setcookie("user", $user, time() + (86400 * 30));
            setcookie("pass", $pass, time() + (86400 * 30));
        }

        header("Location: home.php");
        exit();
    } else {
        $error = "Invalid database credentials.";
    }
}

$saved_user = isset($_COOKIE['user']) ? $_COOKIE['user'] : "";
$saved_pass = isset($_COOKIE['pass']) ? $_COOKIE['pass'] : "";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Activity B: Login</title>
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
            width: 300px;
        }

        .error-warn {
            background-color: #ffebee;
            color: #c62828;
            padding: 10px;
            border-radius: 5px;
            font-size: 13px;
            margin-bottom: 15px;
            border: 1px solid #ef9a9a;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #7a4bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
    </style>
</head>

<body>

<div class="main-box">
    <h3>Login</h3>

    <?php
    if ($error) {
        echo "<div class='error-warn'>$error</div>";
    }
    ?>

    <form method="POST">
        <input
            type="text"
            name="username"
            value="<?php echo htmlspecialchars($saved_user); ?>"
            placeholder="Username"
            required>

        <input
            type="password"
            name="password"
            value="<?php echo htmlspecialchars($saved_pass); ?>"
            placeholder="Password"
            required>

        <label style="font-size:12px;">
            <input type="checkbox" name="remember">
            Remember Me
        </label>

        <button type="submit" name="login">
            Login
        </button>
    </form>

</div>

</body>
</html>