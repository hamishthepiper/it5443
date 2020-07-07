<!DOCTYPE html>
<!-- 
James Stephens
IT 5443 - Summer 2020
jstep163@students.kennesaw.edu
update: Was working, now broken again...
-->


<html>
<?php
// define non-bolean variables and set to empty values
$fname = $lname= $email = $phone = $user_message = $website = $startdate = "";

$fname = test_input($_POST["fname"]);
$lname = test_input($_POST["lname"]);
$email = test_input($_POST["email"]);
$website = test_input($_POST["website"]);
$user_message = test_input($_POST["user_message"]);
$phone = test_input($_POST["phone"]);
$startdate = test_input($_POST["startdate"]);
$os_choice = test_input($_POST["os_choice"]);


// validate input fields which could contain malicious XSS code
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
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

<!--End standard page header and nav bar; Begin page content-->
        <div class="body-wrapper">
            <div class="section-title">
               <p> <h2>Results!</h2> Submitted on <?php echo date('Y-m-d H:s T'); ?></p>
            </div>

            <div class="p1">
                <h4>Contact Information</h4>
                <?php echo <<< EOF
                First name: $fname <br><br>
                Last name: $lname <br><br>
                Email: $email <br><br>
                Phone #: $phone <br><br>
                EOF ?>
            </div>

            <div class="p1">
                <h4>Optional Info</h4>
                <!-- Each php section will validate whether or not a value was supplied for the optional field -->
                Employed: <?php 
                    if ( isset($_POST["employed"]) ) {
                        echo $_POST["employed"];
                    } else {
                        echo 'Answer left blank';
                    }
                ?><br><br>

                Start Date: <?php 
                    if ( $startdate != "") {
                        echo $startdate;
                    } else {
                        echo 'Answer left blank';
                    }
                ?><br><br>

                OS of Choice: <?php 
                    if ( $os_choice == 'NULL' ) {
                        echo 'Answer left blank';
                    } else {
                        echo $os_choice;
                    }
                ?><br><br>

                Laptop Needed: <?php 
                    if ( isset($_POST["need_laptop"]) ) {
                        echo 'Yes';
                    } else {
                        echo 'Answer left blank';
                    }
                ?><br><br>

                Example link: <?php 
                    if ( $website != "") {
                        echo $website;
                    } else {
                        echo 'Answer left blank';
                    }
                ?><br><br>
                
                User Message: <?php 
                    if ($user_message != "") {
                        echo $user_message;
                    } else {
                        echo 'Answer left blank';
                    }
                ?><br><br>
                
            </div>

        </div>

    </body>

    <!--Footer, standard across all pages-->
    <div class="footer">
        <?php include 'includes/footer.php';?>
            
        </div>
</html>