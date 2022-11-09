<?php

include_once 'db.inc.php';

$idOne = array("08:30-09:00","09:00-09:30","10:45-11:15","12:45-13:15","13:30-14:00","15:15-15:45");
$idTwo = array("08:45-09:15","09:45-10:15","10:45-11:15","12:45-13:15","14:45-15:15","15:30-16:00",);
$idThree = array("09:15-09:45","10:00-10:30","10:45-11:15","12:15-12:45","13:45-14:15","14:30-15:00",);
$idFour = array("08:30-09:00","09:30-10:00","10:30-11:00","11:30-12:00","13:30-14:00","14:15-14:45",);
$idFive = array("08:30-09:00","09:30-10:00","10:30-11:00","11:30-12:00","13:30-14:00","14:15-14:45",);
$idSix = array("09:15-09:45","10:00-10:30","10:45-11:15","12:15-12:45","13:45-14:15","14:30-15:00",);
$idSeven = array("08:30-09:00","09:30-10:00","10:30-11:00","11:30-12:00","13:30-14:00","14:15-14:45",);
$idEight = array("09:15-09:45","10:00-10:30","10:45-11:15","12:45-13:15","14:15-14:45","15:00-15:30",);
$idNine = array("09:30-10:00","10:15-10:45","11:00-11:30","12:30-13:00","14:00-14:30","14:45-15:15",);
$idTen = array("08:45-09:15","09:45-10:15","10:45-11:15","12:45-13:15","14:45-15:15","15:30-16:00",);
$idEleven = array("08:45-09:15","09:45-10:15","10:45-11:15","12:45-13:15","14:45-15:15","15:30-16:00",);
$idTwelve = array("08:30-09:00","09:15-09:45","10:00-10:30","11:30-12:00","13:00-13:30","13:45-14:15",);
$idThirteen = array("08:30-09:00","09:00-09:30","10:45-11:15","12:45-13:15","13:30-14:00","15:15-15:45",);
$idFourteen = array("09:30-10:00","10:15-10:45","11:00-11:30","12:30-13:00","14:00-14:30","14:45-15:15",);
$idFifteen = array("08:45-09:15","09:45-10:15","10:45-11:15","12:45-13:15","14:45-15:15","15:30-16:00",);
$idSixteen = array("09:15-09:45","10:00-10:30","10:45-11:15","12:15-12:45","13:45-14:15","14:30-15:00",);
$idSeventeen = array("08:30-09:00","09:30-10:00","10:30-11:00","11:30-12:00","13:30-14:00","14:15-14:45",);
$idEighteen = array("09:15-09:45","10:00-10:30","10:45-11:15","12:45-13:15","14:15-14:45","15:00-15:30",);
$idNineteen = array("08:30-09:00","09:15-09:45","10:00-10:30","13:00-13:30","13:45-14:15","15:30-16:00",);
$idTwenty = array("08:30-09:00","09:30-10:00","10:30-11:00","13:30-14:00","14:15-14:45","15:00-15:30",);

$date = new DateTime();
$date->modify('+ 1 week');
$fitta = $date->format('W');
$i = $fitta % 4;

if($i == 0) {
    $SQL = $conn->prepare("UPDATE bookings SET tid_1 =?, tid_2 =?, tid_3 =?, tid_4 =?, tid_5=?, tid_6=?  WHERE id=16");

    $SQL->bind_param('ssssss', $idSixteen[0], $idSixteen[1], $idSixteen[2], $idSixteen[3], $idSixteen[4], $idSixteen[5]);
    $SQL->execute();

    $SQL = $conn->prepare("UPDATE bookings SET tid_1 =?, tid_2 =?, tid_3 =?, tid_4 =?, tid_5=?, tid_6=?  WHERE id=17");

    $SQL->bind_param('ssssss', $idSeventeen[0], $idSeventeen[1], $idSeventeen[2], $idSeventeen[3], $idSeventeen[4], $idSeventeen[5]);
    $SQL->execute();

    $SQL = $conn->prepare("UPDATE bookings SET tid_1 =?, tid_2 =?, tid_3 =?, tid_4 =?, tid_5=?, tid_6=?  WHERE id=18");

    $SQL->bind_param('ssssss', $idEighteen[0], $idEighteen[1], $idEighteen[2], $idEighteen[3], $idEighteen[4], $idEighteen[5]);
    $SQL->execute();

    $SQL = $conn->prepare("UPDATE bookings SET tid_1 =?, tid_2 =?, tid_3 =?, tid_4 =?, tid_5=?, tid_6=?  WHERE id=19");

    $SQL->bind_param('ssssss', $idNineteen[0], $idNineteen[1], $idNineteen[2], $idNineteen[3], $idNineteen[4], $idNineteen[5]);
    $SQL->execute();

    $SQL = $conn->prepare("UPDATE bookings SET tid_1 =?, tid_2 =?, tid_3 =?, tid_4 =?, tid_5=?, tid_6=?  WHERE id=20");

    $SQL->bind_param('ssssss', $idTwenty[0], $idTwenty[1], $idTwenty[2], $idTwenty[3], $idTwenty[4], $idTwenty[5]);
    $SQL->execute();

}

