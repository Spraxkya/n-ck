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
        <?php
            require './inc/db.inc.php';

            $selector = $_GET["selector"];
            $validator = $_GET["validator"];

        if (empty($selector) || empty($validator)) {
            echo "Could not validate your request!";
        } else {
            if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                ?>
                    <div id="createPwd-form">
                        <form id="pwd-form" action="./inc/reset-password.inc.php" method="POST">
                            <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                            <input type="hidden" name="validator" value="<?php echo $validator; ?>">
                            <input id="pwd" class="pwd" type="password" name="pwd">
                            <input id="pwdRepeat" class="pwdRepeat" type="password" name="pwdRepeat">
                            <button type="submit" name="reset-password-submit">Reset Password</button>
                        </form>
                    </div>
                <?php
            }
        }

        ?>
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
</body>
