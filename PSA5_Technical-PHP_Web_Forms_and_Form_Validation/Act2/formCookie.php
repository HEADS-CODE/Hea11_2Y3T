<?php
//Initialize variables
$finame = $miname = $laname = $dofb = $address = "";

//GET
if (isset($_GET['submit'])) {

    $finame = $_GET['finame'] ?? "";
    $miname = $_GET['miname'] ?? "";
    $laname = $_GET['laname'] ?? "";
    $dofb = $_GET['dofb'] ?? "";
    $address = $_GET['address'] ?? "";

    //GET TO POST
    $_POST = $_GET;

    //Cookies Different Times
    setcookie("finame", $finame, time() + 10); //10 seconds
    setcookie("miname", $miname, time() + 20); //20 seconds
    setcookie("laname", $laname, time() + 30); //30 seconds
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>

    <!--Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--Font-->
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #2e1a47;
            font-family: 'Readex Pro', sans-serif;
        }

        .main-box {
            background: white;
            border-radius: 15px;
            padding: 30px;
            color: black;
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
        }
    </style>
</head>

<body>

    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <div class="main-box">

                    <!--FORM-->
                    <div class="form-box">
                        <form method="get">
                            <h5>Personal Information Form</h5>

                            <input type="text" name="finame" class="form-control mb-3" placeholder="First Name">
                            <input type="text" name="miname" class="form-control mb-3" placeholder="Middle Name">
                            <input type="text" name="laname" class="form-control mb-3" placeholder="Last Name">
                            <input type="text" name="dofb" class="form-control mb-3" placeholder="Date of Birth">
                            <input type="text" name="address" class="form-control mb-3" placeholder="Address">

                            <button type="submit" name="submit" class="btn btn-primary w-100">
                                Submit
                            </button>
                        </form>
                    </div>

                    <!--OUTPUT-->
                    <?php if (isset($_GET['submit'])): ?>
                        <div class="result-box">
                            <p>First Name: <?= $_POST['finame'] ?></p>
                            <p>Middle Name: <?= $_POST['miname'] ?></p>
                            <p>Last Name: <?= $_POST['laname'] ?></p>
                            <p>Date of Birth: <?= $_POST['dofb'] ?></p>
                            <p>Address: <?= $_POST['address'] ?></p>
                        </div>
                    <?php endif; ?>

                    <!--COOKIES OUTPUT-->
                    <div class="result-box mt-3">
                        <h6>Cookies:</h6>

                        <p>First Name Cookie: <?= $_COOKIE['finame'] ?? "Waiting..." ?></p>
                        <p>Middle Name Cookie: <?= $_COOKIE['miname'] ?? "Waiting..." ?></p>
                        <p>Last Name Cookie: <?= $_COOKIE['laname'] ?? "Waiting..." ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>