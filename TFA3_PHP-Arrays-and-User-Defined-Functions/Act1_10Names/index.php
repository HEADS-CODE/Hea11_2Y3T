<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students List</title>

    <style>
        body {
            font-family: Arial;
        }

        table {
            border-collapse: collapse;
            width: 90%;
            margin: auto;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
            font-size: 20px;
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
        }

        .container {
            padding: 50px; 
        }
        .container h1 {
            text-align: center;
            font-size: 50px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            
        }
        .container p {
            text-align: center;
            font-size: 20px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: gray;
            font-style: italic;

        }
    </style>
</head>
<body>

<?php

    //Student Records Multidimensional Array
    $students = array(
        array("Hannah Elisha Delos Santos", "Hannah.png", 20, "April 27, 2006", "+63 9293423421"),
        array("Jen Raina Teodoro", "Jen.jpg", 19, "September 23, 2006", "+63 9485738294"),
        array("Joy Anne Ciaris Nuqui", "Ciaris.jpg", 19, "June 28, 2006", "+63 9232452442"),
        array("Giyu Tomioka", "Giyu.png", 21, "February 8, 2007", "+63 9584327584"),
        array("Kyojuro Rengoku", "Kyojuro.png", 20, "May 10, 2006", "+63 9402342432"),
        array("Muichiro Tokito", "Muichiro.png", 20, "August 8, 2012", "+63 9197483928"),
        array("Miles Edgeworth", "Miles.png", 34, "April 17, 1992", "+63 9047382943"),
        array("Tanjiro Kamado", "Tanjiro.png", 13, "July 14, 2013", "+63 9985748394"),
        array("Sanemi Shinazugawa", "Sanemi.png", 21, "November 29, 2005", "+63 9839203948"),
        array("Genya Shinazugawa", "Genya.png", 16, "January 7, 2010", "+63 9837283943")
    );

    //Sort Students by First Name
    sort($students);
?>

    <div class="container">
        <!--Activity Title -->
        <h1>STUDENT RECORDS 2026</h1>
        <p>*totally non-fictional. Real life people :D</p>

    <table>
        <!--Column Names -->
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Image</th>
            <th>Age</th>
            <th>Birthday</th>
            <th>Contact Number</th>
        </tr>

        <?php
        $no = 1;

        //For Loop to Display Array values (Student Info)
        foreach ($students as $student) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $student[0] . "</td>";
            echo "<td><img src='Images/" . $student[1] . "'></td>";
            echo "<td>" . $student[2] . "</td>";
            echo "<td>" . $student[3] . "</td>";
            echo "<td>" . $student[4] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    </div>


</body>
</html>
