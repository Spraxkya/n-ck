<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Näck</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <link rel="icon" href="https://xn--nck-qla.com/favicon.ico">
    <link rel="stylesheet" type="text/css" href="./tpl/styles/home.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <script type="text/javascript" src="./tpl/scripts/registervalidation.js" async></script>
</head>
<body onload="scalable();">
<div onclick="cancel();" id="exit"></div>
    <header>
    </header>
    <main>
        <div id="big-container">
            <div id="lightSwitch">
                <img style="display: none;" class="lightSwitch-img" id="lightSwitch-onOn" src="./tpl/images/on-on.png">
                <img style="display: none;" class="lightSwitch-img" id="lightSwitch-offOn" src="./tpl/images/off-on.png">
                <img class="lightSwitch-img" id="lightSwitch-onOff" src="./tpl/images/on-off.png">
                <img style="display: none;" class="lightSwitch-img" id="lightSwitch-offOff" src="./tpl/images/off-off.png">
            </div>
            <div id="lightbutton1">
            </div>
            <div id="lightbutton2">
            </div>
            <div onclick="bye();" id="bulletin-board">
                <div id="form-container">
                    <?php
                        if (isset( $_SESSION["userid"] ) ) {
                            ?>
                            <script>
                                var x = document.getElementById('big-container');
                                switch(sessionStorage.getItem('mode')) {
                                    case 'onOff':
                                        setTimeout(() => { x.style.background = `url('./tpl/videos/door-light.gif')`, x.style.backgroundSize = 'cover'; }, 1000);
                                        setTimeout(() => {
                                            document.querySelectorAll('.mood-color').forEach(el => {
                                                el.style.opacity = "0";
                                                el.style.transition = "opacity 2s";
                                            });
                                            document.querySelectorAll('.lightSwitch-img').forEach(el => {
                                                el.style.opacity = "0";
                                                el.style.transition = "opacity 2s";
                                            });
                                            document.querySelectorAll('.skyltStyle').forEach(el => {
                                                el.style.opacity = "0";
                                                el.style.transition = "opacity 2s";
                                            });
                                            document.querySelectorAll('.logUt').forEach(el => {
                                                el.style.opacity = "0";
                                                el.style.transition = "opacity 2s";
                                            });
                                        }, 1000);
                                        setTimeout(() => { window.location.replace("./hall.php"); }, 2800);
                                        break;
                                    case 'offOn':
                                        setTimeout(() => { x.style.background = `url('./tpl/videos/door-light.gif')`, x.style.backgroundSize = 'cover'; }, 1000);
                                        setTimeout(() => {
                                            document.querySelectorAll('.mood-color').forEach(el => {
                                                el.style.opacity = "0";
                                                el.style.transition = "opacity 2s";
                                            });
                                            document.querySelectorAll('.lightSwitch-img').forEach(el => {
                                                el.style.opacity = "0";
                                                el.style.transition = "opacity 2s";
                                            });
                                            document.querySelectorAll('.skyltStyle').forEach(el => {
                                                el.style.opacity = "0";
                                                el.style.transition = "opacity 2s";
                                            });
                                            document.querySelectorAll('.logUt').forEach(el => {
                                                el.style.opacity = "0";
                                                el.style.transition = "opacity 2s";
                                            });
                                        }, 1000);
                                        setTimeout(() => { window.location.replace("./hall.php"); }, 2800);
                                        break;
                                    case 'offOff':
                                        setTimeout(() => { x.style.background = `url('./tpl/videos/door-dark.gif')`, x.style.backgroundSize = 'cover'; }, 1000);
                                        setTimeout(() => {
                                            document.querySelectorAll('.mood-color').forEach(el => {
                                                el.style.opacity = "0";
                                                el.style.transition = "opacity 2s";
                                            });
                                            document.querySelectorAll('.lightSwitch-img').forEach(el => {
                                                el.style.opacity = "0";
                                                el.style.transition = "opacity 2s";
                                            });
                                            document.querySelectorAll('.skyltStyle').forEach(el => {
                                                el.style.opacity = "0";
                                                el.style.transition = "opacity 2s";
                                            });
                                            document.querySelectorAll('.logUt').forEach(el => {
                                                el.style.opacity = "0";
                                                el.style.transition = "opacity 2s";
                                            });
                                        }, 1000);
                                        setTimeout(() => { window.location.replace("./hall.php"); }, 2800);
                                        break;
                                    case 'onOn':
                                        setTimeout(() => { x.style.background = `url('./tpl/videos/door-uv.gif')`, x.style.backgroundSize = 'cover'; }, 1000);
                                        setTimeout(() => {
                                            document.querySelectorAll('.mood-color').forEach(el => {
                                                el.style.opacity = "0";
                                                el.style.transition = "opacity 2s";
                                            });
                                            document.querySelectorAll('.lightSwitch-img').forEach(el => {
                                                el.style.opacity = "0";
                                                el.style.transition = "opacity 2s";
                                            });
                                            document.querySelectorAll('.skyltStyle').forEach(el => {
                                                el.style.opacity = "0";
                                                el.style.transition = "opacity 2s";
                                            });
                                            document.querySelectorAll('.logUt').forEach(el => {
                                                el.style.opacity = "0";
                                                el.style.transition = "opacity 2s";
                                            });
                                        }, 1000);
                                        setTimeout(() => { window.location.replace("./hall.php"); }, 2800);
                                        break;
                                }
                            </script>
                            <?php
                            include './tpl/profilehome.tpl.php';
                        } else {
                           include 'formcontainer.php';
                        }
                    ?>
                </div>
                <div id="news-feed">
                </div>
            </div>
            <div id="skylt">
                <img style="display: block;" class="skyltStyle" id="skylt_tant" src="./tpl/images/skylt_tant.png">
                <img style="display: none;" class="skyltStyle" id="skylt_slackt" src="./tpl/images/skylt_slackt.png">
                <img style="display: none;" class="skyltStyle" id="skylt_uv" src="./tpl/images/skylt_uv.png">
            </div>
        </div>
    </main>
    <footer>
    </footer>
    <script type="text/javascript" src="./tpl/scripts/home.js" async></script>
</body>
</html>