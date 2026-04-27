<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SampleResume</title>\

</head>
<body>
    <?php 
        $phoneNum = "+63-427-672324";
        $email = "hadelossantos@fit.edu.ph";
        $location = "Caloocan City, Philippines";
    ?>
    <div class="container">
        <div class="header">
            <div class="full-name">
                <span class="first-name">Hannah Elisha</span>
                <span class="last-name">Delos Santos</span>
            </div>
            <div class="contact-info">
                <span class="email">Email: </span>
                <span class="email-val"><?=$email;?></span>
                <span class="seperator"></span>
                <span class="phone">Phone: </span>
                <span class="phone-val"><?=$phoneNum?></span>
            </div>
            <div class="about">
                <span class="position">Front-End Developer </span>
                <span class="desc">I am a front-developer with more than 3 years of experience writing html, css, and js. 
                    Now I'm trying to learn php
                </span>
            </div>
        </div>
        <div class="details">
            <div class="section">
                <div class="section_title">Experience</div>
                <div class="section_list">
                    <div class="section_list-item">
                        <div class="left">
                            <div class="name">Experience1</div>
                            <div class="address">Address 1</div>
                            <div class="duration">Month, Year - Month Year</div>
                        </div>
                        <div class="right">
                            <div class="name">Experience1</div>
                            <div class="desc">Desc 1</div>
                        </div>
                    </div>
                    <div class="section_list-item">
                        <div class="left">
                            <div class="name">Experience1</div>
                            <div class="address">Address 1</div>
                            <div class="duration">Month, Year - Month Year</div>
                        </div>
                        <div class="right">
                            <div class="name">Experience1</div>
                            <div class="desc">Desc 1</div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="section">
                <div class="section_title">Education</div>
                <div class="section_list">
                    <div class="section_list-item">
                        <div class="left">
                            <div class="name">FEU Institute of Technology</div>
                            <div class="address">Sampaloc, Metro Manila</div>
                            <div class="duration">Jan 2011 - Feb 2015</div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>





    </div>
</body>
</html>