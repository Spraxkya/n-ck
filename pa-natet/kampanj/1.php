<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>På nätet</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <link rel="icon" href="https://xn--nck-qla.com/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../../tpl/styles/marketing.css?11119" />
    <link rel="stylesheet" type="text/css" href="../../tpl/styles/universal.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <script type="text/javascript" src="../../tpl/scripts/marketing.js" defer></script>
    <script type="text/javascript" src="../../tpl/scripts/universal.js" async></script>
</head>
<body>
    <div id="loading-screen">
        <img class="loadgif" id="loadgif" src="../../tpl/images/pa-natet/Smultron.svg"/>
        <img id="logo" src="../../tpl/images/pa-natet/logo.png"/>
    </div>
    <main>
        <div class="steps">
            <img id="streck" src="../../tpl/images/on-web/streck.svg">
            <div id="prev" onclick="changeStepPrev()" class="prev">
            <img id="pek1" class="pek" src="../../tpl/images/on-web/tillbaka.svg">
            </div>
            <div onclick="changeStepNext()" class="next">
            <img id="pek2" class="pek" src="../../tpl/images/on-web/vidare.svg">
            </div>
        </div>
        <?php
            include '../../inc/db.inc.php';

            $string = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

            $text = "1 out of 23";
                if(preg_match_all('/\d+/', $string, $numbers))
                $lastChar = end($numbers[0]);
                
            $id = $lastChar;

            $url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            $validation = 'hi=' . $id .'';
            $tack = 'tack';

            $sql = "SELECT * FROM qr_marketing WHERE qr_id=?";
            $stmt = $conn->prepare($sql); 
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                if (strpos($url, $validation) !== false) {
                    $nameLetter = $row['letter_name'];

                    $timed = new DateTime();
                    $timedC = $timed->format('c');

                    $SQL = $conn->prepare("INSERT INTO `visits` (`visitor`, `visited`) VALUES (?,?)");

                    $SQL->bind_param('ss', $id, $timedC);
                    $SQL->execute();

                    ?>
                    <div id="main-content">
                    <span style="display:none;"><?php echo $row['id'];?></span>
                    <span id="qr_id" style="display:none;"><?php echo $row['qr_id'];?></span>
                    <span id="letterName" style="display:none;"><?php echo $nameLetter; ?></span>
                    <span id="businessName" style="display:none;"><?php echo $row['bussiness_name'];?></span>
                        <div id="first" class="console-container"><h1 id="anime" class="line-1 anim-typewriter grey"> </h1>
                        <div class="console-underscore" id='console'>&#95;</div></div>
                        <h1 id="second" class="h1 grey"> Vi vill presentera... </h1>
                        <div id="third">
                            <video onclick="playi();" id="pcVideo" playsinline="" muted="">
                                <source id="srci" src="../../tpl/videos/smultron/desktopSmultron.mp4" type="video/mp4">
                            </video>
                            <video onclick="playi();" id="ipadVideo" playsinline="" muted="">
                                <source id="srci" src="../../tpl/videos/smultron/mobilSmultron.mp4" type="video/mp4">
                            </video>
                            <video onclick="playi();" id="mobilVideo" playsinline="" muted="">
                                <source id="srci" src="../../tpl/videos/smultron/mobilSmultron.mp4" type="video/mp4">
                            </video>
                        </div>
                        <h1 id="fourth" class="h1_black"> "Webbutveckling med personlighet"</h1>
                        <div id="fift">
                            <h1 class="h1_black6">Vill du veta mer?</h1>
                            <button onclick="kontakt()" class="optionsB Z point"> Kontakta oss </button>
                            <h1 class="h1_black6L">eller...</h1>
                            <button onclick="boka()" class="optionsB Z point"> Boka en tid </button>
                        </div>
                        <div id="contact" class="Z">
                            <div id="alert">
                                <h2 id="nummerAlert"> Nummret är kopierat! </h2>
                                <h2 id="mailAlert"> Mailen är kopierad! </h2>
                            </div>  
                            <h1 class="h1_blackC"> Kontakta oss </h1>
                            <div class="contact-div">
                                <div class="contactA"><a href="tel:+4672-4034229"><img class="phone8bit" src="../../tpl/images/on-web/phone8bit.png"></a><a class="point padne" onclick="copyNumber()"><h2> 072-403 42 29 </h2></a></div>
                                <div class="contactB"><a href = "mailto:web@nackcollective.com"><img class="mail8bit" src="../../tpl/images/on-web/mail8bit.png"></a><a class="point padne" onclick="copyMail()"><h2 class="h2small"> web@nackcollective.com </h2></a></div>
                            </div>
                            <div class="contact-done">
                                <a style="text-align:center;" href="../kampanj/tack.php?tack1"><button class="done point"> Färdig </button></a>
                                <a onclick="back()" class="back point"> tillbaka </a>
                            </div>
                        </div>
                        <div id="book" class="Z">
                            <h1 class="h1_black boka"> Boka en tid </h1>
                        <div class="pcBoka">
                            <div id="weekCalender">                           
                                <?php

                                    $today = new DateTime();
                                    $checkDay = $today->format('N');

                                    if($checkDay == 5) {
                                        $date = new DateTime();
                                        $date->modify('+ 1 week');
                                        $fitta = $date->format('W');
                                        $i = $fitta % 4;
                                        
                                        ?>
                                        <div id="weekChoice">
                                            <span id="i" style='display:none;'><?php print_r($i); ?></span>
                                            <svg class="pil point" onclick="prevWeek()" version="1.1" id="Lager_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 177.7 124.4" style="enable-background:new 0 0 177.7 124.4;" xml:space="preserve">
                                            <g>
                                                <polygon points="177.7,53.3 177.7,71.1 71.1,71.1 71.1,124.4 53.3,124.4 53.3,106.6 35.5,106.6 35.5,88.8 17.8,88.8 17.8,71.1 
                                                    0,71.1 0,53.3 17.8,53.3 17.8,35.5 35.5,35.5 35.5,17.8 53.3,17.8 53.3,0 71.1,0 71.1,53.3 	"/>
                                            </g>
                                            </svg>
                                            <h2 id="week1" class="week"> Week <?php echo date("W", strtotime('+1 week')) ?> </h2>
                                            <h2 id="week2" class="week"> Week <?php echo date("W", strtotime('+2 week')) ?> </h2>
                                            <h2 id="week3" class="week"> Week <?php echo date("W", strtotime('+3 week')) ?> </h2>
                                            <h2 id="week4" class="week"> Week <?php echo date("W", strtotime('+4 week')) ?> </h2>
                                            <svg class="pil point" onclick="nextWeek()" version="1.1" id="Lager_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 177.7 124.4" style="enable-background:new 0 0 177.7 124.4;" xml:space="preserve">
                                                <g>
                                                    <polygon points="0,71.1 0,53.3 106.6,53.3 106.6,0 124.4,0 124.4,17.8 142.2,17.8 142.2,35.5 159.9,35.5 159.9,53.3 177.7,53.3 
                                                        177.7,71.1 159.9,71.1 159.9,88.9 142.2,88.9 142.2,106.6 124.4,106.6 124.4,124.4 106.6,124.4 106.6,71.1 	"/>
                                                </g>
                                            </svg>
                                        </div>
                                        <?php
                                        include 'calender.php';
                                    } else if($checkDay == 6) {
                                        $date = new DateTime();
                                        $date->modify('+ 1 week');
                                        $fitta = $date->format('W');
                                        $i = $fitta % 4;
                                        
                                        ?>
                                        <br>
                                        <?php
                                        print_r($checkDay);
                                        ?>
                                        <div id="weekChoice">
                                            <span id="i" style='display:none;'><?php print_r($i); ?></span>
                                            <svg class="pil point" onclick="prevWeek()" version="1.1" id="Lager_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 177.7 124.4" style="enable-background:new 0 0 177.7 124.4;" xml:space="preserve">
                                            <g>
                                                <polygon points="177.7,53.3 177.7,71.1 71.1,71.1 71.1,124.4 53.3,124.4 53.3,106.6 35.5,106.6 35.5,88.8 17.8,88.8 17.8,71.1 
                                                    0,71.1 0,53.3 17.8,53.3 17.8,35.5 35.5,35.5 35.5,17.8 53.3,17.8 53.3,0 71.1,0 71.1,53.3 	"/>
                                            </g>
                                            </svg>
                                            <h2 id="week1" class="week"> Week <?php echo date("W", strtotime('+1 week')) ?> </h2>
                                            <h2 id="week2" class="week"> Week <?php echo date("W", strtotime('+2 week')) ?> </h2>
                                            <h2 id="week3" class="week"> Week <?php echo date("W", strtotime('+3 week')) ?> </h2>
                                            <h2 id="week4" class="week"> Week <?php echo date("W", strtotime('+4 week')) ?> </h2>
                                            <svg class="pil point" onclick="nextWeek()" version="1.1" id="Lager_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 177.7 124.4" style="enable-background:new 0 0 177.7 124.4;" xml:space="preserve">
                                                <g>
                                                    <polygon points="0,71.1 0,53.3 106.6,53.3 106.6,0 124.4,0 124.4,17.8 142.2,17.8 142.2,35.5 159.9,35.5 159.9,53.3 177.7,53.3 
                                                        177.7,71.1 159.9,71.1 159.9,88.9 142.2,88.9 142.2,106.6 124.4,106.6 124.4,124.4 106.6,124.4 106.6,71.1 	"/>
                                                </g>
                                            </svg>
                                        </div>
                                        <?php
                                        include 'calender.php';

                                    } else if($checkDay == 7) {
                                        $date = new DateTime();
                                        $date->modify('+ 1 week');
                                        $fitta = $date->format('W');
                                        $i = $fitta % 4;
                                        
                                        ?>
                                        <div id="weekChoice">
                                            <span id="i" style='display:none;'><?php print_r($i); ?></span>
                                            <svg class="pil point" onclick="prevWeek()" version="1.1" id="Lager_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 177.7 124.4" style="enable-background:new 0 0 177.7 124.4;" xml:space="preserve">
                                            <g>
                                                <polygon points="177.7,53.3 177.7,71.1 71.1,71.1 71.1,124.4 53.3,124.4 53.3,106.6 35.5,106.6 35.5,88.8 17.8,88.8 17.8,71.1 
                                                    0,71.1 0,53.3 17.8,53.3 17.8,35.5 35.5,35.5 35.5,17.8 53.3,17.8 53.3,0 71.1,0 71.1,53.3 	"/>
                                            </g>
                                            </svg>
                                            <h2 id="week1" class="week"> Week <?php echo date("W", strtotime('+1 week')) ?> </h2>
                                            <h2 id="week2" class="week"> Week <?php echo date("W", strtotime('+2 week')) ?> </h2>
                                            <h2 id="week3" class="week"> Week <?php echo date("W", strtotime('+3 week')) ?> </h2>
                                            <h2 id="week4" class="week"> Week <?php echo date("W", strtotime('+4 week')) ?> </h2>
                                            <svg class="pil point" onclick="nextWeek()" version="1.1" id="Lager_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 177.7 124.4" style="enable-background:new 0 0 177.7 124.4;" xml:space="preserve">
                                                <g>
                                                    <polygon points="0,71.1 0,53.3 106.6,53.3 106.6,0 124.4,0 124.4,17.8 142.2,17.8 142.2,35.5 159.9,35.5 159.9,53.3 177.7,53.3 
                                                        177.7,71.1 159.9,71.1 159.9,88.9 142.2,88.9 142.2,106.6 124.4,106.6 124.4,124.4 106.6,124.4 106.6,71.1 	"/>
                                                </g>
                                            </svg>
                                        </div>
                                        <?php
                                        include 'calender.php';

                                    } else {
                                        $fitta = date("W");
                                        $i = $fitta % 4;
                                        
                                        ?>
                                        <div id="weekChoice">
                                            <span id="i" style='display:none;'><?php print_r($i); ?></span>
                                            <svg class="pil point" onclick="prevWeek()" version="1.1" id="Lager_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 177.7 124.4" style="enable-background:new 0 0 177.7 124.4;" xml:space="preserve">
                                            <g>
                                                <polygon points="177.7,53.3 177.7,71.1 71.1,71.1 71.1,124.4 53.3,124.4 53.3,106.6 35.5,106.6 35.5,88.8 17.8,88.8 17.8,71.1 
                                                    0,71.1 0,53.3 17.8,53.3 17.8,35.5 35.5,35.5 35.5,17.8 53.3,17.8 53.3,0 71.1,0 71.1,53.3 	"/>
                                            </g>
                                            </svg>
                                            <h2 id="week1" class="week"> Week <?php echo date("W") ?> </h2>
                                            <h2 id="week2" class="week"> Week <?php echo date("W", strtotime('+1 week')) ?> </h2>
                                            <h2 id="week3" class="week"> Week <?php echo date("W", strtotime('+2 week')) ?> </h2>
                                            <h2 id="week4" class="week"> Week <?php echo date("W", strtotime('+3 week')) ?> </h2>
                                            <svg class="pil point" onclick="nextWeek()" version="1.1" id="Lager_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 177.7 124.4" style="enable-background:new 0 0 177.7 124.4;" xml:space="preserve">
                                                <g>
                                                    <polygon points="0,71.1 0,53.3 106.6,53.3 106.6,0 124.4,0 124.4,17.8 142.2,17.8 142.2,35.5 159.9,35.5 159.9,53.3 177.7,53.3 
                                                        177.7,71.1 159.9,71.1 159.9,88.9 142.2,88.9 142.2,106.6 124.4,106.6 124.4,124.4 106.6,124.4 106.6,71.1 	"/>
                                                </g>
                                            </svg>
                                        </div>
                                    <?php
                                        include 'calender.php';
                                    }
                                    
                                ?>
                            </div>
                            <form id="form1" action="../../inc/booktime.inc.php" method="POST" autocomplete="off">
                                <h2 id="kontaktForm" class="week bigscreen"> Kontaktuppgifter </h2>
                                    <div id="inputs">
                                        <label>E-post: <input id="kundEmail" type="text" name="email" onkeydown="validation();" required></label>
                                        <label id="Nummer">Tel.nr: <input id="kundNummer" type="number" name="nummer" required></label>
                                        <input style="display: none;" id="time" type="text" name="tid" value='' required>
                                        <input style="display: none;" id="day" type="text" name="dag" value='' required>
                                        <input style="display: none;" id="nameru" type="text" name="namn" value='' required>
                                        <input style="display: none;" id="bussiness" type="text" name="biz" value='' required>
                                        <input style="display: none;" id="idd" type="text" name="id" value='' required>
                                        <input style="display: none;" id="tid" type="text" name="tid_x" value='' required>
                                        <span id="validateText"> </span>
                                    </div>
                                    <div id="checkboxx">
                                        <input class="point" id="checkbox" type="checkbox" required><span id="checkboxText">Jag godkänner att uppgifter sparas med syfte att Omania AB ska kunna kontakta mig.</span></input>
                                    </div>    
                                    <input onclick="skicka();" id="yeit" type="button" value="Boka nu" class="point">
                                    <input style="display: none;" id="klick" type="submit" name="submit">


                                    <script> 

                                        function validation() {
                                            var form = document.getElementById('form1');
                                            var email = document.getElementById('kundEmail').value;
                                            var text = document.getElementById('validateText');

                                            if (email == "") {
                                                form.classList.remove('invalid');
                                                form.classList.remove('valid');
                                                text.innerHTML = "";
                                            }

                                            if (email.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)) {
                                                form.classList.add('valid');
                                                form.classList.remove('invalid');
                                                text.innerHTML = "nice email";
                                                return true;
                                            } else {
                                                form.classList.remove('valid');
                                                form.classList.add('invalid');
                                                text.innerHTML = "not an email";
                                                return false;
                                            }
                                        }

                                        function skicka() {
                                            document.getElementById("time").value = sessionStorage.getItem("clock");
                                            document.getElementById("day").value = sessionStorage.getItem("date");
                                            document.getElementById("nameru").value = document.getElementById('letterName').innerHTML;
                                            document.getElementById("bussiness").value = document.getElementById("businessName").innerHTML;
                                            document.getElementById("idd").value = sessionStorage.getItem("id");
                                            document.getElementById("tid").value = sessionStorage.getItem("tid_x");
                                            var text = document.getElementById('validateText');
                                            var klick = document.getElementById('klick');
                                            
                                            if(validation() === true) {
                                                klick.click();
                                            } else {
                                                text.innerHTML = "check your email";
                                            }
                                        }   

                                   </script>
                                    <div id="backiluring2">
                                        <a onclick="back()" class="back point"> tillbaka </a>
                                    </div>
                            </form>
                            <div id="backiluring">
                                <a onclick="back()" class="back point"> tillbaka </a>
                            </div>
                        </div>
                        </div>
                    </div>
                    <script>
                        window.addEventListener("load", function () {
                            setTimeout(function(){
                            // function([string1, string2],target id,[color1,color2])
                            consoleText([`<?php echo 'Hej '.$nameLetter.'!';?>`]);
            
                            function consoleText(words, id, colors) {
                            if (colors === undefined) colors = ['#fff'];
                            var visible = true;
                            var con = document.getElementById('console');
                            var letterCount = 1;
                            var x = 1;
                            var waiting = false;
                            var target = document.getElementById('anime');
                            target.setAttribute('style', 'color:' + colors[0]);
                            window.setInterval(function() {

                                if (letterCount === 0 && waiting === false) {
                                waiting = true;
                                target.innerHTML = words[0].substring(0, letterCount)
                                window.setTimeout(function() {
                                    var usedColor = colors.shift();
                                    colors.push(usedColor);
                                    var usedWord = words.shift();
                                    words.push(usedWord);
                                    x = 1;
                                    target.setAttribute('style', 'color:' + colors[0]);
                                    letterCount += x;
                                    waiting = false;
                                }, 1000)
                                } else if (waiting === false) {
                                target.innerHTML = words[0].substring(0, letterCount);
                                letterCount += x;
                                }
                            }, 120)
                            window.setInterval(function() {
                                if (visible === true) {
                                con.className = 'console-underscore hidden';
                                visible = false;

                                } else {
                                con.className = 'console-underscore';

                                visible = true;
                                }
                            }, 400)
                            }
                        }, 3000);
                        });
                    </script>    
                <?php
                }
            }
            if (strpos($url, $validation) === false) {
                ?> 
                <h1> dra </h1>
            <?php
            }
            ?>
    </main>
</body>
</html>