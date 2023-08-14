<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Spotting a phishing attack: it’s easier than you think! - Wombat Training Solutions</title>
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
                    <a href="trainingPageOne.php" class="trainingNavigation">
                        <img class="backwards navArrow" src="images/navArrow.png" alt="Navigate Back">
                    </a>
                </div>
                <div class="trainingContainer">
                    <div class="textBox">
                        <h2 class="trainingHeaders">
                            Spotting a phishing attack: it’s easier than you think!
                        </h2>
                        <p class="trainingText">
                            As phishing attacks have got better as time as gone by, it can become difficult to spot them, some going as far as to look totally genuine. However, there are several easy ways to spot them or figure out if it is one!
                            <br><br>
                            Look for the following:
                            <br>
                            </p>
                            <ul class="trainingText">
                                <li>
                                    The email or message sender is you.
                                </li><li>
                                    The email or number is from another country.
                                </li><li>
                                    There are errors in the spelling or grammar of the message.
                                </li><li>
                                    The brand looks like an existing one but seems wrong.
                                </li><li>
                                    You can also if you’re on a pc just hover your cursor over the email, buttons or links that are on the email.
                                </li>
                            </ul><p class="trainingText">
                            With just these simple steps you increase the likelihood of you spotting the fake email or message!
                        </p>
                    </div>
                </div>
                <div>
                    <a href="trainingPageThree.php" class="trainingNavigation">
                        <img class="forwards navArrow" src="images/navArrow.png" alt="Navigate forwards">
                    </a>
                </div>

            </div>

        </div>
    </body>
</html>