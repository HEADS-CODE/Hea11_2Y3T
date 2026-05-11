<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>

    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php

    //PHP Variables
    //Full Name
    $fName = "Hannah Elisha";
    $mName = "Aviles";
    $lName = "Delos Santos";

    //Mobile Number
    $phoneNum = "+63 9194160974";

    //Email
    $email = "hea.delossantos.11Prog@gmail.com";

    //Department
    $department = "IT";

    //Bachelor and Course
    $bachelor = "Bachelor of Science in Information Technology";
    $course = "Web and Mobile Application";

    //Gender
    $gender = "Female";

    //Civil Status
    $civilStatus = "Single";

    //Citizenship
    $citizenship = "Filipino";

    //Current Year
    $currentYear = 2026;

    //Birthday
    $birthYYYY = 2006;
    $birthMM = 4;
    $birthDD = 27;

    //Date Format - Had to look up on how to do this :D
    $birthDate = $birthYYYY . "-" .
                 str_pad($birthMM, 2, "0", STR_PAD_LEFT) . "-" .
                 str_pad($birthDD, 2, "0", STR_PAD_LEFT);

    //Age
    $age = $currentYear - $birthYYYY;

    //Address
    $subdivision = "Silanganan Subdivision";
    $city = "Caloocan City";

    //Educational Background
    $schoolName = "Makati High School";
    $schoolYear = "2023-2024";
    $schoolAddress = "General Luna, Makati City";
    $averageGrade = 95.5;

    //Awards
    $awards = [
        "Graduated with High Honors",
        "Best in Work Immersion"
    ];

    //Current Education Status
    $studentNum = 202410364;
    $schoolYearLevel = 2;
    $schoolTerm = 3;
    $section = "TW22";

?>

