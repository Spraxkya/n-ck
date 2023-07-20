<!DOCTYPE html>
<html>
<head>
    <title>Näcks Hall Paintings</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="https://xn--nck-qla.com/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../tpl/styles/huset/paintings.css?19"/>
    <link rel="stylesheet" type="text/css" href="../tpl/styles/universal.css?19"/>
</head>
<body>
    <div id="loading-screenHuset">
        <img id="loadLogo" src="../tpl/images/nack_original.svg" alt="">
        <span id="randomTip">What are even art though?</span>
    </div>
<?php
    include '../inc/db.inc.php';

    $sql = "SELECT * FROM paintings WHERE samling = 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $id[] = $row["id"];
            $namn[] = $row["name"];
            $beskrivning[] = $row["besk"];
            $bild[] = $row["img"];
        }
    } else {
        echo "0 results";
    }

    $conn->close();
?>
    <main id="cContainer">
        <img id="bckI" class="bck" src="../tpl/images/huset/hall/paintings.jpg" alt="">
        <img id="tillbaka" onclick="window.history.back()" src="../tpl/images/huset/pil_rod.png" alt="">
        <div class="whiteB"></div>
        <div id="dim1">
            <h3 onclick="exit();">X</h3>
            <div class="gifs"></div>
            <img id="big-note" src="../tpl/images/huset/hall/notes-v1/note_empty.webp" loading="eager">
            <div id="beskText1">
                <h2 class="h2desc"> <?php echo $namn[0]; ?></h2>
                <p class="descP"> <?php echo $beskrivning[0]; ?></p>
            </div>
            <div id="beskText2">
                <h2 class="h2desc"> <?php echo $namn[1]; ?></h2>
                <p class="descP"> <?php echo $beskrivning[1]; ?></p>
            </div>
            <div id="beskText3">
                <h2 class="h2desc"> <?php echo $namn[2]; ?></h2>
                <p class="descP"> <?php echo $beskrivning[2]; ?></p>
            </div>
            <div id="beskText4">
                <h2 class="h2desc"> <?php echo $namn[3]; ?></h2>
                <p class="descP"> <?php echo $beskrivning[3]; ?></p>
            </div>
            <div id="beskText5">
                <h2 class="h2desc"> <?php echo $namn[4]; ?></h2>
                <p class="descP"> <?php echo $beskrivning[4]; ?></p>
            </div>
        </div>
        <div id="dim2">
            <h3 onclick="exit();">X</h3>
            <div class="gifs"></div>
            <div id="painting1">
                <div class="paintingInfo">
                    <h2 class="h2paint"> <?php echo $namn[0]; ?></h2>
                    <div class="landscape"><img class="imgZ" src="<?php echo $bild[0]; ?>" alt=""><div class="landscapeK"><script data-seller="10111" data-artnr="ubat-painting" src="https://client.kwikk.se/kwikk-client.js"></script></div></div>
                    <p class="paintP"> <?php echo $beskrivning[0]; ?></p>
                    <div class="portraitK"><script data-seller="10111" data-artnr="ubat-painting" src="https://client.kwikk.se/kwikk-client.js"></script></div>
                </div>
                <div class="paintingInfoL">
                    <div class="imgLa"><img class="imgZ" src="<?php echo $bild[0]; ?>" alt=""></div>
                    <div class="landscape"><h2 class="h2paint"> <?php echo $namn[0]; ?></h2><p class="paintP"><?php echo $beskrivning[0]; ?></p><div class="landscapeK"><script data-seller="10111" data-artnr="ubat-painting" src="https://client.kwikk.se/kwikk-client.js"></script></div></div>
                </div>
            </div>
            <div id="painting2">
                <div class="paintingInfo">
                    <h2 class="h2paint"> <?php echo $namn[1]; ?></h2>
                    <div class="landscape"><img class="imgZ" src="<?php echo $bild[1]; ?>" alt=""><div class="landscapeK"><script data-seller="10111" data-artnr="pluto-painting" src="https://client.kwikk.se/kwikk-client.js"></script></div></div>
                    <p class="paintP"> <?php echo $beskrivning[1]; ?></p>
                    <div class="portraitK"><script data-seller="10111" data-artnr="pluto-painting" src="https://client.kwikk.se/kwikk-client.js"></script></div>
                </div>
                <div class="paintingInfoL">
                    <div class="imgLa"><img class="imgZ" src="<?php echo $bild[1]; ?>" alt=""></div>
                    <div class="landscape"><h2 class="h2paint"> <?php echo $namn[1]; ?></h2><p class="paintP"><?php echo $beskrivning[1]; ?></p><div class="landscapeK"><script data-seller="10111" data-artnr="ubat-painting" src="https://client.kwikk.se/kwikk-client.js"></script></div></div>
                </div>
            </div>
            <div id="painting3">
                <div class="paintingInfo">
                    <h2 class="h2paint"> <?php echo $namn[2]; ?></h2>
                    <div class="landscape"><img class="imgZ" src="<?php echo $bild[2]; ?>" alt=""><div class="landscapeK"><script data-seller="10111" data-artnr="bucket-hat" src="https://client.kwikk.se/kwikk-client.js"></script></div></div>
                    <p class="paintP"> <?php echo $beskrivning[2]; ?></p>
                    <div class="portraitK"><script data-seller="10111" data-artnr="bucket-hat" src="https://client.kwikk.se/kwikk-client.js"></script></div>
                </div>
                <div class="paintingInfoL">
                    <div class="imgLa"><img class="imgZ" src="<?php echo $bild[2]; ?>" alt=""></div>
                    <div class="landscape"><h2 class="h2paint"> <?php echo $namn[2]; ?></h2><p class="paintP"><?php echo $beskrivning[2]; ?></p><div class="landscapeK"><script data-seller="10111" data-artnr="ubat-painting" src="https://client.kwikk.se/kwikk-client.js"></script></div></div>
                </div>
            </div>
            <div id="painting4">
                <div class="paintingInfo">
                    <h2 class="h2paint"> <?php echo $namn[3]; ?></h2>
                    <div class="landscape"><img class="imgZ" src="<?php echo $bild[3]; ?>" alt=""><div class="landscapeK"><script data-seller="10111" data-artnr="hunk-painting" src="https://client.kwikk.se/kwikk-client.js"></script></div></div>
                    <p class="paintP"> <?php echo $beskrivning[3]; ?></p>
                    <div class="portraitK"><script data-seller="10111" data-artnr="hunk-painting" src="https://client.kwikk.se/kwikk-client.js"></script></div>
                </div>
                <div class="paintingInfoL">
                    <div class="imgLa"><img class="imgZ" src="<?php echo $bild[3]; ?>" alt=""></div>
                    <div class="landscape"><h2 class="h2paint"> <?php echo $namn[3]; ?></h2><p class="paintP"><?php echo $beskrivning[3]; ?></p><div class="landscapeK"><script data-seller="10111" data-artnr="ubat-painting" src="https://client.kwikk.se/kwikk-client.js"></script></div></div>
                </div>
            </div>
            <div id="painting5">
                <div class="paintingInfo">
                    <h2 class="h2paint"> <?php echo $namn[4]; ?></h2>
                    <div class="landscape"><img class="imgZ" src="<?php echo $bild[4]; ?>" alt=""><div class="landscapeK"><script data-seller="10111" data-artnr="rikki-painting" src="https://client.kwikk.se/kwikk-client.js"></script></div></div>
                    <p class="paintP"> <?php echo $beskrivning[4]; ?></p>
                    <div class="portraitK"><script data-seller="10111" data-artnr="rikki-painting" src="https://client.kwikk.se/kwikk-client.js"></script></div>
                </div>
                <div class="paintingInfoL">
                    <div class="imgLa"><img class="imgZ" src="<?php echo $bild[4]; ?>" alt=""></div>
                    <div class="landscape"><h2 class="h2paint"> <?php echo $namn[4]; ?></h2><p class="paintP"><?php echo $beskrivning[4]; ?></p><div class="landscapeK"><script data-seller="10111" data-artnr="ubat-painting" src="https://client.kwikk.se/kwikk-client.js"></script></div></div>
                </div>
            </div>
        </div>
        <div id="vernisage-container">
            <h1 id="vernisage-title"></h1>
        </div>
        <div id="painting-container">
            <div class="both">
                <img onclick="bild = '1';window.sessionStorage.setItem('bild',bild);painting();" class="painting shadow" src="<?php echo $bild[0]; ?>" alt="">
                <img class="note-general shadow2" onclick="text = '1';window.sessionStorage.setItem('text',text);beskrivning();" src="../tpl/images/huset/hall/notes-v1/note_scribble.webp" loading="eager">
            </div>
            <div class="both">
                <img onclick="bild = '2';window.sessionStorage.setItem('bild',bild);painting();" class="painting shadow" src="<?php echo $bild[1]; ?>" alt="">
                <img class="note-general shadow2" onclick="text = '2';window.sessionStorage.setItem('text',text);beskrivning();" src="../tpl/images/huset/hall/notes-v1/note_scribble.webp" loading="eager">
            </div>
            <div class="both">
                <img onclick="bild = '3';window.sessionStorage.setItem('bild',bild);painting();" class="painting shadow" src="<?php echo $bild[2]; ?>" alt="">
                <img class="note-general shadow2" onclick="text = '3';window.sessionStorage.setItem('text',text);beskrivning();" src="../tpl/images/huset/hall/notes-v1/note_scribble.webp" loading="eager">
            </div>
            <div class="both">
                <img onclick="bild = '4';window.sessionStorage.setItem('bild',bild);painting();" class="painting shadow" src="<?php echo $bild[3]; ?>" alt="">
                <img class="note-general shadow2" onclick="text = '4';window.sessionStorage.setItem('text',text);beskrivning();" src="../tpl/images/huset/hall/notes-v1/note_scribble.webp" loading="eager">
            </div>
            <div class="both">
                <img onclick="bild = '5';window.sessionStorage.setItem('bild',bild);painting();" class="painting shadow" src="<?php echo $bild[4]; ?>" alt="">
                <img class="note-general shadow2" onclick="text = '5';window.sessionStorage.setItem('text',text);beskrivning();" src="../tpl/images/huset/hall/notes-v1/note_scribble.webp" loading="eager">
            </div>
        </div>
        <a id="arrow" href="../tpl/hall"></a>
    </main>
    <script type="text/javascript" src="../tpl/scripts/universal.js" async></script>
    <script type="text/javascript" src="../tpl/scripts/huset/paintings.js" async></script>
</body>
</html>