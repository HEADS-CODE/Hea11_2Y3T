<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DelosSantos_Resume</title>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!--PHP Variables-->
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

        //Education
        $schoolName = "";
        $schoolAddress = "";

        //Languages
        $language1 = "HTML";
        $language2 = "CSS";
        $language3 = "JavaScript";
        $language4 = "Figma";
        $language5 = "AndroidStudio";
        $language6 = "Kotlin";

        //Skills
        $skill1 = "Innovative Creativity";
        $skill2 = "Project Management";
        $skill3 = "Leadership Adaptability";
        $skill4 = "Communication Skills";
        $skill5 = "Digital Editing";
        $skill6 = "Problem-Solving";

        //Projects
        $projects = ["Tanoo", "StarTreat", "AUniPath", "LiniSync"];

    ?>
    
    <!--PHP: Sample Use of Echo-->
    <div class="activityname">
            <hr><?php echo "Welcome to $lastName' First Resume PHP Activity :D" ?><hr>
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
                    <!--PHP: Sample of using simple variables, "echo" and dots.-->
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

            <!--PHP: Sample of using variables inside a continous string.-->
                <hr><span class="desc">
                    <?php echo "I am a <b>$position</b> with the goal of achieving many years of experience writing $language1, $language2, and $language3 
                    as a Web Developer. Including the process in mastering $language5's $language6 for Mobile Development. 
                    exerienced with UI/UX designing using $language4. Seeks challenges as advantages to grow and develop. 
                    Carries a solution-focused minsdet for upcoming projects and ideas. Dedicated in solving real-life 
                    problems utilizing web advancement & application development. " ?>
                </span>
                <hr style= "margin: 10px auto 0px;">
            </div>
        </div>
        <div class="details">
            <div class="section">
                
                <!-- Experience Section-->
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
                            <!--PHP: Example of changing the variable's value.-->
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
                
            <!-- Education Section-->
            <div class="section">
                <div class="section_title">Education</div>
                <div class="section_list">
                    <div class="section_list-item">
                        <div class="left">
                            <div class="name"><?= $school="FEU Institute of Technology"; ?></div>
                            <div class="addr"><?= $schoolAddress="Sampaloc, Manila City"?></div>
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
                            <div class="name"><?= $school="Makati High School"; ?></div>
                            <div class="addr"><?= $schoolAddress="San Antonio, Mayapis, Makati City"?></div>
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

            <!-- Projects Designed -->
            <div class="section">
                <div class="section_title">Projects</div>
                
                <!--PHP: Sample of using an array -->
                <ul class="project-list">
                    <li>
                        <b><?= $projects[0] ?></b> - An Ecommerce-Community mobile application designed for anime/manga cosplayers, fans, and the anime/manga community.
                    </li>
                    <li>
                        <b><?= $projects[1] ?></b> - A dessert mobile shopping app that brings the joy of sweets straight to users' homes through convenient delivery or guided baking.
                    </li>
                    <li>
                        <b><?= $projects[2] ?></b> - A Philippine-Based College and Scholarship Discovery Website for SHS Graduates With Strand-Course Misalignment.
                    </li>
                    <li>
                        <b><?= $projects[3] ?></b> - A mobile app (habit & environment tracker), bridges awareness and action by personalizing environmental accountability at a household level.

                    </li>
                </ul><hr style="margin-top: 20px;">
            </div>

            <!-- Languages Mastery -->
            <div class="section">

                <div class="section_title">Languages</div>

                <!--Using Language variables-->
                <div class="languages">
                    
                    <!--Language 1: HTML-->
                    <div class="languages_item">
                        <div class="left"><div class="name">
                            <?= $language1 ?>
                        </div></div>
                            <div class="right">
                                            <input  id="ck1" type="checkbox" checked/>
                                <label for="ck1"></label>
                                            <input id="ck2" type="checkbox" checked/>
                                <label for="ck2"></label>
                                            <input id="ck3" type="checkbox" checked/>
                                <label for="ck3"></label>
                                            <input id="ck4" type="checkbox" checked/>
                                <label for="ck4"></label>
                                            <input id="ck5" type="checkbox" />
                                <label for="ck5"></label>
                                            <input id="ck6" type="checkbox" />
                                <label for="ck6"></label>
                                            <input id="ck7" type="checkbox" /> 
                                <label for="ck7"></label>
                                            <input id="ck8" type="checkbox" />
                                <label for="ck8"></label>
                                            <input id="ck9" type="checkbox" />           
                                <label for="ck9"></label>
                        </div>
                    </div>

                    <!--Language 2: CSS-->
                        <div class="languages_item">
                            <div class="left"><div class="name">
                                <?= $language2?></div></div>
                            <div class="right">
                                            <input  id="ck1" type="checkbox" checked/>
                    
                                <label for="ck1"></label>
                                            <input id="ck2" type="checkbox" checked/>
                    
                                <label for="ck2"></label>
                                            <input id="ck3" type="checkbox" checked/>
                    
                                <label for="ck3"></label>
                                            <input id="ck4" type="checkbox" checked/>
                                <label for="ck4"></label>
                                            <input id="ck5" type="checkbox" />
                                <label for="ck5"></label>
                                            <input id="ck6" type="checkbox" />
                                <label for="ck6"></label>
                                            <input id="ck7" type="checkbox" /> 
                                <label for="ck7"></label>
                                            <input id="ck8" type="checkbox" />
                                <label for="ck8"></label>
                                            <input id="ck9" type="checkbox" />           
                                <label for="ck9"></label>
                            
                        </div>
                    </div>

                    <!--Language 3: JavaScript-->
                        <div class="languages_item">
                            <div class="left"><div class="name">
                                <?= $language3?></div></div>
                            <div class="right">
                                            <input  id="ck1" type="checkbox" checked/>
                    
                                <label for="ck1"></label>
                                            <input id="ck2" type="checkbox" checked/>
                    
                                <label for="ck2"></label>
                                            <input id="ck3" type="checkbox" checked/>
                    
                                <label for="ck3"></label>
                                            <input id="ck4" type="checkbox" />
                                <label for="ck4"></label>
                                            <input id="ck5" type="checkbox" />
                                <label for="ck5"></label>
                                            <input id="ck6" type="checkbox" />
                                <label for="ck6"></label>
                                            <input id="ck7" type="checkbox" /> 
                                <label for="ck7"></label>
                                            <input id="ck8" type="checkbox" />
                                <label for="ck8"></label>
                                            <input id="ck9" type="checkbox" />           
                                <label for="ck9"></label>
                            
                        </div>
                    </div>

                    <!--Language 4: Figma-->
                        <div class="languages_item">
                            <div class="left"><div class="name">
                                <?= $language4?></div></div>
                            <div class="right">
                                            <input  id="ck1" type="checkbox" checked/>
                    
                                <label for="ck1"></label>
                                            <input id="ck2" type="checkbox" checked/>
                    
                                <label for="ck2"></label>
                                            <input id="ck3" type="checkbox" checked/>
                    
                                <label for="ck3"></label>
                                            <input id="ck4" type="checkbox" checked/>
                                <label for="ck4"></label>
                                            <input id="ck5" type="checkbox" checked/>
                                <label for="ck5"></label>
                                            <input id="ck6" type="checkbox" checked/>
                                <label for="ck6"></label>
                                            <input id="ck7" type="checkbox" checked/> 
                                <label for="ck7"></label>
                                            <input id="ck8" type="checkbox" />
                                <label for="ck8"></label>
                                            <input id="ck9" type="checkbox" />           
                                <label for="ck9"></label>
                            
                        </div>
                    </div>    
                    
                    <!--Language 5: AndroidStudio-->
                        <div class="languages_item">
                            <div class="left"><div class="name">
                                <?= $language5?></div></div>
                            <div class="right">
                                            <input  id="ck1" type="checkbox" checked/>
                    
                                <label for="ck1"></label>
                                            <input id="ck2" type="checkbox"/>
                    
                                <label for="ck2"></label>
                                            <input id="ck3" type="checkbox" />
                    
                                <label for="ck3"></label>
                                            <input id="ck4" type="checkbox" />
                                <label for="ck4"></label>
                                            <input id="ck5" type="checkbox" />
                                <label for="ck5"></label>
                                            <input id="ck6" type="checkbox" />
                                <label for="ck6"></label>
                                            <input id="ck7" type="checkbox" /> 
                                <label for="ck7"></label>
                                            <input id="ck8" type="checkbox" />
                                <label for="ck8"></label>
                                            <input id="ck9" type="checkbox" />           
                                <label for="ck9"></label>
                            
                        </div>
                    </div>    
                    
                    <!--Language 6: Kotlin-->
                        <div class="languages_item">
                            <div class="left"><div class="name">
                                <?= $language6?></div></div>
                            <div class="right">
                                            <input  id="ck1" type="checkbox" checked/>
                    
                                <label for="ck1"></label>
                                            <input id="ck2" type="checkbox"/>
                    
                                <label for="ck2"></label>
                                            <input id="ck3" type="checkbox" />
                    
                                <label for="ck3"></label>
                                            <input id="ck4" type="checkbox" />
                                <label for="ck4"></label>
                                            <input id="ck5" type="checkbox" />
                                <label for="ck5"></label>
                                            <input id="ck6" type="checkbox" />
                                <label for="ck6"></label>
                                            <input id="ck7" type="checkbox" /> 
                                <label for="ck7"></label>
                                            <input id="ck8" type="checkbox" />
                                <label for="ck8"></label>
                                            <input id="ck9" type="checkbox" />           
                                <label for="ck9"></label>
                            
                        </div>
                    </div>
                </div><hr style="margin-top: 20px; margin-bottom: 20px;">

                <!-- Core Skills Section-->
                <div class="section">
                    <div class="section_title">
                        Core Skills
                    </div>
                    <!--PHP: Sample of making a list inside PHP block-->
                    <div class="section_list">
                        <ul class="skills_list-item">
                            <?php echo
                            "<li>$skill1</li>" . 
                            "<li>$skill2</li>" .
                            "<li>$skill3</li>" .
                            "<li>$skill4</li>" .
                            "<li>$skill5</li>" .
                            "<li>$skill6</li>"
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
</body>
</html>