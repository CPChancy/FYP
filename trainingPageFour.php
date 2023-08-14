<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>I Fought the Law: The laws around Data and Devices! - Wombat Training Solutions</title>
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
                    <a href="trainingPageFour.php" class="trainingNavigation">
                        <img class="backwards navArrow" src="images/navArrow.png" alt="Navigate Back">
                    </a>
                </div>
                <div class="trainingContainer">
                    <div class="textBox">
                        <h2 class="trainingHeaders">
                            I Fought the Law: The laws around Data and Devices!
                        </h2>
                        <p class="trainingText">
                            You’ve possibly heard of the Data Protection Act and the Computer Misuse Act if you havn’t don’t worry! We will go over briefly what they are and how they exist in your work environment. So, let’s start off with…
                        </p>
                        <p class="trainingText" style="font-style:italic;">
                            The Data Protection Act
                        </p><p class="trainingText">
                            So, this is the one that you’ve most likely heard of if any. What does this law cover? Well simply put, all personal data or information about individuals or organisations. So, what is illegal in the eyes of this law?
                        </p>
                        <ul class="trainingText">
                            <li>
                                Holding of inaccurate or false information
                            </li><li>
                                Failing to protect the data from hostile or unauthorised users.
                            </li><li>
                                Holding the information longer than needed.
                            </li><li>
                                Disclosing or gathering information without permission.
                            </li><li>
                                Deleting data without permission
                            </li>
                        </ul><p class="trainingText">
                            So why should you care about this? Simple, if any of these are broken and it was due to your intentional actions then you will be liable for any consequences, alongside your employer.
                        </p><p class="trainingText" style="font-style:italic;">
                            The Computer Misuse Act
                        </p><p class="trainingText">
                            This law is less known and can sometimes be forgotten but it is equally important. While this law is often more focused on preventing malicious individuals from using devices to carry out harmful activities, it also does have several areas that you need to be aware of and follow. They are:
                        </p><ul class="trainingText">
                            <li>
                                Don’t access a computer or device without permission and knowledge of the owner.
                            </li><li>
                                Do not access a device with the intention to carry out a different illegal act.
                            </li><li>
                                Carrying out actions that cause damage to other devices via the device you are using.
                            </li><li>
                                Acting without authorisation that causes or creates risk of serious damage.
                            </li><li>
                                Creating, supplying, or buying materials that can cause any of the above.
                            </li>
                        </ul>

                    </div>
                </div>
                <div>
                    <a href="trainingPageFive.php" class="trainingNavigation">
                        <img class="forwards navArrow" src="images/navArrow.png" alt="Navigate forwards">
                    </a>
                </div>

            </div>

        </div>
    </body>
</html>