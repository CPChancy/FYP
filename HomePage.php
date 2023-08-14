<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Home - Wombat Training Solutionse</title>
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

            <div class="primaryContainer loggedIn"> <!--Primary Content Block-->
                <div>
                    <a class="trainingNavigation">
                        <img class="backwards navArrow" src="images/navArrow.png" alt="Navigate Back" style="opacity:0.25">
                    </a>
                </div>
                <div class="trainingContainer">
                    <div class="textBox">
                        <h2 class="trainingHeaders">
                            Welcome
                        </h2>
                        <p class="trainingText">
                            Welcome to the Wombat Training Solutions course on improving your IT and Digital Safety in the work environment. The following training has been specially tailored to give you and your colleagues a fighting chance in keeping yourself and your employer safe from digital threats, while also making you aware of your responsibilities when working with computers or smart devices.
                            <br><br>
                            The course will be broken down into three topics with a small test at the end to check how much you have retained from our course.

                        </p>
                    </div>
                </div>
                <div>
                    <a href="trainingPageOne.php" class="trainingNavigation">
                        <img class="forwards navArrow" src="images/navArrow.png" alt="Navigate forwards">
                    </a>
                </div>

            </div>

        </div>
    </body>
</html>