<!DOCTYPE html>
<html>
<head>

    <title>Multiplication Table</title>

</head>
<body>

    <!--Title-->
    <h1>Multiplication Table</h1>

    <!--Multiplication Table-->
    <table>

        <?php

            //Rows
            for($row = 0; $row <= 10; $row++){
                echo "<tr>";
                //Columns
                for($col = 0; $col <= 10; $col++){

                    //Multiplication
                    $value = $row * $col;

                    //Colors of both rows and columns
                    if(($row + $col) % 2 == 0){

                        echo "<td class='color1'>$value</td>";
                    }
                    else{
                        echo "<td class='color2'>$value</td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </table>

</body>
</html>