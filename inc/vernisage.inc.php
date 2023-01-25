<?php

    require_once '../inc/db.inc.php';
    require_once '../tpl/paintings.tpl.php';

    function fillVernisage($conn, $painting, $id) {
        $sql = "SELECT * FROM vernisage WHERE id=?";
        $stmt = $conn->prepare($sql); 
        $stmt->bind_param("i", $painting);
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            $title = $row['title'];
            $description = $row['description'];
            $price = $row['price'];
            $print = $row['print'];
            $quantity = $row['quantity'];
        };
?>
    <div class="paintings-general shadow" id="painting<?php echo $id;?>">
        <img class="painting-general" src="./images/hall/paintings-v1/ubat_frame.jpg" loading="eager">
    </div>

<?php
    }
?>