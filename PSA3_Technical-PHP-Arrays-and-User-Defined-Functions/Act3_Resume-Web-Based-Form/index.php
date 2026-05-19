<?php require("data.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Resume</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <table>
            <!--Profile-->
            <tr class="profile">
                <td width="150">
                    <img src="Resume_Profile.png" class="profile-img">
                </td>
                <td class="title">
                    <a href="personal.php">
                        <b>Personal Information</b></a>
                </td>
            </tr>

            <!--Resume Menu-->
            <tr class="menu">
                <td colspan="2">
                    <a href="objective.php">• Career Objective</a>
                </td>
            </tr>
            <tr class="menu">
                <td colspan="2">
                    <a href="education.php">• Educational Attainment</a>
                </td>
            </tr>
            <tr class="menu">
                <td colspan="2">
                    <a href="skills.php">• Skills</a>
                </td>
            </tr>
            <tr class="menu">
                <td colspan="2">
                    <a href="affiliation.php">• Affiliation</a>
                </td>
            </tr>
            <tr class="menu">
                <td colspan="2">
                    <a href="experience.php">• Work Experience</a>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>