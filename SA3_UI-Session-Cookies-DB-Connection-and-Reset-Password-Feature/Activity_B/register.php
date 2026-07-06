<?php
include 'db_config.php';
$msg = "";

if (isset($_POST['register'])) {
    if ($_POST['password'] !== $_POST['confirm']) {
        $msg = "<div class='error-warn'>password and confirm password are not the same</div>";
    } else {
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $date = $_POST['date'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];

        $sql = "INSERT INTO tbl_accounts (fname, mname, lname, username, password, date, email, contact) 
                VALUES ('$fname', '$mname', '$lname', '$user', '$pass', '$date', '$email', '$contact')";

        if (mysqli_query($conn, $sql)) {
            $msg = "<div class='result-box'>User registered successfully in the database!</div>";
        } else {
            $msg = "<div class='error-warn'>Error: " . mysqli_error($conn) . "</div>";
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Activity B: Register</title>
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

        .error-warn,
        .result-box {
            border: 2px solid #7a4bff;
            border-radius: 10px;
            padding: 15px;
            margin-top: 15px;
            background-color: #f4efff;
            font-size: 13px;
            text-align: center;
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
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="main-box">
        <h3>Register Account</h3>
        <div class="form-box">
            <form method="POST">
                <input type="text" name="fname" placeholder="First Name" required>
                <input type="text" name="mname" placeholder="Middle Name" required>
                <input type="text" name="lname" placeholder="Last Name" required>
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="confirm" placeholder="Confirm Password" required>
                <input type="text" name="date" placeholder="Date (e.g. Jan 30, 1993)" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="contact" placeholder="Contact Number" required>
                <button type="submit" name="register">Save to Database</button>
            </form>
        </div>
        <p style="font-size: 12px; text-align: center;"><a href="login.php" style="color:#7a4bff;">Login here</a></p>
    </div>
    <?php echo $msg; ?>
</body>

</html>