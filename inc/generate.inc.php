<?php
if (isset($_POST["submit"])) {
    
    require_once 'db.inc.php';

    $nameru = $_POST["smeknamn"];
    $qrId = $_POST["qrid"];
    
    $smeknamn = $nameru;
    $newLink = sha1($nameru);
    $res = preg_replace("/[^0-9]/", "", $newLink);
    
    $SQL = $conn->prepare("INSERT INTO `qr_marketing` (`qr_id`, `letter_name`, `bussiness_name`) VALUES (?, ?, ?)");

    $SQL->bind_param('sss',  $res, $smeknamn, $qrId);
    $SQL->execute();
    header("location: ../pa-natet/kampanj/tack.php?tack2");
} else {
    header("location: ../pa-natet/kampanj/tack.php?fail");
    exit();
}