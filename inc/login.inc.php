<?php

if(isset($_POST["submit"])) {

    $username = $_POST["uid"];
    $email = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    if(!filter_var($email, FILTER_VALIDATE_EMAIL) === true) {
        loginUserName($conn, $username, $pwd);
    } else {
        loginUserEmail($conn, $username, $pwd);
    }
} else {
    header("location: ../index.php");
    exit();
}