<div class="container">
    <div class="header">
      <h1>Student Registration Form</h1>
    </div>

    <form>
        <h2>Student Information</h2>

        <!--Current Education Status-->
        <h3 class="mini-title">Current Education Status</h3>

        <div class="line-row">

            <div class="line-group long-line">
                <div class="line-value">
                    <?= $studentNum; ?>
                </div>

                <div class="line-label">
                    Student Number
                </div>
            </div>

            <div class="line-group short-line">
                <div class="line-value">
                    <?= $schoolYearLevel; ?>
                </div>
                <div class="line-label">
                    Year
                </div>
            </div>

            <div class="line-group short-line">
                <div class="line-value">
                    <?= $schoolTerm; ?>
                </div>
                <div class="line-label">
                    Term
                </div>
            </div>

            <div class="line-group medium-line">
                <div class="line-value">
                    <?= strtoupper($section); ?>
                </div>
                <div class="line-label">
                    Section
                </div>
            </div>

        </div>

        <!--Full Name-->
        <div class="row">

            <div class="form-group third">
                <label>First Name</label>
                <input type="text"
                    value="<?= ucwords(strtolower($fName)); ?>">
            </div>
            <div class="form-group third">
                <label>Middle Name</label>
                <input type="text"
                    value="<?= ucwords(strtolower($mName)); ?>">
            </div>
            <div class="form-group third">
                <label>Last Name</label>
                <input type="text"
                    value="<?= ucwords(strtolower($lName)); ?>">
            </div>

        </div>

        <!--Phone and Email Details-->
        <div class="row">

            <div class="form-group half">
                <label>Phone Number</label>
                <input type="text"
                    value="<?= $phoneNum; ?>">
            </div>

            <div class="form-group half">
                <label>Email Address</label>
                <input type="email"
                    value="<?= strtolower($email); ?>">
            </div>

        </div>

        <!--Department and Course-->
        <div class="row">

            <div class="form-group half">
                <label>Department</label>
                <select>
                    <option
                        <?php
                            if($department == "IT"){
                                echo "selected";
                            }
                        ?>
                    >
                        IT
                    </option>
                    <option>Engineering</option>
                    <option>Business</option>
                </select>
            </div>

            <div class="form-group half">
                <label>Course</label>

                <select>
                    <option
                        <?php
                            if($course == "Web and Mobile Application"){
                                echo "selected";
                            }
                        ?>
                    >
                        Web and Mobile Application
                    </option>

                    <option>Network Technology</option>
                    <option>Database Management</option>

                </select>
            </div>

        </div>

        <!--Bachelor Program-->
        <div class="form-group">
            <label>Bachelor Program</label>
            <select>
                <option
                    <?php
                        if($bachelor == "Bachelor of Science in Information Technology"){
                            echo "selected";
                        }
                    ?>
                >
                    Bachelor of Science in Information Technology
                </option>

                <option>
                    Bachelor of Science in Computer Science
                </option>

                <option>
                    Bachelor of Science in Information Systems
                </option>

            </select>
        </div>

        <!--Gender and Civil Status-->
        <div class="row space-bottom">
            <!--Gender-->
            <div class="form-group half">

                <label>Gender</label>

                <div class="radio-group">

                    <input type="radio"
                        name="gender"
                        <?php
                                if($gender == "Male"){
                                    echo "checked";
                                }
                        ?>
                    >
                    Male

                    <input type="radio"
                        name="gender"
                        <?php
                                if($gender == "Female"){
                                    echo "checked";
                                }
                        ?>
                    >
                    Female
                </div>
            </div>

            <!--Civil Status-->
            <div class="form-group half">
                <label>Civil Status</label>
                <div class="radio-group">
                    <input type="radio"
                        name="status"
                        <?php
                                if($civilStatus == "Single"){
                                    echo "checked";
                                }
                        ?>
                    >
                    Single
                    <input type="radio"
                        name="status"
                        <?php
                                if($civilStatus == "Dating"){
                                    echo "checked";
                                }
                        ?>
                    >
                    Dating
                    <input type="radio"
                        name="status"
                        <?php
                                if($civilStatus == "Married"){
                                    echo "checked";
                                }
                        ?>
                    >
                    Married
                    <input type="radio"
                        name="status"
                        <?php
                                if($civilStatus == "Widow"){
                                    echo "checked";
                                }
                        ?>
                    >
                    Widow
                </div>
            </div>
        </div>

            <!--Citizenship and Birthday-->
            <div class="row">
                <!--Citizenship-->
                <div class="form-group half">
                    <label>Citizenship</label>
                    <div class="radio-group">
                        <input type="radio"
                            name="citizenship"
                            <?php
                                    if($citizenship == "Filipino"){
                                        echo "checked";
                                    }
                            ?>
                        >
                        Filipino
                        <input type="radio"
                            name="citizenship"
                            <?php
                                    if($citizenship == "Foreigner"){
                                        echo "checked";
                                    }
                            ?>
                        >
                        Foreigner
                    </div>
                </div>

                <!--Date of Birth-->
                <div class="form-group half">
                    <label>Date of Birth</label>
                    <div class="birthday-section">
                        <input type="date"
                            value="<?= $birthDate; ?>">
                        <div class="age-box">
                            Age: <?= $age; ?>
                        </div>
                    </div>
                </div>
            </div>

        <!--Address-->
        <div class="row">
            <div class="form-group half">
                <label>Subdivision</label>
                <input type="text"
                    value="<?= ucwords(strtolower($subdivision)); ?>">
            </div>

            <div class="form-group half">
                <label>City</label>
                <input type="text"
                    value="<?= ucwords(strtolower($city)); ?>">
            </div>
        </div>

        <!--Educational Background-->
        <h2>Educational Background</h2>

            <!--School Name-->
            <div class="form-group">
                <label>School Name</label>
                <input type="text"
                    value="<?= ucwords(strtolower($schoolName)); ?>">
            </div>

            <!--School Year and Grade-->
            <div class="row">
                <div class="form-group half">
                    <label>School Year</label>
                    <input type="text"
                        value="<?= $schoolYear; ?>">
                </div>

                <div class="form-group half">
                    <label>Average Grade</label>
                    <input type="text"
                        value="<?= number_format($averageGrade, 2); ?>">
                </div>
            </div>

            <!--School Address-->
            <div class="form-group">
                <label>School Address</label>
                <input type="text"
                    value="<?= ucwords(strtolower($schoolAddress)); ?>">
            </div>

            <!--Awards-->
            <div class="form-group">
                <label>Awards</label>
                <?php
                    $count = 1;

                    foreach($awards as $award){
                ?>
                    <div class="award-row">
                        <div class="award-number">
                            <?= $count . "."; ?>
                        </div>

                        <input type="text"
                            value="<?= ucwords(strtolower($award)); ?>">

                    </div>

                <?php
                        $count++;
                    }
                ?>
            </div>
    </form>
</div>

</body>
</html>