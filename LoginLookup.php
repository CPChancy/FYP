<?php
    session_start();
        $userNameIn = htmlspecialchars($_POST["userName"]);
        $passWordIn = htmlspecialchars($_POST["passWord"]);
        $_SESSION["userName"] = "";
        include ($_SERVER["DOCUMENT_ROOT"]."\FYP\DataConnection.php");

            if(isset($_POST["username"])){
                $userNameIn = $_POST["userName"];
            }
            if(isset($_POST["passcode"])){
                $passWordIn = $_POST["passWord"];
            }

/*            echo($userNameIn);
            echo($passWordIn);
*/

            $accountValidate = "SELECT * FROM accountinfo WHERE accountName = '$userNameIn' AND accountPassword ='$passWordIn'";
            $adminCheck = "SELECT admin FROM accountinfo WHERE accountName = '$userNameIn' AND admin = '1'";
            $loginVerification = mysqli_query($connect, $accountValidate);
            $adminVerify = mysqli_query($connect, $adminCheck);

            if(mysqli_num_rows($loginVerification) == 1){
                $_SESSION["userName"] = $userNameIn;
                if(mysqli_num_rows($adminVerify) == 1){
                    $_SESSION["admin"] = true;
                    header("Location: HomePage.php");
                    exit();
                }
                else{
                    $_SESSION["admin"] = false;
                    header("Location: HomePage.php");
                    exit();
                }
            }
            else{
                header("Location: HomePage.php");
                session_destroy();
                exit();
            }