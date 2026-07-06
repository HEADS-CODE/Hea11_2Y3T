<?php
session_start();
if (isset($_SESSION['username'])) { header("Location: home.php"); exit(); }

$static_user = "heads";
$static_pass = "12345";
$error_msg = "";

if (isset($_POST['login'])) {
    if ($_POST['username'] === $static_user && $_POST['password'] === $static_pass) {
        $_SESSION['username'] = $_POST['username'];
        
        if (isset($_POST['remember'])) {
            setcookie("user", $_POST['username'], time() + (86400 * 30));
            setcookie("pass", $_POST['password'], time() + (86400 * 30));
        }
        header("Location: home.php");
        exit();
    } else { 
        $error_msg = "Invalid username or password."; 
    }
}

$saved_user = isset($_COOKIE['user']) ? $_COOKIE['user'] : "";
$saved_pass = isset($_COOKIE['pass']) ? $_COOKIE['pass'] : "";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">
    <style>
        body { 
            background-color: #2e1a47; 
            font-family: 'Readex Pro', sans-serif; 
            display: flex; 
            justify-content: center; 
            padding-top: 100px; 
            margin: 0;
        }
        .main-box { 
            background: white; 
            border-radius: 15px; 
            padding: 30px; 
            width: 300px; 
            box-shadow: 0px 4px 15px rgba(0,0,0,0.3);
        }
        h3 { margin-top: 0; color: #2e1a47; }
        .error-warn {
            background-color: #ffebee;
            color: #c62828;
            padding: 10px;
            border-radius: 5px;
            font-size: 13px;
            margin-bottom: 15px;
            border: 1px solid #ef9a9a;
        }
        input[type="text"], input[type="password"] { 
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
            font-weight: bold;
            margin-top: 10px;
        }
        .remember-text { font-size: 12px; color: #666; }
    </style>
</head>
<body>
    <div class="main-box">
        <h3>Login</h3>
        
        <?php if ($error_msg): ?>
            <div class="error-warn"><?php echo $error_msg; ?></div>
        <?php endif; ?>

        <form method="POST">
            <input type="text" name="username" value="<?php echo htmlspecialchars($saved_user); ?>" placeholder="Username" required>
            <input type="password" name="password" value="<?php echo htmlspecialchars($saved_pass); ?>" placeholder="Password" required>
            <label class="remember-text">
                <input type="checkbox" name="remember"> Remember Me
            </label>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>
</html>