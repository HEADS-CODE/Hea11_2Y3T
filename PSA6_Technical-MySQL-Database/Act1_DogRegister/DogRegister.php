<?php
    include 'db_DogInfo.php';

    if (isset($_POST['save'])){
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

        if (mysqli_query($conn, $sql)){
            echo "<script>alert('New dog record created successfully!'); </script>";
        }else {
            echo "Error: " . sql . "<br>" . mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog Registration</title>
</head>
<body>
    <div class="form-container">
        <h3>Dog Information</h3>
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
                <input type="text" name="Address" required>
            </div>
            <div class="form-group">
                <label>Color</label>
                <input type="text" name="Color" required>
            </div>
            <div class="form-group">
                <label>Height</label>
                <input type="text" name="Height" required>
            </div>
            <div class="form-group">
                <label>Weight</label>
                <input type="text" name="Weight" required>
            </div>
            <button type="submit" name="save">save</button>
        </form>
        <div class="footer">@ Dog Registration by <b>Hannah Elisha A. Delos Santos</b></div>
    </div>
</body>
</html>