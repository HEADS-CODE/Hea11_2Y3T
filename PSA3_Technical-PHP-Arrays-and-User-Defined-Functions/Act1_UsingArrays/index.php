<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Fruits</title>
    <style>
        body {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 90%;
            margin: auto;
        }

        th, td {
            border: 1px solid black;
            padding: 0;
            text-align: center;
            font-size: 20px;
        }

        th {
            background-color: #ffa1fc;
            padding: 15px;
        }

        img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            display: block;
        }

        .container {
            padding: 50px;
        }

    </style>
</head>
<body>
    <?php

        //Fruit Data Records
        $fruits = array(
            array("banana.png", "Banana", "Color Yellow", "Bananas are a healthful to a balanced diet,as they provide a range of vital nutrients and are a good source of fiber."),
            array("apple.jpg", "Apple", "Color Red", "Apples are rich in fiber and vitamin C, making them a healthy snack that supports heart health."),
            array("orange.jpg", "Orange", "Color Orange", "Oranges are a great source of vitamin C and help boost the immune system."),
            array("grapes.jpg", "Grapes", "Color Purple/Green", "Grapes contain antioxidants that support heart health and may reduce inflammation."),
            array("mango.png", "Mango", "Color Yellow/Orange", "Mangoes are rich in vitamins A and C and are known for their sweet taste."),
            array("pineapple.jpg", "Pineapple", "Color Yellow", "Pineapple contains bromelain, an enzyme that aids digestion and reduces inflammation."),
            array("watermelon.jpg", "Watermelon", "Color Red/Green", "Watermelon is hydrating and packed with vitamins A and C, perfect for hot weather."),
            array("strawberry.jpg", "Strawberry", "Color Red", "Strawberries are rich in antioxidants and may improve heart health."),
            array("papaya.png", "Papaya", "Color Orange", "Papayas contain digestive enzymes and are rich in vitamin C and beta-carotene."),
            array("kiwi.png", "Kiwi", "Color Green", "Kiwis are nutrient-dense and high in vitamin C, potassium, and fiber.")
        );

        //Sort Fruits in alphabetical order
        sort($fruits);
    ?>

    <div class="container">
        <!-- Display Table -->
        <table>
             <!-- Title -->
            <tr>
                <th colspan="4" style="background-color: purple; color: white;">My Fruits</th>
            </tr>
            <!-- Columns -->
            <tr style="color: purple;">
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Facts</th>
            </tr>

            <?php
            
            //For Loop to display fruit values
            foreach ($fruits as $fruit){
                echo "<tr>";
                echo "<td><img src='images/" . $fruit[0] . "'></td>";
                echo '<td style="padding: 20px;">' . $fruit[1] . "</td>";
                echo '<td style="padding: 20px;">' . $fruit[2] . "</td>";
                echo '<td style="padding: 20px;">' . $fruit[3] . '</td>';
                echo "</tr>";
            }
            
            ?>

        </table>
    </div>
</body>
</html>