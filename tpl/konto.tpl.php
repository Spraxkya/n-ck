<?php
    session_start();
    if (isset( $_SESSION["userid"] ) ) { ?>
<!DOCTYPE html>
<head>
    <title>Bathroom Break</title>
    <meta charset="UTF-8">
    <link rel="icon" href="https://xn--nck-qla.com/favicon.ico">
    <link rel="stylesheet" type="text/css" href="./styles/konto.css" />
    <link rel="stylesheet" type="text/css" href="./styles/validation.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <script type="text/javascript" id="" src="./scripts/bathroom.js" async></script>
    <script type="text/javascript" id="" src="./scripts/validation-changepwd.js" async></script>
</head>

<body onload="checkExisting();">
    <header>

    </header>
    <main>
        <div id="konto-container">
            <div id="konto-information">
                <div id="tabs">
                    <h1> Cred </h1>
                    <h1> Options </h1>
                    <h1> Ordeal </h1>
                </div>
                <h2> <?php echo $_SESSION["nickname"] ?> </h2>
                <h2> <?php echo $_SESSION["mailu"] ?> </h2>
                <?php
            require '../inc/db.inc.php';
                ?>
                <div id="changePwdKonto">
                    <form id="pwd-form" action="../inc/change-pwd.inc.php" method="POST">
                        <input id="pwd" class="pwd" type="password" name="pwd">
                        <input id="pwdRepeat" class="pwdRepeat" type="password" name="pwdRepeat">
                        <button type="submit" name="reset-password-submit">Change Password</button>
                    </form>
                </div>
                <?php 
                    include_once 'customer-details.tpl.php';
                ?>
            </div>
        </div>
        <div id="error-box-pwd">
                    <h3 id="error-title"> CORRECTION</h3>
                    <p id="error"></p>
        </div>
    </main>
    <footer>

    </footer>

</body>

<?php

    } else {

        include_once 'loser.php';

    };

?>