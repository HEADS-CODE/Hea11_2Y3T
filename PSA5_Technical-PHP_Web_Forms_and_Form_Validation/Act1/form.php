<?php
//Initialize variables
$finame = $miname = $laname = $dofb = $address = "";

//Check if POST is used
if (isset($_POST['submit_post'])) {
    $finame = $_POST['finame'];
    $miname = $_POST['miname'];
    $laname = $_POST['laname'];
    $dofb = $_POST['dofb'];
    $address = $_POST['address'];
}

//Check if GET is used
if (isset($_GET['submit_get'])) {
    $finame = $_GET['finame'];
    $miname = $_GET['miname'];
    $laname = $_GET['laname'];
    $dofb = $_GET['dofb'];
    $address = $_GET['address'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET and POST Form</title>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">

    <!--Form Styles-->
    <style>
        body {
            background-color: #2e1a47;
            font-family: 'Readex Pro', sans-serif;
        }

        body {
            background-color: #2e1a47;
            font-family: 'Readex Pro', sans-serif;
        }

        /* Main white document wrapper */
        .main-box {
            background-color: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.3);
            color: black;
            /* force black text */
        }

        /* Keep purple borders */
        .form-box {
            border: 2px solid #7a4bff;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .result-box {
            border: 2px solid #7a4bff;
            border-radius: 10px;
            padding: 20px;
            background-color: #f4efff;
        }

        .title {
            color: #7a4bff;
            text-align: center;
            margin-bottom: 15px;
        }
    </style>

</head>

<body>

    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="col col-md-5">

                <!-- WHITE DOCUMENT BOX -->
                <div class="main-box">

                    <!-- GET FORM -->
                    <div class="form-box">
                        <form method="get">
                            <h5>GET Form</h5>

                            <div class="mb-3">
                                <input type="text" class="form-control" name="finame" placeholder="First Name">
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control" name="miname" placeholder="Middle Name">
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control" name="laname" placeholder="Last Name">
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control" name="dofb" placeholder="Date of Birth">
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control" name="address" placeholder="Address">
                            </div>

                            <button type="submit" name="submit_get" class="btn btn-success w-100">Submit GET</button>
                        </form>
                    </div>

                    <!-- POST FORM -->
                    <div class="form-box">
                        <form method="post">
                            <h5>POST Form</h5>

                            <div class="mb-3">
                                <input type="text" class="form-control" name="finame" placeholder="First Name">
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control" name="miname" placeholder="Middle Name">
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control" name="laname" placeholder="Last Name">
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control" name="dofb" placeholder="Date of Birth">
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control" name="address" placeholder="Address">
                            </div>

                            <button type="submit" name="submit_post" class="btn btn-primary w-100">Submit POST</button>
                        </form>
                    </div>



                    <!-- OUTPUT -->
                    <?php if (isset($_POST['submit_post']) || isset($_GET['submit_get'])): ?>
                        <div class="result-box">
                            <p>First Name: <?= $finame ?></p>
                            <p>Middle Name: <?= $miname ?></p>
                            <p>Last Name: <?= $laname ?></p>
                            <p>Date of Birth: <?= $dofb ?></p>
                            <p>Address: <?= $address ?></p>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</body>
</html>