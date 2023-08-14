<?php

    session_start();
        include ($_SERVER['DOCUMENT_ROOT']."\FYP\DataConnection.php");
        $userNameRegIn = htmlspecialchars($_POST["regUserName"]);
        $passKeyRegIn = htmlspecialchars($_POST["regPassKey"]);
        $passKeyRegConfirm = htmlspecialchars($_POST["regPassConfirm"]);
        $employerRegIn = htmlspecialchars($_POST["regEmployCheck"]);
        $newUserEntry = "INSERT INTO accountinfo (accountName, accountPassword, company, totalScore, completedTraining, admin) VALUES ('$userNameRegIn', '$passKeyRegIn', '$employerRegIn', '', '', '')";
        $employerRegCheck = "SELECT * FROM clientdata WHERE compName = '$employerRegIn'";
        $newAccountLoginCheck = "SELECT * FROM accountinfo WHERE accountName = '$userNameRegIn' AND accountPassword = '$passKeyRegIn'";

        $employerCheckCount = mysqli_query($connect, $employerRegCheck);

        if(($_POST["regUserName"])!= null & ($_POST["regPassKey"]) != null & ($_POST["regEmployCheck"])!= null) {
            if($passKeyRegIn == $passKeyRegConfirm) {
                if (mysqli_num_rows($employerCheckCount) == 1) {
                    $addAccountConnect = mysqli_query($connect, $newUserEntry);
                    echo("Account Created");
                    $newAccountLogin = mysqli_query($connect, $newAccountLoginCheck);
                    echo("Number of rows in newAccountLogin: " . mysqli_num_rows($newAccountLogin));
                    if (mysqli_num_rows($newAccountLogin) == 1) {
                        $_SESSION["userName"] = $userNameRegIn;
                        header("Location: HomePage.php");
                        exit();
                    }
                }
                else {
                    header("Location: Register.php");
                    exit();
                }
            }
            else{
                header("location: register.php");
                exit();
            }
        }
        else{
            header("location: register.php");
            exit();
        }