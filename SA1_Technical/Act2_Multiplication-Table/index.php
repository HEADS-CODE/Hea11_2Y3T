<!DOCTYPE html>
<html>
<head>

    <title>Multiplication Table</title>
    <style>
        
        /*Body Design*/
        body{
            background-color: #eeeeee;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        /*Title Design*/
        h1{
            text-align: center;
            font-size: 70px;
        }

        /*Table Design*/
        table{
            margin: auto;
            border-collapse: collapse;
        }

        /*Table Cells*/
        td{
            width: 60px;
            height: 60px;
            text-align: center;
            font-size: 30px;
            border: 3px solid gray;
        }

        /*First Color*/
        .color1{
            background-color: rgb(104, 19, 117);
            color: white;
        }

        /*Second Color*/
        .color2{
            background-color: rgb(125, 21, 173);
            color: white;
        }

    </style>
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