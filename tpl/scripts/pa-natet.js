tab = "1";
window.sessionStorage.setItem("tab", tab);

rubri = "1";
window.sessionStorage.setItem("rubri", rubri);

rubrikm = "0";
window.sessionStorage.setItem("rubrikm", rubrikm);

let width = window.innerWidth;

function tab1Pc() {
    tab = "1";
    window.sessionStorage.setItem("tab", tab);
    tabM = "1";
    window.sessionStorage.setItem("tabM", tabM);
    tabsPc();
    tabsM();
}

function tab2Pc() {
    tab = "2";
    window.sessionStorage.setItem("tab", tab);
    tabM = "2";
    window.sessionStorage.setItem("tabM", tabM);
    tabsPc();
    tabsM();
}

function tab3Pc() {
    tab = "3";
    window.sessionStorage.setItem("tab", tab);
    tabM = "3";
    window.sessionStorage.setItem("tabM", tabM);
    tabsPc();
    tabsM();
}


function tabsPc() {
    var li1 = document.getElementById('li1');
    var li2 = document.getElementById('li2');
    var li3 = document.getElementById('li3');

    var tab1 = document.getElementById('tab1');
    var tab2 = document.getElementById('tab2');
    var tab3 = document.getElementById('tab3');

    var header = document.getElementById('header');
    

    switch (sessionStorage.getItem('tab')) {

        case '1':
        li1.style.border = 'unset';
        li1.style.borderRight = '5px solid black';
        li1.style.textDecoration ='underline';
        li2.style.textDecoration ='unset';
        li3.style.textDecoration ='unset';
        li2.style.borderBottom = '10px solid black';
        li2.style.borderTop = 'unset';
        li2.style.borderLeft = '5px solid black';
        li3.style.borderBottom = ' 10px solid black';
        li3.style.borderTop = 'unset';
        li1.style.borderColor ='black';
        li2.style.borderColor ='black';
        li3.style.borderColor ='black';
        document.documentElement.style.setProperty('--scrolly', '#6dd3ce');
        document.documentElement.style.setProperty('--track', 'black');
        document.documentElement.style.setProperty('--border', 'black');
        tab1.style.display = 'flex';
        tab2.style.display = 'none';
        tab3.style.display = 'none';
        document.body.style.backgroundColor = 'var(--blue)';
        header.style.backgroundColor = 'var(--blue)';
        break;

        case '2':
        li1.style.borderBottom = '10px solid white';
        li1.style.borderRight = '5px solid white';
        li1.style.borderTop = 'unset';
        li1.style.textDecoration ='unset';
        li2.style.textDecoration ='underline';
        li3.style.textDecoration ='unset';
        li2.style.borderBottom = 'unset';
        li2.style.borderTop = 'unset';
        li2.style.borderLeft = '5px solid white';
        li2.style.textDecoration ='underline';
        li3.style.borderBottom = ' 10px solid black';
        li3.style.borderTop = 'unset';
        li2.style.borderColor ='white';
        li3.style.borderColor ='white';
        document.body.style.backgroundColor = 'var(--green)';
        header.style.backgroundColor = 'var(--green)';
        document.documentElement.style.setProperty('--scrolly', 'white');
        document.documentElement.style.setProperty('--track', '#558730');
        document.documentElement.style.setProperty('--border', '#558730');
        tab1.style.display = 'none';
        tab2.style.display = 'flex';
        tab3.style.display = 'none';
        break;

        case '3':
        li1.style.borderBottom = 'var(--pink) solid 10px';
        li1.style.borderRight = 'unset';
        li2.style.borderBottom = 'var(--pink) solid 10px';
        li2.style.borderLeft = 'unset';
        li2.style.borderRight = 'var(--pink) solid 5px';
        li3.style.border = 'unset';
        li3.style.borderLeft = 'var(--pink) solid 5px';
        li1.style.textDecoration ='unset';
        li2.style.textDecoration ='unset';
        li3.style.textDecoration ='underline';
        document.body.style.backgroundColor = 'black';
        header.style.backgroundColor = 'black';
        document.documentElement.style.setProperty('--scrolly', 'var(--pink)');
        document.documentElement.style.setProperty('--track', 'black');
        document.documentElement.style.setProperty('--border', 'black');
        tab1.style.display = 'none';
        tab2.style.display = 'none';
        tab3.style.display = 'flex';
        break;
    }

}

