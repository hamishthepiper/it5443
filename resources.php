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
            <?php include('header.php');?>
            <script src='setheader.js'></script>
        </div>  

    <!--End standard page header and nav bar; Begin page content-->
        <div class="body-wrapper">
            <div class="section-title">
                <h2>Resources for further edification</h2>
            </div>

            <div class="p1">
                <p>
                    <h3>Food for thought</h3>
                </p>
                
                <ul>
                    <li>
                        <p>
                            Artifical Intelligence/Machine Learning is being used to automate our lives, 
                            often behind the scenes in ways that the average user never sees. Where's the 
                            balancing point of enabling progress without giving up too much control?
                        </p>
                    </li>

                    <li>
                        <p>
                            Privacy concerns regarding consumer's data have changed dramatically in recent 
                            history, with General Data Protection Regulation (GDPR) in Europe and the 
                            California Consumer Privacy Act (CCPA) in the USA being passed into law in an
                            attempt to put the control over your data back in the consumer's hands? Has this 
                            really changed how tech companies use our data, and do most consumers even care about this? 
                        </p>
                    </li>

                </ul>
            </div>

            <div class="section-title" style="text-align: center;">
                <h4>Upcoming events</h4>
            </div>

            <!-- Calendar constructed with table layout-->
            <table>
                <thead>
                    <tr>
                        <th colspan="7"><h3>June 2020</h3></th>
                    </tr>
                    <tr>
                        <th>Sunday</th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                        <th>Saturday</th>
                    </tr>
                </thead>
                <tfoot>
                    <!-- <tr>
                        <td colspan="7"style="text-align: left;">
                            <ul>
                                <li>Event1</li>
                                <li>Event2</li>
                                <li>Event3</li>
                                <li>Event4</li>
                            </ul>
                        </td>
                    </tr> -->
                </tfoot>
                <tbody>
                    <tr>
                        <td></td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>8</td>
                        <td>
                            9<br>
                            Milestone 1 due
                        </td>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                        <td>13</td>
                    </tr>
                    <tr>
                        <td>
                            14<br>
                            Flag Day
                        </td>
                        <td>15</td>
                        <td>16</td>
                        <td>17</td>
                        <td>18</td>
                        <td>19</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>
                            21 <br>
                            Father's Day
                        </td>
                        <td>22</td>
                        <td>
                            23<br>
                            Milestone 2 Due
                        </td>
                        <td>24</td>
                        <td>25</td>
                        <td>26</td>
                        <td>27</td>
                    </tr>
                    <tr>
                        <td>28</td>
                        <td>29</td>
                        <td>
                            30<br>
                            Research Paper Topic due
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>


        </div>

    </body>

    <!--Footer, standard across all pages-->
    <div class="footer">
        <hr>
        <div>
            <a href="https://kennesaw.edu" target="_blank"><u>Kennesaw State University</u></a><br>
            1000 Chastain Road<br>
            Kennesaw, GA 30144<br>
            Phone: 470-578-6000 <br>
            <br>
        </div>

        <p>
            This is a website which was designed to track progress and showcase skills
            learned in the <a href="http://it5443.azurewebsites.net/" target="_blank">KSU IT5442 Web Development</a> class for Summer 2020.
        </p>
    </div>

</html>