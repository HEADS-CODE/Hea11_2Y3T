<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}

$result = "";
if (isset($_POST['register'])) {
    if ($_POST['password'] !== $_POST['confirm']) {
        $result = "<div class='result-box' style='color:red;'>Password and confirm password are not the same.</div>";
    } else {
        $result = "<div class='result-box'>
            <strong>Registration Successful!</strong><br>
            Name: {$_POST['fname']} {$_POST['mname']} {$_POST['lname']}<br>
            Username: {$_POST['username']}<br>
            Birthday: {$_POST['birthday']}<br>
            Email: {$_POST['email']}<br>
            Contact: {$_POST['contact']}
        </div>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #2e1a47;
            font-family: 'Readex Pro', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .main-box {
            background: white;
            border-radius: 15px;
            padding: 30px;
            width: 400px;
        }

        .form-box {
            border: 2px solid #7a4bff;
            border-radius: 10px;
            padding: 20px;
        }

        .result-box {
            border: 2px solid #7a4bff;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
            background-color: #f4efff;
            width: 400px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 5px 0 10px;
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
        }

        a {
            color: #7a4bff;
            text-decoration: none;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="main-box">
        <h3>Registration</h3>
        <div class="form-box">
            <form method="POST">
                <input type="text" name="fname" placeholder="First Name" required>
                <input type="text" name="mname" placeholder="Middle Name" required>
                <input type="text" name="lname" placeholder="Last Name" required>
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="confirm" placeholder="Confirm Password" required>
                <input type="text" name="birthday" placeholder="January 30, 1993" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="contact" placeholder="Contact Number" required>
                <button type="submit" name="register">Register</button>
            </form>
        </div>
        <p><a href="login.php">Already have an account? Login here.</a></p>
    </div>
    <?php echo $result; ?>
</body>

</html>