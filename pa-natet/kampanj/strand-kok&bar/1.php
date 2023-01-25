<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mora strand kök & bar</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="https://xn--nck-qla.com/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../../../tpl/styles/mora/strand-kok&barElPapi.css" />
    <link rel="stylesheet" type="text/css" href="../../../tpl/styles/universal.css" />
    <script type="text/javascript" src="../../../tpl/scripts/mora/strand-kok&barElPapi.js" defer></script>
</head>
<body>
    <div id="bros" class="bottomHalf"></div>
    <main>
    <?php
    include '../../../inc/db.inc.php';
    $timed = new DateTime();
    $timedA = $timed->modify('+ 8 hours');
    $timedC = $timedA->format('r');
    
    $k1 = 'greger';
    $k2 = 'onsdagslunch';
    $k3 = 'pain';
    $seger1 = 'loggedIn1';
    $seger2 = 'loggedIn2';
    $seger3 = 'loggedIn3';
    $aj1 = 'nej1';
    $aj2 = 'nej2';
    $aj3 = 'nej3';
    $urlKampanj = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    
    if(strpos($urlKampanj, $k1) !== false) {
        $r = 1;
    }

    if(strpos($urlKampanj, $seger1) !== false) {
        $r = 1;
    }

    if(strpos($urlKampanj, $aj1) !== false) {
        $r = 1;
    }


    if(strpos($urlKampanj, $k2) !== false) {
        $r = 2;
    }

    if(strpos($urlKampanj, $seger2) !== false) {
        $r = 2;
    }

    if(strpos($urlKampanj, $aj2) !== false) {
        $r = 2;
    }


    if(strpos($urlKampanj, $k3) !== false) {
        $r = 3;
    }

    if(strpos($urlKampanj, $seger3) !== false) {
        $r = 3;
    }

    if(strpos($urlKampanj, $aj3) !== false) {
        $r = 3;
    }

    $SQL = $conn->prepare("INSERT INTO `el_papi_visits$r` (`visited`) VALUES (?)");

    $SQL->bind_param('s', $timedC);
    $SQL->execute();


    $SQL = $conn->prepare("SELECT `start` FROM el_papi_koder WHERE id = $r");
    $SQL->execute();

    $SQL->bind_result($col1);

    while ($SQL->fetch()) {
        $start = $col1;
    }

    $timedK = $timedA->format('U');
    $startK = strtotime($start);

        if(strpos($urlKampanj, $k1) !== false && $startK < $timedK !== false) {
            $SQL = $conn->prepare("SELECT id FROM el_papi_member$r");
            $SQL->execute();

            $SQL->bind_result($col1);
    
            while ($SQL->fetch()) {
                $ids = $col1;
            }
            if($col1 > 0) {
?>              
                <div class="top">
                    <h1 class="liText attans">ATTANS</h1>
                    <h2 class="liText attans2">DU KOM FÖRSENT!</h2>
                    <span class="topSpan">VILL DU FÅ EN TJUVSTART TILL NÄSTA TÄVLING?</span>
                </div>
                <div class="attansFormC">
                    <form id="attansForm" action="../../../inc/mora/moraFormAj.inc.php" method="POST" autocomplete="off" onsubmit="hellYeah();">
                        <label>FÖRNAMN:</label>
                        <input type="text" name="name" required>
                        <label>EFTERNAMN:</label>
                        <input type="text" name="lastName" required>
                        <label>E-POST:<span id="epostVal" class="emailVal"></span></label>
                        <input id="attansEmail" type="text" name="email" onkeydown="validation1();" required>
                        <input style="display:none;" value="<?php echo $r;?>" type="text" name="legitimation">
                        <div class="checkboxC">
                            <input onclick="checkeri();" id="checker" type="checkbox" required><span class="cbSpan">Jag är över 18 år och jag godkänner att Strand Kök & Bar får behandla mina personuppgifter.</span>
                        </div>
                        <div class="checkboxC">
                            <input type="checkbox" required><span class="cbSpan">Ja, informera mig om tävlingar, evenemang och kampanjer.</span>
                        </div>
                        <input style="display:none;" id="klick1" type="submit" name="submit">
                    </form>
                </div>
                <div class="mittmittBot">
                    <span class="botSpan blackBorderS">FYLL I FORMULÄRET SÅ HJÄLPER VI DIG!</span>
                    <input id="removy" class="silver whiteBorder silvershadow" onclick="skicka1();" type="button" value="FÅ EN TJUVSTART">
                </div>
                <div class="yey">
                    <img class="logo" src="../../../tpl/images/mora/logo_vit.svg"/>
                </div>
<?php

            } else if($col1 == 0) {
?>              
                <div class="top">
                    <h1 class="liText damn">DAMN</h1>
                    <h2 class="liText damn2">DU VAR SNABB!</h2>
                    <span class="topSpan">FYLL I UPPGIFTERNA OCH VINN BILJETTEN!</span>
                </div>
                <div class="grattisFormC">
                    <form id="attansForm" action="../../../inc/mora/moraForm.inc.php" method="POST" autocomplete="off" onsubmit="hellYeah();">
                        <label>FÖRNAMN:</label>
                        <input type="text" name="name" required>
                        <label>EFTERNAMN:</label>
                        <input type="text" name="lastName" required>
                        <label>E-POST:<span id="epostVal" class="emailVal"></span></label>
                        <input id="attansEmail" type="text" name="email" onkeydown="validation1();" required>
                        <input style="display:none;" value="<?php echo $r;?>" type="text" name="legitimation">
                        <div class="checkboxC">
                            <input onclick="checkeri();" id="checker" type="checkbox" required><span class="cbSpan">Jag är över 18 år och jag godkänner att Strand Kök & Bar får behandla mina personuppgifter.</span>
                        </div>
                        <div class="checkboxC">
                            <input name="nyhet" type="checkbox"><span class="cbSpan">Ja, informera mig om tävlingar, evenemang och kampanjer.</span>
                        </div>
                        <input style="display:none;" id="klick1" type="submit" name="submit">
                    </form>
                </div>
                <div class="mittmitt">
                    <input id="removy" class="guld blackBorder guldshadow" onclick="skicka1();" type="button" value="VINN BILJETTEN!">
                    <img class="logo" src="../../../tpl/images/mora/logo_vit.svg"/>
                </div>
<?php
            }
?>
<?php
        } else if(strpos($urlKampanj, $seger1) !== false){

            $sql = "SELECT id FROM el_papi_member$r";
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    $ids[] = $row["id"];
                }

            }
            
            $conn->close();

            if ($_SESSION["nummer"] == $ids[0]) {
?>
                <div class="top2">
                    <h1 class="liText grattis">GRATTIS!</h1>
                    <h3 class="liText grattis3">DU KAN NU HÄMTA UT DIN BILJETT PÅ</h3>
                    <h2 class="liText grattis2">STRAND KÖK & BAR</h2>
                    <span class="topSpan2">INFO OM BILJETT KOMMER VIA MEJL!</span>
                </div>
                <div class="yey">    
                    <img class="biljett" src="../../../tpl/images/mora/biljett.svg"/>
                </div>
                <div class="bot">
                    <span class="botSpanTop">FÖLJ OSS:</span>
                    <div class="mittmitt2 guld">
                        <a class="mediA" target="_blank" href="https://www.facebook.com/strandilgusto/"><img class="media" src="../../../tpl/images/mora/Facebook_SvartVit.svg"/><span class="mediaL blackBorderS">Strand Kök & Bar</span></a>
                        <a class="mediA" target="_blank" href="https://www.instagram.com/strandimora/"><img class="media" src="../../../tpl/images/mora/Instagram_Svartvit.svg"/><span class="mediaL blackBorderS">strandimora</span></a>
                    </div>
                    <img class="logo" src="../../../tpl/images/mora/logo_vit.svg"/>
                </div>
<?php
            } else if($_SESSION["nummer"] != $ids[0] && strpos($urlKampanj, $seger1) !== false) {
?>
                <div class="top2">
                    <h1 class="liText attans11">ATTANS</h1>
                    <h2 class="liText attans22">DU VAR FÖR LÅNGSAM</h2>
                    <span class="topSpan2">NÅGON HANN PRECIS FÖRE DIG</span>
                </div>
                <div class="mittmitt3">
                    <span class="mittSpan2">men...</span>
                    <span class="mittSpan1">DET ÄR INTE FÖRSENT ÄN</span>
                    <span class="mittSpan2">Säkra din biljett redan nu!</span>
                    <a target="_blank" href="https://secure.tickster.com/sv/72tg1rylklt4vfw/products" style="justify-content: center;"><button class="guld knapp"><span class="knappT blackBorderS">TILL BILJETTERNA</span></button></a>
                </div>
                <div class="mittmitt2 silver">
                        <a class="mediA" target="_blank" href="https://www.facebook.com/strandilgusto/"><img class="media" src="../../../tpl/images/mora/Facebook_SvartVit.svg"/><span class="mediaL whiteBorderS">Strand Kök & Bar</span></a>
                        <a class="mediA" target="_blank" href="https://www.instagram.com/strandimora/"><img class="media" src="../../../tpl/images/mora/Instagram_Svartvit.svg"/><span class="mediaL whiteBorderS">strandimora</span></a>
                </div>
                <div class="yey">   
                    <img class="logo" src="../../../tpl/images/mora/logo_vit.svg"/>
                </div>
<?php
            }
