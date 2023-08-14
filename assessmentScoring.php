<?php

session_start();

include ($_SERVER['DOCUMENT_ROOT']."\FYP\DataConnection.php");

$questions = array("q1", "q2", "q3", "q4", "q5", "q6", "q7", "q8", "q9", "q0");
$correctAnswers = 0;
$account = $_SESSION["userName"];

foreach ($questions as $question) {
    $userAnswer = htmlspecialchars($_POST[$question]);
    $answerLookupSearch = "SELECT * FROM answersheet WHERE questionNumber = '$question' AND questionAnswer = '$userAnswer'";
    $answerLookupCheck = mysqli_query($connect, $answerLookupSearch);

    if ($answerLookupCheck && mysqli_num_rows($answerLookupCheck) > 0) {
        $correctAnswers++;
    }
}

    $updateAccountScore = "UPDATE accountinfo SET totalScore = '$correctAnswers' WHERE accountName = '$account'";
    $updateTrainingStatus = "UPDATE accountinfo SET completedTraining = '1' WHERE accountName = '$account'";
    mysqli_query($connect,$updateAccountScore);
    mysqli_query($connect,$updateTrainingStatus);
    header("location:resultsPage.php?score=$correctAnswers");
    exit();
