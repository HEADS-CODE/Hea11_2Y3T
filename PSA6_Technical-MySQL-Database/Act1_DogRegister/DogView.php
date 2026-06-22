<?php include 'db_DogInfo.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog Record Directory</title>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #2e1a47;
            font-family: 'Readex Pro', sans-serif;
            padding: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h2 {
            color: white;
            margin-bottom: 20px;
        }
        .main-box {
            border-radius: 15px;
            padding: 0px;
            color: black;
            width: 500px;
        }
        .result-box {
            border: 2px solid #7a4bff;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
            background-color: #f4efff;
            line-height: 1.6;
        }
        .dog-count {
            font-weight: bold;
            color: #2e1a47;
            border-bottom: 1px solid #7a4bff;
            margin-bottom: 10px;
            display: block;
        }
        .footer {
            font-size: 12px;
            margin-top: 20px;
            color: #ccc;
        }
    </style>
</head>

<body>
    <h2>Dog Record Directory</h2>
    <div class="main-box">
        <?php
        //Fetch records
        $sql = "SELECT * FROM tbl_dogs";
        $result = mysqli_query($conn, $sql);

        //Check
        if (mysqli_num_rows($result) > 0) {
            $count = 1;
            //Output data
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='result-box'>";
                echo "<span class='dog-count'>Dog " . $count . "</span>";
                echo "<b>Name:</b> " . $row["dog_name"] . "<br>";
                echo "<b>Breed:</b> " . $row["dog_breed"] . "<br>";
                echo "<b>Age:</b> " . $row["dog_age"] . "<br>";
                echo "<b>Address:</b> " . $row["dog_address"] . "<br>";
                echo "<b>Color:</b> " . $row["dog_color"] . "<br>";
                echo "<b>Height:</b> " . $row["dog_height"] . "<br>";
                echo "<b>Weight:</b> " . $row["dog_weight"];
                echo "</div>";
                $count++;
            }
        } else {
            echo "<p style='text-align:center;'>No records found in the database.</p>";
        }
        ?>
    </div>
    <div class="footer">
        @ Dog Directory by <b>Hannah Elisha A. Delos Santos</b>
    </div>
</body>
</html>