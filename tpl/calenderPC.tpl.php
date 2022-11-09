        <div id="kalenderC">
<?php
                    include './inc/db.inc.php';

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
                        include './pa-natet/kampanj/calender.php';
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
                            <svg class="pil point" onClick="prevWeek()" version="1.1" id="Lager_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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
                        include './pa-natet/kampanj/calender.php';

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
                        include './pa-natet/kampanj/calender.php';

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
                        include './pa-natet/kampanj/calender.php';
                    }
                    ?>
                    <div class="booknC">
                        <div class="bookN">
                            <span class="bookNknapp" onclick="tillbaka1();"> Ville bara kika.. </span>
                            <span class="bookNknapp" onclick="fram1();"> Jag är nöjd med min tid! </span>
                        </div>
                    </div>
        </div>
    <script type="text/javascript" src="./tpl/scripts/universal-calender.js" async></script>
<div id="formC">
    <form id="form1" action="inc/booktime-universal.inc.php" method="POST" autocomplete="off">
        <h2 id="kontaktForm" class="week bigscreen"> Kontaktuppgifter </h2>
            <div id="inputs">
                <label>Ditt namn:<input id="nameru" type="text" name="namn" value='' required></label>
                <label>Vad sysslar du med?<input id="bussiness" type="text" name="biz" value='' required></label>
                <label>E-post: <input id="kundEmail" type="text" name="email" onkeydown="validation();" required></label>
                <label id="Nummer">Tel.nr: <input id="kundNummer" type="number" name="nummer" required></label>
                <input style="display: none;" id="time" type="text" name="tid" value='' required>
                <input style="display: none;" id="day" type="text" name="dag" value='' required>
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
    </form>
    <div class="booknC">
        <div class="bookN">
            <span class="bookNknapp" onclick="tillbaka2();"> Jag vill tillbaka </span>
            <span class="bookNknapp" onclick="fram2();"> Jag vill se något fränt </span>
        </div>
    </div>
</div>