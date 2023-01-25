<!DOCTYPE html>
<html>
<div id="error-box">
    <h3 id="error-title"> CORRECTION</h3>
    <p id="error"></p>
</div>
<div id="tabs">
    <h2 class="mood-color" id="login-tab">Login</h2>
    <h2 class="mood-color" id="register-tab">Register</h2>
</div>
<div class="mood-color" id="underline">
</div>
<div id="login-form">
    <form id="loginform" action="./inc/login.inc.php" method="POST">
        <div id="login-container">
            <label class="login-label mood-color">Username:</label>
            <input id="user-login" class="login-input" type="text" name="uid" class="form-control" maxlength="50">
            <label class="login-label mood-color">Password:</label>
            <input id="pwd-login" class="login-input" type="password" name="pwd" class="form-control">
            <div class="mood-color" id="clumsy-pwd">
                <?php
                    if(isset($_GET["newpwd"])) {
                        if($_GET["newpwd"] = "passwordupdated") {

                            echo '<p> Your Password have been reseted! </p>';
                        }
                    }
                ?>
            <a class="mood-color" href="reset-password.php" id="clumsy-pwd-text">Forgot Password? </a>
            </div>
        </div>
        <input type="submit" id="enter" class="button mood-color" name="submit" value="ENTER">
    </form>
</div>
<div id="register-form">
    <form onclick="bye();" action="./inc/register.inc.php" id="registerform" method="POST" autocomplete="off">
        <div class="" id="register-container">
            <label id="error-email" class="register-label mood-color">email:</label>
            <input id="register-email" type="text" name="email" class="form-control" maxlength="50" autocomplete="one-time-code">
            <label id="error-username" class="register-label mood-color">username:</label>
            <input id="register-username" type="text" name="username" class="form-control" maxlength="50" autocomplete="off">
            <label id="error-pwd" class="register-label mood-color">password:</label>
            <input id="pwd-register" type="password" name="pwd" class="form-control">
            <label id="error-pwdRepeat" class="register-label mood-color">password again:</label>
            <input id="confirm-register" type="password" name="pwdRepeat" class="form-control">
            <div id="checkbox-area">
                <div id="solo-checkbox"><label for="checkbox-hide" id="checkbox" class="form-control checkbox"><span id="cross1">X</span>
                    <input class="checkbox-hide" id="checkbox-hide" type="checkbox" name="terms"></label>
                    <h3 class="mood-color" id="checkbox-text">I accept the terms and conditions</h3>
                </div>
                <div id="solo-checkbox">
                    <span id="checkbox2" class="form-control checkbox"><span id="cross2">X</span></span>
                    <h3 class="mood-color" id="checkbox-text"> I am not a robot man</h3>
                </div>
            </div>
            <div style = "visibility: hidden;" id="captcha-wrapper">
                    <div class="captcha-area">
                        <div class="captcha-img">
                            <img src="./tpl/images/supernova.jpg" alt="Captch Background">
                            <span class="captcha"></span>
                        </div>
                        <button id="reload" class="reload-btn"><img class="fas fa-redo-alt"
                                src="https://img.icons8.com/ios-glyphs/30/000000/refresh--v1.png" /></button>
                    </div>
                    <div class="input-area">
                        <input id="you" class="text-captcha" type="text" placeholder="Enter captcha" maxlength="6">
                        <input id="robo-check" type="checkbox" name="robot">
                        <button id="validate" class="check-btn"> Validate </button>
                    </div>
                    <div id="status-textu" class="status-text"></div>
                </div>
        </div>
        <input class="mood-color" type="submit" id="register" name="submit" value="REGISTER">
    </form>
</div>
<!--
<script type="text/javascript">
    let saveEmail = document.getElementById("register-email");
    let saveName = document.getElementById("register-username");
    let savePwd = document.getElementById("pwd-register");
    let savePwd2 = document.getElementById("confirm-register");
    let saveTerms = document.getElementById("checkbox-hide");
    let saveRobot = document.getElementById("robo-check");

    if (sessionStorage.getItem("autosave")) {
        saveEmail.value = sessionStorage.getItem("autosave");
    }
    saveEmail.addEventListener("change", function() {
        sessionStorage.setItem("autosave", saveEmail.value);
    });

    if (sessionStorage.getItem("autosave2")) {
        saveName.value = sessionStorage.getItem("autosave2");
    }
    saveName.addEventListener("change", function() {
        sessionStorage.setItem("autosave2", saveName.value);
    });


    if (sessionStorage.getItem("autosave3")) {
        savePwd.value = sessionStorage.getItem("autosave3");
    }
    savePwd.addEventListener("change", function() {
        sessionStorage.setItem("autosave3", savePwd.value);
    });

    if (sessionStorage.getItem("autosave4")) {
        savePwd2.value = sessionStorage.getItem("autosave4");
    }
    savePwd2.addEventListener("change", function() {
        sessionStorage.setItem("autosave4", savePwd2.value);
    });

    if (sessionStorage.getItem("autosave5")) {
        saveTerms.value = sessionStorage.getItem("autosave5");
    }
    saveTerms.addEventListener("change", function() {
        sessionStorage.setItem("autosave5", saveTerms.value);
    });

    if (sessionStorage.getItem("autosave6")) {
        saveRobot.value = sessionStorage.getItem("autosave6");
    }
    saveRobot.addEventListener("change", function() {
        sessionStorage.setItem("autosave6", saveRobot.value);
    });

    let saveUserLogin = document.getElementById("user-login");
    let savePwdLogin = document.getElementById("pwd-login");

    if (sessionStorage.getItem("autosave7")) {
        saveUserLogin.value = sessionStorage.getItem("autosave7");
    }
    saveUserLogin.addEventListener("change", function() {
        sessionStorage.setItem("autosave7", saveUserLogin.value);
    });

    if (sessionStorage.getItem("autosave8")) {
        savePwdLogin.value = sessionStorage.getItem("autosave8");
    }
    savePwdLogin.addEventListener("change", function() {
        sessionStorage.setItem("autosave8", savePwdLogin.value);
    }); 
</script> !-->
</html>