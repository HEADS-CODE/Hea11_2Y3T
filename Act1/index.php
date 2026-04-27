<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
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
    </div>

    <div class="main">
        <div class="top-section">
            <img src="profile.png" alt="" class="">
            <p class="p1"></p>
        </div>
    </div>
    
    
</body>
</html>