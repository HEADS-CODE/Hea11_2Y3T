<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,300,700" type="text/css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php 
        $name = "Hannah Elisha A. Delos Santos";
        $phoneNum = "+63-427-672324";
        $email = "hadelossantos@fit.edu.ph";
        $location = "Caloocan City, Philippines";
    ?>

    <div class="container">
        <div class="header">
            <h1><?php echo $name; ?></h1>
            <hr>
            <p>Email: <?= $email;?> | Phone: <?= $phoneNum; ?></p>
        </div>
        <div class="about">
            <h2>About Me</h2>
                I am a front-end developer with limited experience
            </div>
    </div>

    
    
</body>
</html>