?>
<?php
        } else if(strpos($urlKampanj, $aj1) !== false) {
?>
                <div class="top2">
                    <h1 class="liText najs">NAJS</h1>
                    <h2 class="liText najs2">NÄSTA GÅNG VINNER DU!</h2>
                    <span class="topSpan2">MEN...</span>
                </div>
                <div class="mittmitt3">    
                    <span class="mittSpan1">DET ÄR INTE FÖRSENT ÄN</span>
                    <span class="mittSpan2">Säkra din biljett redan nu!</span>
                    <a target="_blank" href="https://secure.tickster.com/sv/72tg1rylklt4vfw/products" style="justify-content: center;"><button class="guld knapp"><span class="knappT blackBorderS">TILL BILJETTERNA</span></button></a>
                </div>
                <div class="mittmitt2 silver">
                        <a class="mediA" target="_blank" href="https://www.facebook.com/strandilgusto/"><img class="media" src="../../../tpl/images/mora/Facebook_SvartVit.svg"/><span class="mediaL whiteBorderS">Strand Kök & Bar</span></a>
                        <a class="mediA" target="_blank" href="https://www.instagram.com/strandimora/"><img class="media" src="../../../tpl/images/mora/Instagram_Svartvit.svg"/><span class="mediaL whiteBorderS">strandimora</span></a>
                </div>
                <div class="yey">   
                    <img class="logo" src="../../../tpl/images/mora/logo_vit.svg"/>
                </div>
<?php
        } else if(strpos($urlKampanj, $k1) !== false && $startK > $timedK) {
?>
        <div class="intN">
            <span style="font-size: clamp(1rem, 8vw, 35px);" class="intNspan whiteBorderS">Din lilla fuskare..</span>
            <video autoplay="" playsinline="" muted="" loop="">
                <source src="../../../tpl/images/mora/well.mp4" type="video/mp4">
            </video>
            <span style="font-size: clamp(1rem, 8vw, 35px);text-align:center;padding: 0 5%;" class="intNspan whiteBorderS">Håll koll på våran instagram! Där ser du när tävlingen startar <a style="display: unset; text-decoration:underline;" href="https://www.instagram.com/strandimora/">moraistrand</a></span>
        </div>
<?php
        }

        if(strpos($urlKampanj, $k2) !== false && $startK < $timedK !== false) {

            $SQL = $conn->prepare("SELECT id FROM el_papi_member$r");
            $SQL->execute();

            $SQL->bind_result($col1);
    
            while ($SQL->fetch()) {
                $ids = $col1;
            }
            if($col1 > 0) {
?>              
                <div class="top">
                    <h1 class="liText attans">ATTANS</h1>
                    <h2 class="liText attans2">DU KOM FÖRSENT!</h2>
                    <span class="topSpan">VILL DU FÅ EN TJUVSTART TILL NÄSTA TÄVLING?</span>
                </div>
                <div class="attansFormC">
                    <form id="attansForm" action="../../../inc/mora/moraFormAj.inc.php" method="POST" autocomplete="off" onsubmit="hellYeah();">
                        <label>FÖRNAMN:</label>
                        <input type="text" name="name" required>
                        <label>EFTERNAMN:</label>
                        <input type="text" name="lastName" required>
                        <label>E-POST:<span id="epostVal" class="emailVal"></span></label>
                        <input id="attansEmail" type="text" name="email" onkeydown="validation1();" required>
                        <input style="display:none;" value="<?php echo $r;?>" type="text" name="legitimation">
                        <div class="checkboxC">
                            <input onclick="checkeri();" id="checker" type="checkbox" required><span class="cbSpan">Jag är över 18 år och jag godkänner att Strand Kök & Bar får behandla mina personuppgifter.</span>
                        </div>
                        <div class="checkboxC">
                            <input type="checkbox" required><span class="cbSpan">Ja, informera mig om tävlingar, evenemang och kampanjer.</span>
                        </div>
                        <input style="display:none;" id="klick1" type="submit" name="submit">
                    </form>
                </div>
                <div class="mittmittBot">
                    <span class="botSpan blackBorderS">FYLL I FORMULÄRET SÅ HJÄLPER VI DIG!</span>
                    <input id="removy" class="silver whiteBorder silvershadow" onclick="skicka1();" type="button" value="FÅ EN TJUVSTART">
                </div>
                <div class="yey">
                    <img class="logo" src="../../../tpl/images/mora/logo_vit.svg"/>
                </div>
<?php

            } else if($col1 == 0) {
?>              
                <div class="top">
                    <h1 class="liText damn">DAMN</h1>
                    <h2 class="liText damn2">DU VAR SNABB!</h2>
                    <span class="topSpan">FYLL I UPPGIFTERNA OCH VINN BILJETTEN!</span>
                </div>
                <div class="grattisFormC">
                    <form id="attansForm" action="../../../inc/mora/moraForm.inc.php" method="POST" autocomplete="off" onsubmit="hellYeah();">
                        <label>FÖRNAMN:</label>
                        <input type="text" name="name" required>
                        <label>EFTERNAMN:</label>
                        <input type="text" name="lastName" required>
                        <label>E-POST:<span id="epostVal" class="emailVal"></span></label>
                        <input id="attansEmail" type="text" name="email" onkeydown="validation1();" required>
                        <input style="display:none;" value="<?php echo $r;?>" type="text" name="legitimation">
                        <div class="checkboxC">
                            <input onclick="checkeri();" id="checker" type="checkbox" required><span class="cbSpan">Jag är över 18 år och jag godkänner att Strand Kök & Bar får behandla mina personuppgifter.</span>
                        </div>
                        <div class="checkboxC">
                            <input name="nyhet" type="checkbox"><span class="cbSpan">Ja, informera mig om tävlingar, evenemang och kampanjer.</span>
                        </div>
                        <input style="display:none;" id="klick1" type="submit" name="submit">
                    </form>
                </div>
                <div class="mittmitt">
                    <input id="removy" class="guld blackBorder guldshadow" onclick="skicka1();" type="button" value="VINN BILJETTEN!">
                    <img class="logo" src="../../../tpl/images/mora/logo_vit.svg"/>
                </div>
<?php
            }
?>
<?php
        } else if(strpos($urlKampanj, $seger2) !== false){

            $sql = "SELECT id FROM el_papi_member$r";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    $ids[] = $row["id"];
                }

            }
            
            $conn->close();

            if ($_SESSION["nummer"] == $ids[0]) {
?>
                <div class="top2">
                    <h1 class="liText grattis">GRATTIS!</h1>
                    <h3 class="liText grattis3">DU KAN NU HÄMTA UT DIN BILJETT PÅ</h3>
                    <h2 class="liText grattis2">STRAND KÖK & BAR</h2>
                    <span class="topSpan2">INFO OM BILJETT KOMMER VIA MEJL!</span>
                </div>
                <div class="yey">    
                    <img class="biljett" src="../../../tpl/images/mora/biljett.svg"/>
                </div>
                <div class="bot">
                    <span class="botSpanTop">FÖLJ OSS:</span>
                    <div class="mittmitt2 guld">
                        <a class="mediA" target="_blank" href="https://www.facebook.com/strandilgusto/"><img class="media" src="../../../tpl/images/mora/Facebook_SvartVit.svg"/><span class="mediaL blackBorderS">Strand Kök & Bar</span></a>
                        <a class="mediA" target="_blank" href="https://www.instagram.com/strandimora/"><img class="media" src="../../../tpl/images/mora/Instagram_Svartvit.svg"/><span class="mediaL blackBorderS">strandimora</span></a>
                    </div>
                    <img class="logo" src="../../../tpl/images/mora/logo_vit.svg"/>
                </div>
<?php
            } else if($_SESSION["nummer"] != $ids[0] && strpos($urlKampanj, $seger2) !== false) {
?>
                <div class="top2">
                    <h1 class="liText attans11">ATTANS!</h1>
                    <h2 class="liText attans22">DU VAR FÖR LÅNGSAM</h2>
                    <span class="topSpan2">NÅGON HANN PRECIS FÖRE DIG</span>
                </div>
                <div class="mittmitt3">
                    <span class="mittSpan2">men...</span>
                    <span class="mittSpan1">DET ÄR INTE FÖRSENT ÄN</span>
                    <span class="mittSpan2">Säkra din biljett redan nu!</span>
                    <a target="_blank" href="https://secure.tickster.com/sv/72tg1rylklt4vfw/products" style="justify-content: center;"><button class="guld knapp"><span class="knappT blackBorderS">TILL BILJETTERNA</span></button></a>
                </div>
                <div class="mittmitt2 silver">
                        <a class="mediA" target="_blank" href="https://www.facebook.com/strandilgusto/"><img class="media" src="../../../tpl/images/mora/Facebook_SvartVit.svg"/><span class="mediaL whiteBorderS">Strand Kök & Bar</span></a>
                        <a class="mediA" target="_blank" href="https://www.instagram.com/strandimora/"><img class="media" src="../../../tpl/images/mora/Instagram_Svartvit.svg"/><span class="mediaL whiteBorderS">strandimora</span></a>
                </div>
                <div class="yey">   
                    <img class="logo" src="../../../tpl/images/mora/logo_vit.svg"/>
                </div>
<?php
            }
