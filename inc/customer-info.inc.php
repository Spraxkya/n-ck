<?php

require_once 'db.inc.php';

    $id = $_SESSION["userid"];

    $sql = "SELECT * FROM members WHERE user_id=?";
    $stmt = $conn->prepare($sql); 
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        echo $row['customer_name'];
        echo $row['customer_adress1'];
        echo $row['customer_city'];
        echo $row['customer_country'];
        echo $row['customer_postal'];
    }

?>