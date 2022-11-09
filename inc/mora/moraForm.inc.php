<?php
    if (isset($_POST["submit"])) {

        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $emailPre = $_POST['email'];
        $ident = $_POST['legitimation'];
        
        if($_POST['nyhet'] == null) {
            $news = 'off';
        }else {
            $news = $_POST['nyhet'];
        }

        $email = strtolower($emailPre);

        include '../db.inc.php';

        $timed = new DateTime();
        $timedA = $timed->modify('+ 8 hours');
        $timedC = $timedA->format('r');

        $SQL = $conn->prepare("INSERT INTO `de_vet_du_member$ident` (`name`,`last_name`,`email`,`news`,`tidslag`) VALUES (?,?,?,?,?)");

        $SQL->bind_param('sssss', $name, $lastName, $email, $news, $timedC);
        $SQL->execute();

        $SQL = $conn->prepare("SELECT id,`news` FROM de_vet_du_member$ident WHERE email = '$email' ");
        $SQL->execute();

        $SQL->bind_result($col1,$col2);

        while ($SQL->fetch()) {
            $id = $col1;
            $news = $col2;
        }

        $SQL = $conn->prepare("SELECT `koder`,`start` FROM de_vet_du_koder WHERE id = $ident");
        $SQL->execute();

        $SQL->bind_result($col1,$col2);

        while ($SQL->fetch()) {
            $kod = $col1;
            $start = $col2;
        }

        $start = new DateTime($start);

        $timed = new DateTime($timedC);

		$diff = $timed->diff($start);
		
        $day = $diff->format("%d"). ' dagar och';
		$tid = $diff->format("%h"). 'h';
        $tidi = 'och '.$diff->format("%i"). ' minuter';

        if($day == '0 dagar och') {
            $day = '';
        } else {
            $tidi = '';
        }

        if($tid == '0h') {
            $tid = '';
        }

        session_start();
        $_SESSION["nummer"] = $id;
        $_SESSION["epost"] = $email;
        $_SESSION["namn"] = $name;
        $_SESSION["efternamn"] = $lastName;
        $_SESSION["dag"] = $day;
        $_SESSION["timme"] = $tid;
        $_SESSION["minut"] = $tidi;
        $_SESSION["kod"] = $kod;

        $sql = "SELECT id FROM de_vet_du_member$ident";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {

                $ids[] = $row["id"];
            }

        }

        if ($_SESSION["nummer"] == $ids[0]) {

            $namn = $_SESSION["namn"];
            $efternamn = $_SESSION["efternamn"];
            $epost = $_SESSION["epost"];
            $dag = $_SESSION["dag"];
            $timme = $_SESSION["timme"];
            $minut = $_SESSION["minut"];
            $kodi = $_SESSION["kod"];

            require_once '../../inc/emails.inc.php';
            ob_start();
            grattis($conn, $namn, $efternamn, $epost, $timme, $minut, $dag, $kodi);
            ob_end_clean();
        } else if($_SESSION["nummer"] != $ids[0] && $news = 'on') {

            $namn = $_SESSION["namn"];
            $efternamn = $_SESSION["efternamn"];
            $epost = $_SESSION["epost"];

            require_once '../../inc/emails.inc.php';
            ob_start();
            attans2($conn, $namn, $efternamn, $epost);
            ob_end_clean();
        }

        header("location: ../../pa-natet/kampanj/strand-kok&bar/1.php?loggedIn$ident");
        exit();
    } else {
        header("location: ../../pa-natet/kampanj/strand-kok&bar/1.php?fail");
        exit();
    }