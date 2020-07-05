<!DOCTYPE html>
<!-- 
James Stephens
IT 5443 - Summer 2020
jstep163@students.kennesaw.edu
-->

<html>
    <!--Begin standard page header and nav bar-->
    <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, inital-scale=1">
            <title>Center for Applied Research in Information Technology</title>
            <link rel="stylesheet" href="styles.css">
    </head>
    
    <body>
        <div class="header-wrapper">
            <?php include 'includes/header.php';?>
            <script src='scripts/setheader.js'></script>
        </div>  
    <!--End standard page header and nav bar; Begin page content-->
        <div class="body-wrapper">
            <div class="section-title">
                <h2>Overview</h2>
            </div>

            <div class="p1">
                <p>
                    Welcome to the Center for Applied Research in Information Technology (CARIT) website. The goal of CARIT is to support local business and communities by providing results driven technolgological research. 
                    CARIT will provide an environment that focuses on facilitating an applied learning environment for KSU graduate and undergraduate students with hands-on research experience in the areas of data collection, data management and analysis. 
                    Please browse the website to see what CARIT projects have been conducted or are in the works. You can also find information about the services available through CARIT. 
                </p>
            </div>

            <div class="section-header">
                <h3>News</h3>
            </div>

            <div class="p2">
                <div class="list">
                    <ul>
                        <li><span>KSU COVID-19 Updates: </span><a href="https://coronavirus.kennesaw.edu/" target="_blank">Latest news and schedules for returning to campus.</a></a></li><br>
                            <ul>
                                <li>Summer 2020 Semester: All summer 2020 semester classes are online. </li><br>
                                <li>Fall Semester 2020: New Student Orientation has been transferred to an online experience for students 
                                    beginning classes for the Fall 2020 term. The University is currently working on plans for a return to 
                                    campus for the fall 2020 semester for all students, based on guidelines provided by the University 
                                    System of Georgia. As soon as information is available, the campus community will be notified and this page will be update. </li><br>
                            </ul>
                        <li>We're Hiring! There are four Student Assistant positions, open to both Undergrad and Graduate students. 
                            <a href="apply.html">Click here for requirements and application information</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
    </body>

    <!--Footer, standard across all pages-->
    <div class="footer">
        <?php include 'includes/footer.php';?>
        
    </div>
</html>



