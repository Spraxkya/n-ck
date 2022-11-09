<!DOCTYPE html>
<html>
<head>
    <title>Näck på nätet | Webbyrå </title>
    <meta name="google-site-verification" content="eNBc7Cwi3V09UMFuT71TavlUyDX_eCZ5ThHZb6nb4jQ" />
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=0.5" />
    <meta name="description" content="Vi hjälper dig skapa ett smultronställe på nätet">
    <meta http-equiv=”content-language” content=”sv-SE”/>
    <link rel="icon" href="https://xn--nck-qla.com/favicon.ico">
    <link rel="stylesheet" type="text/css" href="./tpl/styles/pa-natet.css" />
    <script type="text/javascript" src="./tpl/scripts/universal.js" async></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
</head>
<body>
    <div id="loading-screen">
        <img class="loadgif" id="loadgif" src="./tpl/images/pa-natet/Smultron.svg"/>
        <img id="logo" src="./tpl/images/pa-natet/logo.png"/>
    </div>
    <header id="header">
        <div id="nav">
            <ul>
                <li onclick="tab1Pc();" id="li1"> OM OSS </li>
                <li onclick="tab2Pc(); rubriPc();" id="li2"> PRODUKTER </li>
                <li onclick="tab3Pc();" id="li3"> SMULTRONSTÄLLE </li>
            </ul>
        </div>
    </header>
    <main>
        <div id="tab1">
            <div id="left1">
                <h1> Webbyrå </h1>
                <img class="datorI" src="./tpl/images/pa-natet/Dator.svg">
                <div class="datorC">
                    <span class="datorT fonti"> - Välkommen till Näck på nätet!</span>
                    <span class="datorT fonti"> - Ditt <span class="datorT fonti" style="color: var(--pink);">smultronställe</span> på nätet!</span>
                </div>
            </div>
            <div class="hideM" id="right1">
                <div class="right1C">
                    <div class="trettretH">
                        <div class="trettretW">
                            <img class="star" src="./tpl/images/pa-natet/Bla-stjarna.svg">
                        </div>
                        <div class="trettretW" style="flex-direction: column;">
                            <img class="textS" src="./tpl/images/pa-natet/Sjalvutnamnda-kreativa-stjarnskott.svg">
                        </div>
                        <div class="trettretW">
                            <img class="star" src="./tpl/images/pa-natet/Bla-stjarna.svg">
                        </div>
                    </div>
                    <div class="sjuttisju">
                        <div class="femti fonti">
                            <div class="starC">
                                <h3>Nya höjder</h3>
                                <p class="p2">
                                    Behöver du hjälp att skapa intresse kring ditt varumärke och öka försäljningen av dina produkter? Vi är experter på att ta webbsidor till nya höjder!
                                </p>
                            </div>
                        </div>
                        <div class="femti fonti">
                            <div class="starC">
                                <h3>Kreativitet</h3>
                                <p class="p2">
                                    Vi specialicerar oss på att utveckla webbplatser som sticker ut från mängden och trollbinder dina besökarna från start till transaktion.
                                </p>
                            </div>
                        </div>
                        <div class="femti fonti">
                            <div class="starC">
                            <div class="ikonC"><h3>Vi sätter igång</h3><img class="ikonPil" src="./tpl/images/pa-natet/Svart-pil-hoger.svg"></div>
                                <p class="p2">
                                    Önskar du en offert? Har du frågor gällande våra tjänster? Eller har du någonting helt annat du vill diskutera?<br><br> Hör av dig redan idag!
                                </p>    
                            </div>
                        </div>
                        <div class="femti fonti">
                            <div class="starC">
                                <h3 style="padding-bottom: 5%;">Kontaktuppgifter</h3>
                                <div class="ikonC"><img class="ikon" src="./tpl/images/pa-natet/Batman.svg"><p class="p2">Simon Jerfström</p></div>
                                <div class="ikonC"><img class="ikon" src="./tpl/images/pa-natet/Telefon.svg"><a href="tel:+4672-4034229"><p class="p2 linkW fonti">072-403 42 29</p></a></div>
                                <div class="ikonC"><img class="ikon" src="./tpl/images/pa-natet/E-post.svg"><a href="mailto:web@nackcollective.com"><p class="p2 linkW fonti">web@nackcollective.com</p></a></div>
                                <div class="ikonC"><img class="ikon" src="./tpl/images/pa-natet/Kalender.svg"><p onclick="kalenderPc();" class="p2" style="text-decoration:underline;">Boka tid direkt!</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="kalenderLuring">
                    <?php
                        include_once 'tpl/calenderPC.tpl.php'
                    ?>
                </div>
            </div>
            <div class="hidePc" id="right12">
                <div class="right1C">
                    <div class="starTopM">
                        <div class="trettretW">
                            <img class="star" src="./tpl/images/pa-natet/Bla-stjarna.svg">
                        </div>
                        <div class="trettretW" style="flex-direction: column;">
                            <img class="textS" src="./tpl/images/pa-natet/Sjalvutnamnda-kreativa-stjarnskott.svg">
                        </div>
                        <div class="trettretW">
                            <img class="star" src="./tpl/images/pa-natet/Bla-stjarna.svg">
                        </div>
                    </div>
                    <div class="sjuttisju">
                        <div class="femti fonti">
                            <div class="starC">
                                <h3>Nya höjder</h3>
                                <p class="p2">
                                    Behöver du hjälp att skapa intresse kring ditt varumärke och öka försäljningen av dina produkter? Vi är experter på att ta webbsidor till nya höjder!
                                </p>
                            </div>
                        </div>
                        <div class="femti fonti">
                            <div class="starC">
                                <h3>Kreativitet</h3>
                                <p class="p2">
                                    Vi specialicerar oss på att utveckla webbplatser som sticker ut från mängden och trollbinder dina besökarna från start till transaktion.
                                </p>
                            </div>
                        </div>
                        <div class="femti fonti">
                            <div class="starC">
                            <div class="ikonC"><h3>Vi sätter igång</h3><img class="ikonPil hideM" src="./tpl/images/pa-natet/Svart-pil-hoger.svg"></div>
                                <p class="p2">
                                    Önskar du en offert? Har du frågor gällande våra tjänster? Eller har du någonting helt annat du vill diskutera?<br><br> Hör av dig redan idag!<img class="ikonPil hidePc spec" src="./tpl/images/pa-natet/Svart-pil-nerat.svg">   
                                </p> 
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="kontaktM hidePc">
                    <div class="kontaktC">
                        <span class="fonti bigT">Kontaktuppgifter</span>
                        <div class="ikonCm"><img class="ikonM" src="./tpl/images/pa-natet/Batman.svg"><p class="p3 fonti">Simon Jerfström</p></div>
                        <div class="ikonCm"><img class="ikonM" src="./tpl/images/pa-natet/Telefon.svg"><a href="tel:+4672-4034229"><p style="padding:0;" class="p3 fonti">072-403 42 29</p></a></div>
                        <div class="ikonCm"><img class="ikonM" src="./tpl/images/pa-natet/E-post.svg"><a href="mailto:web@nackcollective.com"><p style="padding:0;" class="p3 fonti">web@nackcollective.com</p></a></div>
                        <div class="ikonCm"><img class="ikonM" src="./tpl/images/pa-natet/Kalender.svg"><a href="tpl/kalender.tpl.php" target="blank"><p class="p3 fonti" style="padding:0; text-decoration: underline;">Boka tid direkt!</p></a></div>
                    </div>
                </div>
                <div class="fillers"></div>
            </div>
        </div>
        <div id="tab2">
            <div id="left2" class="hideM">
                <div class="fix hideM"><span class="fonti produktR">-</span><span onclick="rubri1Pc();" class="fonti produktR" id="rubrik1">Webbutveckling </span></div>
                <div class="fix hideM"><span class="fonti produktR">-</span><span onclick="rubri2Pc();" class="fonti produktR" id="rubrik2">Digital Strategi </span></div>
                <div class="fix hideM"><span class="fonti produktR">-</span><span onclick="rubri3Pc();" class="fonti produktR" id="rubrik3">Marknadsföring </span></div>
            </div>
            <div id="left22">
                <div class="fix hidePc" id="rubrik1M"><span class="fonti produktR">-</span><span onclick="rubri1M();" class="fonti produktR" >Webbutveckling </span></div>
                <div class="fix hidePc" id="rubrik2M"><span class="fonti produktR">-</span><span onclick="rubri2M();" class="fonti produktR" >Digital Strategi </span></div>
                <div class="fix hidePc" id="rubrik3M"><span class="fonti produktR">-</span><span onclick="rubri3M();" class="fonti produktR" >Marknadsföring </span></div>
            </div>
            <div id="right2" class="hideM">
                <div id="right2C1" class="right2C">
                    <div class="lol">
                        <p class="fonti p1">
                        <br>
                        Oavsett om er webbplats är en webbutik eller en digital anslagstavla så vet vi att webbsidor (nästan) uteslutande syftar till att, direkt eller indirekt, generera affärstillfällen. Vi designar och bygger därför högpresterande webbplatser med utgångspunkt i era affärsmässiga behov. 
                        Många organisationer önskar att lägga ut hela hanteringen av företagets digitala närvaro. Detta görs huvudsakligen av två anledningar: 
                        <br>
                        <br>
                        1. Öka webbplatsens prestation genom att låta lämplig webbyrå (läs Näck på nätet) ansvara för hemsidans utvecklig.
                        <br>
                        2. Frigöra tid och energi för organisationens personal att fokusera på tjärnverksamheten.  
                        <br>
                        <br>
                        Andra organisationer behöver i stället hjälp att utveckla hemsidor som dem själva ska kunna administrera. Då är det vanligt att bygga hemsidan i ett CMS-system som enkelt kan administreras av företagets personal.
                        I båda fallen är det viktigt att samarbetet mellan företagen prioriteras för att säkerställa en gemensam vision med tydliga resultatmål.
                        <br><br>
                        </p>
                    </div>
                </div>
                <div id="right2C2" class="right2C">
                    <div class="lol">
                        <p class="fonti p1">
                        <br>
                        Möjligheterna med webben idag är oändliga. Trots det så väljer många att begränsa sin digitala närvaro till strategier som de sett andra genomföra. Att använda sig av beprövade metoder är en sund strategi för att behärska det föränderliga klimatet på internet.
                        <br>
                        <br>
                        Vill man bemästra internet krävs det däremot att man utmanar normer och vågar ifrågasätta status quo. För att kontinuerligt leverera utmärkta resultat måste man genomför välgrundade analyser som i tid och otid leder till satsningar som bryter ny mark inom sin industri. 
                        <br>
                        <br>
                        Självklart måste man värna om stabilitet och redan fungerande tillvägagångssätt, det råder det inga tvivel om. Att lägga upp en stabil och välfungerande digital strategi fixar vi på en handvändning - likt många andra webbyråer.  Det som skiljer oss från de andra är att vi har en bottenlös källa av kreativa sätt att ta ditt företag till nästa nivå.
                        <br><br>  
                        </p>
                    </div>
                </div>
                <div id="right2C3" class="right2C">
                    <div class="lol">
                        <p class="fonti p1">
                        <br>
                        Fråga någon du känner som jobbar med marknadsföring hur personen kom in i yrket. Du kommer bli förvånad hur många inom professionen som aldrig menade att börja arbeta med marknadsföring. Det finns otaligt med bananskalshistorier där ute. 
                        <br>
                        <br>
                        Detta är för att marknadsföring är den enskilt viktigaste aspekten för lyckosamt företagande. Marknadsföringen är det som binder samman de olika grenarna av företagande och människor av olika bakgrunder finner området fängslande. Håller du inte med mig så utmanar jag dig till en diskussion över en fika. 
                        <br>
                        <br>
                        Med det sagt vill vi nämna att Näck på nätet är jävligt bra på marknadsföring. Många webbyråer fokuserar enbart på digital marknadsföring men tappar då ofta helhetsperspektivet. Vi optimerar våra initiativ mot er organisations övergripande mål och specialiserar oss på att skapa kreativa kampanjer som kombinerar den digitala världen med den materiella.
                        <br><br>
                        </p>
                    </div>
               </div>
            </div>
            <div id="right22" class="hidePc">
                <div class="pilC"><img onclick="rubriKlickL();" id="leftP" class="hidePc" src="./tpl/images/pa-natet/Vit-pek-hoger.svg"><span id="font1" class="fonti produktRM hidePc">Webbutveckling</span><span id="font2" class="fonti produktRM hidePc">Digital Strategi</span><span id="font3" class="fonti produktRM hidePc">Marknadsföring</span><img onclick="rubriKlickR();" id="rightP" class="hidePc" src="./tpl/images/pa-natet/Vit-pek-hoger_1.svg"></div>
                <div id="right2C12" class="right2C hidePc">
                    <div class="lol">
                        <p class="fonti p1">
                        <br>
                        Oavsett om er webbplats är en webbutik eller en digital anslagstavla så vet vi att webbsidor (nästan) uteslutande syftar till att, direkt eller indirekt, generera affärstillfällen. Vi designar och bygger därför högpresterande webbplatser med utgångspunkt i era affärsmässiga behov. 
                        Många organisationer önskar att lägga ut hela hanteringen av företagets digitala närvaro. Detta görs huvudsakligen av två anledningar: 
                        <br>
                        <br>
                        1. Öka webbplatsens prestation genom att låta lämplig webbyrå (läs Näck på nätet) ansvara för hemsidans utvecklig.
                        <br>
                        2. Frigöra tid och energi för organisationens personal att fokusera på tjärnverksamheten.  
                        <br>
                        <br>
                        Andra organisationer behöver i stället hjälp att utveckla hemsidor som dem själva ska kunna administrera. Då är det vanligt att bygga hemsidan i ett CMS-system som enkelt kan administreras av företagets personal.
                        I båda fallen är det viktigt att samarbetet mellan företagen prioriteras för att säkerställa en gemensam vision med tydliga resultatmål.
                        <br><br>
                        </p>
                </div>
                </div>
                <div id="right2C22" class="right2C hidePc">
                    <div class="lol">
                        <p class="fonti p1">
                        <br>
                        Möjligheterna med webben idag är oändliga. Trots det så väljer många att begränsa sin digitala närvaro till strategier som de sett andra genomföra. Att använda sig av beprövade metoder är en sund strategi för att behärska det föränderliga klimatet på internet.
                        <br>
                        <br>
                        Vill man bemästra internet krävs det däremot att man utmanar normer och vågar ifrågasätta status quo. För att kontinuerligt leverera utmärkta resultat måste man genomför välgrundade analyser som i tid och otid leder till satsningar som bryter ny mark inom sin industri. 
                        <br>
                        <br>
                        Självklart måste man värna om stabilitet och redan fungerande tillvägagångssätt, det råder det inga tvivel om. Att lägga upp en stabil och välfungerande digital strategi fixar vi på en handvändning - likt många andra webbyråer.  Det som skiljer oss från de andra är att vi har en bottenlös källa av kreativa sätt att ta ditt företag till nästa nivå.
                        <br><br>  
                        </p>
                    </div>
                </div>
                <div id="right2C32" class="right2C hidePc">
                    <div class="lol">
                        <p class="fonti p1">
                        <br>
                        Fråga någon du känner som jobbar med marknadsföring hur personen kom in i yrket. Du kommer bli förvånad hur många inom professionen som aldrig menade att börja arbeta med marknadsföring. Det finns otaligt med bananskalshistorier där ute. 
                        <br>
                        <br>
                        Detta är för att marknadsföring är den enskilt viktigaste aspekten för lyckosamt företagande. Marknadsföringen är det som binder samman de olika grenarna av företagande och människor av olika bakgrunder finner området fängslande. Håller du inte med mig så utmanar jag dig till en diskussion över en fika. 
                        <br>
                        <br>
                        Med det sagt vill vi nämna att Näck på nätet är jävligt bra på marknadsföring. Många webbyråer fokuserar enbart på digital marknadsföring men tappar då ofta helhetsperspektivet. Vi optimerar våra initiativ mot er organisations övergripande mål och specialiserar oss på att skapa kreativa kampanjer som kombinerar den digitala världen med den materiella.
                        <br><br>
                        </p>
                    </div>
               </div>
            </div>
        </div>
        <div id="tab3">
            <div class="smulT"><h2 class="fonti">Näck på nätet ...</h2> </div>
            <div class="smulC ">
                <div class="flip-cardM hidePc"><div id="flipperM" class="flip-card-innerM"><div onclick="cardsM();" class="flip-card-front"><img class="smultronI" src="./tpl/images/pa-natet/Smultron.svg"></div><div class="flip-card-back" onclick="cardsM1();"><span class="cardT fonti" id="cardM"></span></div></div></div>
                <div class="flip-card hideM"><div class="flip-card-inner"><div onmouseenter="cards1();" class="flip-card-front"><img class="smultronI" src="./tpl/images/pa-natet/Smultron.svg"></div><div class="flip-card-back"><span class="cardT fonti" id="card1"></span></div></div></div>
                <div class="flip-card hideM"><div class="flip-card-inner"><div onmouseenter="cards2();" class="flip-card-front"><img class="smultronI" src="./tpl/images/pa-natet/Smultron.svg"></div><div class="flip-card-back"><span class="cardT fonti" id="card2"></span></div></div></div>
                <div class="flip-card hideM"><div class="flip-card-inner"><div onmouseenter="cards3();" class="flip-card-front"><img class="smultronI" src="./tpl/images/pa-natet/Smultron.svg"></div><div class="flip-card-back"><span class="cardT fonti" id="card3"></span></div></div></div>
            </div>
            <div class="smulE"><span class="endT fonti">Ditt smultronställe på nätet</span></div>
        </div>
    </main>
    <footer id="footer">
        <div id="navF">
            <ul>
                <li onclick="tab1M();" id="liF1"> OM OSS </li>
                <li onclick="tab2M(); rubriM();" id="liF2"> PRODUKTER </li>
                <li onclick="tab3M();" id="liF3"> <img class="tilt" src="./tpl/images/pa-natet/Smultron_tilt.svg"></li>
            </ul>
        </div>
    </footer>
        <script type="text/javascript" src="./tpl/scripts/pa-natet.js" async></script>
</body> 