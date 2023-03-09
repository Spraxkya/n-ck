<!DOCTYPE html>
<html>
<head>
    <title>Näck</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <meta name="viewport" content="initial-scale=1" />
    <link rel="icon" href="https://xn--nck-qla.com/favicon.ico">
    <link rel="stylesheet" type="text/css" href="./tpl/styles/universal.css"/>
    <link rel="stylesheet" type="text/css" href="./tpl/styles/huset/index.css" />
</head>
<body>
    <div id="loading-screenHuset">
        <img id="loadLogo" src="./tpl/images/nack_original.svg" alt="">
        <span id="randomTip">If you're on mobile, try to rotate too see more!</span>
    </div>
    <main id="cContainer">   
        <img id="bckUv" class="bck" src="./tpl/images/huset/uv-lights-on.webp" alt="" loading="lazy"> 
        <img id="bckOn" class="bck" src="./tpl/images/huset/lights-on.webp" alt="">
        <img id="bckOff" class="bck" src="./tpl/images/huset/lights-off.webp" alt="" loading="lazy">
        <video id="bckOnG" class="bck" playsinline="" muted="">
            <source src="./tpl/videos/door-light.mp4" type="video/mp4">
        </video>
        <video id="bckOffG" class="bck" playsinline="" muted="">
            <source src="./tpl/videos/door-dark.mp4" type="video/mp4">
        </video>
        <video id="bckUvG" class="bck" playsinline="" muted="">
            <source src="./tpl/videos/door-uv.mp4" type="video/mp4">
        </video>
        <div id="door" onclick="enter();" class="flicker"></div>
        <div style="z-index:2" id="lightSwitch">
            <img style="z-index:0" class="lightSwitch-img" id="lightSwitch-onOn" src="./tpl/images/huset/on-on.png" loading="lazy">
            <img style="z-index:0" class="lightSwitch-img" id="lightSwitch-offOn" src="./tpl/images/huset/off-on.png" loading="lazy">
            <img style="z-index:2" class="lightSwitch-img" id="lightSwitch-onOff" src="./tpl/images/huset/on-off.png">
            <img style="z-index:0" class="lightSwitch-img" id="lightSwitch-offOff" src="./tpl/images/huset/off-off.png" loading="lazy">
            <div onclick="leftButton();" id="lightbutton1"></div>
            <div onclick="rightButton();" id="lightbutton2"></div>
        </div>
        <div style="z-index:2" id="bulletin-board">
            <a id="poster11" class="posterLight puster" style="z-index:3" target="_blank" href="https://kanvifoerlaatamargaux.se/"><img class="poster" src="./tpl/images/huset/posters/kanviforlata_margaux_light.webp" alt=""></a>
            <a id="poster12" class="posterDark puster" style="z-index:0" target="_blank" href="https://kanvifoerlaatamargaux.se/"><img class="poster" src="./tpl/images/huset/posters/kanviforlata_margaux_dark.webp" alt="" loading="lazy"></a>
            <a id="poster13" class="posterUV puster" style="z-index:0" target="_blank" href="https://kanvifoerlaatamargaux.se/"><img class="poster" src="./tpl/images/huset/posters/kanviforlata_margaux_UV.webp" alt="" loading="lazy"></a>

            <a id="poster21" class="posterLight puster" style="z-index:3" target="_blank" href="https://www.näck.com/tpl/images/huset/posters/mangan_ligt.webp"><img class="poster" src="./tpl/images/huset/posters/mangan_ligt.webp" alt=""></a>
            <a id="poster22" class="posterDark puster" style="z-index:0" target="_blank" href="https://www.näck.com/tpl/images/huset/posters/mangan_dark.webp"><img class="poster" src="./tpl/images/huset/posters/mangan_dark.webp" alt="" loading="lazy"></a>
            <a id="poster23" class="posterUV puster" style="z-index:0" target="_blank" href="https://www.näck.com/tpl/images/huset/posters/mangan_UV.webp"><img class="poster" src="./tpl/images/huset/posters/mangan_UV.webp" alt="" loading="lazy"></a>

            <a id="poster31" class="posterLight puster" style="z-index:3" target="_blank" href="https://www.instagram.com/nackcollective/"><img class="poster" src="./tpl/images/huset/posters/spacebebe_light.webp" alt=""></a>
            <a id="poster32" class="posterDark puster" style="z-index:0" target="_blank" href="https://www.instagram.com/nackcollective/"><img class="poster" src="./tpl/images/huset/posters/spacebebe_dark.webp" alt="" loading="lazy"></a>
            <a id="poster33" class="posterUV puster" style="z-index:0" target="_blank" href="https://www.instagram.com/nackcollective/"><img class="poster" src="./tpl/images/huset/posters/spacebebe_UV.webp" alt="" loading="lazy"></a>
        </div>
    </main>
    <script type="text/javascript" src="./tpl/scripts/universal.js"></script>
    <script type="text/javascript" src="./tpl/scripts/huset/index.js" async></script>
</body>
</html>