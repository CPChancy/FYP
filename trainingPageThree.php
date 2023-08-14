<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Hooked: What to do if you get phished! - Wombat Training Solutions</title>
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
                    <a href="trainingPageTwo.php" class="trainingNavigation">
                        <img class="backwards navArrow" src="images/navArrow.png" alt="Navigate Back">
                    </a>
                </div>
                <div class="trainingContainer">
                    <div class="textBox">
                        <h2 class="trainingHeaders">
                            Hooked: What to do if you get phished!
                        </h2>
                        <p class="trainingText">
                            Accidently clicked the link or realised after you did it that it was a Phishing attack? Don’t panic! Speak to your manager, supervisor, or IT support for your employer if in a work environment. They will tell you what to do in response. On your own device outside of work? Close the link and make sure to run an anti-virus scan on your device. Change any accounts you accessed on a device that hasn’t been Phished. With these two steps you’ll improve the overall chance that the attack on you failed and you remain un-phished.
                        </p>
                    </div>
                </div>
                <div>
                    <a href="trainingPageFour.php" class="trainingNavigation">
                        <img class="forwards navArrow" src="images/navArrow.png" alt="Navigate forwards">
                    </a>
                </div>

            </div>

        </div>
    </body>
</html>