function rubri1Pc() {
    rubri = "1";
    window.sessionStorage.setItem("rubri", rubri);
    rubrikm = "1";
    window.sessionStorage.setItem("rubrikm", rubrikm);
    rubriPc();
    rubriM();
}

function rubri2Pc() {
    rubri = "2";
    window.sessionStorage.setItem("rubri", rubri);
    rubrikm = "2";
    window.sessionStorage.setItem("rubrikm", rubrikm);
    rubriPc();
    rubriM();
}

function rubri3Pc() {
    rubri = "3";
    window.sessionStorage.setItem("rubri", rubri);
    rubrikm = "3";
    window.sessionStorage.setItem("rubrikm", rubrikm);
    rubriPc();
    rubriM();
}

function rubriPc() {
    var rubrik1 = document.getElementById('rubrik1');
    var rubrik2 = document.getElementById('rubrik2');
    var rubrik3 = document.getElementById('rubrik3');

    var rubrikc1 = document.getElementById('right2C1');
    var rubrikc2 = document.getElementById('right2C2');
    var rubrikc3 = document.getElementById('right2C3');

    switch (sessionStorage.getItem('rubri')) {

        case '1':
            rubrik1.style.textDecoration ='underline';
            rubrik2.style.textDecoration ='unset';
            rubrik3.style.textDecoration ='unset';
            rubrikc1.style.display = 'flex';
            rubrikc2.style.display = 'none';
            rubrikc3.style.display = 'none';            
        break;

        case '2':
            rubrik1.style.textDecoration ='unset';
            rubrik2.style.textDecoration ='underline';
            rubrik3.style.textDecoration ='unset';
            rubrikc1.style.display = 'none';
            rubrikc2.style.display = 'flex';
            rubrikc3.style.display = 'none';
        break;

        case '3':
            rubrik1.style.textDecoration ='unset';
            rubrik2.style.textDecoration ='unset';
            rubrik3.style.textDecoration ='underline';
            rubrikc1.style.display = 'none';
            rubrikc2.style.display = 'none';
            rubrikc3.style.display = 'flex';
        break;
    }
}

tabM = "1";
window.sessionStorage.setItem("tabM", tabM);

function tab1M() {
    tabM = "1";
    window.sessionStorage.setItem("tabM", tabM);
    tab = "1";
    window.sessionStorage.setItem("tab", tab);
    tabsM();
    tabsPc();
}

function tab2M() {
    tabM = "2";
    window.sessionStorage.setItem("tabM", tabM);
    tab = "2";
    window.sessionStorage.setItem("tab", tab);
    tabsM();
    tabsPc();
}

function tab3M() {
    tabM = "3";
    window.sessionStorage.setItem("tabM", tabM);
    tab = "3";
    window.sessionStorage.setItem("tab", tab);
    tabsM();
    tabsPc();
}


