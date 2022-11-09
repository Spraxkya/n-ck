<!DOCTYPE html>
<html>
<head>
    <title>Näck</title>
    <meta charset="UTF-8">
    <link rel="icon" href="https://xn--nck-qla.com/favicon.ico">
    <link rel="stylesheet" type="text/css" href="./tpl//styles/under-construction.css"/>
    <link rel="stylesheet" type="text/css" href="./tpl/styles/universal.css" />
    <script type="text/javascript" id="" src="./tpl/scripts/under-construction.js" async></script>
    <script type="text/javascript" id="" src="./tpl/scripts/universal.js" async></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
</head>

<body onload="scalable(); loadScroll(); paintingClick(); paintingClick2(); paintingClick3(); noteClick(); noteClick2(); noteClick3();  cancel();">
        <div id="loading-screen">
            <img class="loadgif" id="loadgif" src="./tpl/images/pa-natet/Smultron.svg"/>
            <img id="logo" src="./tpl/images/pa-natet/logo.png"/>
        </div>
    <header>
        <img id="paint-img" class="piant-img" src="./images/ubat-painting.jpg">
        <img id="paint-img2" class="piant-img" src="./images/pluto-painting.jpg">
        <img id="paint-img3" class="piant-img" src="./images/buckethat-painting.jpg">
        <img id="note-img" src="./images/note.png">
        <div id="notes-popup">
            <div id="text">
                <h3 class="text-color" id="year"></h3>
                <h2 class="text-color" id="title"> </h2>
                <p class="text-color" id="caption"> </p>
            </div>
        </div>
    </header>
    <div onclick="cancel();" id="exit"></div>
    <main>
        <section id="big-container">
            
            <section id="onethird-container">
                <a onclick="paintingClick();" href="#" class="painting1" id="painting">
                </a>
                <a onclick="noteClick();" href="#" class="note1" id="notes">
                </a>
            </section>
            <section id="onethird-container2">
                <a href="https://www.näck.com/på-nätet" class="painting2" id="painting2">
                </a>
                <a onclick="noteClick2();" href="#" class="note2" id="notes2">
                </a>
                <div class="sign">
                    <span>This site is</span>
                    <h1> UNDER CONSTRUCTION</h1>
                </div>
            </section>
            <section id="onethird-container3">
                <a onclick="paintingClick3();" href="#" class="painting3" id="painting">
                </a>
                <a onclick="noteClick3();" href="#" class="note3" id="notes">
                </a>
                <div id="ball">
                </div>
            </section>
        </section>
    </main>

    <footer>

    </footer>
</body>

</html>