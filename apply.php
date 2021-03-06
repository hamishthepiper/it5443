<!DOCTYPE html>
<!-- 
James Stephens
IT 5443 - Summer 2020
jstep163@students.kennesaw.edu
update: Was working, now broken again...
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
            <?php include 'includes/header.php' ;?>
            <script src='scripts/setheader.js'></script>
        </div>  

<!--End standard page header and nav bar; Begin page content-->
        <div class="body-wrapper">

            <div class="section-title">
                <h2>Position Details</h2>
            </div>

            <div class="p1">
                <p>
                    We are seeking four students for work this summer on a project which will revolutionize business as we know it!
                    In order to be considered for these postions the following requirements must be met.
                    <ul>
                        <li>Student must be currently enrolled at Kennesaw State University with no outstanding academic holds.</li>
                        <li>The following skills will be needed to fulfill the requirements:</li>
                        <li>Student must be in good academic standing with a competitive average in the required courses.</li>
                        <ul>
                            <li>Statistical analysis</li>
                            <li>Python w/ SciPi framework</li>
                            <li>Collaborative coding within a distributed team</li>
                            <li>Design code that securely handles data when transmitted and at rest.</li>
                        </ul>
                    </ul> 
                </p>
            </div>

            <div class="p2">
                <div>
                    <h3>In order to apply, please select your current academic level and fill in the grades for the required courses. Grades will be 
                        evaluated on the following scale:</h3>
                        <ul>
                            <li>A: 100-90</li>
                            <li>B: 89-80</li>
                            <li>C: 79-70</li>
                            <li>D: 69-60</li>
                            <li>F: 59 and below</li>
                        </ul>
                    </p>
                </div>
                <hr>
                <form>
                    <p>
                        <label for="schooling">Choose your level of schooling</label>
                        <select id="schooling">
                            <option value="Undergraduate">Undergraduate</option>
                            <option value="Graduate">Graduate</option>
                        </select>
                        <button type="button" onclick="createApplication();">Submit selection</button>
                        <!-- Add event for submitting the selection to the proper JS file to generate the proper form -->
                    </p>

                </form>

                <!-- These are empty divs that are invisible until info is added to them -->
                <div id="application"></div>

                <div id="result"></div>
            </div>

        </div>

        <script type="text/javascript">

            // generates different form based on schooling selection and writes to 'application' div innerHTML
            function createApplication() {
                var level = document.getElementById("schooling").value;

                if (level == "Undergraduate") {
                    var html=`<div class="class">CYBR 3153 Database Systems <select id="Class1" class="grade"><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="F">F</option></select></div>`;
                    html+=`<div class="class">CSE 3203 Mobile System Overview <select id="Class2" class="grade"><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="F">F</option></select></div>`;
                    html+=`<div class="class">IT 4213 Mobile Web Development <select id="Class3" class="grade"><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="F">F</option></select></div>`;
                    html+=`<div class="class">CYBR 4220 Server Systems Security <select id="Class4" class="grade"><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="F">F</option></select></div>`;
                    html+=`<div class="class">IT 4713 Business Intel Systems <select id="Class5" class="grade"><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="F">F</option></select></div>`;
                    html+= `<div>Please note, the requirement for ${level}s is <em>above a 3.2 average.</em><button type="button" class="avg" onclick="calculateAverage();">Evaluate</button></div>`
                } else {
                    var html=`<div class="class">IT 6713 Business Intelligence <select id="Class1" class="grade"><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="F">F</option></select></div>`;
                    html+=`<div class="class">IT 6863 IT Database Security & Auditing <select id="Class2" class="grade"><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="F">F</option></select></div>`;
                    html+=`<div class="class">CYBR 7100 Secure Application Development <select id="Class3" class="grade"><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="F">F</option></select></div>`;
                    html+=`<div class="class">IT 7113 Data Visualization <select id="Class4" class="grade"><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="F">F</option></select></div>`;
                    html+= `<div>Please note, the requirement for ${level}s is <em>above a 3.7 average.</em><button type="button" class="avg" onclick="calculateAverage();">Evaluate</button></div>`
                }

                document.getElementById("application").innerHTML=html; // Populates the application div with the correct form info
                document.getElementById("result").innerHTML = ""; // Resets the 'result' div when the form selection changes             
            }

            // Evaluates avg GPA against criteria, which is set via the 'schooling' value
            function calculateAverage() {
                var level = document.getElementById("schooling").value;

                // Sets variables for iteration and determining success or failure
                if (level == "Undergraduate") {
                    req = 3.2;
                    classNums = 5;
                } else {
                    req = 3.7;
                    classNums = 4;
                }

                let total = 0; // var to hold the total value of grades
                let i = 1; // iterator for while loop

                // loops through each Class# object and adds the value to the total
                while (i <= classNums) {
                    
                    total += gradeConvert(document.getElementById(`Class${i}`).value);
                    i ++;
                }

                avg = (total / classNums).toFixed(1) // Keeps decimal to one digit even when it's an even number

                if (avg < req) {
                    html = `<hr><div>Sorry, your average is <span class="red">${avg}</span>, which doesn't meet our standards</div>`;
                } else {
                    html = `<hr><div>Congratulations, your average is <span class="green">${avg}</span>, which is enough! Please visit this <a href="submit.php">Super Special link</a> to apply!</div>`;
                }

                document.getElementById("result").innerHTML=html // writes result to the innerHTML of 'result' div
            }

            // Takes str from drop-down menu and returns int for math 
            function gradeConvert(letter){
                if (letter == `A`) {
                    return 4;
                } else if (letter == `B`) {
                    return 3;
                } else if (letter == `C`) {
                    return 2;
                } else if (letter == `D`) {
                    return 1;
                } else {
                    return 0;
                }
            }
        </script>
    </body>

    <!--Footer, standard across all pages-->
    <div class="footer">
       <?php include 'includes/footer.php';?>
        
    </div>
</html>
    
