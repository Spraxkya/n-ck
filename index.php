<!DOCTYPE html>
<html>
<head>
    <title>Näck</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="https://xn--nck-qla.com/favicon.ico">
    <link rel="stylesheet" type="text/css" href="./tpl/styles/home.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
</head>
<body onload="scalable();">
<div onclick="cancel();" id="exit"></div>
    <header>
    </header>
    <main>
        <div id="big-container">    
            <video id="videoUv"><source src="./tpl/videos/dooruvi.mp4" type="video/mp4"></video>     
            <img id="bckOn" class="bck" src="./tpl/images/lights-on.jpg" alt="">
            <img id="bckOff" class="bck" src="./tpl/images/lights-off.jpg" alt="">
            <div id="lightSwitch">
                <img style="z-index:0" class="lightSwitch-img" id="lightSwitch-onOn" src="./tpl/images/on-on.png">
                <img style="z-index:0" class="lightSwitch-img" id="lightSwitch-offOn" src="./tpl/images/off-on.png">
                <img style="z-index:1" class="lightSwitch-img" id="lightSwitch-onOff" src="./tpl/images/on-off.png">
                <img style="z-index:0" class="lightSwitch-img" id="lightSwitch-offOff" src="./tpl/images/off-off.png">
            </div>
            <div id="lightbutton1">
            </div>
            <div id="lightbutton2">
            </div>
            <div id="bulletin-board">
                <div class="form-container" id="onForm">
                </div>
                <div style="display:none;" class="form-container" id="uvForm">
                    <input id="code" class="mood-color" type="text">
                </div>
            </div>
            <div style="display:none;" id="skylt">
                <img style="z-index:1" class="skyltStyle" id="skylt_tant" src="./tpl/images/skylt_tant.png">
                <img style="z-index:0" class="skyltStyle" id="skylt_slackt" src="./tpl/images/skylt_slackt.png">
                <img style="z-index:0" class="skyltStyle" id="skylt_uv" src="./tpl/images/skylt_uv.png">
            </div>
        </div>
    </main>
    <footer>
    </footer>
    <script type="text/javascript" src="./tpl/scripts/home.js" async></script>
</body>
</html>