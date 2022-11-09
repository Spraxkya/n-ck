<?php

                                $sql = "SELECT tid_1, tid_2, tid_3, tid_4, tid_5, tid_6 FROM bookings";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                            
                                    while($row = $result->fetch_assoc()) {

                                        $firsTime[] = $row["tid_1"];

                                        $seconTime[] = $row["tid_2"];

                                        $thirTime[] = $row["tid_3"];

                                        $fourTime[] = $row["tid_4"];

                                        $fifTime[] = $row["tid_5"];

                                        $sixTime[] = $row["tid_6"];

                                    }

                                }
                                
                                $conn->close();

                                $today = new DateTime();
                                $checkDay = $today->format('N');

                                switch ($checkDay) {
                                    case 1:
                                        $firstDate= date("d/m", strtotime('monday this week'));
                                        $firstDateMod = date("Y-m-d", strtotime('monday this week'));
                                        $secondDate =  new DateTime($firstDateMod. '+1day');
                                        $thirdDate = new DateTime($firstDateMod. '+2day');
                                        $fourthDate = new DateTime($firstDateMod. '+3day');
                                        $fifthDate = new DateTime($firstDateMod. '+4day');
                                        $sixthDate = new DateTime($firstDateMod. '+7day');
                                        $seventhDate = new DateTime($firstDateMod. '+8day');
                                        $eightDate = new DateTime($firstDateMod. '+9day');
                                        $ninthDate = new DateTime($firstDateMod. '+10day');
                                        $tenthDate = new DateTime($firstDateMod. '+11day');
                                        $elevenDate = new DateTime($firstDateMod. '+14day');
                                        $twelveDate = new DateTime($firstDateMod. '+15day');
                                        $thirteenDate = new DateTime($firstDateMod. '+16day');
                                        $fourteenDate = new DateTime($firstDateMod. '+17day');
                                        $fifteenDate = new DateTime($firstDateMod. '+18day');
                                        $sixteenDate = new DateTime($firstDateMod. '+21day');
                                        $seventeenDate = new DateTime($firstDateMod. '+22day');
                                        $eighteenDate = new DateTime($firstDateMod. '+23day');
                                        $nineteenDate = new DateTime($firstDateMod. '+24day');
                                        $twentyDate = new DateTime($firstDateMod. '+25day');
                                        break;
                                    case 2:
                                        $firstDate= date("d/m", strtotime('monday this week'));
                                        $firstDateMod = date("Y-m-d", strtotime('monday this week'));
                                        $secondDate =  new DateTime($firstDateMod. '+1day');
                                        $thirdDate = new DateTime($firstDateMod. '+2day');
                                        $fourthDate = new DateTime($firstDateMod. '+3day');
                                        $fifthDate = new DateTime($firstDateMod. '+4day');
                                        $sixthDate = new DateTime($firstDateMod. '+7day');
                                        $seventhDate = new DateTime($firstDateMod. '+8day');
                                        $eightDate = new DateTime($firstDateMod. '+9day');
                                        $ninthDate = new DateTime($firstDateMod. '+10day');
                                        $tenthDate = new DateTime($firstDateMod. '+11day');
                                        $elevenDate = new DateTime($firstDateMod. '+14day');
                                        $twelveDate = new DateTime($firstDateMod. '+15day');
                                        $thirteenDate = new DateTime($firstDateMod. '+16day');
                                        $fourteenDate = new DateTime($firstDateMod. '+17day');
                                        $fifteenDate = new DateTime($firstDateMod. '+18day');
                                        $sixteenDate = new DateTime($firstDateMod. '+21day');
                                        $seventeenDate = new DateTime($firstDateMod. '+22day');
                                        $eighteenDate = new DateTime($firstDateMod. '+23day');
                                        $nineteenDate = new DateTime($firstDateMod. '+24day');
                                        $twentyDate = new DateTime($firstDateMod. '+25day');
                                        break;
                                    case 3:
                                        $firstDate= date("d/m", strtotime('monday this week'));
                                        $firstDateMod = date("Y-m-d", strtotime('monday this week'));
                                        $secondDate =  new DateTime($firstDateMod. '+1day');
                                        $thirdDate = new DateTime($firstDateMod. '+2day');
                                        $fourthDate = new DateTime($firstDateMod. '+3day');
                                        $fifthDate = new DateTime($firstDateMod. '+4day');
                                        $sixthDate = new DateTime($firstDateMod. '+7day');
                                        $seventhDate = new DateTime($firstDateMod. '+8day');
                                        $eightDate = new DateTime($firstDateMod. '+9day');
                                        $ninthDate = new DateTime($firstDateMod. '+10day');
                                        $tenthDate = new DateTime($firstDateMod. '+11day');
                                        $elevenDate = new DateTime($firstDateMod. '+14day');
                                        $twelveDate = new DateTime($firstDateMod. '+15day');
                                        $thirteenDate = new DateTime($firstDateMod. '+16day');
                                        $fourteenDate = new DateTime($firstDateMod. '+17day');
                                        $fifteenDate = new DateTime($firstDateMod. '+18day');
                                        $sixteenDate = new DateTime($firstDateMod. '+21day');
                                        $seventeenDate = new DateTime($firstDateMod. '+22day');
                                        $eighteenDate = new DateTime($firstDateMod. '+23day');
                                        $nineteenDate = new DateTime($firstDateMod. '+24day');
                                        $twentyDate = new DateTime($firstDateMod. '+25day');
                                        break;
                                    case 4:
                                        $firstDate= date("d/m", strtotime('monday this week'));
                                        $firstDateMod = date("Y-m-d", strtotime('monday this week'));
                                        $secondDate =  new DateTime($firstDateMod. '+1day');
                                        $thirdDate = new DateTime($firstDateMod. '+2day');
                                        $fourthDate = new DateTime($firstDateMod. '+3day');
                                        $fifthDate = new DateTime($firstDateMod. '+4day');
                                        $sixthDate = new DateTime($firstDateMod. '+7day');
                                        $seventhDate = new DateTime($firstDateMod. '+8day');
                                        $eightDate = new DateTime($firstDateMod. '+9day');
                                        $ninthDate = new DateTime($firstDateMod. '+10day');
                                        $tenthDate = new DateTime($firstDateMod. '+11day');
                                        $elevenDate = new DateTime($firstDateMod. '+14day');
                                        $twelveDate = new DateTime($firstDateMod. '+15day');
                                        $thirteenDate = new DateTime($firstDateMod. '+16day');
                                        $fourteenDate = new DateTime($firstDateMod. '+17day');
                                        $fifteenDate = new DateTime($firstDateMod. '+18day');
                                        $sixteenDate = new DateTime($firstDateMod. '+21day');
                                        $seventeenDate = new DateTime($firstDateMod. '+22day');
                                        $eighteenDate = new DateTime($firstDateMod. '+23day');
                                        $nineteenDate = new DateTime($firstDateMod. '+24day');
                                        $twentyDate = new DateTime($firstDateMod. '+25day');
                                        break;
                                    case 5:
                                        $firstDate= date("d/m", strtotime('next monday'));
                                        $firstDateMod = date("Y-m-d", strtotime('next monday'));
                                        $secondDate =  new DateTime($firstDateMod. '+1day');
                                        $thirdDate = new DateTime($firstDateMod. '+2day');
                                        $fourthDate = new DateTime($firstDateMod. '+3day');
                                        $fifthDate = new DateTime($firstDateMod. '+4day');
                                        $sixthDate = new DateTime($firstDateMod. '+7day');
                                        $seventhDate = new DateTime($firstDateMod. '+8day');
                                        $eightDate = new DateTime($firstDateMod. '+9day');
                                        $ninthDate = new DateTime($firstDateMod. '+10day');
                                        $tenthDate = new DateTime($firstDateMod. '+11day');
                                        $elevenDate = new DateTime($firstDateMod. '+14day');
                                        $twelveDate = new DateTime($firstDateMod. '+15day');
                                        $thirteenDate = new DateTime($firstDateMod. '+16day');
                                        $fourteenDate = new DateTime($firstDateMod. '+17day');
                                        $fifteenDate = new DateTime($firstDateMod. '+18day');
                                        $sixteenDate = new DateTime($firstDateMod. '+21day');
                                        $seventeenDate = new DateTime($firstDateMod. '+22day');
                                        $eighteenDate = new DateTime($firstDateMod. '+23day');
                                        $nineteenDate = new DateTime($firstDateMod. '+24day');
                                        $twentyDate = new DateTime($firstDateMod. '+25day');
                                        break;
                                    case 6:
                                        $firstDate= date("d/m", strtotime('next monday'));
                                        $firstDateMod = date("Y-m-d", strtotime('next monday'));
                                        $secondDate =  new DateTime($firstDateMod. '+1day');
                                        $thirdDate = new DateTime($firstDateMod. '+2day');
                                        $fourthDate = new DateTime($firstDateMod. '+3day');
                                        $fifthDate = new DateTime($firstDateMod. '+4day');
                                        $sixthDate = new DateTime($firstDateMod. '+7day');
                                        $seventhDate = new DateTime($firstDateMod. '+8day');
                                        $eightDate = new DateTime($firstDateMod. '+9day');
                                        $ninthDate = new DateTime($firstDateMod. '+10day');
                                        $tenthDate = new DateTime($firstDateMod. '+11day');
                                        $elevenDate = new DateTime($firstDateMod. '+14day');
                                        $twelveDate = new DateTime($firstDateMod. '+15day');
                                        $thirteenDate = new DateTime($firstDateMod. '+16day');
                                        $fourteenDate = new DateTime($firstDateMod. '+17day');
                                        $fifteenDate = new DateTime($firstDateMod. '+18day');
                                        $sixteenDate = new DateTime($firstDateMod. '+21day');
                                        $seventeenDate = new DateTime($firstDateMod. '+22day');
                                        $eighteenDate = new DateTime($firstDateMod. '+23day');
                                        $nineteenDate = new DateTime($firstDateMod. '+24day');
                                        $twentyDate = new DateTime($firstDateMod. '+25day');
                                        break;
                                    case 7:
                                        $firstDate= date("d/m", strtotime('next monday'));
                                        $firstDateMod = date("Y-m-d", strtotime('next monday'));
                                        $secondDate =  new DateTime($firstDateMod. '+1day');
                                        $thirdDate = new DateTime($firstDateMod. '+2day');
                                        $fourthDate = new DateTime($firstDateMod. '+3day');
                                        $fifthDate = new DateTime($firstDateMod. '+4day');
                                        $sixthDate = new DateTime($firstDateMod. '+7day');
                                        $seventhDate = new DateTime($firstDateMod. '+8day');
                                        $eightDate = new DateTime($firstDateMod. '+9day');
                                        $ninthDate = new DateTime($firstDateMod. '+10day');
                                        $tenthDate = new DateTime($firstDateMod. '+11day');
                                        $elevenDate = new DateTime($firstDateMod. '+14day');
                                        $twelveDate = new DateTime($firstDateMod. '+15day');
                                        $thirteenDate = new DateTime($firstDateMod. '+16day');
                                        $fourteenDate = new DateTime($firstDateMod. '+17day');
                                        $fifteenDate = new DateTime($firstDateMod. '+18day');
                                        $sixteenDate = new DateTime($firstDateMod. '+21day');
                                        $seventeenDate = new DateTime($firstDateMod. '+22day');
                                        $eighteenDate = new DateTime($firstDateMod. '+23day');
                                        $nineteenDate = new DateTime($firstDateMod. '+24day');
                                        $twentyDate = new DateTime($firstDateMod. '+25day');
                                        break;
                                } 

                            ?>
                            <table>
                                <tr class="cWeek" id="cWeek1">
                                    <th>
                                        <p class="datum"> Måndag </p>
                                        <p class="datum" id="m1"><?php echo $firstDate; ?></p>
                                        <div id="1Mon" class="bookedTime">
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('m1').innerHTML; sessionStorage.tid_x = 'tid_1';" class="call point"> <?PHP 
                                            switch ($checkDay) {
                                                case 1:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="dold1"> var x = document.querySelector("#dold1"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="dold2"> var x = document.querySelector("#dold2"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="dold3"> var x = document.querySelector("#dold3"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="dold4"> var x = document.querySelector("#dold4"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 2:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="dold5"> var x = document.querySelector("#dold5"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="dold6"> var x = document.querySelector("#dold6"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="dold7"> var x = document.querySelector("#dold7"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="dold8"> var x = document.querySelector("#dold8"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 3:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="dold9"> var x = document.querySelector("#dold9"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="dold10"> var x = document.querySelector("#dold10"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="dold11"> var x = document.querySelector("#dold11"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="dold12"> var x = document.querySelector("#dold12"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 4:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="dold13"> var x = document.querySelector("#dold13"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="dold14"> var x = document.querySelector("#dold14"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="dold15"> var x = document.querySelector("#dold15"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="dold16"> var x = document.querySelector("#dold16"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 5:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $firsTime[0];
                                                            break;
                                                        case 1:
                                                            echo $firsTime[5];
                                                            break;
                                                        case 2:
                                                            echo $firsTime[10];
                                                            break;
                                                        case 3:
                                                            echo $firsTime[15];
                                                            break;
                                                    } 
                                                    break;
                                                case 6:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $firsTime[0];
                                                            break;
                                                        case 1:
                                                            echo $firsTime[5];
                                                            break;
                                                        case 2:
                                                            echo $firsTime[10];
                                                            break;
                                                        case 3:
                                                            echo $firsTime[15];
                                                            break;
                                                    }
                                                    break; 
                                                case 7:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $firsTime[0];
                                                            break;
                                                        case 1:
                                                            echo $firsTime[5];
                                                            break;
                                                        case 2:
                                                            echo $firsTime[10];
                                                            break;
                                                        case 3:
                                                            echo $firsTime[15];
                                                            break;
                                                    }
                                                    break; 
                                            } 
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('m1').innerHTML; sessionStorage.tid_x = 'tid_2';" class="call point"> <?PHP 
                                            switch ($checkDay) {
                                                case 1:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="dold17"> var x = document.querySelector("#dold17"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="dold18"> var x = document.querySelector("#dold18"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="dold19"> var x = document.querySelector("#dold19"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="dold20"> var x = document.querySelector("#dold20"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 2:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="dold21"> var x = document.querySelector("#dold21"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="dold22"> var x = document.querySelector("#dold22"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="dold23"> var x = document.querySelector("#dold23"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="dold24"> var x = document.querySelector("#dold24"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 3:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="dold25"> var x = document.querySelector("#dold25"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="dold26"> var x = document.querySelector("#dold26"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="dold27"> var x = document.querySelector("#dold27"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="dold28"> var x = document.querySelector("#dold28"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 4:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="dold29"> var x = document.querySelector("#dold29"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="dold30"> var x = document.querySelector("#dold30"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="dold31"> var x = document.querySelector("#dold31"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="dold32"> var x = document.querySelector("#dold32"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 5:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $seconTime[0];
                                                            break;
                                                        case 1:
                                                            echo $seconTime[5];
                                                            break;
                                                        case 2:
                                                            echo $seconTime[10];
                                                            break;
                                                        case 3:
                                                            echo $seconTime[15];
                                                            break;
                                                    } 
                                                    break;
                                                case 6:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $seconTime[0];
                                                            break;
                                                        case 1:
                                                            echo $seconTime[5];
                                                            break;
                                                        case 2:
                                                            echo $seconTime[10];
                                                            break;
                                                        case 3:
                                                            echo $seconTime[15];
                                                            break;
                                                    }
                                                    break; 
                                                case 7:
                                                switch ($i) {
                                                    case 0:
                                                        echo $seconTime[0];
                                                        break;
                                                    case 1:
                                                        echo $seconTime[5];
                                                        break;
                                                    case 2:
                                                        echo $seconTime[10];
                                                        break;
                                                    case 3:
                                                        echo $seconTime[15];
                                                        break;
                                                }
                                                break; 
                                            } 
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('m1').innerHTML; sessionStorage.tid_x = 'tid_3';" class="call point"> <?PHP 
                                            switch ($checkDay) {
                                                case 1:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="dold33"> var x = document.querySelector("#dold33"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="dold34"> var x = document.querySelector("#dold34"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="dold35"> var x = document.querySelector("#dold35"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="dold36"> var x = document.querySelector("#dold36"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 2:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="dold37"> var x = document.querySelector("#dold37"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="dold38"> var x = document.querySelector("#dold38"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="dold39"> var x = document.querySelector("#dold39"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="dold40"> var x = document.querySelector("#dold40"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 3:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="dold41"> var x = document.querySelector("#dold41"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="dold42"> var x = document.querySelector("#dold42"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="dold43"> var x = document.querySelector("#dold43"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="dold44"> var x = document.querySelector("#dold44"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 4:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="dold45"> var x = document.querySelector("#dold45"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="dold46"> var x = document.querySelector("#dold46"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="dold47"> var x = document.querySelector("#dold47"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="dold48"> var x = document.querySelector("#dold48"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 5:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $thirTime[0];
                                                            break;
                                                        case 1:
                                                            echo $thirTime[5];
                                                            break;
                                                        case 2:
                                                            echo $thirTime[10];
                                                            break;
                                                        case 3:
                                                            echo $thirTime[15];
                                                            break;
                                                    } 
                                                    break;
                                                case 6:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $thirTime[0];
                                                            break;
                                                        case 1:
                                                            echo $thirTime[5];
                                                            break;
                                                        case 2:
                                                            echo $thirTime[10];
                                                            break;
                                                        case 3:
                                                            echo $thirTime[15];
                                                            break;
                                                    }
                                                    break; 
                                                case 7:
                                                switch ($i) {
                                                    case 0:
                                                        echo $thirTime[0];
                                                        break;
                                                    case 1:
                                                        echo $thirTime[5];
                                                        break;
                                                    case 2:
                                                        echo $thirTime[10];
                                                        break;
                                                    case 3:
                                                        echo $thirTime[15];
                                                        break;
                                                }
                                                break; 
                                            } 
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('m1').innerHTML; sessionStorage.tid_x = 'tid_4';" class="call point"> <?PHP 
                                            switch ($checkDay) {
                                                case 1:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="dold49"> var x = document.querySelector("#dold49"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="dold50"> var x = document.querySelector("#dold50"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="dold51"> var x = document.querySelector("#dold51"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="dold52"> var x = document.querySelector("#dold52"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 2:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="dold53"> var x = document.querySelector("#dold53"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="dold54"> var x = document.querySelector("#dold54"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="dold55"> var x = document.querySelector("#dold55"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="dold56"> var x = document.querySelector("#dold56"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 3:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="dold57"> var x = document.querySelector("#dold57"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="dold58"> var x = document.querySelector("#dold58"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="dold59"> var x = document.querySelector("#dold59"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="dold60"> var x = document.querySelector("#dold60"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 4:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="dold61"> var x = document.querySelector("#dold61"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="dold62"> var x = document.querySelector("#dold62"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="dold63"> var x = document.querySelector("#dold63"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="dold64"> var x = document.querySelector("#dold64"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 5:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fourTime[0];
                                                            break;
                                                        case 1:
                                                            echo $fourTime[5];
                                                            break;
                                                        case 2:
                                                            echo $fourTime[10];
                                                            break;
                                                        case 3:
                                                            echo $fourTime[15];
                                                            break;
                                                    } 
                                                    break;
                                                case 6:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fourTime[0];
                                                            break;
                                                        case 1:
                                                            echo $fourTime[5];
                                                            break;
                                                        case 2:
                                                            echo $fourTime[10];
                                                            break;
                                                        case 3:
                                                            echo $fourTime[15];
                                                            break;
                                                    }
                                                    break;
                                                case 7:
                                                switch ($i) {
                                                    case 0:
                                                        echo $fourTime[0];
                                                        break;
                                                    case 1:
                                                        echo $fourTime[5];
                                                        break;
                                                    case 2:
                                                        echo $fourTime[10];
                                                        break;
                                                    case 3:
                                                        echo $fourTime[15];
                                                        break;
                                                }
                                                break;
                                            } 
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('m1').innerHTML; sessionStorage.tid_x = 'tid_5';" class="call point"> <?PHP  
                                            switch ($checkDay) {
                                                case 1:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="dold65"> var x = document.querySelector("#dold65"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="dold66"> var x = document.querySelector("#dold66"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="dold67"> var x = document.querySelector("#dold67"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="dold68"> var x = document.querySelector("#dold68"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 2:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="dold69"> var x = document.querySelector("#dold69"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="dold70"> var x = document.querySelector("#dold70"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="dold71"> var x = document.querySelector("#dold71"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="dold72"> var x = document.querySelector("#dold72"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 3:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="dold73"> var x = document.querySelector("#dold73"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="dold74"> var x = document.querySelector("#dold74"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="dold75"> var x = document.querySelector("#dold75"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="dold76"> var x = document.querySelector("#dold76"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 4:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="dold77"> var x = document.querySelector("#dold77"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="dold78"> var x = document.querySelector("#dold78"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="dold79"> var x = document.querySelector("#dold79"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="dold80"> var x = document.querySelector("#dold80"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 5:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fifTime[0];
                                                            break;
                                                        case 1:
                                                            echo $fifTime[5];
                                                            break;
                                                        case 2:
                                                            echo $fifTime[10];
                                                            break;
                                                        case 3:
                                                            echo $fifTime[15];
                                                            break;
                                                    } 
                                                    break;
                                                case 6:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fifTime[0];
                                                            break;
                                                        case 1:
                                                            echo $fifTime[5];
                                                            break;
                                                        case 2:
                                                            echo $fifTime[10];
                                                            break;
                                                        case 3:
                                                            echo $fifTime[15];
                                                            break;
                                                    }
                                                    break;
                                                case 7:
                                                switch ($i) {
                                                    case 0:
                                                        echo $fifTime[0];
                                                        break;
                                                    case 1:
                                                        echo $fifTime[5];
                                                        break;
                                                    case 2:
                                                        echo $fifTime[10];
                                                        break;
                                                    case 3:
                                                        echo $fifTime[15];
                                                        break;
                                                }
                                                break;
                                            } 
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('m1').innerHTML; sessionStorage.tid_x = 'tid_6';" class="call point"> <?PHP 
                                            switch ($checkDay) {
                                                case 1:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="dold81"> var x = document.querySelector("#dold81"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="dold82"> var x = document.querySelector("#dold82"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="dold83"> var x = document.querySelector("#dold83"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="dold84"> var x = document.querySelector("#dold84"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 2:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="dold85"> var x = document.querySelector("#dold85"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="dold86"> var x = document.querySelector("#dold86"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="dold87"> var x = document.querySelector("#dold87"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="dold88"> var x = document.querySelector("#dold88"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 3:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="dold89"> var x = document.querySelector("#dold89"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="dold90"> var x = document.querySelector("#dold90"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="dold91"> var x = document.querySelector("#dold91"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="dold92"> var x = document.querySelector("#dold92"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 4:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="dold93"> var x = document.querySelector("#dold93"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="dold94"> var x = document.querySelector("#dold94"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="dold95"> var x = document.querySelector("#dold95"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="dold96"> var x = document.querySelector("#dold96"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 5:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $sixTime[0];
                                                            break;
                                                        case 1:
                                                            echo $sixTime[5];
                                                            break;
                                                        case 2:
                                                            echo $sixTime[10];
                                                            break;
                                                        case 3:
                                                            echo $sixTime[15];
                                                            break;
                                                    } 
                                                    break;
                                                case 6:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $sixTime[0];
                                                            break;
                                                        case 1:
                                                            echo $sixTime[5];
                                                            break;
                                                        case 2:
                                                            echo $sixTime[10];
                                                            break;
                                                        case 3:
                                                            echo $sixTime[15];
                                                            break;
                                                    }
                                                    break;
                                                case 7:
                                                switch ($i) {
                                                    case 0:
                                                        echo $sixTime[0];
                                                        break;
                                                    case 1:
                                                        echo $sixTime[5];
                                                        break;
                                                    case 2:
                                                        echo $sixTime[10];
                                                        break;
                                                    case 3:
                                                        echo $sixTime[15];
                                                        break;
                                                }
                                                break;
                                            }
                                            ?></span>
                                            
                                        </div>
                                    </th>
                                    <th> 
                                        <p class="datum"> Tisdag </p>
                                        <p class="datum" id="t1"><?php echo $secondDate->format('d/m'); ?> </p>
                                        <div id="1Tue" class="bookedTime">
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('t1').innerHTML; sessionStorage.tid_x = 'tid_1';" class="call point"> <?PHP
                                            switch ($checkDay) {
                                                case 1:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $firsTime[1];
                                                            break;
                                                        case 1:
                                                            echo $firsTime[6];
                                                            break;
                                                        case 2:
                                                            echo $firsTime[11];
                                                            break;
                                                        case 3:
                                                            echo $firsTime[16];
                                                            break;
                                                    }
                                                    break;
                                                case 2:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="dold97"> var x = document.querySelector("#dold97"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="dold98"> var x = document.querySelector("#dold98"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="dold99"> var x = document.querySelector("#dold99"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldi1"> var x = document.querySelector("#doldi1"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 3:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldi2"> var x = document.querySelector("#doldi2"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldi3"> var x = document.querySelector("#doldi3"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldi4"> var x = document.querySelector("#doldi4"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldi5"> var x = document.querySelector("#doldi5"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 4:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldi6"> var x = document.querySelector("#doldi6"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldi7"> var x = document.querySelector("#doldi7"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldi8"> var x = document.querySelector("#doldi8"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldi9"> var x = document.querySelector("#doldi9"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 5:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $firsTime[1];
                                                            break;
                                                        case 1:
                                                            echo $firsTime[6];
                                                            break;
                                                        case 2:
                                                            echo $firsTime[11];
                                                            break;
                                                        case 3:
                                                            echo $firsTime[16];
                                                            break;
                                                    } 
                                                    break;
                                                case 6:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $firsTime[1];
                                                            break;
                                                        case 1:
                                                            echo $firsTime[6];
                                                            break;
                                                        case 2:
                                                            echo $firsTime[11];
                                                            break;
                                                        case 3:
                                                            echo $firsTime[16];
                                                            break;
                                                    }
                                                    break;
                                                case 7:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $firsTime[1];
                                                            break;
                                                        case 1:
                                                            echo $firsTime[6];
                                                            break;
                                                        case 2:
                                                            echo $firsTime[11];
                                                            break;
                                                        case 3:
                                                            echo $firsTime[16];
                                                            break;
                                                    }
                                                    break;
                                            } 
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('t1').innerHTML; sessionStorage.tid_x = 'tid_2';" class="call point"> <?PHP 
                                            switch ($checkDay) {
                                                case 1:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $seconTime[1];
                                                            break;
                                                        case 1:
                                                            echo $seconTime[6];
                                                            break;
                                                        case 2:
                                                            echo $seconTime[11];
                                                            break;
                                                        case 3:
                                                            echo $seconTime[16];
                                                            break;
                                                    }
                                                    break;
                                                case 2:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldi10"> var x = document.querySelector("#doldi10"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldi12"> var x = document.querySelector("#doldi12"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldi13"> var x = document.querySelector("#doldi13"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldi14"> var x = document.querySelector("#doldi14"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 3:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldi15"> var x = document.querySelector("#doldi15"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldi16"> var x = document.querySelector("#doldi16"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldi17"> var x = document.querySelector("#doldi17"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldi18"> var x = document.querySelector("#doldi18"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 4:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldi19"> var x = document.querySelector("#doldi19"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldi20"> var x = document.querySelector("#doldi20"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldi21"> var x = document.querySelector("#doldi21"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldi22"> var x = document.querySelector("#doldi22"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 5:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $seconTime[1];
                                                            break;
                                                        case 1:
                                                            echo $seconTime[6];
                                                            break;
                                                        case 2:
                                                            echo $seconTime[11];
                                                            break;
                                                        case 3:
                                                            echo $seconTime[16];
                                                            break;
                                                    } 
                                                    break;
                                                case 6:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $seconTime[1];
                                                            break;
                                                        case 1:
                                                            echo $seconTime[6];
                                                            break;
                                                        case 2:
                                                            echo $seconTime[11];
                                                            break;
                                                        case 3:
                                                            echo $seconTime[16];
                                                            break;
                                                    }
                                                    break;
                                                case 7:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $seconTime[1];
                                                            break;
                                                        case 1:
                                                            echo $seconTime[6];
                                                            break;
                                                        case 2:
                                                            echo $seconTime[11];
                                                            break;
                                                        case 3:
                                                            echo $seconTime[16];
                                                            break;
                                                    }
                                                    break;
                                            } 
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('t1').innerHTML; sessionStorage.tid_x = 'tid_3';" class="call point"> <?PHP 
                                            switch ($checkDay) {
                                                case 1:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $thirTime[1];
                                                            break;
                                                        case 1:
                                                            echo $thirTime[6];
                                                            break;
                                                        case 2:
                                                            echo $thirTime[11];
                                                            break;
                                                        case 3:
                                                            echo $thirTime[16];
                                                            break;
                                                    }
                                                    break;
                                                case 2:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldi23"> var x = document.querySelector("#doldi23"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldi24"> var x = document.querySelector("#doldi24"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldi25"> var x = document.querySelector("#doldi25"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldi26"> var x = document.querySelector("#doldi26"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 3:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldi27"> var x = document.querySelector("#doldi27"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldi28"> var x = document.querySelector("#doldi28"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldi29"> var x = document.querySelector("#doldi29"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldi30"> var x = document.querySelector("#doldi30"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 4:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldi31"> var x = document.querySelector("#doldi31"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldi32"> var x = document.querySelector("#doldi32"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldi33"> var x = document.querySelector("#doldi33"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldi34"> var x = document.querySelector("#doldi34"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 5:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $thirTime[1];
                                                            break;
                                                        case 1:
                                                            echo $thirTime[6];
                                                            break;
                                                        case 2:
                                                            echo $thirTime[11];
                                                            break;
                                                        case 3:
                                                            echo $thirTime[16];
                                                            break;
                                                    } 
                                                    break;
                                                case 6:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $thirTime[1];
                                                            break;
                                                        case 1:
                                                            echo $thirTime[6];
                                                            break;
                                                        case 2:
                                                            echo $thirTime[11];
                                                            break;
                                                        case 3:
                                                            echo $thirTime[16];
                                                            break;
                                                    } 
                                                    break;
                                                case 7:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $thirTime[1];
                                                            break;
                                                        case 1:
                                                            echo $thirTime[6];
                                                            break;
                                                        case 2:
                                                            echo $thirTime[11];
                                                            break;
                                                        case 3:
                                                            echo $thirTime[16];
                                                            break;
                                                    }
                                                    break;
                                            } 
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('t1').innerHTML; sessionStorage.tid_x = 'tid_4';" class="call point"> <?PHP 
                                              switch ($checkDay) {
                                                case 1:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fourTime[1];
                                                            break;
                                                        case 1:
                                                            echo $fourTime[6];
                                                            break;
                                                        case 2:
                                                            echo $fourTime[11];
                                                            break;
                                                        case 3:
                                                            echo $fourTime[16];
                                                            break;
                                                    }
                                                    break;
                                                case 2:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldi35"> var x = document.querySelector("#doldi35"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldi36"> var x = document.querySelector("#doldi36"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldi37"> var x = document.querySelector("#doldi37"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldi38"> var x = document.querySelector("#doldi38"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 3:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldi39"> var x = document.querySelector("#doldi39"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldi40"> var x = document.querySelector("#doldi40"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldi41"> var x = document.querySelector("#doldi41"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldi42"> var x = document.querySelector("#doldi42"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 4:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldi43"> var x = document.querySelector("#doldi43"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldi44"> var x = document.querySelector("#doldi44"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldi45"> var x = document.querySelector("#doldi45"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldi46"> var x = document.querySelector("#doldi46"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 5:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fourTime[1];
                                                            break;
                                                        case 1:
                                                            echo $fourTime[6];
                                                            break;
                                                        case 2:
                                                            echo $fourTime[11];
                                                            break;
                                                        case 3:
                                                            echo $fourTime[16];
                                                            break;
                                                    } 
                                                    break;
                                                case 6:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fourTime[1];
                                                            break;
                                                        case 1:
                                                            echo $fourTime[6];
                                                            break;
                                                        case 2:
                                                            echo $fourTime[11];
                                                            break;
                                                        case 3:
                                                            echo $fourTime[16];
                                                            break;
                                                    }
                                                    break;
                                                case 7:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fourTime[1];
                                                            break;
                                                        case 1:
                                                            echo $fourTime[6];
                                                            break;
                                                        case 2:
                                                            echo $fourTime[11];
                                                            break;
                                                        case 3:
                                                            echo $fourTime[16];
                                                            break;
                                                    }
                                                    break;
                                            } 
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('t1').innerHTML; sessionStorage.tid_x = 'tid_5';" class="call point"> <?PHP  
                                               switch ($checkDay) {
                                                case 1:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fifTime[1];
                                                            break;
                                                        case 1:
                                                            echo $fifTime[6];
                                                            break;
                                                        case 2:
                                                            echo $fifTime[11];
                                                            break;
                                                        case 3:
                                                            echo $fifTime[16];
                                                            break;
                                                    }
                                                    break;
                                                case 2:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldi47"> var x = document.querySelector("#doldi47"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldi48"> var x = document.querySelector("#doldi48"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldi49"> var x = document.querySelector("#doldi49"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldi50"> var x = document.querySelector("#doldi50"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 3:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldi51"> var x = document.querySelector("#doldi51"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldi52"> var x = document.querySelector("#doldi52"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldi53"> var x = document.querySelector("#doldi53"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldi54"> var x = document.querySelector("#doldi54"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 4:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldi55"> var x = document.querySelector("#doldi55"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldi56"> var x = document.querySelector("#doldi56"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldi57"> var x = document.querySelector("#doldi57"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldi58"> var x = document.querySelector("#doldi58"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 5:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fifTime[1];
                                                            break;
                                                        case 1:
                                                            echo $fifTime[6];
                                                            break;
                                                        case 2:
                                                            echo $fifTime[11];
                                                            break;
                                                        case 3:
                                                            echo $fifTime[16];
                                                            break;
                                                    } 
                                                    break;
                                                case 6:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fifTime[1];
                                                            break;
                                                        case 1:
                                                            echo $fifTime[6];
                                                            break;
                                                        case 2:
                                                            echo $fifTime[11];
                                                            break;
                                                        case 3:
                                                            echo $fifTime[16];
                                                            break;
                                                    }
                                                    break; 
                                                case 7:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fifTime[1];
                                                            break;
                                                        case 1:
                                                            echo $fifTime[6];
                                                            break;
                                                        case 2:
                                                            echo $fifTime[11];
                                                            break;
                                                        case 3:
                                                            echo $fifTime[16];
                                                            break;
                                                    }
                                                    break; 
                                            } 
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('t1').innerHTML; sessionStorage.tid_x = 'tid_6';" class="call point">
                                            <?PHP 
                                            switch ($checkDay) {
                                                case 1:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $sixTime[1];
                                                            break;
                                                        case 1:
                                                            echo $sixTime[6];
                                                            break;
                                                        case 2:
                                                            echo $sixTime[11];
                                                            break;
                                                        case 3:
                                                            echo $sixTime[16];
                                                            break;
                                                    }
                                                    break;
                                                case 2:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldi60"> var x = document.querySelector("#doldi60"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldi61"> var x = document.querySelector("#doldi61"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldi62"> var x = document.querySelector("#doldi62"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldi63"> var x = document.querySelector("#doldi63"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 3:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldi64"> var x = document.querySelector("#doldi64"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldi65"> var x = document.querySelector("#doldi65"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldi66"> var x = document.querySelector("#doldi66"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldi67"> var x = document.querySelector("#doldi67"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 4:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldi68"> var x = document.querySelector("#doldi68"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldi69"> var x = document.querySelector("#doldi69"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldi70"> var x = document.querySelector("#doldi70"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldi71"> var x = document.querySelector("#doldi71"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 5:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $sixTime[1];
                                                            break;
                                                        case 1:
                                                            echo $sixTime[6];
                                                            break;
                                                        case 2:
                                                            echo $sixTime[11];
                                                            break;
                                                        case 3:
                                                            echo $sixTime[16];
                                                            break;
                                                    } 
                                                    break;
                                                case 6:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $sixTime[1];
                                                            break;
                                                        case 1:
                                                            echo $sixTime[6];
                                                            break;
                                                        case 2:
                                                            echo $sixTime[11];
                                                            break;
                                                        case 3:
                                                            echo $sixTime[16];
                                                            break;
                                                    }
                                                    break;
                                                case 7:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $sixTime[1];
                                                            break;
                                                        case 1:
                                                            echo $sixTime[6];
                                                            break;
                                                        case 2:
                                                            echo $sixTime[11];
                                                            break;
                                                        case 3:
                                                            echo $sixTime[16];
                                                            break;
                                                    } 
                                                    break;
                                            } 
                                            ?></span>
                                            
                                        </div>
                                    </th>
                                    <th> 
                                        <p class="datum"> Onsdag </p>
                                        <p class="datum" id="o1"><?php echo $thirdDate->format('d/m'); ?></p>
                                        <div id="1Wed" class="bookedTime">                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('o1').innerHTML; sessionStorage.tid_x = 'tid_1';" class="call point"> <?PHP 
                                            switch ($checkDay) {
                                                case 1:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $firsTime[2];
                                                            break;
                                                        case 1:
                                                            echo $firsTime[7];
                                                            break;
                                                        case 2:
                                                            echo $firsTime[12];
                                                            break;
                                                        case 3:
                                                            echo $firsTime[17];
                                                            break;
                                                    }
                                                    break;
                                                case 2:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $firsTime[2];
                                                            break;
                                                        case 1:
                                                            echo $firsTime[7];
                                                            break;
                                                        case 2:
                                                            echo $firsTime[12];
                                                            break;
                                                        case 3:
                                                            echo $firsTime[17];
                                                            break;
                                                        }
                                                    break;
                                                case 3:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldi72"> var x = document.querySelector("#doldi72"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldi73"> var x = document.querySelector("#doldi73"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldi74"> var x = document.querySelector("#doldi74"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldi75"> var x = document.querySelector("#doldi75"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 4:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldi76"> var x = document.querySelector("#doldi76"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldi77"> var x = document.querySelector("#doldi77"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldi78"> var x = document.querySelector("#doldi78"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldi79"> var x = document.querySelector("#doldi79"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 5:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $firsTime[2];
                                                            break;
                                                        case 1:
                                                            echo $firsTime[7];
                                                            break;
                                                        case 2:
                                                            echo $firsTime[12];
                                                            break;
                                                        case 3:
                                                            echo $firsTime[17];
                                                            break;
                                                    } 
                                                    break;
                                                case 6:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $firsTime[2];
                                                            break;
                                                        case 1:
                                                            echo $firsTime[7];
                                                            break;
                                                        case 2:
                                                            echo $firsTime[12];
                                                            break;
                                                        case 3:
                                                            echo $firsTime[17];
                                                            break;
                                                    }
                                                    break;
                                                case 7:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $firsTime[2];
                                                            break;
                                                        case 1:
                                                            echo $firsTime[7];
                                                            break;
                                                        case 2:
                                                            echo $firsTime[12];
                                                            break;
                                                        case 3:
                                                            echo $firsTime[17];
                                                            break;
                                                    } 
                                                    break;
                                            } 
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('o1').innerHTML; sessionStorage.tid_x = 'tid_2';" class="call point"> <?PHP 
                                            switch ($checkDay) {
                                                case 1:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $seconTime[2];
                                                            break;
                                                        case 1:
                                                            echo $seconTime[7];
                                                            break;
                                                        case 2:
                                                            echo $seconTime[12];
                                                            break;
                                                        case 3:
                                                            echo $seconTime[17];
                                                            break;
                                                    }
                                                    break;
                                                case 2:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $seconTime[2];
                                                            break;
                                                        case 1:
                                                            echo $seconTime[7];
                                                            break;
                                                        case 2:
                                                            echo $seconTime[12];
                                                            break;
                                                        case 3:
                                                            echo $seconTime[17];
                                                            break;
                                                        }
                                                    break;
                                                case 3:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldi80"> var x = document.querySelector("#doldi80"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldi81"> var x = document.querySelector("#doldi81"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldi82"> var x = document.querySelector("#doldi82"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldi83"> var x = document.querySelector("#doldi83"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 4:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldi84"> var x = document.querySelector("#doldi84"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldi85"> var x = document.querySelector("#doldi85"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldi86"> var x = document.querySelector("#doldi86"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldi87"> var x = document.querySelector("#doldi87"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 5:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $seconTime[2];
                                                            break;
                                                        case 1:
                                                            echo $seconTime[7];
                                                            break;
                                                        case 2:
                                                            echo $seconTime[12];
                                                            break;
                                                        case 3:
                                                            echo $seconTime[17];
                                                            break;
                                                    } 
                                                    break;
                                                case 6:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $seconTime[2];
                                                            break;
                                                        case 1:
                                                            echo $seconTime[7];
                                                            break;
                                                        case 2:
                                                            echo $seconTime[12];
                                                            break;
                                                        case 3:
                                                            echo $seconTime[17];
                                                            break;
                                                    } 
                                                    break;
                                                case 7:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $seconTime[2];
                                                            break;
                                                        case 1:
                                                            echo $seconTime[7];
                                                            break;
                                                        case 2:
                                                            echo $seconTime[12];
                                                            break;
                                                        case 3:
                                                            echo $seconTime[17];
                                                            break;
                                                    } 
                                                    break;
                                            } 
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('o1').innerHTML; sessionStorage.tid_x = 'tid_3';" class="call point"> <?PHP 
                                                switch ($checkDay) {
                                                    case 1:
                                                        switch ($i) {
                                                            case 0:
                                                                echo $thirTime[2];
                                                                break;
                                                            case 1:
                                                                echo $thirTime[7];
                                                                break;
                                                            case 2:
                                                                echo $thirTime[12];
                                                                break;
                                                            case 3:
                                                                echo $thirTime[17];
                                                                break;
                                                        }
                                                        break;
                                                    case 2:
                                                        switch ($i) {
                                                            case 0:
                                                                echo $thirTime[2];
                                                                break;
                                                            case 1:
                                                                echo $thirTime[7];
                                                                break;
                                                            case 2:
                                                                echo $thirTime[12];
                                                                break;
                                                            case 3:
                                                                echo $thirTime[17];
                                                                break;
                                                            }
                                                        break;
                                                    case 3:
                                                        switch ($i) {
                                                            case 0:
                                                                echo '<script id="doldi88"> var x = document.querySelector("#doldi88"); x.parentNode.style.display="none";</script>';
                                                                break;
                                                            case 1:
                                                                echo '<script id="doldi89"> var x = document.querySelector("#doldi89"); x.parentNode.style.display="none";</script>';
                                                                break;
                                                            case 2:
                                                                echo '<script id="doldi90"> var x = document.querySelector("#doldi90"); x.parentNode.style.display="none";</script>';
                                                                break;
                                                            case 3:
                                                                echo '<script id="doldi91"> var x = document.querySelector("#doldi91"); x.parentNode.style.display="none";</script>';
                                                                break;
                                                        }
                                                        break;
                                                    case 4:
                                                        switch ($i) {
                                                            case 0:
                                                                echo '<script id="doldi92"> var x = document.querySelector("#doldi92"); x.parentNode.style.display="none";</script>';
                                                                break;
                                                            case 1:
                                                                echo '<script id="doldi93"> var x = document.querySelector("#doldi93"); x.parentNode.style.display="none";</script>';
                                                                break;
                                                            case 2:
                                                                echo '<script id="doldi94"> var x = document.querySelector("#doldi94"); x.parentNode.style.display="none";</script>';
                                                                break;
                                                            case 3:
                                                                echo '<script id="doldi95"> var x = document.querySelector("#doldi95"); x.parentNode.style.display="none";</script>';
                                                                break;
                                                        }
                                                        break;
                                                    case 5:
                                                        switch ($i) {
                                                            case 0:
                                                                echo $thirTime[2];
                                                                break;
                                                            case 1:
                                                                echo $thirTime[7];
                                                                break;
                                                            case 2:
                                                                echo $thirTime[12];
                                                                break;
                                                            case 3:
                                                                echo $thirTime[17];
                                                                break;
                                                        } 
                                                        break;
                                                    case 6:
                                                        switch ($i) {
                                                            case 0:
                                                                echo $thirTime[2];
                                                                break;
                                                            case 1:
                                                                echo $thirTime[7];
                                                                break;
                                                            case 2:
                                                                echo $thirTime[12];
                                                                break;
                                                            case 3:
                                                                echo $thirTime[17];
                                                                break;
                                                        } 
                                                        break;
                                                    case 7:
                                                        switch ($i) {
                                                            case 0:
                                                                echo $thirTime[2];
                                                                break;
                                                            case 1:
                                                                echo $thirTime[7];
                                                                break;
                                                            case 2:
                                                                echo $thirTime[12];
                                                                break;
                                                            case 3:
                                                                echo $thirTime[17];
                                                                break;
                                                        } 
                                                        break;
                                                } 
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('o1').innerHTML; sessionStorage.tid_x = 'tid_4';" class="call point"> <?PHP 
                                            switch ($checkDay) {
                                                case 1:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fourTime[2];
                                                            break;
                                                        case 1:
                                                            echo $fourTime[7];
                                                            break;
                                                        case 2:
                                                            echo $fourTime[12];
                                                            break;
                                                        case 3:
                                                            echo $fourTime[17];
                                                            break;
                                                    }
                                                    break;
                                                case 2:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fourTime[2];
                                                            break;
                                                        case 1:
                                                            echo $fourTime[7];
                                                            break;
                                                        case 2:
                                                            echo $fourTime[12];
                                                            break;
                                                        case 3:
                                                            echo $fourTime[17];
                                                            break;
                                                        }
                                                    break;
                                                case 3:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldi96"> var x = document.querySelector("#doldi96"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldi97"> var x = document.querySelector("#doldi97"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldi98"> var x = document.querySelector("#doldi98"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldi99"> var x = document.querySelector("#doldi99"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 4:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldis1"> var x = document.querySelector("#doldis1"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldis2"> var x = document.querySelector("#doldis2"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldis3"> var x = document.querySelector("#doldis3"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldis4"> var x = document.querySelector("#doldis4"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 5:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fourTime[2];
                                                            break;
                                                        case 1:
                                                            echo $fourTime[7];
                                                            break;
                                                        case 2:
                                                            echo $fourTime[12];
                                                            break;
                                                        case 3:
                                                            echo $fourTime[17];
                                                            break;
                                                    } 
                                                    break;
                                                case 6:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fourTime[2];
                                                            break;
                                                        case 1:
                                                            echo $fourTime[7];
                                                            break;
                                                        case 2:
                                                            echo $fourTime[12];
                                                            break;
                                                        case 3:
                                                            echo $fourTime[17];
                                                            break;
                                                    } 
                                                    break;
                                                case 7:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fourTime[2];
                                                            break;
                                                        case 1:
                                                            echo $fourTime[7];
                                                            break;
                                                        case 2:
                                                            echo $fourTime[12];
                                                            break;
                                                        case 3:
                                                            echo $fourTime[17];
                                                            break;
                                                    } 
                                                    break;
                                            } 
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('o1').innerHTML; sessionStorage.tid_x = 'tid_5';" class="call point"> <?PHP  
                                            switch ($checkDay) {
                                                case 1:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fifTime[2];
                                                            break;
                                                        case 1:
                                                            echo $fifTime[7];
                                                            break;
                                                        case 2:
                                                            echo $fifTime[12];
                                                            break;
                                                        case 3:
                                                            echo $fifTime[17];
                                                            break;
                                                    }
                                                    break;
                                                case 2:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fifTime[2];
                                                            break;
                                                        case 1:
                                                            echo $fifTime[7];
                                                            break;
                                                        case 2:
                                                            echo $fifTime[12];
                                                            break;
                                                        case 3:
                                                            echo $fifTime[17];
                                                            break;
                                                        }
                                                    break;
                                                case 3:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldis5"> var x = document.querySelector("#doldis5"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldis6"> var x = document.querySelector("#doldis6"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldis7"> var x = document.querySelector("#doldis7"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldis8"> var x = document.querySelector("#doldis8"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 4:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldis9"> var x = document.querySelector("#doldis9"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldis10"> var x = document.querySelector("#doldis10"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldis11"> var x = document.querySelector("#doldis11"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldis12"> var x = document.querySelector("#doldis12"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 5:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fifTime[2];
                                                            break;
                                                        case 1:
                                                            echo $fifTime[7];
                                                            break;
                                                        case 2:
                                                            echo $fifTime[12];
                                                            break;
                                                        case 3:
                                                            echo $fifTime[17];
                                                            break;
                                                    } 
                                                    break;
                                                case 6:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fifTime[2];
                                                            break;
                                                        case 1:
                                                            echo $fifTime[7];
                                                            break;
                                                        case 2:
                                                            echo $fifTime[12];
                                                            break;
                                                        case 3:
                                                            echo $fifTime[17];
                                                            break;
                                                    } 
                                                    break;
                                                case 7:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fifTime[2];
                                                            break;
                                                        case 1:
                                                            echo $fifTime[7];
                                                            break;
                                                        case 2:
                                                            echo $fifTime[12];
                                                            break;
                                                        case 3:
                                                            echo $fifTime[17];
                                                            break;
                                                    } 
                                                    break;
                                            } 
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('o1').innerHTML; sessionStorage.tid_x = 'tid_6';" class="call point"> <?PHP 
                                            switch ($checkDay) {
                                                case 1:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $sixTime[2];
                                                            break;
                                                        case 1:
                                                            echo $sixTime[7];
                                                            break;
                                                        case 2:
                                                            echo $sixTime[12];
                                                            break;
                                                        case 3:
                                                            echo $sixTime[17];
                                                            break;
                                                    }
                                                    break;
                                                case 2:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $sixTime[2];
                                                            break;
                                                        case 1:
                                                            echo $sixTime[7];
                                                            break;
                                                        case 2:
                                                            echo $sixTime[12];
                                                            break;
                                                        case 3:
                                                            echo $sixTime[17];
                                                            break;
                                                        }
                                                    break;
                                                case 3:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldis13"> var x = document.querySelector("#doldis13"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldis14"> var x = document.querySelector("#doldis14"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldis15"> var x = document.querySelector("#doldis15"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldis16"> var x = document.querySelector("#doldis16"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 4:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldis17"> var x = document.querySelector("#doldis17"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldis18"> var x = document.querySelector("#doldis18"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldis19"> var x = document.querySelector("#doldis19"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldis20"> var x = document.querySelector("#doldis20"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 5:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $sixTime[2];
                                                            break;
                                                        case 1:
                                                            echo $sixTime[7];
                                                            break;
                                                        case 2:
                                                            echo $sixTime[12];
                                                            break;
                                                        case 3:
                                                            echo $sixTime[17];
                                                            break;
                                                    } 
                                                    break;
                                                case 6:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $sixTime[2];
                                                            break;
                                                        case 1:
                                                            echo $sixTime[7];
                                                            break;
                                                        case 2:
                                                            echo $sixTime[12];
                                                            break;
                                                        case 3:
                                                            echo $sixTime[17];
                                                            break;
                                                    } 
                                                    break;
                                                case 7:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $sixTime[2];
                                                            break;
                                                        case 1:
                                                            echo $sixTime[7];
                                                            break;
                                                        case 2:
                                                            echo $sixTime[12];
                                                            break;
                                                        case 3:
                                                            echo $sixTime[17];
                                                            break;
                                                    } 
                                                    break;
                                            } 
                                            ?></span>
                                            
                                        </div>
                                    </th>
                                    <th> 
                                        <p class="datum"> Torsdag </p>
                                        <p class="datum" id="to1"><?php echo $fourthDate->format('d/m'); ?></p>
                                        <div id="1Thu" class="bookedTime">                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('to1').innerHTML; sessionStorage.tid_x = 'tid_1';" class="call point"> <?PHP 
                                            switch ($checkDay) {
                                                case 1:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $firsTime[3];
                                                            break;
                                                        case 1:
                                                            echo $firsTime[8];
                                                            break;
                                                        case 2:
                                                            echo $firsTime[13];
                                                            break;
                                                        case 3:
                                                            echo $firsTime[18];
                                                            break;
                                                    }
                                                    break;
                                                case 2:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $firsTime[3];
                                                            break;
                                                        case 1:
                                                            echo $firsTime[8];
                                                            break;
                                                        case 2:
                                                            echo $firsTime[13];
                                                            break;
                                                        case 3:
                                                            echo $firsTime[18];
                                                            break;
                                                        }
                                                    break;
                                                case 3:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $firsTime[3];
                                                            break;
                                                        case 1:
                                                            echo $firsTime[8];
                                                            break;
                                                        case 2:
                                                            echo $firsTime[13];
                                                            break;
                                                        case 3:
                                                            echo $firsTime[18];
                                                            break;
                                                        }
                                                    break;
                                                case 4:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldis21"> var x = document.querySelector("#doldis21"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldis22"> var x = document.querySelector("#doldis22"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldis23"> var x = document.querySelector("#doldis23"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldis24"> var x = document.querySelector("#doldis24"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 5:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $firsTime[3];
                                                            break;
                                                        case 1:
                                                            echo $firsTime[8];
                                                            break;
                                                        case 2:
                                                            echo $firsTime[13];
                                                            break;
                                                        case 3:
                                                            echo $firsTime[18];
                                                            break;
                                                    } 
                                                    break;
                                                case 6:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $firsTime[3];
                                                            break;
                                                        case 1:
                                                            echo $firsTime[8];
                                                            break;
                                                        case 2:
                                                            echo $firsTime[13];
                                                            break;
                                                        case 3:
                                                            echo $firsTime[18];
                                                            break;
                                                    } 
                                                    break;
                                                case 7:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $firsTime[3];
                                                            break;
                                                        case 1:
                                                            echo $firsTime[8];
                                                            break;
                                                        case 2:
                                                            echo $firsTime[13];
                                                            break;
                                                        case 3:
                                                            echo $firsTime[18];
                                                            break;
                                                    } 
                                                    break;
                                            } 
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('to1').innerHTML; sessionStorage.tid_x = 'tid_2';" class="call point"> <?PHP 
                                            switch ($checkDay) {
                                                case 1:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $seconTime[3];
                                                            break;
                                                        case 1:
                                                            echo $seconTime[8];
                                                            break;
                                                        case 2:
                                                            echo $seconTime[13];
                                                            break;
                                                        case 3:
                                                            echo $seconTime[18];
                                                            break;
                                                    }
                                                    break;
                                                case 2:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $seconTime[3];
                                                            break;
                                                        case 1:
                                                            echo $seconTime[8];
                                                            break;
                                                        case 2:
                                                            echo $seconTime[13];
                                                            break;
                                                        case 3:
                                                            echo $seconTime[18];
                                                            break;
                                                        }
                                                    break;
                                                case 3:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $seconTime[3];
                                                            break;
                                                        case 1:
                                                            echo $seconTime[8];
                                                            break;
                                                        case 2:
                                                            echo $seconTime[13];
                                                            break;
                                                        case 3:
                                                            echo $seconTime[18];
                                                            break;
                                                        }
                                                    break;
                                                case 4:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldis25"> var x = document.querySelector("#doldis25"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldis26"> var x = document.querySelector("#doldis26"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldis27"> var x = document.querySelector("#doldis27"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldis28"> var x = document.querySelector("#doldis28"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 5:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $seconTime[3];
                                                            break;
                                                        case 1:
                                                            echo $seconTime[8];
                                                            break;
                                                        case 2:
                                                            echo $seconTime[13];
                                                            break;
                                                        case 3:
                                                            echo $seconTime[18];
                                                            break;
                                                    } 
                                                    break;
                                                case 6:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $seconTime[3];
                                                            break;
                                                        case 1:
                                                            echo $seconTime[8];
                                                            break;
                                                        case 2:
                                                            echo $seconTime[13];
                                                            break;
                                                        case 3:
                                                            echo $seconTime[18];
                                                            break;
                                                    } 
                                                    break;
                                                case 7:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $seconTime[3];
                                                            break;
                                                        case 1:
                                                            echo $seconTime[8];
                                                            break;
                                                        case 2:
                                                            echo $seconTime[13];
                                                            break;
                                                        case 3:
                                                            echo $seconTime[18];
                                                            break;
                                                    } 
                                                    break;
                                            } 
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('to1').innerHTML; sessionStorage.tid_x = 'tid_3';" class="call point">
                                            <?PHP 
                                            switch ($checkDay) {
                                                case 1:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $thirTime[3];
                                                            break;
                                                        case 1:
                                                            echo $thirTime[8];
                                                            break;
                                                        case 2:
                                                            echo $thirTime[13];
                                                            break;
                                                        case 3:
                                                            echo $thirTime[18];
                                                            break;
                                                    }
                                                    break;
                                                case 2:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $thirTime[3];
                                                            break;
                                                        case 1:
                                                            echo $thirTime[8];
                                                            break;
                                                        case 2:
                                                            echo $thirTime[13];
                                                            break;
                                                        case 3:
                                                            echo $thirTime[18];
                                                            break;
                                                        }
                                                    break;
                                                case 3:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $thirTime[3];
                                                            break;
                                                        case 1:
                                                            echo $thirTime[8];
                                                            break;
                                                        case 2:
                                                            echo $thirTime[13];
                                                            break;
                                                        case 3:
                                                            echo $thirTime[18];
                                                            break;
                                                        }
                                                    break;
                                                case 4:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldis29"> var x = document.querySelector("#doldis29"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldis30"> var x = document.querySelector("#doldis30"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldis31"> var x = document.querySelector("#doldis31"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldis33"> var x = document.querySelector("#doldis33"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 5:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $thirTime[3];
                                                            break;
                                                        case 1:
                                                            echo $thirTime[8];
                                                            break;
                                                        case 2:
                                                            echo $thirTime[13];
                                                            break;
                                                        case 3:
                                                            echo $thirTime[18];
                                                            break;
                                                    } 
                                                    break;
                                                case 6:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $thirTime[3];
                                                            break;
                                                        case 1:
                                                            echo $thirTime[8];
                                                            break;
                                                        case 2:
                                                            echo $thirTime[13];
                                                            break;
                                                        case 3:
                                                            echo $thirTime[18];
                                                            break;
                                                    } 
                                                    break;
                                                case 7:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $thirTime[3];
                                                            break;
                                                        case 1:
                                                            echo $thirTime[8];
                                                            break;
                                                        case 2:
                                                            echo $thirTime[13];
                                                            break;
                                                        case 3:
                                                            echo $thirTime[18];
                                                            break;
                                                    } 
                                                    break;
                                            } 
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('to1').innerHTML; sessionStorage.tid_x = 'tid_4';" class="call point">
                                            <?PHP 
                                            switch ($checkDay) {
                                                case 1:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fourTime[3];
                                                            break;
                                                        case 1:
                                                            echo $fourTime[8];
                                                            break;
                                                        case 2:
                                                            echo $fourTime[13];
                                                            break;
                                                        case 3:
                                                            echo $fourTime[18];
                                                            break;
                                                    }
                                                    break;
                                                case 2:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fourTime[3];
                                                            break;
                                                        case 1:
                                                            echo $fourTime[8];
                                                            break;
                                                        case 2:
                                                            echo $fourTime[13];
                                                            break;
                                                        case 3:
                                                            echo $fourTime[18];
                                                            break;
                                                        }
                                                    break;
                                                case 3:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fourTime[3];
                                                            break;
                                                        case 1:
                                                            echo $fourTime[8];
                                                            break;
                                                        case 2:
                                                            echo $fourTime[13];
                                                            break;
                                                        case 3:
                                                            echo $fourTime[18];
                                                            break;
                                                        }
                                                    break;
                                                case 4:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldis34"> var x = document.querySelector("#doldis34"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldis35"> var x = document.querySelector("#doldis35"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldis37"> var x = document.querySelector("#doldis37"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldis38"> var x = document.querySelector("#doldis38"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 5:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fourTime[3];
                                                            break;
                                                        case 1:
                                                            echo $fourTime[8];
                                                            break;
                                                        case 2:
                                                            echo $fourTime[13];
                                                            break;
                                                        case 3:
                                                            echo $fourTime[18];
                                                            break;
                                                    } 
                                                    break;
                                                case 6:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fourTime[3];
                                                            break;
                                                        case 1:
                                                            echo $fourTime[8];
                                                            break;
                                                        case 2:
                                                            echo $fourTime[13];
                                                            break;
                                                        case 3:
                                                            echo $fourTime[18];
                                                            break;
                                                    } 
                                                    break;
                                                case 7:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fourTime[3];
                                                            break;
                                                        case 1:
                                                            echo $fourTime[8];
                                                            break;
                                                        case 2:
                                                            echo $fourTime[13];
                                                            break;
                                                        case 3:
                                                            echo $fourTime[18];
                                                            break;
                                                    } 
                                                    break;
                                            } 
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('to1').innerHTML; sessionStorage.tid_x = 'tid_5';" class="call point">
                                            <?PHP  
                                            switch ($checkDay) {
                                                case 1:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fifTime[3];
                                                            break;
                                                        case 1:
                                                            echo $fifTime[8];
                                                            break;
                                                        case 2:
                                                            echo $fifTime[13];
                                                            break;
                                                        case 3:
                                                            echo $fifTime[18];
                                                            break;
                                                    }
                                                    break;
                                                case 2:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fifTime[3];
                                                            break;
                                                        case 1:
                                                            echo $fifTime[8];
                                                            break;
                                                        case 2:
                                                            echo $fifTime[13];
                                                            break;
                                                        case 3:
                                                            echo $fifTime[18];
                                                            break;
                                                        }
                                                    break;
                                                case 3:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fifTime[3];
                                                            break;
                                                        case 1:
                                                            echo $fifTime[8];
                                                            break;
                                                        case 2:
                                                            echo $fifTime[13];
                                                            break;
                                                        case 3:
                                                            echo $fifTime[18];
                                                            break;
                                                        }
                                                    break;
                                                case 4:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldis39"> var x = document.querySelector("#doldis39"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldis40"> var x = document.querySelector("#doldis40"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldis41"> var x = document.querySelector("#doldis41"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldis42"> var x = document.querySelector("#doldis42"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 5:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fifTime[3];
                                                            break;
                                                        case 1:
                                                            echo $fifTime[8];
                                                            break;
                                                        case 2:
                                                            echo $fifTime[13];
                                                            break;
                                                        case 3:
                                                            echo $fifTime[18];
                                                            break;
                                                    } 
                                                    break;
                                                case 6:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fifTime[3];
                                                            break;
                                                        case 1:
                                                            echo $fifTime[8];
                                                            break;
                                                        case 2:
                                                            echo $fifTime[13];
                                                            break;
                                                        case 3:
                                                            echo $fifTime[18];
                                                            break;
                                                    } 
                                                    break;
                                                case 7:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $fifTime[3];
                                                            break;
                                                        case 1:
                                                            echo $fifTime[8];
                                                            break;
                                                        case 2:
                                                            echo $fifTime[13];
                                                            break;
                                                        case 3:
                                                            echo $fifTime[18];
                                                            break;
                                                    } 
                                                    break;
                                            } 
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('to1').innerHTML; sessionStorage.tid_x = 'tid_6';" class="call point">
                                            <?PHP 
                                            switch ($checkDay) {
                                                case 1:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $sixTime[3];
                                                            break;
                                                        case 1:
                                                            echo $sixTime[8];
                                                            break;
                                                        case 2:
                                                            echo $sixTime[13];
                                                            break;
                                                        case 3:
                                                            echo $sixTime[18];
                                                            break;
                                                    }
                                                    break;
                                                case 2:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $sixTime[3];
                                                            break;
                                                        case 1:
                                                            echo $sixTime[8];
                                                            break;
                                                        case 2:
                                                            echo $sixTime[13];
                                                            break;
                                                        case 3:
                                                            echo $sixTime[18];
                                                            break;
                                                        }
                                                    break;
                                                case 3:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $sixTime[3];
                                                            break;
                                                        case 1:
                                                            echo $sixTime[8];
                                                            break;
                                                        case 2:
                                                            echo $sixTime[13];
                                                            break;
                                                        case 3:
                                                            echo $sixTime[18];
                                                            break;
                                                        }
                                                    break;
                                                case 4:
                                                    switch ($i) {
                                                        case 0:
                                                            echo '<script id="doldis43"> var x = document.querySelector("#doldis43"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 1:
                                                            echo '<script id="doldis44"> var x = document.querySelector("#doldis44"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 2:
                                                            echo '<script id="doldis45"> var x = document.querySelector("#doldis45"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                        case 3:
                                                            echo '<script id="doldis46"> var x = document.querySelector("#doldis46"); x.parentNode.style.display="none";</script>';
                                                            break;
                                                    }
                                                    break;
                                                case 5:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $sixTime[3];
                                                            break;
                                                        case 1:
                                                            echo $sixTime[8];
                                                            break;
                                                        case 2:
                                                            echo $sixTime[13];
                                                            break;
                                                        case 3:
                                                            echo $sixTime[18];
                                                            break;
                                                    } 
                                                    break;
                                                case 6:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $sixTime[3];
                                                            break;
                                                        case 1:
                                                            echo $sixTime[8];
                                                            break;
                                                        case 2:
                                                            echo $sixTime[13];
                                                            break;
                                                        case 3:
                                                            echo $sixTime[18];
                                                            break;
                                                    } 
                                                    break;
                                                case 7:
                                                    switch ($i) {
                                                        case 0:
                                                            echo $sixTime[3];
                                                            break;
                                                        case 1:
                                                            echo $sixTime[8];
                                                            break;
                                                        case 2:
                                                            echo $sixTime[13];
                                                            break;
                                                        case 3:
                                                            echo $sixTime[18];
                                                            break;
                                                    } 
                                                    break;
                                            } 
                                            ?></span>
                                            
                                        </div>
                                    </th>
                                    <th> 
                                        <p class="datum"> Fredag </p>
                                        <p class="datum" id="f1"><?php echo $fifthDate->format('d/m'); ?></p>
                                        <div id="1Fri" class="bookedTime">                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('f1').innerHTML; sessionStorage.tid_x = 'tid_1';" class="call point"> <?PHP    
                                            switch ($i) {
                                                case 0:
                                                    echo $firsTime[4];
                                                    break;
                                                case 1:
                                                    echo $firsTime[9];
                                                    break;
                                                case 2:
                                                    echo $firsTime[14];
                                                    break;
                                                case 3:
                                                    echo $firsTime[19];
                                                    break;
                                            } 
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('f1').innerHTML; sessionStorage.tid_x = 'tid_2';" class="call point"> <?PHP
                                            switch ($i) {
                                                case 0:
                                                    echo $seconTime[4]; 
                                                    break;
                                                case 1:
                                                    echo $seconTime[9];
                                                    break;
                                                case 2:
                                                    echo $seconTime[14];
                                                    break;
                                                case 3:
                                                    echo $seconTime[19];
                                                    break;
                                            }
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('f1').innerHTML; sessionStorage.tid_x = 'tid_3';" class="call point"> <?PHP
                                            switch ($i) {
                                                case 0:
                                                    echo $thirTime[4];
                                                    break;
                                                case 1:
                                                    echo $thirTime[9];
                                                    break;
                                                case 2:
                                                    echo $thirTime[14];
                                                    break;
                                                case 3:
                                                    echo $thirTime[19];
                                                    break;
                                            }
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('f1').innerHTML; sessionStorage.tid_x = 'tid_4';" class="call point"> <?PHP
                                            switch ($i) {
                                                case 0:
                                                    echo $fourTime[4]; 
                                                    break;
                                                case 1:
                                                    echo $fourTime[9];
                                                    break;
                                                case 2:
                                                    echo $fourTime[14];
                                                    break;
                                                case 3:
                                                    echo $fourTime[19];
                                                    break;
                                            }
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('f1').innerHTML; sessionStorage.tid_x = 'tid_5';" class="call point"> <?PHP
                                            switch ($i) {
                                                case 0:
                                                    echo $fifTime[4];
                                                    break;
                                                case 1:
                                                    echo $fifTime[9];
                                                    break;
                                                case 2:
                                                    echo $fifTime[14];
                                                    break;
                                                case 3:
                                                    echo $fifTime[19];
                                                    break;
                                            }
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('f1').innerHTML; sessionStorage.tid_x = 'tid_6';" class="call point"> <?PHP
                                            switch ($i) {
                                                case 0:
                                                    echo $sixTime[4]; 
                                                    break;
                                                case 1:
                                                    echo $sixTime[9];
                                                    break;
                                                case 2:
                                                    echo $sixTime[14];
                                                    break;
                                                case 3:
                                                    echo $sixTime[19];
                                                    break;
                                            }
                                            ?></span>
                                            
                                        </div>
                                    </th>
                                </tr>
                                <tr class="cWeek" id="cWeek2">
                                    <th> 
                                        <p class="datum"> Måndag </p>
                                        <p class="datum" id="m2"> <?php echo $sixthDate->format('d/m'); ?></p>
                                        <div id="2Mon" class="bookedTime">                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('m2').innerHTML; sessionStorage.tid_x = 'tid_1';" class="call point"> <?PHP 
                                            switch ($i) {
                                                case 0:
                                                    echo $firsTime[5];
                                                    break;
                                                case 1:
                                                    echo $firsTime[10];
                                                    break;
                                                case 2:
                                                    echo $firsTime[15];
                                                    break;
                                                case 3:
                                                    echo $firsTime[0];
                                                    break;
                                            } 
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('m2').innerHTML; sessionStorage.tid_x = 'tid_2';" class="call point"> <?PHP 
                                            switch ($i) {
                                                case 0:
                                                    echo $seconTime[5]; 
                                                    break;
                                                case 1:
                                                    echo $seconTime[10];
                                                    break;
                                                case 2:
                                                    echo $seconTime[15];
                                                    break;
                                                case 3:
                                                    echo $seconTime[0];
                                                    break;
                                            }
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('m2').innerHTML; sessionStorage.tid_x = 'tid_3';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $thirTime[5];
                                                    break;
                                                case 1:
                                                    echo $thirTime[10];
                                                    break;
                                                case 2:
                                                    echo $thirTime[15];
                                                    break;
                                                case 3:
                                                    echo $thirTime[0];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('m2').innerHTML; sessionStorage.tid_x = 'tid_4';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fourTime[5]; 
                                                    break;
                                                case 1:
                                                    echo $fourTime[10];
                                                    break;
                                                case 2:
                                                    echo $fourTime[15];
                                                    break;
                                                case 3:
                                                    echo $fourTime[0];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('m2').innerHTML; sessionStorage.tid_x = 'tid_5';" class="call point"> <?PHP  
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fifTime[5];
                                                    break;
                                                case 1:
                                                    echo $fifTime[10];
                                                    break;
                                                case 2:
                                                    echo $fifTime[15];
                                                    break;
                                                case 3:
                                                    echo $fifTime[0];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('m2').innerHTML; sessionStorage.tid_x = 'tid_6';" class="call point">
                                            <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $sixTime[5]; 
                                                    break;
                                                case 1:
                                                    echo $sixTime[10];
                                                    break;
                                                case 2:
                                                    echo $sixTime[15];
                                                    break;
                                                case 3:
                                                    echo $sixTime[0];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                        </div>
                                    </th>
                                    <th> 
                                        <p class="datum"> Tisdag </p>
                                        <p class="datum" id="t2"><?php echo $seventhDate->format('d/m'); ?></p>
                                        <div id="2Tue" class="bookedTime">                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('t2').innerHTML; sessionStorage.tid_x = 'tid_1';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $firsTime[6];
                                                    break;
                                                case 1:
                                                    echo $firsTime[11];
                                                    break;
                                                case 2:
                                                    echo $firsTime[16];
                                                    break;
                                                case 3:
                                                    echo $firsTime[1];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('t2').innerHTML; sessionStorage.tid_x = 'tid_2';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $seconTime[6]; 
                                                    break;
                                                case 1:
                                                    echo $seconTime[11];
                                                    break;
                                                case 2:
                                                    echo $seconTime[16];
                                                    break;
                                                case 3:
                                                    echo $seconTime[1];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('t2').innerHTML; sessionStorage.tid_x = 'tid_3';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $thirTime[6];
                                                    break;
                                                case 1:
                                                    echo $thirTime[11];
                                                    break;
                                                case 2:
                                                    echo $thirTime[16];
                                                    break;
                                                case 3:
                                                    echo $thirTime[1];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('t2').innerHTML; sessionStorage.tid_x = 'tid_4';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fourTime[6]; 
                                                    break;
                                                case 1:
                                                    echo $fourTime[11];
                                                    break;
                                                case 2:
                                                    echo $fourTime[16];
                                                    break;
                                                case 3:
                                                    echo $fourTime[1];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('t2').innerHTML; sessionStorage.tid_x = 'tid_5';" class="call point">
                                            <?PHP  
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fifTime[6];
                                                    break;
                                                case 1:
                                                    echo $fifTime[11];
                                                    break;
                                                case 2:
                                                    echo $fifTime[16];
                                                    break;
                                                case 3:
                                                    echo $fifTime[1];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('t2').innerHTML; sessionStorage.tid_x = 'tid_6';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $sixTime[6]; 
                                                    break;
                                                case 1:
                                                    echo $sixTime[11];
                                                    break;
                                                case 2:
                                                    echo $sixTime[16];
                                                    break;
                                                case 3:
                                                    echo $sixTime[1];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                        </div>
                                    </th>
                                    <th> 
                                        <p class="datum"> Onsdag </p>
                                        <p class="datum" id="o2"><?php echo $eightDate->format('d/m'); ?></p>
                                        <div id="2Wed" class="bookedTime">                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('o2').innerHTML; sessionStorage.tid_x = 'tid_1';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $firsTime[7];
                                                    break;
                                                case 1:
                                                    echo $firsTime[12];
                                                    break;
                                                case 2:
                                                    echo $firsTime[17];
                                                    break;
                                                case 3:
                                                    echo $firsTime[2];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('o2').innerHTML; sessionStorage.tid_x = 'tid_2';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $seconTime[7]; 
                                                    break;
                                                case 1:
                                                    echo $seconTime[12];
                                                    break;
                                                case 2:
                                                    echo $seconTime[17];
                                                    break;
                                                case 3:
                                                    echo $seconTime[2];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('o2').innerHTML; sessionStorage.tid_x = 'tid_3';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $thirTime[7];
                                                    break;
                                                case 1:
                                                    echo $thirTime[12];
                                                    break;
                                                case 2:
                                                    echo $thirTime[17];
                                                    break;
                                                case 3:
                                                    echo $thirTime[2];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('o2').innerHTML; sessionStorage.tid_x = 'tid_4';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fourTime[7]; 
                                                    break;
                                                case 1:
                                                    echo $fourTime[12];
                                                    break;
                                                case 2:
                                                    echo $fourTime[17];
                                                    break;
                                                case 3:
                                                    echo $fourTime[2];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('o2').innerHTML; sessionStorage.tid_x = 'tid_5';" class="call point"> <?PHP  
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fifTime[7];
                                                    break;
                                                case 1:
                                                    echo $fifTime[12];
                                                    break;
                                                case 2:
                                                    echo $fifTime[17];
                                                    break;
                                                case 3:
                                                    echo $fifTime[2];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('o2').innerHTML; sessionStorage.tid_x = 'tid_6';" class="call point">
                                            <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $sixTime[7]; 
                                                    break;
                                                case 1:
                                                    echo $sixTime[12];
                                                    break;
                                                case 2:
                                                    echo $sixTime[17];
                                                    break;
                                                case 3:
                                                    echo $sixTime[2];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                        </div>
                                    </th>
                                    <th> 
                                        <p class="datum"> Torsdag </p>
                                        <p class="datum" id="to2"><?php echo $ninthDate->format('d/m'); ?></p>
                                        <div id="2Thu" class="bookedTime">                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('to2').innerHTML; sessionStorage.tid_x = 'tid_1';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $firsTime[8];
                                                    break;
                                                case 1:
                                                    echo $firsTime[13];
                                                    break;
                                                case 2:
                                                    echo $firsTime[18];
                                                    break;
                                                case 3:
                                                    echo $firsTime[3];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('to2').innerHTML; sessionStorage.tid_x = 'tid_2';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $seconTime[8]; 
                                                    break;
                                                case 1:
                                                    echo $seconTime[13];
                                                    break;
                                                case 2:
                                                    echo $seconTime[18];
                                                    break;
                                                case 3:
                                                    echo $seconTime[3];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('to2').innerHTML; sessionStorage.tid_x = 'tid_3';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $thirTime[8];
                                                    break;
                                                case 1:
                                                    echo $thirTime[13];
                                                    break;
                                                case 2:
                                                    echo $thirTime[18];
                                                    break;
                                                case 3:
                                                    echo $thirTime[3];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('to2').innerHTML; sessionStorage.tid_x = 'tid_4';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fourTime[8]; 
                                                    break;
                                                case 1:
                                                    echo $fourTime[13];
                                                    break;
                                                case 2:
                                                    echo $fourTime[18];
                                                    break;
                                                case 3:
                                                    echo $fourTime[3];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('to2').innerHTML; sessionStorage.tid_x = 'tid_5';" class="call point"> <?PHP  
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fifTime[8];
                                                    break;
                                                case 1:
                                                    echo $fifTime[13];
                                                    break;
                                                case 2:
                                                    echo $fifTime[18];
                                                    break;
                                                case 3:
                                                    echo $fifTime[3];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('to2').innerHTML; sessionStorage.tid_x = 'tid_6';" class="call point">
                                            <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $sixTime[8]; 
                                                    break;
                                                case 1:
                                                    echo $sixTime[13];
                                                    break;
                                                case 2:
                                                    echo $sixTime[18];
                                                    break;
                                                case 3:
                                                    echo $sixTime[3];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                        </div>
                                    </th>
                                    <th> 
                                        <p class="datum"> Fredag </p>
                                        <p class="datum" id="f2"><?php echo $tenthDate->format('d/m'); ?></p>
                                        <div id="2Fri" class="bookedTime">                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('f2').innerHTML; sessionStorage.tid_x = 'tid_1';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $firsTime[9];
                                                    break;
                                                case 1:
                                                    echo $firsTime[14];
                                                    break;
                                                case 2:
                                                    echo $firsTime[19];
                                                    break;
                                                case 3:
                                                    echo $firsTime[4];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('f2').innerHTML; sessionStorage.tid_x = 'tid_2';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $seconTime[9]; 
                                                    break;
                                                case 1:
                                                    echo $seconTime[14];
                                                    break;
                                                case 2:
                                                    echo $seconTime[19];
                                                    break;
                                                case 3:
                                                    echo $seconTime[4];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('f2').innerHTML; sessionStorage.tid_x = 'tid_3';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $thirTime[9];
                                                    break;
                                                case 1:
                                                    echo $thirTime[14];
                                                    break;
                                                case 2:
                                                    echo $thirTime[19];
                                                    break;
                                                case 3:
                                                    echo $thirTime[4];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('f2').innerHTML; sessionStorage.tid_x = 'tid_4';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fourTime[9]; 
                                                    break;
                                                case 1:
                                                    echo $fourTime[14];
                                                    break;
                                                case 2:
                                                    echo $fourTime[19];
                                                    break;
                                                case 3:
                                                    echo $fourTime[4];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('f2').innerHTML; sessionStorage.tid_x = 'tid_5';" class="call point"> <?PHP  
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fifTime[9];
                                                    break;
                                                case 1:
                                                    echo $fifTime[14];
                                                    break;
                                                case 2:
                                                    echo $fifTime[19];
                                                    break;
                                                case 3:
                                                    echo $fifTime[4];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('f2').innerHTML; sessionStorage.tid_x = 'tid_6';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $sixTime[9]; 
                                                    break;
                                                case 1:
                                                    echo $sixTime[14];
                                                    break;
                                                case 2:
                                                    echo $sixTime[19];
                                                    break;
                                                case 3:
                                                    echo $sixTime[4];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                        </div>
                                    </th>
                                </tr>
                                <tr class="cWeek" id="cWeek3">
                                    <th> 
                                        <p class="datum"> Måndag </p>
                                        <p class="datum" id="m3"><?php echo $elevenDate->format('d/m'); ?></p>
                                        <div id="3Mon" class="bookedTime">                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('m3').innerHTML; sessionStorage.tid_x = 'tid_1';" class="call point"> <?PHP
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $firsTime[10];
                                                    break;
                                                case 1:
                                                    echo $firsTime[15];
                                                    break;
                                                case 2:
                                                    echo $firsTime[0];
                                                    break;
                                                case 3:
                                                    echo $firsTime[5];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('m3').innerHTML; sessionStorage.tid_x = 'tid_2';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $seconTime[10]; 
                                                    break;
                                                case 1:
                                                    echo $seconTime[15];
                                                    break;
                                                case 2:
                                                    echo $seconTime[0];
                                                    break;
                                                case 3:
                                                    echo $seconTime[5];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('m3').innerHTML; sessionStorage.tid_x = 'tid_3';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $thirTime[10];
                                                    break;
                                                case 1:
                                                    echo $thirTime[15];
                                                    break;
                                                case 2:
                                                    echo $thirTime[0];
                                                    break;
                                                case 3:
                                                    echo $thirTime[5];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('m3').innerHTML; sessionStorage.tid_x = 'tid_4';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fourTime[10]; 
                                                    break;
                                                case 1:
                                                    echo $fourTime[15];
                                                    break;
                                                case 2:
                                                    echo $fourTime[0];
                                                    break;
                                                case 3:
                                                    echo $fourTime[5];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('m3').innerHTML; sessionStorage.tid_x = 'tid_5';" class="call point"> <?PHP  
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fifTime[10];
                                                    break;
                                                case 1:
                                                    echo $fifTime[15];
                                                    break;
                                                case 2:
                                                    echo $fifTime[0];
                                                    break;
                                                case 3:
                                                    echo $fifTime[5];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('m3').innerHTML; sessionStorage.tid_x = 'tid_6';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $sixTime[10]; 
                                                    break;
                                                case 1:
                                                    echo $sixTime[15];
                                                    break;
                                                case 2:
                                                    echo $sixTime[0];
                                                    break;
                                                case 3:
                                                    echo $sixTime[5];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                        </div>
                                    </th>
                                    <th> 
                                        <p class="datum"> Tisdag </p>
                                        <p class="datum" id="t3"><?php echo $twelveDate->format('d/m'); ?></p>
                                        <div id="3Tue" class="bookedTime">                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('t3').innerHTML; sessionStorage.tid_x = 'tid_1';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $firsTime[11];
                                                    break;
                                                case 1:
                                                    echo $firsTime[16];
                                                    break;
                                                case 2:
                                                    echo $firsTime[1];
                                                    break;
                                                case 3:
                                                    echo $firsTime[6];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('t3').innerHTML; sessionStorage.tid_x = 'tid_2';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $seconTime[11]; 
                                                    break;
                                                case 1:
                                                    echo $seconTime[16];
                                                    break;
                                                case 2:
                                                    echo $seconTime[1];
                                                    break;
                                                case 3:
                                                    echo $seconTime[6];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('t3').innerHTML; sessionStorage.tid_x = 'tid_3';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $thirTime[11];
                                                    break;
                                                case 1:
                                                    echo $thirTime[16];
                                                    break;
                                                case 2:
                                                    echo $thirTime[1];
                                                    break;
                                                case 3:
                                                    echo $thirTime[6];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('t3').innerHTML; sessionStorage.tid_x = 'tid_4';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fourTime[11]; 
                                                    break;
                                                case 1:
                                                    echo $fourTime[16];
                                                    break;
                                                case 2:
                                                    echo $fourTime[1];
                                                    break;
                                                case 3:
                                                    echo $fourTime[6];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('t3').innerHTML; sessionStorage.tid_x = 'tid_5';" class="call point"> <?PHP  
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fifTime[11];
                                                    break;
                                                case 1:
                                                    echo $fifTime[16];
                                                    break;
                                                case 2:
                                                    echo $fifTime[1];
                                                    break;
                                                case 3:
                                                    echo $fifTime[6];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('t3').innerHTML; sessionStorage.tid_x = 'tid_6';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $sixTime[11]; 
                                                    break;
                                                case 1:
                                                    echo $sixTime[16];
                                                    break;
                                                case 2:
                                                    echo $sixTime[1];
                                                    break;
                                                case 3:
                                                    echo $sixTime[6];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                        </div>
                                    </th>
                                    <th> 
                                        <p class="datum"> Onsdag </p>
                                        <p class="datum" id="o3"><?php echo $thirteenDate->format('d/m'); ?></p>
                                        <div id="3Wed" class="bookedTime">                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('o3').innerHTML; sessionStorage.tid_x = 'tid_1';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $firsTime[12];
                                                    break;
                                                case 1:
                                                    echo $firsTime[17];
                                                    break;
                                                case 2:
                                                    echo $firsTime[2];
                                                    break;
                                                case 3:
                                                    echo $firsTime[7];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('o3').innerHTML; sessionStorage.tid_x = 'tid_2';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $seconTime[12]; 
                                                    break;
                                                case 1:
                                                    echo $seconTime[17];
                                                    break;
                                                case 2:
                                                    echo $seconTime[2];
                                                    break;
                                                case 3:
                                                    echo $seconTime[7];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('o3').innerHTML; sessionStorage.tid_x = 'tid_3';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $thirTime[12];
                                                    break;
                                                case 1:
                                                    echo $thirTime[17];
                                                    break;
                                                case 2:
                                                    echo $thirTime[2];
                                                    break;
                                                case 3:
                                                    echo $thirTime[7];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('o3').innerHTML; sessionStorage.tid_x = 'tid_4';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fourTime[12]; 
                                                    break;
                                                case 1:
                                                    echo $fourTime[17];
                                                    break;
                                                case 2:
                                                    echo $fourTime[2];
                                                    break;
                                                case 3:
                                                    echo $fourTime[7];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('o3').innerHTML; sessionStorage.tid_x = 'tid_5';" class="call point"> <?PHP  
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fifTime[12];
                                                    break;
                                                case 1:
                                                    echo $fifTime[17];
                                                    break;
                                                case 2:
                                                    echo $fifTime[2];
                                                    break;
                                                case 3:
                                                    echo $fifTime[7];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('o3').innerHTML; sessionStorage.tid_x = 'tid_6';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $sixTime[12]; 
                                                    break;
                                                case 1:
                                                    echo $sixTime[17];
                                                    break;
                                                case 2:
                                                    echo $sixTime[2];
                                                    break;
                                                case 3:
                                                    echo $sixTime[7];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                        </div>
                                    </th>
                                    <th> 
                                        <p class="datum"> Torsdag </p>
                                        <p class="datum" id="to3"><?php echo $fourteenDate->format('d/m'); ?></p>
                                        <div id="3Thu" class="bookedTime">                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('to3').innerHTML; sessionStorage.tid_x = 'tid_1';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $firsTime[13];
                                                    break;
                                                case 1:
                                                    echo $firsTime[18];
                                                    break;
                                                case 2:
                                                    echo $firsTime[3];
                                                    break;
                                                case 3:
                                                    echo $firsTime[8];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('to3').innerHTML; sessionStorage.tid_x = 'tid_2';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $seconTime[13]; 
                                                    break;
                                                case 1:
                                                    echo $seconTime[18];
                                                    break;
                                                case 2:
                                                    echo $seconTime[3];
                                                    break;
                                                case 3:
                                                    echo $seconTime[8];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('to3').innerHTML; sessionStorage.tid_x = 'tid_3';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $thirTime[13];
                                                    break;
                                                case 1:
                                                    echo $thirTime[18];
                                                    break;
                                                case 2:
                                                    echo $thirTime[3];
                                                    break;
                                                case 3:
                                                    echo $thirTime[8];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('to3').innerHTML; sessionStorage.tid_x = 'tid_4';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fourTime[13]; 
                                                    break;
                                                case 1:
                                                    echo $fourTime[18];
                                                    break;
                                                case 2:
                                                    echo $fourTime[3];
                                                    break;
                                                case 3:
                                                    echo $fourTime[8];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('to3').innerHTML; sessionStorage.tid_x = 'tid_5';" class="call point"> <?PHP  
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fifTime[13];
                                                    break;
                                                case 1:
                                                    echo $fifTime[18];
                                                    break;
                                                case 2:
                                                    echo $fifTime[3];
                                                    break;
                                                case 3:
                                                    echo $fifTime[8];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('to3').innerHTML; sessionStorage.tid_x = 'tid_6';" class="call point">
                                            <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $sixTime[13]; 
                                                    break;
                                                case 1:
                                                    echo $sixTime[18];
                                                    break;
                                                case 2:
                                                    echo $sixTime[3];
                                                    break;
                                                case 3:
                                                    echo $sixTime[9];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                        </div>
                                    </th>
                                    <th> 
                                        <p class="datum"> Fredag </p>
                                        <p class="datum" id="f3"><?php echo $fifteenDate->format('d/m'); ?></p>
                                        <div id="3Fri" class="bookedTime">                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('f3').innerHTML; sessionStorage.tid_x = 'tid_1';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $firsTime[14];
                                                    break;
                                                case 1:
                                                    echo $firsTime[19];
                                                    break;
                                                case 2:
                                                    echo $firsTime[4];
                                                    break;
                                                case 3:
                                                    echo $firsTime[9];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('f3').innerHTML; sessionStorage.tid_x = 'tid_2';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $seconTime[14]; 
                                                    break;
                                                case 1:
                                                    echo $seconTime[19];
                                                    break;
                                                case 2:
                                                    echo $seconTime[4];
                                                    break;
                                                case 3:
                                                    echo $seconTime[9];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('f3').innerHTML; sessionStorage.tid_x = 'tid_3';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $thirTime[14];
                                                    break;
                                                case 1:
                                                    echo $thirTime[19];
                                                    break;
                                                case 2:
                                                    echo $thirTime[4];
                                                    break;
                                                case 3:
                                                    echo $thirTime[9];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('f3').innerHTML; sessionStorage.tid_x = 'tid_4';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fourTime[14]; 
                                                    break;
                                                case 1:
                                                    echo $fourTime[19];
                                                    break;
                                                case 2:
                                                    echo $fourTime[4];
                                                    break;
                                                case 3:
                                                    echo $fourTime[9];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('f3').innerHTML; sessionStorage.tid_x = 'tid_5';" class="call point"> <?PHP  
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fifTime[14];
                                                    break;
                                                case 1:
                                                    echo $fifTime[19];
                                                    break;
                                                case 2:
                                                    echo $fifTime[4];
                                                    break;
                                                case 3:
                                                    echo $fifTime[9];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('f3').innerHTML; sessionStorage.tid_x = 'tid_6';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $sixTime[14]; 
                                                    break;
                                                case 1:
                                                    echo $sixTime[19];
                                                    break;
                                                case 2:
                                                    echo $sixTime[4];
                                                    break;
                                                case 3:
                                                    echo $sixTime[9];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                        </div>
                                    </th>
                                </tr>
                                <tr class="cWeek" id="cWeek4">
                                    <th> 
                                        <p class="datum"> Måndag </p>
                                        <p class="datum" id="m4"><?php echo $sixteenDate->format('d/m'); ?></p>
                                        <div id="4Mon" class="bookedTime">                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('m4').innerHTML; sessionStorage.tid_x = 'tid_1';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $firsTime[15];
                                                    break;
                                                case 1:
                                                    echo $firsTime[0];
                                                    break;
                                                case 2:
                                                    echo $firsTime[5];
                                                    break;
                                                case 3:
                                                    echo $firsTime[10];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('m4').innerHTML; sessionStorage.tid_x = 'tid_2';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $seconTime[15]; 
                                                    break;
                                                case 1:
                                                    echo $seconTime[0];
                                                    break;
                                                case 2:
                                                    echo $seconTime[5];
                                                    break;
                                                case 3:
                                                    echo $seconTime[10];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('m4').innerHTML; sessionStorage.tid_x = 'tid_3';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $thirTime[15];
                                                    break;
                                                case 1:
                                                    echo $thirTime[0];
                                                    break;
                                                case 2:
                                                    echo $thirTime[5];
                                                    break;
                                                case 3:
                                                    echo $thirTime[10];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('m4').innerHTML; sessionStorage.tid_x = 'tid_4';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fourTime[15]; 
                                                    break;
                                                case 1:
                                                    echo $fourTime[0];
                                                    break;
                                                case 2:
                                                    echo $fourTime[5];
                                                    break;
                                                case 3:
                                                    echo $fourTime[10];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('m4').innerHTML; sessionStorage.tid_x = 'tid_5';" class="call point"> <?PHP  
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fifTime[15];
                                                    break;
                                                case 1:
                                                    echo $fifTime[0];
                                                    break;
                                                case 2:
                                                    echo $fifTime[5];
                                                    break;
                                                case 3:
                                                    echo $fifTime[10];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('m4').innerHTML; sessionStorage.tid_x = 'tid_6';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $sixTime[15]; 
                                                    break;
                                                case 1:
                                                    echo $sixTime[0];
                                                    break;
                                                case 2:
                                                    echo $sixTime[5];
                                                    break;
                                                case 3:
                                                    echo $sixTime[10];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                        </div>
                                    </th>
                                    <th> 
                                        <p class="datum"> Tisdag </p>
                                        <p class="datum" id="t4"><?php echo $seventeenDate->format('d/m'); ?></p>
                                        <div id="4Tue" class="bookedTime">                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('t4').innerHTML; sessionStorage.tid_x = 'tid_1';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $firsTime[16];
                                                    break;
                                                case 1:
                                                    echo $firsTime[1];
                                                    break;
                                                case 2:
                                                    echo $firsTime[6];
                                                    break;
                                                case 3:
                                                    echo $firsTime[11];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('t4').innerHTML; sessionStorage.tid_x = 'tid_2';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $seconTime[16]; 
                                                    break;
                                                case 1:
                                                    echo $seconTime[1];
                                                    break;
                                                case 2:
                                                    echo $seconTime[6];
                                                    break;
                                                case 3:
                                                    echo $seconTime[11];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('t4').innerHTML; sessionStorage.tid_x = 'tid_3';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $thirTime[16];
                                                    break;
                                                case 1:
                                                    echo $thirTime[1];
                                                    break;
                                                case 2:
                                                    echo $thirTime[6];
                                                    break;
                                                case 3:
                                                    echo $thirTime[11];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('t4').innerHTML; sessionStorage.tid_x = 'tid_4';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fourTime[16]; 
                                                    break;
                                                case 1:
                                                    echo $fourTime[1];
                                                    break;
                                                case 2:
                                                    echo $fourTime[6];
                                                    break;
                                                case 3:
                                                    echo $fourTime[11];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('t4').innerHTML; sessionStorage.tid_x = 'tid_5';" class="call point"> <?PHP  
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fifTime[16];
                                                    break;
                                                case 1:
                                                    echo $fifTime[1];
                                                    break;
                                                case 2:
                                                    echo $fifTime[6];
                                                    break;
                                                case 3:
                                                    echo $fifTime[11];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('t4').innerHTML; sessionStorage.tid_x = 'tid_6';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $sixTime[16]; 
                                                    break;
                                                case 1:
                                                    echo $sixTime[1];
                                                    break;
                                                case 2:
                                                    echo $sixTime[6];
                                                    break;
                                                case 3:
                                                    echo $sixTime[11];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                        </div>
                                    </th>
                                    <th> 
                                        <p class="datum"> Onsdag </p>
                                        <p class="datum" id="o4"><?php echo $eighteenDate->format('d/m'); ?></p>
                                        <div id="4Wed" class="bookedTime">                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('o4').innerHTML; sessionStorage.tid_x = 'tid_1';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $firsTime[17];
                                                    break;
                                                case 1:
                                                    echo $firsTime[2];
                                                    break;
                                                case 2:
                                                    echo $firsTime[7];
                                                    break;
                                                case 3:
                                                    echo $firsTime[12];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('o4').innerHTML; sessionStorage.tid_x = 'tid_2';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $seconTime[17]; 
                                                    break;
                                                case 1:
                                                    echo $seconTime[2];
                                                    break;
                                                case 2:
                                                    echo $seconTime[7];
                                                    break;
                                                case 3:
                                                    echo $seconTime[12];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('o4').innerHTML; sessionStorage.tid_x = 'tid_3';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $thirTime[17];
                                                    break;
                                                case 1:
                                                    echo $thirTime[2];
                                                    break;
                                                case 2:
                                                    echo $thirTime[7];
                                                    break;
                                                case 3:
                                                    echo $thirTime[12];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('o4').innerHTML; sessionStorage.tid_x = 'tid_4';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fourTime[17]; 
                                                    break;
                                                case 1:
                                                    echo $fourTime[2];
                                                    break;
                                                case 2:
                                                    echo $fourTime[7];
                                                    break;
                                                case 3:
                                                    echo $fourTime[12];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('o4').innerHTML; sessionStorage.tid_x = 'tid_5';" class="call point"> <?PHP  
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fifTime[17];
                                                    break;
                                                case 1:
                                                    echo $fifTime[2];
                                                    break;
                                                case 2:
                                                    echo $fifTime[7];
                                                    break;
                                                case 3:
                                                    echo $fifTime[12];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('o4').innerHTML; sessionStorage.tid_x = 'tid_6';" class="call point">
                                            <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $sixTime[17]; 
                                                    break;
                                                case 1:
                                                    echo $sixTime[2];
                                                    break;
                                                case 2:
                                                    echo $sixTime[7];
                                                    break;
                                                case 3:
                                                    echo $sixTime[12];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                        </div>
                                    </th>
                                    <th> 
                                        <p class="datum"> Torsdag </p>
                                        <p class="datum" id="to4"><?php echo $nineteenDate->format('d/m'); ?></p>
                                        <div id="4Thu" class="bookedTime">                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('to4').innerHTML; sessionStorage.tid_x = 'tid_1';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $firsTime[18];
                                                    break;
                                                case 1:
                                                    echo $firsTime[3];
                                                    break;
                                                case 2:
                                                    echo $firsTime[8];
                                                    break;
                                                case 3:
                                                    echo $firsTime[13];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('to4').innerHTML; sessionStorage.tid_x = 'tid_2';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $seconTime[18]; 
                                                    break;
                                                case 1:
                                                    echo $seconTime[3];
                                                    break;
                                                case 2:
                                                    echo $seconTime[8];
                                                    break;
                                                case 3:
                                                    echo $seconTime[13];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('to4').innerHTML; sessionStorage.tid_x = 'tid_3';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $thirTime[18];
                                                    break;
                                                case 1:
                                                    echo $thirTime[3];
                                                    break;
                                                case 2:
                                                    echo $thirTime[8];
                                                    break;
                                                case 3:
                                                    echo $thirTime[13];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('to4').innerHTML; sessionStorage.tid_x = 'tid_4';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fourTime[18]; 
                                                    break;
                                                case 1:
                                                    echo $fourTime[3];
                                                    break;
                                                case 2:
                                                    echo $fourTime[8];
                                                    break;
                                                case 3:
                                                    echo $fourTime[13];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('to4').innerHTML; sessionStorage.tid_x = 'tid_5';" class="call point"> <?PHP  
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fifTime[18];
                                                    break;
                                                case 1:
                                                    echo $fifTime[3];
                                                    break;
                                                case 2:
                                                    echo $fifTime[8];
                                                    break;
                                                case 3:
                                                    echo $fifTime[13];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('to4').innerHTML; sessionStorage.tid_x = 'tid_6';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $sixTime[18]; 
                                                    break;
                                                case 1:
                                                    echo $sixTime[3];
                                                    break;
                                                case 2:
                                                    echo $sixTime[8];
                                                    break;
                                                case 3:
                                                    echo $sixTime[13];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                        </div>
                                    </th>
                                    <th> 
                                        <p class="datum"> Fredag </p>
                                        <p class="datum" id="f4"><?php echo $twentyDate->format('d/m'); ?></p>
                                        <div id="4Fri" class="bookedTime">                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('f4').innerHTML; sessionStorage.tid_x = 'tid_1';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $firsTime[19];
                                                    break;
                                                case 1:
                                                    echo $firsTime[4];
                                                    break;
                                                case 2:
                                                    echo $firsTime[9];
                                                    break;
                                                case 3:
                                                    echo $firsTime[14];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('f4').innerHTML; sessionStorage.tid_x = 'tid_2';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $seconTime[19]; 
                                                    break;
                                                case 1:
                                                    echo $seconTime[4];
                                                    break;
                                                case 2:
                                                    echo $seconTime[9];
                                                    break;
                                                case 3:
                                                    echo $seconTime[14];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('f4').innerHTML; sessionStorage.tid_x = 'tid_3';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $thirTime[19];
                                                    break;
                                                case 1:
                                                    echo $thirTime[4];
                                                    break;
                                                case 2:
                                                    echo $thirTime[9];
                                                    break;
                                                case 3:
                                                    echo $thirTime[14];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('f4').innerHTML; sessionStorage.tid_x = 'tid_4';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fourTime[19]; 
                                                    break;
                                                case 1:
                                                    echo $fourTime[4];
                                                    break;
                                                case 2:
                                                    echo $fourTime[9];
                                                    break;
                                                case 3:
                                                    echo $fourTime[14];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('f4').innerHTML; sessionStorage.tid_x = 'tid_5';" class="call point"> <?PHP  
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $fifTime[19];
                                                    break;
                                                case 1:
                                                    echo $fifTime[4];
                                                    break;
                                                case 2:
                                                    echo $fifTime[9];
                                                    break;
                                                case 3:
                                                    echo $fifTime[14];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                            <span onclick="chooseTime(); this.style.backgroundColor = 'grey'; sessionStorage.clock = this.innerHTML; sessionStorage.date = document.getElementById('f4').innerHTML; sessionStorage.tid_x = 'tid_6';" class="call point"> <?PHP 
                                            
                                            switch ($i) {
                                                case 0:
                                                    echo $sixTime[19]; 
                                                    break;
                                                case 1:
                                                    echo $sixTime[4];
                                                    break;
                                                case 2:
                                                    echo $sixTime[9];
                                                    break;
                                                case 3:
                                                    echo $sixTime[14];
                                                    break;
                                            } 
                                            
                                            ?></span>
                                            
                                        </div>
                                    </th>
                                </tr>
                            </table>