if($i == 1) {
    $SQL = $conn->prepare("UPDATE bookings SET tid_1 =?, tid_2 =?, tid_3 =?, tid_4 =?, tid_5=?, tid_6=?  WHERE id=1");

    $SQL->bind_param('ssssss', $idOne[0], $idOne[1], $idOne[2], $idOne[3], $idOne[4], $idOne[5]);
    $SQL->execute();

    $SQL = $conn->prepare("UPDATE bookings SET tid_1 =?, tid_2 =?, tid_3 =?, tid_4 =?, tid_5=?, tid_6=?  WHERE id=2");

    $SQL->bind_param('ssssss', $idTwo[0], $idTwo[1], $idTwo[2], $idTwo[3], $idTwo[4], $idTwo[5]);
    $SQL->execute();

    $SQL = $conn->prepare("UPDATE bookings SET tid_1 =?, tid_2 =?, tid_3 =?, tid_4 =?, tid_5=?, tid_6=?  WHERE id=3");

    $SQL->bind_param('ssssss', $idThree[0], $idThree[1], $idThree[2], $idThree[3], $idThree[4], $idThree[5]);
    $SQL->execute();

    $SQL = $conn->prepare("UPDATE bookings SET tid_1 =?, tid_2 =?, tid_3 =?, tid_4 =?, tid_5=?, tid_6=?  WHERE id=4");

    $SQL->bind_param('ssssss', $idFour[0], $idFour[1], $idFour[2], $idFour[3], $idFour[4], $idFour[5]);
    $SQL->execute();

    $SQL = $conn->prepare("UPDATE bookings SET tid_1 =?, tid_2 =?, tid_3 =?, tid_4 =?, tid_5=?, tid_6=?  WHERE id=5");

    $SQL->bind_param('ssssss', $idFive[0], $idFive[1], $idFive[2], $idFive[3], $idFive[4], $idFive[5]);
    $SQL->execute();

}

if($i == 2) {
    $SQL = $conn->prepare("UPDATE bookings SET tid_1 =?, tid_2 =?, tid_3 =?, tid_4 =?, tid_5=?, tid_6=?  WHERE id=6");

    $SQL->bind_param('ssssss', $idSix[0], $idSix[1], $idSix[2], $idSix[3], $idSix[4], $idSix[5]);
    $SQL->execute();

    $SQL = $conn->prepare("UPDATE bookings SET tid_1 =?, tid_2 =?, tid_3 =?, tid_4 =?, tid_5=?, tid_6=?  WHERE id=7");

    $SQL->bind_param('ssssss', $idSeven[0], $idSeven[1], $idSeven[2], $idSeven[3], $idSeven[4], $idSeven[5]);
    $SQL->execute();

    $SQL = $conn->prepare("UPDATE bookings SET tid_1 =?, tid_2 =?, tid_3 =?, tid_4 =?, tid_5=?, tid_6=?  WHERE id=8");

    $SQL->bind_param('ssssss', $idEight[0], $idEight[1], $idEight[2], $idEight[3], $idEight[4], $idEight[5]);
    $SQL->execute();

    $SQL = $conn->prepare("UPDATE bookings SET tid_1 =?, tid_2 =?, tid_3 =?, tid_4 =?, tid_5=?, tid_6=?  WHERE id=9");

    $SQL->bind_param('ssssss', $idNine[0], $idNine[1], $idNine[2], $idNine[3], $idNine[4], $idNine[5]);
    $SQL->execute();

    $SQL = $conn->prepare("UPDATE bookings SET tid_1 =?, tid_2 =?, tid_3 =?, tid_4 =?, tid_5=?, tid_6=?  WHERE id=10");

    $SQL->bind_param('ssssss', $idTen[0], $idTen[1], $idTen[2], $idTen[3], $idTen[4], $idTen[5]);
    $SQL->execute();

}

if($i == 3) {
    $SQL = $conn->prepare("UPDATE bookings SET tid_1 =?, tid_2 =?, tid_3 =?, tid_4 =?, tid_5=?, tid_6=?  WHERE id=11");

    $SQL->bind_param('ssssss', $idEleven[0], $idEleven[1], $idEleven[2], $idEleven[3], $idEleven[4], $idEleven[5]);
    $SQL->execute();

    $SQL = $conn->prepare("UPDATE bookings SET tid_1 =?, tid_2 =?, tid_3 =?, tid_4 =?, tid_5=?, tid_6=?  WHERE id=12");

    $SQL->bind_param('ssssss', $idTwelve[0], $idTwelve[1], $idTwelve[2], $idTwelve[3], $idTwelve[4], $idTwelve[5]);
    $SQL->execute();

    $SQL = $conn->prepare("UPDATE bookings SET tid_1 =?, tid_2 =?, tid_3 =?, tid_4 =?, tid_5=?, tid_6=?  WHERE id=13");

    $SQL->bind_param('ssssss', $idThirteen[0], $idThirteen[1], $idThirteen[2], $idThirteen[3], $idThirteen[4], $idThirteen[5]);
    $SQL->execute();

    $SQL = $conn->prepare("UPDATE bookings SET tid_1 =?, tid_2 =?, tid_3 =?, tid_4 =?, tid_5=?, tid_6=?  WHERE id=14");

    $SQL->bind_param('ssssss', $idFourteen[0], $idFourteen[1], $idFourteen[2], $idFourteen[3], $idFourteen[4], $idFourteen[5]);
    $SQL->execute();

    $SQL = $conn->prepare("UPDATE bookings SET tid_1 =?, tid_2 =?, tid_3 =?, tid_4 =?, tid_5=?, tid_6=?  WHERE id=15");

    $SQL->bind_param('ssssss', $idFifteen[0], $idFifteen[1], $idFifteen[2], $idFifteen[3], $idFifteen[4], $idFifteen[5]);
    $SQL->execute();

}
?>