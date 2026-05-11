<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php

        /* Student Personal Information */
        //Full Name
        $fName = "Hannah Elisha";
        $mName = "Aviles";
        $lName = "Delos Santos";

        //Mobile Number
        $phoneNum = "+63 9194160974";

        //Email
        $email = "hea.11Prog@gmail.com";

        //Department
        $department = "IT";

        //Bachelor & Course
        $bachelor = "Bachelor of Science in Information Technology";
        $course = "Web and Mobile Application";

        //Gender
        $gender = "Female";

        //Set Year
        $currentYear = 2026;

        //Birthday
        $birthYYYY = 2006;
        $birthDD = 27;
        $birthMM = 04;

        //Address
        $subdivision = "Silanganan Subdivision";
        $city = "Caloocan City";
        $Address =  $subdivision . ", " . $city;

        //Education Background
        $schoolName = "Makati High School";
        $schoolYear = "2024-2025";
        $schoolAddress = "General Luna, Makati City";
        $averageGrade = 93;
        
    ?>
    <div class="container">
        <div class="header">
                <div class="header-title">
                    <h1>Student Registration Form</h1>
                </div>
        </div>
        <div class="studentInfo">
            <div class="full-name">

            </div>
        </div>
    </div>
</body>
</html>