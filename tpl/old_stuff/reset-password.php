<!DOCTYPE html>

<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Näck</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="./tpl/styles/home.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <script type="text/javascript" src="./tpl/scripts/home.js" async></script>
    <script type="text/javascript" src="./tpl/scripts/validation-newpwd.js" async></script>
</head>

<body onload="scalable(); checkExisting();">
<div onclick="cancel();" id="exit"></div>
    <header>
    </header>
    <main>
        <div style="background-image: url('./tpl/images/lights-on.png');" id="big-container">
            <div id="lightSwitch">
                <img style="display: block;" class="lightSwitch-img" id="lightSwitch-onOff" src="./tpl/images/on-off.png">
                <img style="display: none;" class="lightSwitch-img" id="lightSwitch-offOff" src="./tpl/images/off-off.png">
                <img style="display: none;" class="lightSwitch-img" id="lightSwitch-onOn" src="./tpl/images/on-On.png">
                <img style="display: none;" class="lightSwitch-img" id="lightSwitch-offOn" src="./tpl/images/off-On.png">
            </div>
            <div id="lightbutton1">
            </div>
            <div id="lightbutton2">
            </div>
            <div id="bulletin-board">
            <div id="resetPwd-form">
                    <h2 class="mood-color" id="reset-tab"> Reset your password </h2>
                    <label class="login-label mood-color"> Follow the instructions in the email </label>
                    <form action="./inc/reset-request.inc.php" method = "POST">
                        <input id="pwd-fail-input" type="text" name="reset-email">
                        <button type="submit" name="reset-request-submit"></button>
                    </form>
                </div>
                <div id="error-box-pwd">
                    <h3 id="error-title"> CORRECTION</h3>
                    <p id="error"></p>
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
    <script>
        let saveInput = document.getElementById("pwd-fail-input");

        if (sessionStorage.getItem("autosave")) {
            saveInput.value = sessionStorage.getItem("autosave");
        }
        saveInput.addEventListener("change", function() {
            sessionStorage.setItem("autosave", saveInput.value);
        });
    </script>
</body>