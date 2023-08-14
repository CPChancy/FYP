<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Twenty Questions: Or well maybe not quite twenty - Wombat Training Solutions</title>
        <link rel="stylesheet" href="GeneralFormatting.css">
    </head>

    <?php
        session_start();
        if(isset($_SESSION["userName"])){
            echo("<html><head><style>.loggedIn{display:block;}.loggedOut{display:none;}</style></head></html>");
        }
        else if(isset($_SESSION["admin"])){
            echo("<html><head><style>.loggedIn{display:block;}.loggedOut{display:none;}.adminView{display:block;}</style></head></html>");
        }

    ?>

    <body>
        <div id="background" class="background">
            <div class="topBar">
                <h1 style="margin:auto;display:block;padding:15px;text-align:center;font-family:'Verdana';">Wombat Training Solutions</h1>
            </div>
            <div id="nav" style="background-color:#181a18;height:auto;min-height:70px;margin:auto;"> <!--NavBar Div-->
                <div class="nav">
                    <ul class="navBar">
                        <div class="bar">

                            <li class="navLink">
                                <a href="HomePage.php" class="link">
                                    <img src="images/home.png" alt="Return to Home" style="width:80px;height:auto;padding:2px;">
                                </a>
                            </li>
<!--                            <li class="navLink loggedIn">
                                <a href="" class="link loggedIn">
                                    <img src="images/manageAccount.png" alt="Manage Account" style="width:80px;height:auto;padding:2px;">
                                </a>
                            </li>-->
                            <li class="navLink loggedIn">
                                <a href="sessionTerminate.php" class="link loggedIn">
                                    <img src="images/logout.png" alt="Logout" style="width:80px;height:auto;padding:2px;">
                                </a>
                            </li>
                            <li class="navLink">
                                <a class="link loggedOut" onclick="openLoginForm()">
                                    <img src="images/login.png" alt="Login/Register" style="width:80px;height:auto;padding:2px;">
                                </a>
                            </li>
                            <li class="navLink">
                                <a class="link adminView" href="adminControl.php">
                                    <img src="images/adminAccess.png" alt="Login/Register" style="width:80px;height:auto;padding:2px;">
                                </a>
                            </li>
                        </div>
                        <div class="loginAccessForm" id="loginFormID">
                            <form method="post" class="formContainer" action="LoginLookup.php">
                                <h1>Login</h1>
                                <label for="accountNameEntry">
                                    <B>
                                        Enter Account Name
                                    </B>
                                </label>
                                <input class="signInInput" name="userName" method="post" type="text" placeholder="Enter your username" required>
                                <label for="passwordEntry">
                                    <B>
                                        Enter Password
                                    </B>
                                </label>
                                <input class="signInInput" name="passWord" method="post" type="password" placeholder="Enter your Password" required>
                                <input type="submit" class="subButton" value="Sign In">
                                <button type="button" class="subButton" onclick="location.href='Register.php'">
                                    Not got an Account? Click here to Register!
                                </button>
                                <button type="button" class="closeButton" onclick="closeLoginForm()">
                                    Close
                                </button>
                            </form>
                            <script scriptlanguage="text/javascript" src="InterfaceScript.js"><</script>
                        </div>
                    </ul>
                </div>
            </div >

            <div class="primaryContainer"> <!--Primary Content Block-->
                <div>
                    <a href="trainingPageSix.php" class="trainingNavigation">
                        <img class="backwards navArrow" src="images/navArrow.png" alt="Navigate Back">
                    </a>
                </div>
                <div class="trainingContainer">
                    <div class="textBox">
                        <h2 class="trainingHeaders">
                            Twenty Questions: Or well maybe not quite twenty
                        </h2>
                        <p class="trainingText">
                            The following series of questions are is to see how well you have retained the information we have shown through our training program. Every question will be multiple choice of some form, you will need to score 80% or more to pass the test fully and you can attempt the test as many times as you like.
                        </p>
                        <form action="assessmentScoring.php" class="trainingText" method="post">

                            <p><b>When working with a customer or client’s data, must it be kept as up to date as practically possible?</b></p>
                            <input type="radio" id="q1a" name="q1" value="a" required><label for="q1a">Yes</label><br>
                            <input type="radio" id="q1b" name="q1" value="b" required><label for="q1b">No</label>
                            <br>
                            <p><b>If you encounter a suspicious email, what should you do?</b></p>
                            <input type="radio" id="q2a" name="q2" value="a" required><label for="q2a">Delete the email and report it to whoever deals with the IT.</label><br>
                            <input type="radio" id="q2b" name="q2" value="b" required><label for="q2a">Delete the email and not report it.</label><br>
                            <input type="radio" id="q2c" name="q2" value="c" required><label for="q2c">Ignore it.</label><br>
                            <input type="radio" id="q2d" name="q2" value="d" required><label for="q2c">Look it up on a separate browser to make sure it’s real or fake.</label>
                            <br>
                            <p><b>You have mis-clicked and now might have aa virus on the device, what should you do?</b></p>
                            <input type="radio" id="q3a" name="q3" value="a" required><label for="q3a">Restart the device.</label><br>
                            <input type="radio" id="q3b" name="q3" value="b" required><label for="q3b">Turn the device off and report it to whoever deals with the IT.</label><br>
                            <input type="radio" id="q3c" name="q3" value="c" required><label for="q3c">Run a device scan and inform whoever deals with the IT.</label><br>
                            <input type="radio" id="q3d" name="q3" value="d" required><label for="q3d">Nothing</label>
                            <br>
                            <p><b>It is illegal to access a system using someone else’s login details without their permission or knowledge.</b></p>
                            <input type="radio" id="q4a" name="q4" value="a" required><label for="q4a">True</label><br>
                            <input type="radio" id="q4b" name="q4" value="b" required><label for="q4b">False</label>
                            <br>
                            <p><b>What laws does malicious deletion of data fall under?</b></p>
                            <input type="radio" id="q5a" name="q5" value="a" required><label for="q5a">Data Protection Act</label><br>
                            <input type="radio" id="q5b" name="q5" value="b" required><label for="q5b">Computer Misuse Act</label><br>
                            <input type="radio" id="q5c" name="q5" value="c" required><label for="q5c">Both</label><br>
                            <input type="radio" id="q5d" name="q5" value="d" required><label for="q5d">Neither</label>
                            <br>
                            <p><b>Who is liable for a customer’s data?</b></p>
                            <input type="radio" id="q6a" name="q6" value="a" required><label for="q6a">You</label><br>
                            <input type="radio" id="q6b" name="q6" value="b" required><label for="q6b">The Company</label><br>
                            <input type="radio" id="q6c" name="q6" value="c" required><label for="q6c">The Customer</label><br>
                            <input type="radio" id="q6d" name="q6" value="d" required><label for="q6d">Nobody</label>
                            <br>
                            <p><b>You received an email addressed to you from a delivery company you have never heard of, is this a phishing attack?</b></p>
                            <input type="radio" id="q7a" name="q7" value="a" required><label for="q7a">Yes</label><br>
                            <input type="radio" id="q7b" name="q7" value="b" required><label for="q7b">No</label><br>
                            <input type="radio" id="q7c" name="q7" value="c" required><label for="q7c">Maybe</label>
                            <br>
                            <p><b>If you breach a one of the laws mentioned, what are the potential legal penalties you may encounter?</b></p>
                            <input type="radio" id="q8a" name="q8" value="a" required><label for="q8a">Life Imprisonment</label><br>
                            <input type="radio" id="q8b" name="q8" value="b" required><label for="q8b">Financial Fines</label><br>
                            <input type="radio" id="q8c" name="q8" value="c" required><label for="q8c">Both</label>
                            <br>
                            <p><b>From the sample passwords which seems to be the most secure?</b></p>
                            <input type="radio" id="q9a" name="q9" value="a" required><label for="q9a">Sup3rS3cureN0w</label><br>
                            <input type="radio" id="q9b" name="q9" value="b" required><label for="q9b">Pot@t0</label><br>
                            <input type="radio" id="q9c" name="q9" value="c" required><label for="q9c">Password</label>
                            <br>
                            <p><b>What sort of things will a Phishing attack aim to steal?</b></p>
                            <input type="radio" id="q0a" name="q0" value="a" required><label for="q0a">Personal details</label><br>
                            <input type="radio" id="q0b" name="q0" value="b" required><label for="q0b">Login details</label><br>
                            <input type="radio" id="q0c" name="q0" value="c" required><label for="q0c">Both</label><br>
                            <input type="radio" id="q0d" name="q0" value="d" required><label for="q0d">Neither</label>
                            <br>
                            <input class="questionsSubmit" type="submit" value="Submit Answers">
                        </form>
                    </div>
                </div>


            </div>

        </div>
    </body>
</html>