<?php
// Start session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Colors</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">

    <!-- Style -->
    <style>
        body {
            background-color: #2e1a47;
            font-family: 'Readex Pro', sans-serif;
        }

        /*Gengar Image*/
        body::after {
            content: "";
            position: fixed;
            bottom: 0;
            right: 0;
            width: 450px;
            height: 450px;
            background: url('image/gengar.png') no-repeat;
            background-size: contain;
            opacity: 0.4;
        }

        .main-box {
            background: white;
            border-radius: 15px;
            padding: 30px;
            color: black;
        }

        .result-box {
            border: 2px solid #7a4bff;
            border-radius: 10px;
            padding: 20px;
        }

        .result-box hr {
            border: none;
            height: 2px;
            background-color: #7a4bff;
        }

        .result-box h5 {
            font-weight: bold;
            margin-bottom: 20px;
            font-size: 40px;
        }
    </style>
</head>

<body>
    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <div class="main-box">

                    <!-- DISPLAY COLORS -->
                    <div class="result-box">
                        <h5>My Favorite Colors</h5>

                        <p>My Favorite Color 1: <?= $_SESSION['color1'] ?></p>
                        <hr>
                        <p>My Favorite Color 2: <?= $_SESSION['color2'] ?></p>
                        <hr>
                        <p>My Favorite Color 3: <?= $_SESSION['color3'] ?></p>
                        <hr>
                        <p>My Favorite Color 4: <?= $_SESSION['color4'] ?></p>
                        <hr>
                        <p>My Favorite Color 5: <?= $_SESSION['color5'] ?></p>
                    </div>

                </div>

            </div>
        </div>
    </div>
</body>

</html>