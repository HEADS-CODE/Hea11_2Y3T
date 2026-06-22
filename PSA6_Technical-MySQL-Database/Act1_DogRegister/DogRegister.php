<?php
include 'db_DogInfo.php';

if (isset($_POST['save'])) {
    //Data collection from form
    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    //Insert SQL Columns
    $sql = "INSERT INTO tbl_dogs (dog_name, dog_breed, dog_age, dog_address, dog_color, dog_height, dog_weight) VALUES ('$name', '$breed', '$age', '$address', '$color', '$height', '$weight')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('New dog record created successfully!'); </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog Registration</title>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #2e1a47;
            font-family: 'Readex Pro', sans-serif;
            padding: 50px;
            display: flex;
            justify-content: center;
        }
        .main-box {
            background: white;
            border-radius: 15px;
            padding: 30px;
            color: black;
            width: 400px;
        }
        .form-box {
            border: 2px solid #7a4bff;
            border-radius: 10px;
            padding: 20px;
        }
        h3 {
            margin-top: 0;
        }
        .form-group {
            margin-bottom: 10px;
        }
        label {
            display: block;
            font-size: 14px;
        }
        input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #c946e0;
            border: 1px solid #767676;
            color: aliceblue;
            font-size: 15px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class="main-box">
        <h3>Dog Information</h3>
        <div class="form-container">
            <!--Dog Information Form -->
            <form method="POST" action="">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" required>
                </div>
                <div class="form-group">
                    <label>Breed</label>
                    <input type="text" name="breed" required>
                </div>
                <div class="form-group">
                    <label>Age</label>
                    <input type="text" name="age" required>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" required>
                </div>
                <div class="form-group">
                    <label>Color</label>
                    <input type="text" name="color" required>
                </div>
                <div class="form-group">
                    <label>Height</label>
                    <input type="text" name="height" required>
                </div>
                <div class="form-group">
                    <label>Weight</label>
                    <input type="text" name="weight" required>
                </div>
                <button type="submit" name="save">save</button>
            </form>
            <!--Footer for Form -->
            <p style="font-size: 12px; margin-top: 10px;">@ Dog Registration by <b>Hannah Elisha A. Delos Santos</b></p>
        </div>
    </div>
</body>
</html>