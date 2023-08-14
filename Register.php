<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>CyberSecurity Proof of Concept HomePage</title>
        <link rel="stylesheet" href="GeneralFormatting.css">
        <script scriptlanguage="text/javascript" src="regTextValidation.js"></script>
    </head>

    <?php
        include "DataConnection.php";
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
<!--                            <li class="navLink">
                                <a href="" class="link loggedIn">
                                    <img src="images/manageAccount.png" alt="Manage Account" style="width:80px;height:auto;padding:2px;">
                                </a>
                            </li>-->
                            <li class="navLink loggedIn">
                                <a href="sessionTerminate.php" class="link loggedIn">
                                    <img src="" alt="Logout" style="width:80px;height:auto;padding:2px;">
                                </a>
                            </li>
                            <li class="navLink">
                                <a class="link loggedOut" onclick="openLoginForm()">
                                        <img src="images/login.png" alt="Login/Register" style="width:80px;height:auto;padding:2px;">
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
                    <form name="registrationForm" action="registrationCheckAndSet.php" method="post">
                        <h4 class="regText">Please enter a username: </h4>
                            <input class="regInputs" type="text" name="regUserName" placeholder="" required>
                        <h4 class="regText">Please enter a desired password: </h4>
                            <input class="regInputs" type="password" name="regPassKey" placeholder="" required>
                        <h4 class="regText">Please confirm your password: </h4>
                            <input class="regInputs" type="password" name="regPassConfirm" placeholder="" required>
                        <h4 class="regText">Please enter the name of your employer: </h4>
                            <input class="regInputs" type="text" name="regEmployCheck" placeholder="" required>
                        <br><br>
                        <input class="inputButton" type="submit" value="Create Account">
                        <h3 class="errorMsg" id="error"> </h3>

                    </form>
                </div>
            </div>

        </div>
    </body>
</html>