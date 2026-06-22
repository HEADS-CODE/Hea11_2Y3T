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