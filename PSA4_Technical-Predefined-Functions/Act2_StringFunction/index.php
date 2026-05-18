<!DOCTYPE html>
<html>

<head>
    <title>String Functions in PHP</title>
    <style>
        .container {
            padding: 20px;
            margin: 5px auto 5px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <table>

            <tr>
                <!--Title-->
                <th colspan="6" style="background-color: blueviolet; color: white; font-size: 40px; letter-spacing: 2px;">List of names</th>
            </tr>

            <tr>
                <!--Columns-->
                <th>Name</th>
                <th>Number of characters</th>
                <th>Uppercase first character</th>
                <th>Replace vowels with @</th>
                <th>Check position of character "a"</th>
                <th>Reverse name</th>
            </tr>

            <?php
            //Array Of Names
            $names = array(
                "jen",
                "ciaris",
                "cedrick",
                "fiona",
                "clark",

                "tanjiro",
                "nezuko",
                "zenitsu",
                "inosuke",
                "giyu",
                "shinobu",
                "kanao",
                "sanemi",
                "genya",
                "mitsuri",
                "obanai",
                "tengen",
                "muichiro",
                "gyomei",
                "akaza"
            );

            //Loop Names
            foreach ($names as $name) {

                //Length
                $length = strlen($name);

                //Uppercase First Letter
                $upper = ucfirst($name);

                //Replace Vowels
                $replace = str_replace(
                    array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'),
                    '@',
                    $name
                );

                //Position Of A
                $position = strpos(strtolower($name), 'a');
                if ($position === false) {
                    $position = "None";
                }

                //Reverse Name
                $reverse = strrev($name);

                //Display Row
                echo "<tr>";
                echo "<td>$name</td>";
                echo "<td>$length</td>";
                echo "<td>$upper</td>";
                echo "<td>$replace</td>";
                echo "<td>$position</td>";
                echo "<td>$reverse</td>";
                echo "</tr>";
            }
            ?>

        </table>
    </div>

</body>
</html>