<?php
    if (isset($_POST["submit"])) {

        $email = $_POST["email"];
        $username = $_POST["username"];
        $pwd = $_POST["pwd"];
        $pwdRepeat = $_POST["pwdRepeat"];

        require_once 'db.inc.php';
        require_once 'functions.inc.php';
        require_once 'emails.inc.php';
        
        if (userEmail($conn, $email) !== false && userName($conn, $username) !== false) {
            header("location: ../index.php?Username&Email=Exist");
            exit();
        } else if (userEmail($conn, $email) !== false) {
            header("location: ../index.php?Email=Exist");
            exit();
        } else if (userName($conn, $username)  !== false) {
            header("location: ../index.php?Username=Exist");
            exit();
        } else {
            registrationMail($conn, $email);
            createUser($conn, $email, $username, $pwd);
        }
    } else {
        header("location: ../index.php");
        exit();
    }
    ?>