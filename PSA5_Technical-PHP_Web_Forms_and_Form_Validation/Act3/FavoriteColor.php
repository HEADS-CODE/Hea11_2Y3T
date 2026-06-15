<?php
// Starts session
session_start();

//Save colors when form is submitted
if (isset($_POST['submit'])) {
    $_SESSION['color1'] = $_POST['color1'];
    $_SESSION['color2'] = $_POST['color2'];
    $_SESSION['color3'] = $_POST['color3'];
    $_SESSION['color4'] = $_POST['color4'];
    $_SESSION['color5'] = $_POST['color5'];

    //Redirect to result page
    header("Location: ResultColors.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite Colors</title>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--Font-->
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">

    <!--Style-->
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

        .form-box {
            border: 2px solid #7a4bff;
            border-radius: 10px;
            padding: 20px;
        }

        .form-box h5 {
            font-weight: bold;
            margin-bottom: 20px;
            font-size: 30px;
        }
    </style>
</head>

<body>
    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <div class="main-box">

                    <!--COLOR FORM-->
                    <div class="form-box">
                        <form method="post">
                            <h5>Enter your favorite colors</h5>

                            <input type="text" name="color1" class="form-control mb-3" placeholder="Favorite color 1">
                            <input type="text" name="color2" class="form-control mb-3" placeholder="Favorite color 2">
                            <input type="text" name="color3" class="form-control mb-3" placeholder="Favorite color 3">
                            <input type="text" name="color4" class="form-control mb-3" placeholder="Favorite color 4">
                            <input type="text" name="color5" class="form-control mb-3" placeholder="Favorite color 5">

                            <button style="background: #7a4bff" type="submit" name="submit"
                                class="btn btn-primary w-100">
                                Send Colors
                            </button>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</body>

</html>