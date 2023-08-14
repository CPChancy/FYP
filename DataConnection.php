<?php


$host = "localhost";
$username = "n0861166";
$pass = "password";
$db = "webteachingproof";
$connect = mysqli_connect($host, $username, $pass, $db);

if (mysqli_connect_errno()) {
    mysqli_connect_error();
}
else {
}