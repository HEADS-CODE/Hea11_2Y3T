<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP</title>
</head>
<body>
    <?php

        //Variables must start with $ (Dollar Sign)
        $symbol = 1;
        echo $symbol;

        //Variables might contain strings
        $vsample = 'Hi';
        $vsample2 = ", Hello";
        echo $vsample . $vsample2 . "<br>";

        //Variables might contain numbers
        $vnum = 23;
        $vnum2 = 20;
        $vsum = $vnum + $vnum2;

        //Variables might contain arrays
        $vArray = ["item1", "item2", "item3"];

        //Sample of using quotes and dot
        $name = "David";
        echo "$name's Store" . "</br>";
        echo '"$name\'s Store"' . "</br>";

        //Using Echo
        echo "<p>THE ABC alphabet </p>";
        echo "<p>", "The ", "ABC ", "alphabet", "</p>";

        //Using print
        print("<p>The PHP Alphabet</p>");
        //Using printf
        printf("<p>$vsample</p>", "The PHP Alphabet");

        //Variable as an object
        $student = array(
            "name" => "Hannah",
            "age" => 20
        );
    ?>

    <div class="header">
        <h1><?= '$vsum' . " + $vsum"; //Single Quotes ?></h1>
        <h2><?= "$vsum " . $vsum + $vnum; //Double QUotes ?></h2>
        <h3><?php echo $vsum-3 ?></h3>
        <h4><?= "$vArray[0]"; ?></h4>
    </div>

    <div class="list">
        <ul>
            <li><?php echo "Skill 1" //Echo Output?></li> 
            <li><?php print("Skill2") //Print Output?></li>  
            <li><?php printf("Skill$vsum") //Print Format Output?></li>
        </ul>
        <ul style = "list-style-type: square">
            <li><?php printf("%b", 10) //Prints to Binary?></li>
            <li><?php printf("%c", 65) //Prints to ASCII Character?></li>
            <li><?php printf("%d", 25.4) //Prints to Integer?></li>
            <li><?php printf("%f", 25.4) //Prints to Float (6 Places)(?></li>
            <li><?php printf("%.2f", 25.4) //Prints to Binary (2 Places)?></li>
            <li><?php printf("%o", 8) //Octal Base?></li>
            <li><?php printf("%s", "25", 35) //Prints to String?></li>
            <li><?php printf("%u", -10) //Unsigned Integer - Forces to positive form: No negative sign?></li>
            <li><?php printf("%x", 255) //Prints Hexadecimal (lowercase)?></li>
            <li><?php printf("%X", 255) //Prints Hexadecimal (uppercase)?></li>
        </ul>
    </div>

    <div class="studentInfo">
        <span class="firstnmae"><?= "<b>Name:</b> " . $student["name"] . "<br>"?></span>
        <span class="age"><?php print("<b>Age:</b> " . $student["age"])?></span>
    </div>
</body>


</html>