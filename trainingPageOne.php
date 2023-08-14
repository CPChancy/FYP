<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Phishing: It’s not just for Fish! - Wombat Training Solutions</title>
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
                    <a href="HomePage.php" class="trainingNavigation">
                        <img class="backwards navArrow" src="images/navArrow.png" alt="Navigate Back">
                    </a>
                </div>
                <div class="trainingContainer">
                    <div class="textBox">
                        <h2 class="trainingHeaders">
                            Phishing: It's not just for Fish!
                        </h2>
                        <p class="trainingText">
                            So, you’ve probably encountered terms in the news such as Phishing, Ransomware and Malware, these terms are used a large amount in media and in industry, alongside a horde of other terms that IT professionals love to use like they are going out of fashion. While they are all related, the one we will primarly be looking at and how it may be used on you is Phishing.
                            </p>
                            <p class="trainingText" style="font-style:italic;">
                            So, what exactly is Phishing?
                            </p><p class="trainingText">

                            Phishing is a type of attack where a malicious individual or group make use of fake emails or messages to try and steal your data. This is often done by tricking the user into clicking or interacting with the message itself, for attacks targeted at you it’s often for things such as your bank account details or other sensitive pieces of information that you would likely not want shared.
                            <br><br>
                            For your employer its often a similar target but sometimes it’s so they can find out how to access your employer’s computer network so they can instal malicious programs or apps to steal, damage or most frequently encrypt the company’s data allowing them to carry out a Ransomware attack. Which if your employer is unlucky could cost a large amount of money for the company.
                        </p>
                    </div>
                </div>
                <div>
                    <a href="trainingPageTwo.php" class="trainingNavigation">
                        <img class="forwards navArrow" src="images/navArrow.png" alt="Navigate forwards">
                    </a>
                </div>

            </div>

        </div>
    </body>
</html>