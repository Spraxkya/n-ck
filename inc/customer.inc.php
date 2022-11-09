<?php
session_start();

    if (isset($_POST["submit"])) {

        require_once 'db.inc.php';

        $id = $_SESSION["userid"];
        $name = $_POST["cName"];
        $adress1 = $_POST["cAdress1"];
        $city = $_POST["cCity"];
        $country = $_POST["cCountry"];
        $postal = $_POST["cPostal"];

        $SQL = $conn->prepare("UPDATE members SET customer_name =?, customer_adress1=?, customer_city=?, customer_country=?, customer_postal=? WHERE user_id=?");

        $SQL->bind_param('ssssss', $name, $adress1, $city, $country, $postal, $id);
        $SQL->execute();
        header("location: ../tpl/konto.tpl.php?=cDetails");
        exit();
    } else {
        header("location: ../tpl/konto.tpl.php?=NAJ");
    exit();
    }
    ?>