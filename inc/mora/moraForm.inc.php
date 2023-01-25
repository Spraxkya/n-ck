<?php
session_start();

if (isset($_POST["submit"])) {
    include '../db.inc.php';

    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $email = strtolower($_POST['email']);
    $identy = $_POST['legitimation'];
    $ident = (int) $identy;
    $news = isset($_POST['nyhet']) ? $_POST['nyhet'] : 'off';
    $timed = new DateTime();

    $stmt = $conn->prepare("INSERT INTO `el_papi_member$ident` (`name`,`last_name`,`email`,`news`,`tidslag`) VALUES (?,?,?,?,?)");
    $stmt->bind_param('sssss', $name, $lastName, $email, $news, $timed->format('r'));
    $stmt->execute();

    $stmt = $conn->prepare("SELECT id, news, tidslag FROM el_papi_member$ident WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $id = $row['id'];
    $news = $row['news'];
    $timedC = $row['tidslag'];

    $stmt = $conn->prepare("SELECT koder, `start` FROM el_papi_koder WHERE id = ?");
    $stmt->bind_param("i", $ident);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $kod = $row['koder'];
    $start = $row['start'];
    $start = new DateTime($start);
    $timed = new DateTime($timedC);
    $diff = $timed->diff($start);
    $day = $diff->format("%d");
    $tid = $diff->format("%h");
    $tidi = $diff->format("%i");
    
    if($day > 0){
        $day = $day > 1 ? $day.' dagar &amp;' : $day.' dag &amp; ';
    } else {
        $day = '';
    }
    
    if($tid > 0){
        $tid = $tid.'h ';
    } else {
        $tid = '';
    }

    if($tidi > 0 && $tid > 0){
        $tidi = '&amp; '.$tidi.'min';
    } else if($tidi > 0 && $tid == '') {
        $tidi = $tidi.'min';
    } else {
        $tidi = '';
    }

    $_SESSION["nummer"] = $id;
    $_SESSION["epost"] = $email;
    $_SESSION["namn"] = $name;
    $_SESSION["efternamn"] = $lastName;
    $_SESSION["dag"] = $day;
    $_SESSION["timme"] = $tid;
    $_SESSION["minut"] = $tidi;
    $_SESSION["kod"] = $kod;

    $sql = "SELECT id FROM el_papi_member$ident";
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
        memo($conn, $namn, $efternamn, $epost);
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