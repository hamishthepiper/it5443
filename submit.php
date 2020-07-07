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
        </div>  

        <div class="body-wrapper">

            <div class="section-title">
                <h2>Application</h2>
            </div>

            <div class="p1">
                <p>Congratulations on meeting the criteria for this position! Please fill in the form below to tell us a bit about yourself.</p>
                
                <form id='application' action="result.php" method="POST">
                    
                    <div class="contact_info">
                        <hr>
                        <p>
                            <h4>Contact Information <em>(All fields are required in this section)</em></h4>
                        </p>

                        <p>
                            <label for='fname'>First name: </label>
                            <input type="text" name="fname" id="fname" placeholder="No numbers allowed" required pattern="^[a-zA-Z ,.'-]+$">

                            <label for='lname'>Last name: </label>
                            <input type="text" name="lname" id="lname" placeholder="No numbers allowed" required pattern="^[a-zA-Z ,.'-]+$">
                        </p>

                        <p>
                            <label for='phone'>Phone number: </label>
                            <input type="tel" name="phone" id="phone" placeholder="###-###-####" required pattern="\d{3}-\d{3}-\d{4}">

                            <label for='email'>Email address: </label>
                            <input type="email" name="email" id="email" placeholder="text@example.com" required pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$">
                            <!--https://regexlib.com/REDetails.aspx?regexp_id=26-->
                        </p>

                    </div>
                    <hr>
    
                    <div>
                        <label for="employed">Are you currently obligated to another employer for more than 35 hours/week? </label>
                        <!--autocomplete=off is necessary to keep the value of the checkbox from persisting in Firefox-->
                        <input type='radio' name='employed' id='empl_y' value='Yes' autocomplete='off' >
                            <label for='empl_y' checked>Yes</label>
                        <input type='radio' name='employed' id='empl_n' value='No' autocomplete="off">
                            <label for='empl_n'>No</label>

                    </div>

                    <div>
                        <label for="startdate">What's the earliest you could start?</label>
                        <input type="date" name="startdate" id="startdate" min=<?php echo date('Y-m-d'); ?>>
                    </div>

                    <div>
                        <label for="os_choice">What's the Operating System you're most comfortable with?</label>
                        <select id="os_choice" name='os_choice'>
                            <option value="NULL"></option>
                            <option value="Windows">Windows</option>
                            <option value="MacOS">MacOS</option>
                            <option value="Linux">Linux</option>
                        </select>
                    </div>

                    <div>
                        Check here if you will require us to supply you with a laptop <input type="checkbox" name="need_laptop" id="need_laptop">
                    </div>

                    <div>
                        <label for="website">Leave a link to an example of your work (Github or GitLab):</label>
                        <input type="url" name='website' id="website" placeholder="http(s)://" pattern='^http(s)?:\/\/git(hub|lab)\.com\/[\w-_]+'>
                    </div>

                    <div>
                        <label for="msg">Any additional information that you feel is relevant:</label><br>
                        <textarea id="msg" name="user_message" cols="80" rows="10"></textarea>
                    </div>

                    <button>Apply!</button>
                </form>

            </div>  
        </div>

    </body>

    <!--Footer, standard across all pages-->
    <div class="footer">
        <?php include 'includes/footer.php';?>
            
        </div>
</html>