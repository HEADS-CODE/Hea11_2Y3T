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
        $firstName = "Hannah Elisha";
        $lastName = "Delos Santos";
        $email = "hadelossantos@fit.edu.ph";
        $phone = "+63 9324564324";

        $position = "Full-Stack Web & Mobile Developer";
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
                        <span class="first-name"><?php echo $firstName; ?></span>
                        <span class="last-name"><?= $lastName; ?></span>
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
                <span class="position">Full-Stack Web & Mobile Developer</span>
                <span class="desc">
                    <?php echo "I am a $position with the goal of having many years of experience writing HTML, CSS, and JavaScript 
                    as a Web Developer. Including the process in mastering AndroidStudio's Kotlin for Mobile Development. 
                    Seeks challenges as advantages to grow and develop. Carries a solution-focused minsdet for upcoming projects 
                    and ideas. Dedicated in solving real-life problems utilizing web advancement & application development. " ?>
                </span>
            </div>
        </div>
        <div class="details">
            <div class="section">
                <div class="section_title">Experience</div>
                <div class="section_list">
                    <div class="section_list-item">
                        <div class="left">
                            <div class="name">KlowdBox</div>
                            <div class="addr">San Fr, CA</div>
                            <div class="duration">Jan 2011 - Feb 2015</div>
                        </div>
                        <div class="right">
                            <div class="name">Fr developer</div>
                            <div class="desc">did this and that</div>
                        </div>
                    </div>
                    <div class="section_list-item">
                        <div class="left">
                            <div class="name">Akount</div>
                            <div class="addr">San Monica, CA</div>
                            <div class="duration">Jan 2011 - Feb 2015</div>
                        </div>
                        <div class="right">
                            <div class="name">Fr developer</div>
                            <div class="desc">did This and that</div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="section">
                <div class="section_title">Education</div>
                <div class="section_list">
                    <div class="section_list-item">
                        <div class="left">
                            <div class="name">Sample Institute of technology</div>
                            <div class="addr">San Fr, CA</div>
                            <div class="duration">Jan 2011 - Feb 2015</div>
                        </div>
                        <div class="right">
                            <div class="name">Fr developer</div>
                            <div class="desc">did this and that</div>
                        </div>
                    </div>
                    <div class="section_list-item">
                        <div class="left">
                            <div class="name">Akount</div>
                            <div class="addr">San Monica, CA</div>
                            <div class="duration">Jan 2011 - Feb 2015</div>
                        </div>
                        <div class="right">
                            <div class="name">Fr developer</div>
                            <div class="desc">did this and that</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="section_title">Projects</div>
                <div class="list">
                    <div class="section_list-item">
                        <div class="name">DSP</div>
                        <div class="text">I am a front-end developer with more than 3 years of experience writing html, css, and js. I'm motivated, result-focused and seeking a successful team-oriented company with opportunity to grow.</div>
                    </div>
                    <div class="section_list-item">
                        <div class="name">DSP</div>
                        <div class="text">I am a front-end developer with more than 3 years of experience writing html, css, and js. I'm motivated, result-focused and seeking a successful team-oriented company with opportunity to grow.<a href="/login">link</a>
                        </div>
                    </div>
                </div>
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