?>
<?php
        } else if(strpos($urlKampanj, $aj2) !== false) {
?>
                <div class="top2">
                    <h1 class="liText najs">NAJS</h1>
                    <h2 class="liText najs2">NÄSTA GÅNG VINNER DU!</h2>
                    <span class="topSpan2">MEN...</span>
                </div>
                <div class="mittmitt3">    
                    <span class="mittSpan1">DET ÄR INTE FÖRSENT ÄN</span>
                    <span class="mittSpan2">Säkra din biljett redan nu!</span>
                    <a target="_blank" href="https://secure.tickster.com/sv/72tg1rylklt4vfw/products" style="justify-content: center;"><button class="guld knapp"><span class="knappT blackBorderS">TILL BILJETTERNA</span></button></a>
                </div>
                <div class="mittmitt2 silver">
                        <a class="mediA" target="_blank" href="https://www.facebook.com/strandilgusto/"><img class="media" src="../../../tpl/images/mora/Facebook_SvartVit.svg"/><span class="mediaL whiteBorderS">Strand Kök & Bar</span></a>
                        <a class="mediA" target="_blank" href="https://www.instagram.com/strandimora/"><img class="media" src="../../../tpl/images/mora/Instagram_Svartvit.svg"/><span class="mediaL whiteBorderS">strandimora</span></a>
                </div>
                <div class="yey">   
                    <img class="logo" src="../../../tpl/images/mora/logo_vit.svg"/>
                </div>
<?php
        } else if(strpos($urlKampanj, $k2) !== false && $startK > $timedK){
?>
        <div class="intN">
            <span style="font-size: clamp(1rem, 8vw, 35px);" class="intNspan whiteBorderS">Din lilla fuskare..</span>
            <video autoplay="" playsinline="" muted="" loop="">
                <source src="../../../tpl/images/mora/well.mp4" type="video/mp4">
            </video>
            <span style="font-size: clamp(1rem, 8vw, 35px);text-align:center;padding: 0 5%;" class="intNspan whiteBorderS">Håll koll på våran instagram! Där ser du när tävlingen startar <a style="display: unset; text-decoration:underline;" href="https://www.instagram.com/strandimora/">moraistrand</a></span>
        </div>
<?php
        }
        if(strpos($urlKampanj, $k3) !== false && $startK < $timedK) {



            $SQL = $conn->prepare("SELECT id FROM el_papi_member$r");
            $SQL->execute();

            $SQL->bind_result($col1);
    
            while ($SQL->fetch()) {
                $ids = $col1;
            }
            if($col1 > 0) {
?>              
                <div class="top">
                    <h1 class="liText attans">ATTANS</h1>
                    <h2 class="liText attans2">DU KOM FÖRSENT!</h2>
                    <span class="topSpan">VILL DU FÅ EN TJUVSTART TILL NÄSTA TÄVLING?</span>
                </div>
                <div class="attansFormC">
                    <form id="attansForm" action="../../../inc/mora/moraFormAj.inc.php" method="POST" autocomplete="off" onsubmit="hellYeah();">
                        <label>FÖRNAMN:</label>
                        <input type="text" name="name" required>
                        <label>EFTERNAMN:</label>
                        <input type="text" name="lastName" required>
                        <label>E-POST:<span id="epostVal" class="emailVal"></span></label>
                        <input id="attansEmail" type="text" name="email" onkeydown="validation1();" required>
                        <input style="display:none;" value="<?php echo $r;?>" type="text" name="legitimation">
                        <div class="checkboxC">
                            <input onclick="checkeri();" id="checker" type="checkbox" required><span class="cbSpan">Jag är över 18 år och jag godkänner att Strand Kök & Bar får behandla mina personuppgifter.</span>
                        </div>
                        <div class="checkboxC">
                            <input type="checkbox" required><span class="cbSpan">Ja, informera mig om tävlingar, evenemang och kampanjer.</span>
                        </div>
                        <input style="display:none;" id="klick1" type="submit" name="submit">
                    </form>
                </div>
                <div class="mittmittBot">
                    <span class="botSpan blackBorderS">FYLL I FORMULÄRET SÅ HJÄLPER VI DIG!</span>
                    <input id="removy" class="silver whiteBorder silvershadow" onclick="skicka1();" type="button" value="FÅ EN TJUVSTART">
                </div>
                <div class="yey">
                    <img class="logo" src="../../../tpl/images/mora/logo_vit.svg"/>
                </div>
<?php

            } else if($col1 == 0) {
?>              
                <div class="top">
                    <h1 class="liText damn">DAMN</h1>
                    <h2 class="liText damn2">DU VAR SNABB!</h2>
                    <span class="topSpan">FYLL I UPPGIFTERNA OCH VINN BILJETTEN!</span>
                </div>
                <div class="grattisFormC">
                    <form id="attansForm" action="../../../inc/mora/moraForm.inc.php" method="POST" autocomplete="off" onsubmit="hellYeah();">
                        <label>FÖRNAMN:</label>
                        <input type="text" name="name" required>
                        <label>EFTERNAMN:</label>
                        <input type="text" name="lastName" required>
                        <label>E-POST:<span id="epostVal" class="emailVal"></span></label>
                        <input id="attansEmail" type="text" name="email" onkeydown="validation1();" required>
                        <input style="display:none;" value="<?php echo $r;?>" type="text" name="legitimation">
                        <div class="checkboxC">
                            <input onclick="checkeri();" id="checker" type="checkbox" required><span class="cbSpan">Jag är över 18 år och jag godkänner att Strand Kök & Bar får behandla mina personuppgifter.</span>
                        </div>
                        <div class="checkboxC">
                            <input name="nyhet" type="checkbox"><span class="cbSpan">Ja, informera mig om tävlingar, evenemang och kampanjer.</span>
                        </div>
                        <input style="display:none;" id="klick1" type="submit" name="submit">
                    </form>
                </div>
                <div class="mittmitt">
                    <input id="removy" class="guld blackBorder guldshadow" onclick="skicka1();" type="button" value="VINN BILJETTEN!">
                    <img class="logo" src="../../../tpl/images/mora/logo_vit.svg"/>
                </div>
<?php
            }
?>
<?php
        } else if(strpos($urlKampanj, $seger3) !== false){

            $sql = "SELECT id FROM el_papi_member$r";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    $ids[] = $row["id"];
                }

            }
            
            $conn->close();

            if ($_SESSION["nummer"] == $ids[0]) {
?>
                <div class="top2">
                    <h1 class="liText grattis">GRATTIS!</h1>
                    <h3 class="liText grattis3">DU KAN NU HÄMTA UT DIN BILJETT PÅ</h3>
                    <h2 class="liText grattis2">STRAND KÖK & BAR</h2>
                    <span class="topSpan2">INFO OM BILJETT KOMMER VIA MEJL!</span>
                </div>
                <div class="yey">    
                    <img class="biljett" src="../../../tpl/images/mora/biljett.svg"/>
                </div>
                <div class="bot">
                    <span class="botSpanTop">FÖLJ OSS:</span>
                    <div class="mittmitt2 guld">
                        <a class="mediA" target="_blank" href="https://www.facebook.com/strandilgusto/"><img class="media" src="../../../tpl/images/mora/Facebook_SvartVit.svg"/><span class="mediaL blackBorderS">Strand Kök & Bar</span></a>
                        <a class="mediA" target="_blank" href="https://www.instagram.com/strandimora/"><img class="media" src="../../../tpl/images/mora/Instagram_Svartvit.svg"/><span class="mediaL blackBorderS">strandimora</span></a>
                    </div>
                    <img class="logo" src="../../../tpl/images/mora/logo_vit.svg"/>
                </div>
<?php
            } else if($_SESSION["nummer"] != $ids[0] && strpos($urlKampanj, $seger3) !== false) {
?>
                <div class="top2">
                    <h1 class="liText attans11">ATTANS!</h1>
                    <h2 class="liText attans22">DU VAR FÖR LÅNGSAM</h2>
                    <span class="topSpan2">NÅGON HANN PRECIS FÖRE DIG</span>
                </div>
                <div class="mittmitt3">
                    <span class="mittSpan2">men...</span>
                    <span class="mittSpan1">DET ÄR INTE FÖRSENT ÄN</span>
                    <span class="mittSpan2">Säkra din biljett redan nu!</span>
                    <a target="_blank" href="https://secure.tickster.com/sv/72tg1rylklt4vfw/products" style="justify-content: center;"><button class="guld knapp"><span class="knappT blackBorderS">TILL BILJETTERNA</span></button></a>
                </div>
                <div class="mittmitt2 silver">
                        <a class="mediA" target="_blank" href="https://www.facebook.com/strandilgusto/"><img class="media" src="../../../tpl/images/mora/Facebook_SvartVit.svg"/><span class="mediaL whiteBorderS">Strand Kök & Bar</span></a>
                        <a class="mediA" target="_blank" href="https://www.instagram.com/strandimora/"><img class="media" src="../../../tpl/images/mora/Instagram_Svartvit.svg"/><span class="mediaL whiteBorderS">strandimora</span></a>
                </div>
                <div class="yey">   
                    <img class="logo" src="../../../tpl/images/mora/logo_vit.svg"/>
                </div>
<?php
            }
