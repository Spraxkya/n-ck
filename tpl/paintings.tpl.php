<?php
    session_start();
    if (isset( $_SESSION["userid"] ) ) { ?>
        <!DOCTYPE html>
<html>
<head>
    <title>Näcks Hall Paintings</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <link rel="icon" href="https://xn--nck-qla.com/favicon.ico">
    <link rel="stylesheet" type="text/css" href="./styles/paintings.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
</head>
<body>
    <header>
    </header>
    <main>
        <div id="big-container">
            <a id="arrow" href="../hall.php"></a>
            <div id="vernisage-container">
                <h1 id="vernisage-title"></h1>
            </div>
            <div id="painting-container">
                <div id="filter">
                </div>
                <div class="paintings-general shadow" id="painting1">
                    <img class="painting-general" src="./images/hall/paintings-v1/ubat_frame.jpg" loading="eager">
                </div>
                <div class="paintings-general shadow" id="painting2">
                <img class="painting-general" src="./images/hall/paintings-v1/pluto_frame.jpg" loading="eager">
                </div>
                <div class="paintings-general shadow" id="painting3">
                <img class="painting-general" src="./images/hall/paintings-v1/bucket_hat.jpg" loading="eager">
                </div>
                <div class="paintings-general shadow" id="painting4">
                <img class="painting-general" src="./images/hall/paintings-v1/sexi_frame.jpg" loading="eager">
                </div>
                <div class="paintings-general shadow" id="painting5">
                <img class="painting-general" src="./images/hall/paintings-v1/rikki_frame.jpg" loading="eager">
                </div>
            </div>
            <div id="notes-container">
                <div class="notes-general shadow2" id="note1">
                    <img class="note-general" src="./images/hall/notes-v1/note_empty.jpg" loading="eager">
                </div>
                <div class="notes-general shadow2" id="note2">
                <img class="note-general" src="./images/hall/notes-v1/note_empty.jpg" loading="eager">
                </div>
                <div class="notes-general shadow2" id="note3">
                <img class="note-general" src="./images/hall/notes-v1/note_empty.jpg" loading="eager">
                </div>
                <div class="notes-general shadow2" id="note4">
                <img class="note-general" src="./images/hall/notes-v1/note_empty.jpg" loading="eager">
                </div>
                <div class="notes-general shadow2" id="note5">
                <img class="note-general" src="./images/hall/notes-v1/note_empty.jpg" loading="eager">
                </div>
            </div>
        </div>
    </main>
    <footer>
    </footer>
    <script type="text/javascript" src="./scripts/paintings.js"></script>
    <script type="text/javascript" src="./scripts/simonsMattematik.js"></script>
</body>
</html>
<?php

    } else {

        include_once 'loser.php';

    };

?>