<?php
    if (isset($_POST["submit"])) {

        $emailR = $_POST["email"];
        $nummer = $_POST["nummer"];
        $tid = $_POST["tid"];
        $dag = $_POST["dag"];
        $namn = $_POST["namn"];
        $biz = $_POST["biz"];
        $tid_x = $_POST["tid_x"];
        $id = $_POST["id"];

        $email = strtolower($emailR);

        $n=25;
        function getRandomString($n) {
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randomString = '';
        
            for ($i = 0; $i < $n; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $randomString .= $characters[$index];
            }
        
            return $randomString;
        }

        $o = getRandomString($n);

        $hej = '<script id='.$o.'> var x = document.querySelector("#'.$o.'"); x.parentNode.style.display="none";</script>';

        require_once 'db.inc.php';
        require_once 'functions.inc.php';
        require_once 'emails.inc.php';

        $SQL = $conn->prepare("UPDATE `bookings` SET $tid_x = ? WHERE `bookings`.`id` = $id;");

        $SQL->bind_param('s', $hej);
        $SQL->execute();

        ob_start();
        timeBooking($conn, $email, $nummer, $tid, $dag, $namn, $biz);
        ob_end_clean();

        header("location: ../på-nätet.php");
        exit();
    } else {
        header("location: ../pa-natet/kampanj/1.php?fail");
        exit();
    }
?>