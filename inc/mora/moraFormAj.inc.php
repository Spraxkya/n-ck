<?php
    if (isset($_POST["submit"])) {

        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $emailPre = $_POST['email'];
        $ident = $_POST['legitimation'];

        $email = strtolower($emailPre);

        include '../db.inc.php';

        $timed = new DateTime();
        $timedA = $timed->modify('+ 8 hours');
        $timedC = $timedA->format('r');
        
        $SQL = $conn->prepare("INSERT INTO `de_vet_du_member$ident` (`name`,`last_name`,`email`,`tidslag`) VALUES (?,?,?,?)");

        $SQL->bind_param('ssss', $name, $lastName, $email, $timedC);
        $SQL->execute();

        $SQL = $conn->prepare("SELECT id FROM de_vet_du_member$ident WHERE email = '$email' ");
        $SQL->execute();

        $SQL->bind_result($col1);

        while ($SQL->fetch()) {
            $id = $col1;
        }

        session_start();
        $_SESSION["nummer"] = $id;
        $_SESSION["epost"] = $email;
        $_SESSION["namn"] = $name;
        $_SESSION["efternamn"] = $lastName;

        $namn = $_SESSION["namn"];
        $efternamn = $_SESSION["efternamn"];
        $epost = $_SESSION["epost"];

        require_once '../../inc/emails.inc.php';
        ob_start();
        attans($conn, $namn, $efternamn, $epost);
        ob_end_clean();

        header("location: ../../pa-natet/kampanj/strand-kok&bar/1.php?nej$ident");
        exit();
    } else {
        header("location: ../../pa-natet/kampanj/strand-kok&bar/1.php?fail");
        exit();
    }