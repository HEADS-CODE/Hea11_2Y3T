<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!--Php Variables-->
    <?php 
        //Personal Information
        $firstName = "Hannah Elisha";
        $lastName = "Delos Santos";
        $email = "hadelossantos@fit.edu.ph";
        $phone = "+63 9324564324";

        //Description
        $position = "Full-Stack Web & Mobile Developer";
        $SYDate = 2024;

        $workExperience = "Design Thinking Summit & iTam Design Jam 2026";

        //Skills
        $skill1 = "HTML";
        $skill2 = "CSS";
        $skill3 = "JavaScript";
        $skill4 = "Figma";
        $skill5 = "AndroidStudio";
        $skill6 = "Kotlin";
    ?>
    
    <!--1st Sample Use of Echo-->
    <div class="activityname">
            <hr><?php echo "Welcome to $lastName's First Resume Php Activity :D" ?><hr>
    </div> 

    <!--Enitre Resume Body-->
    <div class="container">

        <!--Profile Section/Header-->
        <div class="header">
            <!--Profile Details-->
            <div class="header-top">
                <!--Profile Image-->
                <div class="profile">
                    <img src="Resume_Profile.png" alt="Profile">
                </div>
                
                <!--Personal Detailss-->
                <div class="header-text">
                    <div class="full-name">
                        <span class="last-name"><?= $lastName . ", ";  ?></span>
                        <span class="first-name"><br><?php echo $firstName; ?></span>
                        <span class="middle-ini"><?php echo "A." ?></span>
                    </div>
                    <!--Contact Details-->
                    <div class="contact-info">
                        <span class="email">Email:</span>
                        <span class="email-val"><?= $email; ?></span>
                        <span class="seperator"></span>
                        <span class="phone">Phone: </span>
                        <span class="phone-val"><?= $phone; ?></span>
                    </div>
                </div>

            <!--About Details-->
            <div class="about">
                <hr><span class="desc">
                    <?php echo "I am a <b>$position</b> with the goal of having many years of skillerience writing $skill1, $skill2, and $skill3 
                    as a Web Developer. Including the process in mastering $skill5's $skill6 for Mobile Development. 
                    skillerienced with UI/UX designing using $skill4. Seeks challenges as advantages to grow and develop. 
                    Carries a solution-focused minsdet for upcoming projects and ideas. Dedicated in solving real-life 
                    problems utilizing web advancement & application development. " ?>
                </span>
                <hr style= "margin: 10px auto 0px;">
            </div>
        </div>
        <div class="details">
            <div class="section">
                <div class="section_title">Experience</div>
                <div class="section_list">
                    <div class="section_list-item">
                        <div class="left">
                            <div class="name"><?= $workExperience ?></div>
                            <div class="addr">FTIC, FEU 5th Floor</div>
                            <div class="duration">March 21, 2026</div>
                        </div>
                        <div class="right">
                            <div class="name">Class Representative & <br>Best Poster Award</div>
                            <div class="desc">Pitched LiniSync. Our Company: MyGreen&Gold (MGG) Innovations</div>
                        </div>
                    </div>
                    <div class="section_list-item">
                        <div class="left">
                            <!--Example of changing the variable's value.-->
                            <div class="name"><?= $workExperience = "PrajekPro: Navalta-Chavan Technologies Corp. " ?></div>
                            <div class="addr">Makati High School (Remote)</div>
                            <div class="duration">March 2024 - May 2024</div>
                        </div>
                        <div class="right">
                            <div class="name">SHS Work Immersion</div>
                            <div class="desc">UI/UX Figma Prototype Designer. Completed 220 Hours.</div>
                        </div>
                    </div><hr>

                </div>
            </div>

            <div class="section">
                <div class="section_title">Education</div>
                <div class="section_list">
                    <div class="section_list-item">
                        <div class="left">
                            <div class="name">FEU Institute of Technology</div>
                            <div class="addr">Sampaloc, Manila City</div>
                            <!--Sample of using int -->
                            <div class="duration"><?= "S.Y. " . $SYDate . " - Current"; ?></div>
                        </div>
                        <div class="right">
                            <div class="name">Scholarship</div>
                            <div class="desc">President Scholar</div>
                        </div>
                    </div>
                    <div class="section_list-item">
                        <div class="left">
                            <div class="name">Makati High School</div>
                            <div class="addr">San Antonio, Mayapis, Makati City</div>
                            <!--Sample of using in-between calculation: Subtracting an int-->
                            <div class="duration"><?= "S.Y. " . ($SYDate - 3) . " - $SYDate"; ?></div>
                        </div>
                        <div class="right">
                            <div class="name">Awards & Recognition</div>
                            <div class="desc">
                                Graduated with High Honors, <br>
                                Best in Work Immersion
                            </div>
                        </div>
                    </div>
                </div><hr>
            </div>

            <div class="section">
                <div class="section_title">Projects</div>
                <ul class="project-list">
                    <li>
                        <b>Tanoo</b> - An Ecommerce-Community mobile application designed for anime/manga cosplayers, fans, and the anime/manga community.
                    </li>
                    <li>
                        <b>StarTreat</b> - A dessert mobile shopping app that brings the joy of sweets straight to users' homes through convenient delivery or guided baking.
                    </li>
                    <li>
                        <b>AUniPath</b> - A Philippine-Based College and Scholarship Discovery Website for SHS Graduates With Strand-Course Misalignment.
                    </li>
                    <li>
                        <b>LiniSync</b> - A mobile app (habit & environment tracker), bridges awareness and action by personalizing environmental accountability at a household level.

                    </li>
                </ul><hr style="margin-top: 20px;">
            </div>
            <div class="section">
                <div class="section_title">Skills</div>
                <div class="skills">
                    <div class="skills_item">
                        <div class="left"><div class="name">
                            JavaScript
                        </div></div>
                            <div class="right">
                                            <input  id="ck1" type="checkbox" checked/>
                                <label for="ck1"></label>
                                            <input id="ck2" type="checkbox" checked/>
                                <label for="ck2"></label>
                                            <input id="ck3" type="checkbox" />
                                <label for="ck3"></label>
                                            <input id="ck4" type="checkbox" />
                                <label for="ck4"></label>
                                            <input id="ck5" type="checkbox" />
                                <label for="ck5"></label>
                        </div>
                    </div>
                        <div class="skills_item">
                            <div class="left"><div class="name">
                                CSS</div></div>
                            <div class="right">
                                            <input  id="ck1" type="checkbox" checked/>
                    
                                <label for="ck1"></label>
                                            <input id="ck2" type="checkbox" checked/>
                    
                                <label for="ck2"></label>
                                            <input id="ck3" type="checkbox" />
                    
                                <label for="ck3"></label>
                                            <input id="ck4" type="checkbox" />
                                <label for="ck4"></label>
                                            <input id="ck5" type="checkbox" />
                                <label for="ck5"></label>
                        </div>
                    </div>

                </div>
                <div class="section">
                    <div class="section_title">
                        Interests
                    </div>
                    <div class="section_list">
                        <div class="section_list-item">
                            Football, programming.
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
</body>
</html>