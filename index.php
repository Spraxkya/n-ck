<!DOCTYPE html>
<html>
<head>
    <title>Näck</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <meta name="viewport" content="initial-scale=1" />
    <link rel="icon" href="https://xn--nck-qla.com/favicon.ico">
    <link rel="stylesheet" type="text/css" href="./tpl/styles/huset/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
</head>
<body>
    <main id="cContainer">   
        <img id="bckUv" class="bck" src="./tpl/images/huset/uv-lights-on.jpg" alt=""> 
        <img id="bckOn" class="bck" src="./tpl/images/huset/lights-on.jpg" alt="">
        <img id="bckOff" class="bck" src="./tpl/images/huset/lights-off.jpg" alt="">
        <img id="bckUvG" class="bck" src="./tpl/videos/door-uv.gif" alt=""> 
        <img id="bckOnG" class="bck" src="./tpl/videos/door-light.gif" alt="">
        <img id="bckOffG" class="bck" src="./tpl/videos/door-dark.gif" alt="">
        <div id="door" onclick="enter();"></div>
        <div id="lightSwitch">
            <img style="z-index:0" class="lightSwitch-img" id="lightSwitch-onOn" src="./tpl/images/huset/on-on.png">
            <img style="z-index:0" class="lightSwitch-img" id="lightSwitch-offOn" src="./tpl/images/huset/off-on.png">
            <img style="z-index:1" class="lightSwitch-img" id="lightSwitch-onOff" src="./tpl/images/huset/on-off.png">
            <img style="z-index:0" class="lightSwitch-img" id="lightSwitch-offOff" src="./tpl/images/huset/off-off.png">
            <div onclick="leftButton();" id="lightbutton1"></div>
            <div onclick="rightButton();" id="lightbutton2"></div>
        </div>
        <div id="bulletin-board">
        </div>
    </main>
    <script type="text/javascript" src="./tpl/scripts/huset/index.js" async></script>
</body>
</html>