function tabsM() {
    var li1 = document.getElementById('liF1');
    var li2 = document.getElementById('liF2');
    var li3 = document.getElementById('liF3');

    var tab1 = document.getElementById('tab1');
    var tab2 = document.getElementById('tab2');
    var tab3 = document.getElementById('tab3');

    switch (sessionStorage.getItem('tabM')) {

        case '1':
        document.body.style.backgroundColor = 'var(--blue)';
        li1.style.borderTop = 'unset';
        li1.style.borderRight = 'solid black 5px';
        li2.style.borderLeft = 'solid black 5px';
        li2.style.borderRight = 'solid black 5px';
        li2.style.borderTop = 'solid black 10px';
        li2.style.borderBottom = '0';
        li3.style.borderTop = 'solid black 10px';
        li3.style.borderRight ='0';
        li3.style.borderLeft = '0';
        li3.style.borderBottom = '0';
        document.documentElement.style.setProperty('--scrolly', '#6dd3ce');
        document.documentElement.style.setProperty('--track', 'black');
        document.documentElement.style.setProperty('--border', 'black');
        tab1.style.display = 'flex';
        tab2.style.display = 'none';
        tab3.style.display = 'none';
        break;

        case '2':
        document.body.style.backgroundColor = 'var(--green)';
        li1.style.borderTop = 'solid white 10px';
        li1.style.borderRight = 'solid white 5px';
        li2.style.borderLeft = 'solid white 5px';
        li2.style.borderRight = 'solid white 5px';
        li2.style.borderTop = '0';
        li2.style.borderBottom = '0';
        li3.style.borderTop = 'solid white 10px';
        li3.style.borderRight ='0';
        li3.style.borderLeft = 'solid white 5px';
        li3.style.borderBottom = '0';
        document.documentElement.style.setProperty('--scrolly', 'white');
        document.documentElement.style.setProperty('--track', '#558730');
        document.documentElement.style.setProperty('--border', '#558730');
        tab1.style.display = 'none';
        tab2.style.display = 'flex';
        tab3.style.display = 'none';
        break;

        case '3':
        document.body.style.backgroundColor = 'black';
        li1.style.borderTop = 'solid var(--pink) 10px';
        li1.style.borderRight = '0';
        li2.style.borderLeft = '0';
        li2.style.borderRight = 'solid var(--pink) 5px';
        li2.style.borderTop = 'solid var(--pink) 10px';
        li2.style.borderBottom = '0';
        li3.style.borderTop = '0';
        li3.style.borderRight ='0';
        li3.style.borderLeft = 'solid var(--pink) 5px';
        li3.style.borderBottom = '0';
        document.documentElement.style.setProperty('--scrolly', 'var(--pink)');
        document.documentElement.style.setProperty('--track', 'black');
        document.documentElement.style.setProperty('--border', 'black');
        tab1.style.display = 'none';
        tab2.style.display = 'none';
        tab3.style.display = 'flex';
        break;
    }

}

function rubri1M() {
    rubrikm = "1";
    window.sessionStorage.setItem("rubrikm", rubrikm);
    rubri = "1";
    window.sessionStorage.setItem("rubri", rubri);
    rubriM();
}

function rubri2M() {
    rubrikm = "2";
    window.sessionStorage.setItem("rubrikm", rubrikm);
    rubri = "2";
    window.sessionStorage.setItem("rubri", rubri);
    rubriM();
}

function rubri3M() {
    rubrikm = "3";
    window.sessionStorage.setItem("rubrikm", rubrikm);
    rubri = "3";
    window.sessionStorage.setItem("rubri", rubri);
    rubriM();
}

function rubriM() {

    var rubrikc1 = document.getElementById('right2C12');
    var rubrikc2 = document.getElementById('right2C22');
    var rubrikc3 = document.getElementById('right2C32');

    var pickC = document.getElementById('left22');
    var textC = document.getElementById('right22');

    var font1 = document.getElementById('font1');
    var font2 = document.getElementById('font2');
    var font3 = document.getElementById('font3');

    switch (sessionStorage.getItem('rubrikm')) {

        case '1':
            pickC.style.display = 'none';
            textC.style.display = 'flex';
            rubrikc1.style.display = 'flex';
            rubrikc2.style.display = 'none';
            rubrikc3.style.display = 'none';
            font1.style.display = 'flex';
            font2.style.display = 'none';
            font3.style.display = 'none';
        break;

        case '2':
            pickC.style.display = 'none';
            textC.style.display = 'flex';
            rubrikc1.style.display = 'none';
            rubrikc2.style.display = 'flex';
            rubrikc3.style.display = 'none';
            font1.style.display = 'none';
            font2.style.display = 'flex';
            font3.style.display = 'none';
        break;

        case '3':
            pickC.style.display = 'none';
            textC.style.display = 'flex';
            rubrikc1.style.display = 'none';
            rubrikc2.style.display = 'none';
            rubrikc3.style.display = 'flex';
            font1.style.display = 'none';
            font2.style.display = 'none';
            font3.style.display = 'flex';
        break;
    }
}

function rubriKlickR() {

    switch (sessionStorage.getItem('rubrikm')) {

        case '1':
            rubrikm = "2";
            window.sessionStorage.setItem("rubrikm", rubrikm);
            rubriM();
        break;

        case '2':
            rubrikm = "3";
            window.sessionStorage.setItem("rubrikm", rubrikm);
            rubriM();
        break;

        case '3':
            rubrikm = "1";
            window.sessionStorage.setItem("rubrikm", rubrikm);
            rubriM();
        break;
    }
}