?>
<?php
        } else if(strpos($urlKampanj, $aj3) !== false) {
?>
                <div class="top2">
                    <h1 class="liText najs">NAJS</h1>
                    <h2 class="liText najs2">NÄSTA GÅNG VINNER DU!</h2>
                    <span class="topSpan2">MEN...</span>
                </div>
                <div class="mittmitt3">    
                    <span class="mittSpan1">DET ÄR INTE FÖRSENT ÄN</span>
                    <span class="mittSpan2">Säkra din biljett redan nu!</span>
                    <a target="_blank" href="https://secure.tickster.com/sv/72tg1rylklt4vfw/products" style="justify-content: center;"><button class="guld knapp"><span class="knappT blackBorderS">TILL BILJETTERNA</span></button></a>
                </div>
                <div class="mittmitt2 silver">
                        <a class="mediA" target="_blank" href="https://www.facebook.com/strandilgusto/"><img class="media" src="../../../tpl/images/mora/Facebook_SvartVit.svg"/><span class="mediaL whiteBorderS">Strand Kök & Bar</span></a>
                        <a class="mediA" target="_blank" href="https://www.instagram.com/strandimora/"><img class="media" src="../../../tpl/images/mora/Instagram_Svartvit.svg"/><span class="mediaL whiteBorderS">strandimora</span></a>
                </div>
                <div class="yey">   
                    <img class="logo" src="../../../tpl/images/mora/logo_vit.svg"/>
                </div>
<?php
        } else if(strpos($urlKampanj, $k3) !== false && $startK > $timedK){
?>
        <div class="intN">
            <span style="font-size: clamp(1rem, 8vw, 35px);" class="intNspan whiteBorderS">Din lilla fuskare..</span>
            <video autoplay="" playsinline="" muted="" loop="">
                <source src="../../../tpl/images/mora/well.mp4" type="video/mp4">
            </video>
            <span style="font-size: clamp(1rem, 8vw, 35px);text-align:center;padding: 0 5%;" class="intNspan whiteBorderS">Håll koll på våran instagram! Där ser du när tävlingen startar <a style="display: unset; text-decoration:underline;" href="https://www.instagram.com/strandimora/">moraistrand</a></span>
        </div>
<?php
        }
?>
    </main>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Stint+Ultra+Condensed&display=swap" rel="stylesheet">
</body>