function rubriKlickL() {

    switch (sessionStorage.getItem('rubrikm')) {

        case '1':
            rubrikm = "3";
            window.sessionStorage.setItem("rubrikm", rubrikm);
            rubriM();
        break;

        case '2':
            rubrikm = "1";
            window.sessionStorage.setItem("rubrikm", rubrikm);
            rubriM();
        break;

        case '3':
            rubrikm = "2";
            window.sessionStorage.setItem("rubrikm", rubrikm);
            rubriM();
        break;
    }
}

var cardM = document.getElementById('cardM');
var card1 = document.getElementById('card1');
var card2 = document.getElementById('card2');
var card3 = document.getElementById('card3');

var flipM = document.getElementById('flipperM');

var textArray = [
    '...anställer bara lallare.',
    '...hanterar inte stress så bra.',
    '...ödslar tid.',
    '...är generellt ganska oambitiösa.',
    '...kanske borde byta karriär.',
    '...har fått slut på idéer.', 
    '...hatar överraskningar.', 
    '...vinner aldrig några priser.',
    '...borde ha gått i pension för längesen.', 
    '...vägrar att panta.', 
    '...äter kakan och behåller den.', 
    '...smaskar när vi äter.', 
    '...skjuter problemen under mattan.', 
    '...talar generellt ganska otydligt.',
    '...litar på allt som står på internet.',
    '...förstår danska.', 
    '...tar från de fattiga och ger till oss själva.',
    '...faller för kryptoscams.',
    '...har tappat det helt.', 
    '...främjar gängkriminal- iteten.',
    '...lämnar bilen på tomgång när vi handlar.',
    '...gör så lite som möjligt på så lång tid som möjligt.',
    '...är flat-earthers.',
    '...har inget kvar att ge.',
    '...tar en öl på jobbet innan lunch.',
    '...röker innne och fimpar i soffan.',
    '...tycker det är töntigt med cykelhjälm.',
    '...lyssnar på storebror och är emot frihet.',
    '...erkänner sig skyldiga till olagna nedladdning av film och musik.',
    '...vänder kappan efter vinden.',
    '...ringer Securitas på din fest.',
    '...bänglar in´t.',
    '...pallar inte mer.',
    '...har gått hem redan.',
    '...lämnar mycket åt fantasin.',
    '...uppmuntrar barn att göra tik-tok-karriär.',
    '...behöver mer jobb.',
    '...ger dig chansen att träffa lokala singlar (2km).',
    '...har 2.5 högskolepoäng i programmering.',
    '...känner ingen ånger.',
    '...hjälper dig med greenwashing.',
    '...deklarerar inte sina tillgångar.',
    '...tar gärna betalt under bordet.',
    '...spelar epa-dunk på bussen.',
    '...går på rave, men dansar inte.',
    '...skyller ifrån sig.',
    '...tar inget ansvar.',
    '...planterar key-loggers på din hemsida helt gratis.',
    '...kommer ljuga i förhör.'
];

function cardsM() {
    var randomNumber1 = Math.floor(Math.random()*textArray.length);
    cardM.innerHTML = textArray[randomNumber1];
    flipM.style = 'transform: rotateY(180deg)';
}

function cardsM1() {
    flipM.style = 'transform: rotateY(0deg)';
}

function cards1() {
    var randomNumber1 = Math.floor(Math.random()*textArray.length);
    card1.innerHTML = textArray[randomNumber1];
}

function cards2() { 
    var randomNumber2 = Math.floor(Math.random()*textArray.length);
    card2.innerHTML = textArray[randomNumber2];
}

function cards3() { 
    var randomNumber3 = Math.floor(Math.random()*textArray.length);
    card3.innerHTML = textArray[randomNumber3];
}

function kalenderPc() {
    var boka = document.getElementById('kalenderLuring');

    boka.style = 'transform: rotateY(0deg)';
}

window.onload = tabsPc(), tabsM();

window.onresize = rubriPc(), rubriM();