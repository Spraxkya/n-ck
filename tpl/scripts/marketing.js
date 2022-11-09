step = "1";
window.sessionStorage.setItem("step", step);

var pcVHS = document.getElementById('pcVideo');
var ipadVHS = document.getElementById('ipadVideo');
var mobilVHS = document.getElementById('mobilVideo');
var stepp = document.querySelector('.steps');
var first = document.querySelector('.console-container');
var second = document.getElementById('second');
var third = document.getElementById('third');
var fourth = document.getElementById('fourth');
var fift = document.getElementById('fift');
var main = document.querySelector('main');
var sixth = document.getElementById('sixth');
var contakt = document.getElementById('contact');
var alerti = document.getElementById('alert');
var mailAlerti = document.getElementById('mailAlert');
var nummerAlerti = document.getElementById('nummerAlert');
var book = document.getElementById('book');
var tack = document.getElementById('tack');
var pek1 = document.getElementById('pek1');
var pek2 = document.getElementById('pek2');
var stripe = document.getElementById('streck');

pcVHS.load();
ipadVHS.load();
mobilVHS.load();

qr = document.getElementById('qr_id').innerHTML;
window.sessionStorage.setItem('qr_id', qr);


i = document.getElementById('i').innerHTML;
window.sessionStorage.setItem('i', i);


id = "0";
window.sessionStorage.setItem("id", id);


function god() {
    if (sessionStorage.getItem('i') === '0') {
        var mon1 = document.getElementById('1Mon');
        function mon11(evt) {
            id = 1;
            window.sessionStorage.setItem("id", id);
        };
    
        mon1.addEventListener("click", mon11, false);
    
        var tue1 = document.getElementById('1Tue');
        function tue11(evt) {
            id = 2;
            window.sessionStorage.setItem("id", id);
        };
    
        tue1.addEventListener("click", tue11, false);
    
        var wed1 = document.getElementById('1Wed');
        function wed11(evt) {
            id = 3;
            window.sessionStorage.setItem("id", id);
        };
    
        wed1.addEventListener("click", wed11, false);
    
        var thu1 = document.getElementById('1Thu');
        function thu11(evt) {
            id = 4;
            window.sessionStorage.setItem("id", id);
        };
    
        thu1.addEventListener("click", thu11, false);
    
        var fri1 = document.getElementById('1Fri');
        function fri11(evt) {
            id = 5;
            window.sessionStorage.setItem("id", id);
        };
    
        fri1.addEventListener("click", fri11, false);
    
        var mon2 = document.getElementById('2Mon');
        function mon21(evt) {
            id = 6;
            window.sessionStorage.setItem("id", id);
        };
    
        mon2.addEventListener("click", mon21, false);
    
        var tue2 = document.getElementById('2Tue');
        function tue21(evt) {
            id = 7;
            window.sessionStorage.setItem("id", id);
        };
    
        tue2.addEventListener("click", tue21, false);
    
        var wed2 = document.getElementById('2Wed');
        function wed21(evt) {
            id = 8;
            window.sessionStorage.setItem("id", id);
        };
    
        wed2.addEventListener("click", wed21, false);
    
        var thu2 = document.getElementById('2Thu');
        function thu21(evt) {
            id = 9;
            window.sessionStorage.setItem("id", id);
        };
    
        thu2.addEventListener("click", thu21, false);
    
        var fri2 = document.getElementById('2Fri');
        function fri21(evt) {
            id = 10;
            window.sessionStorage.setItem("id", id);
        };
    
        fri2.addEventListener("click", fri21, false);
    
        var mon3 = document.getElementById('3Mon');
        function mon31(evt) {
            id = 11;
            window.sessionStorage.setItem("id", id);
        };
    
        mon3.addEventListener("click", mon31, false);
    
        var tue3 = document.getElementById('3Tue');
        function tue31(evt) {
            id = 12;
            window.sessionStorage.setItem("id", id);
        };
    
        tue3.addEventListener("click", tue31, false);
    
        var wed3 = document.getElementById('3Wed');
        function wed31(evt) {
            id = 13;
            window.sessionStorage.setItem("id", id);
        };
    
        wed3.addEventListener("click", wed31, false);
    
        var thu3 = document.getElementById('3Thu');
        function thu31(evt) {
            id = 14;
            window.sessionStorage.setItem("id", id);
        };
    
        thu3.addEventListener("click", thu31, false);
    
        var fri3 = document.getElementById('3Fri');
        function fri31(evt) {
            id = 15;
            window.sessionStorage.setItem("id", id);
        };
    
        fri3.addEventListener("click", fri31, false);
    
        var mon4 = document.getElementById('4Mon');
        function mon41(evt) {
            id = 16;
            window.sessionStorage.setItem("id", id);
        };
    
        mon4.addEventListener("click", mon41, false);
    
        var tue4 = document.getElementById('4Tue');
        function tue41(evt) {
            id = 17;
            window.sessionStorage.setItem("id", id);
        };
    
        tue4.addEventListener("click", tue41, false);
    
        var wed4 = document.getElementById('4Wed');
        function wed41(evt) {
            id = 18;
            window.sessionStorage.setItem("id", id);
        };
    
        wed4.addEventListener("click", wed41, false);
    
        var thu4 = document.getElementById('4Thu');
        function thu41(evt) {
            id = 19;
            window.sessionStorage.setItem("id", id);
        };
    
        thu4.addEventListener("click", thu41, false);
    
        var fri4 = document.getElementById('4Fri');
        function fri41(evt) {
            id = 20;
            window.sessionStorage.setItem("id", id);
        };
    
        fri4.addEventListener("click", fri41, false);
    }
    
    if (sessionStorage.getItem('i') === '1') {
        var mon1 = document.getElementById('1Mon');
        function mon11(evt) {
            id = 6;
            window.sessionStorage.setItem("id", id);
        };
    
        mon1.addEventListener("click", mon11, false);
    
        var tue1 = document.getElementById('1Tue');
        function tue11(evt) {
            id = 7;
            window.sessionStorage.setItem("id", id);
        };
    
        tue1.addEventListener("click", tue11, false);
    
        var wed1 = document.getElementById('1Wed');
        function wed11(evt) {
            id = 8;
            window.sessionStorage.setItem("id", id);
        };
    
        wed1.addEventListener("click", wed11, false);
    
        var thu1 = document.getElementById('1Thu');
        function thu11(evt) {
            id = 9;
            window.sessionStorage.setItem("id", id);
        };
    
        thu1.addEventListener("click", thu11, false);
    
        var fri1 = document.getElementById('1Fri');
        function fri11(evt) {
            id = 10;
            window.sessionStorage.setItem("id", id);
        };
    
        fri1.addEventListener("click", fri11, false);
    
        var mon2 = document.getElementById('2Mon');
        function mon21(evt) {
            id = 11;
            window.sessionStorage.setItem("id", id);
        };
    
        mon2.addEventListener("click", mon21, false);
    
        var tue2 = document.getElementById('2Tue');
        function tue21(evt) {
            id = 12;
            window.sessionStorage.setItem("id", id);
        };
    
        tue2.addEventListener("click", tue21, false);
    
        var wed2 = document.getElementById('2Wed');
        function wed21(evt) {
            id = 13;
            window.sessionStorage.setItem("id", id);
        };
    
        wed2.addEventListener("click", wed21, false);
    
        var thu2 = document.getElementById('2Thu');
        function thu21(evt) {
            id = 14;
            window.sessionStorage.setItem("id", id);
        };
    
        thu2.addEventListener("click", thu21, false);
    
        var fri2 = document.getElementById('2Fri');
        function fri21(evt) {
            id = 15;
            window.sessionStorage.setItem("id", id);
        };
    
        fri2.addEventListener("click", fri21, false);
    
        var mon3 = document.getElementById('3Mon');
        function mon31(evt) {
            id = 16;
            window.sessionStorage.setItem("id", id);
        };
    
        mon3.addEventListener("click", mon31, false);
    
        var tue3 = document.getElementById('3Tue');
        function tue31(evt) {
            id = 17;
            window.sessionStorage.setItem("id", id);
        };
    
        tue3.addEventListener("click", tue31, false);
    
        var wed3 = document.getElementById('3Wed');
        function wed31(evt) {
            id = 18;
            window.sessionStorage.setItem("id", id);
        };
    
        wed3.addEventListener("click", wed31, false);
    
        var thu3 = document.getElementById('3Thu');
        function thu31(evt) {
            id = 19;
            window.sessionStorage.setItem("id", id);
        };
    
        thu3.addEventListener("click", thu31, false);
    
        var fri3 = document.getElementById('3Fri');
        function fri31(evt) {
            id = 20;
            window.sessionStorage.setItem("id", id);
        };
    
        fri3.addEventListener("click", fri31, false);
    
        var mon4 = document.getElementById('4Mon');
        function mon41(evt) {
            id = 1;
            window.sessionStorage.setItem("id", id);
        };
    
        mon4.addEventListener("click", mon41, false);
    
        var tue4 = document.getElementById('4Tue');
        function tue41(evt) {
            id = 2;
            window.sessionStorage.setItem("id", id);
        };
    
        tue4.addEventListener("click", tue41, false);
    
        var wed4 = document.getElementById('4Wed');
        function wed41(evt) {
            id = 3;
            window.sessionStorage.setItem("id", id);
        };
    
        wed4.addEventListener("click", wed41, false);
    
        var thu4 = document.getElementById('4Thu');
        function thu41(evt) {
            id = 4;
            window.sessionStorage.setItem("id", id);
        };
    
        thu4.addEventListener("click", thu41, false);
    
        var fri4 = document.getElementById('4Fri');
        function fri41(evt) {
            id = 5;
            window.sessionStorage.setItem("id", id);
        };
    
        fri4.addEventListener("click", fri41, false);
    }
    
    if (sessionStorage.getItem('i') === '2') {
        var mon1 = document.getElementById('1Mon');
        function mon11(evt) {
            id = 11;
            window.sessionStorage.setItem("id", id);
        };
    
        mon1.addEventListener("click", mon11, false);
    
        var tue1 = document.getElementById('1Tue');
        function tue11(evt) {
            id = 12;
            window.sessionStorage.setItem("id", id);
        };
    
        tue1.addEventListener("click", tue11, false);
    
        var wed1 = document.getElementById('1Wed');
        function wed11(evt) {
            id = 13;
            window.sessionStorage.setItem("id", id);
        };
    
        wed1.addEventListener("click", wed11, false);
    
        var thu1 = document.getElementById('1Thu');
        function thu11(evt) {
            id = 14;
            window.sessionStorage.setItem("id", id);
        };
    
        thu1.addEventListener("click", thu11, false);
    
        var fri1 = document.getElementById('1Fri');
        function fri11(evt) {
            id = 15;
            window.sessionStorage.setItem("id", id);
        };
    
        fri1.addEventListener("click", fri11, false);
    
        var mon2 = document.getElementById('2Mon');
        function mon21(evt) {
            id = 16;
            window.sessionStorage.setItem("id", id);
        };
    
        mon2.addEventListener("click", mon21, false);
    
        var tue2 = document.getElementById('2Tue');
        function tue21(evt) {
            id = 17;
            window.sessionStorage.setItem("id", id);
        };
    
        tue2.addEventListener("click", tue21, false);
    
        var wed2 = document.getElementById('2Wed');
        function wed21(evt) {
            id = 18;
            window.sessionStorage.setItem("id", id);
        };
    
        wed2.addEventListener("click", wed21, false);
    
        var thu2 = document.getElementById('2Thu');
        function thu21(evt) {
            id = 19;
            window.sessionStorage.setItem("id", id);
        };
    
        thu2.addEventListener("click", thu21, false);
    
        var fri2 = document.getElementById('2Fri');
        function fri21(evt) {
            id = 20;
            window.sessionStorage.setItem("id", id);
        };
    
        fri2.addEventListener("click", fri21, false);
    
        var mon3 = document.getElementById('3Mon');
        function mon31(evt) {
            id = 1;
            window.sessionStorage.setItem("id", id);
        };
    
        mon3.addEventListener("click", mon31, false);
    
        var tue3 = document.getElementById('3Tue');
        function tue31(evt) {
            id = 2;
            window.sessionStorage.setItem("id", id);
        };
    
        tue3.addEventListener("click", tue31, false);
    
        var wed3 = document.getElementById('3Wed');
        function wed31(evt) {
            id = 3;
            window.sessionStorage.setItem("id", id);
        };
    
        wed3.addEventListener("click", wed31, false);
    
        var thu3 = document.getElementById('3Thu');
        function thu31(evt) {
            id = 4;
            window.sessionStorage.setItem("id", id);
        };
    
        thu3.addEventListener("click", thu31, false);
    
        var fri3 = document.getElementById('3Fri');
        function fri31(evt) {
            id = 5;
            window.sessionStorage.setItem("id", id);
        };
    
        fri3.addEventListener("click", fri31, false);
    
        var mon4 = document.getElementById('4Mon');
        function mon41(evt) {
            id = 6;
            window.sessionStorage.setItem("id", id);
        };
    
        mon4.addEventListener("click", mon41, false);
    
        var tue4 = document.getElementById('4Tue');
        function tue41(evt) {
            id = 7;
            window.sessionStorage.setItem("id", id);
        };
    
        tue4.addEventListener("click", tue41, false);
    
        var wed4 = document.getElementById('4Wed');
        function wed41(evt) {
            id = 8;
            window.sessionStorage.setItem("id", id);
        };
    
        wed4.addEventListener("click", wed41, false);
    
        var thu4 = document.getElementById('4Thu');
        function thu41(evt) {
            id = 9;
            window.sessionStorage.setItem("id", id);
        };
    
        thu4.addEventListener("click", thu41, false);
    
        var fri4 = document.getElementById('4Fri');
        function fri41(evt) {
            id = 10;
            window.sessionStorage.setItem("id", id);
        };
    
        fri4.addEventListener("click", fri41, false);
    }
    
    if (sessionStorage.getItem('i') === '3') {
        var mon1 = document.getElementById('1Mon');
        function mon11(evt) {
            id = 16;
            window.sessionStorage.setItem("id", id);
        };
    
        mon1.addEventListener("click", mon11, false);
    
        var tue1 = document.getElementById('1Tue');
        function tue11(evt) {
            id = 17;
            window.sessionStorage.setItem("id", id);
        };
    
        tue1.addEventListener("click", tue11, false);
    
        var wed1 = document.getElementById('1Wed');
        function wed11(evt) {
            id = 18;
            window.sessionStorage.setItem("id", id);
        };
    
        wed1.addEventListener("click", wed11, false);
    
        var thu1 = document.getElementById('1Thu');
        function thu11(evt) {
            id = 19;
            window.sessionStorage.setItem("id", id);
        };
    
        thu1.addEventListener("click", thu11, false);
    
        var fri1 = document.getElementById('1Fri');
        function fri11(evt) {
            id = 20;
            window.sessionStorage.setItem("id", id);
        };
    
        fri1.addEventListener("click", fri11, false);
    
        var mon2 = document.getElementById('2Mon');
        function mon21(evt) {
            id = 1;
            window.sessionStorage.setItem("id", id);
        };
    
        mon2.addEventListener("click", mon21, false);
    
        var tue2 = document.getElementById('2Tue');
        function tue21(evt) {
            id = 2;
            window.sessionStorage.setItem("id", id);
        };
    
        tue2.addEventListener("click", tue21, false);
    
        var wed2 = document.getElementById('2Wed');
        function wed21(evt) {
            id = 3;
            window.sessionStorage.setItem("id", id);
        };
    
        wed2.addEventListener("click", wed21, false);
    
        var thu2 = document.getElementById('2Thu');
        function thu21(evt) {
            id = 4;
            window.sessionStorage.setItem("id", id);
        };
    
        thu2.addEventListener("click", thu21, false);
    
        var fri2 = document.getElementById('2Fri');
        function fri21(evt) {
            id = 5;
            window.sessionStorage.setItem("id", id);
        };
    
        fri2.addEventListener("click", fri21, false);
    
        var mon3 = document.getElementById('3Mon');
        function mon31(evt) {
            id = 6;
            window.sessionStorage.setItem("id", id);
        };
    
        mon3.addEventListener("click", mon31, false);
    
        var tue3 = document.getElementById('3Tue');
        function tue31(evt) {
            id = 7;
            window.sessionStorage.setItem("id", id);
        };
    
        tue3.addEventListener("click", tue31, false);
    
        var wed3 = document.getElementById('3Wed');
        function wed31(evt) {
            id = 8;
            window.sessionStorage.setItem("id", id);
        };
    
        wed3.addEventListener("click", wed31, false);
    
        var thu3 = document.getElementById('3Thu');
        function thu31(evt) {
            id = 9;
            window.sessionStorage.setItem("id", id);
        };
    
        thu3.addEventListener("click", thu31, false);
    
        var fri3 = document.getElementById('3Fri');
        function fri31(evt) {
            id = 10;
            window.sessionStorage.setItem("id", id);
        };
    
        fri3.addEventListener("click", fri31, false);
    
        var mon4 = document.getElementById('4Mon');
        function mon41(evt) {
            id = 11;
            window.sessionStorage.setItem("id", id);
        };
    
        mon4.addEventListener("click", mon41, false);
    
        var tue4 = document.getElementById('4Tue');
        function tue41(evt) {
            id = 12;
            window.sessionStorage.setItem("id", id);
        };
    
        tue4.addEventListener("click", tue41, false);
    
        var wed4 = document.getElementById('4Wed');
        function wed41(evt) {
            id = 13;
            window.sessionStorage.setItem("id", id);
        };
    
        wed4.addEventListener("click", wed41, false);
    
        var thu4 = document.getElementById('4Thu');
        function thu41(evt) {
            id = 14;
            window.sessionStorage.setItem("id", id);
        };
    
        thu4.addEventListener("click", thu41, false);
    
        var fri4 = document.getElementById('4Fri');
        function fri41(evt) {
            id = 15;
            window.sessionStorage.setItem("id", id);
        };
    
        fri4.addEventListener("click", fri41, false);
    }
}

function changeStepNext() {

    switch (sessionStorage.getItem('step')) {

        case '1':
            first.style.display = 'none';
            second.style.display = 'block';
            step = "2";
            window.sessionStorage.setItem("step", step);
            pek1.style.display = 'none';
            pek2.style.display = 'none';
            stripe.style.display = 'none';
            break;

        case '2':
            second.style.display = 'none';
            third.style.display = 'flex';            
            stepp.style.zIndex = '5';
            step = "2.5";
            window.sessionStorage.setItem("step", step);
            vhs = "1";
            window.sessionStorage.setItem("vhs", vhs);
            break;

        case '2.5':
            pcVHS.play();
            ipadVHS.play();
            mobilVHS.play();
            stepp.style.zIndex = '5';
            step = "3";
            window.sessionStorage.setItem("step", step);
            break;

        case '3':
            third.style.display = 'none';
            fourth.style.display = 'block';
            main.style.backgroundColor = '#FF5E90';
            stepp.style.zIndex = '';
            step = "4";
            window.sessionStorage.setItem("step", step);
            break;

        case '4':
            fourth.style.display = 'none';
            fift.style.display = 'block';
            stepp.style.zIndex = '';
            step = "5";
            window.sessionStorage.setItem("step", step);
            break;
    }
}

function changeStepPrev() {

    switch (sessionStorage.getItem('step')) {

        case '2':
            second.style.display = 'none';
            first.style.display = 'block';
            step = "1";
            window.sessionStorage.setItem("step", step);
            break;

        case '2.5':
            second.style.display = 'block';
            third.style.display = 'none';
            main.style.backgroundColor = '#181215';
            step = "2";
            window.sessionStorage.setItem("step", step);
            break;

        case '3':
            pcVHS.pause();
            ipadVHS.pause();
            mobilVHS.pause();
            pcVHS.currentTime = 0;
            ipadVHS.currentTime = 0;
            mobilVHS.currentTime = 0;
            stepp.style.zIndex = '5';
            step = "2.5";
            window.sessionStorage.setItem("step", step);
            break;

        case '4':
            fourth.style.display = 'none';
            third.style.display = 'flex';
            pcVHS.pause();
            ipadVHS.pause();
            mobilVHS.pause();
            pcVHS.currentTime = 0;
            ipadVHS.currentTime = 0;
            mobilVHS.currentTime = 0;
            stepp.style.zIndex = '5';
            step = "2.5";
            window.sessionStorage.setItem("step", step);
            break;

        case '5':
            fourth.style.display = 'block';
            fift.style.display = 'none';
            main.style.backgroundColor = '#FF5E90';
            step = "4";
            window.sessionStorage.setItem("step", step);
            break;
    }

}



/* Kontakt Sidan */

function kontakt() {

    fift.style.display = "none";
    contakt.style.display = "flex"
    step = "0";
    window.sessionStorage.setItem("step", step);

}

function back() {

    fift.style.display = "block";
    contakt.style.display = "none";
    book.style.display = "none";
    step = "5";
    window.sessionStorage.setItem("step", step);

}

function done() {
    tack.style.display = "flex";
    contakt.style.display = "none";
}

function copyNumber() {
    var number = '0724034229';
    navigator.clipboard.writeText(number);

    alerti.style.transform = "translateY(5%)";
    nummerAlerti.style.display = "flex";
    mailAlerti.style.display = "none";

    setTimeout(() => {
        alerti.style.transform = "translateY(-200%)";
    }, 3000);
}

function copyMail() {
    var mail = 'web@nackcollective.com';
    navigator.clipboard.writeText(mail);

    alerti.style.transform = "translateY(5%)";
    mailAlerti.style.display = "flex";
    nummerAlerti.style.display = "none";

    setTimeout(() => {
        alerti.style.transform = "translateY(-200%)";
    }, 3000);
}

/* Bokningsida */

function boka() {

    fift.style.display = "none";
    book.style.display = "flex";
    step = "0";
    window.sessionStorage.setItem("step", step);

}

function chooseTime() {

    document.querySelectorAll('.call').forEach(el => {
        el.style.backgroundColor = "white";
    });

}

week = "1";
window.sessionStorage.setItem("week", week);

var week1 = document.getElementById('week1');
var week2 = document.getElementById('week2');
var week3 = document.getElementById('week3');
var week4 = document.getElementById('week4');

var cWeek1 = document.getElementById('cWeek1');
var cWeek2 = document.getElementById('cWeek2');
var cWeek3 = document.getElementById('cWeek3');
var cWeek4 = document.getElementById('cWeek4');

function prevWeek() {
    switch (sessionStorage.getItem('week')) {

        case '1':
            week = "1";
            window.sessionStorage.setItem("week", week);
            break;
        case '2':
            week1.style.display = 'flex';
            week2.style.display = 'none';
            cWeek1.style.display = 'flex';
            cWeek2.style.display = 'none';
            week = "1";
            window.sessionStorage.setItem("week", week);
            break;
        case '3':
            week2.style.display = 'flex';
            week3.style.display = 'none';
            cWeek2.style.display = 'flex';
            cWeek3.style.display = 'none';
            week = "2";
            window.sessionStorage.setItem("week", week);
            break;
        case '4':
            week3.style.display = 'flex';
            week4.style.display = 'none';
            cWeek3.style.display = 'flex';
            cWeek4.style.display = 'none';
            week = "3";
            window.sessionStorage.setItem("week", week);
            break;
    }
}

function nextWeek() {
    switch (sessionStorage.getItem('week')) {

        case '1':
            week2.style.display = 'flex';
            week1.style.display = 'none';
            cWeek2.style.display = 'flex';
            cWeek1.style.display = 'none';
            week = "2";
            window.sessionStorage.setItem("week", week);
            break;
        case '2':
            week3.style.display = 'flex';
            week2.style.display = 'none';
            cWeek3.style.display = 'flex';
            cWeek2.style.display = 'none';
            week = "3";
            window.sessionStorage.setItem("week", week);
            break;
        case '3':
            week4.style.display = 'flex';
            week3.style.display = 'none';
            cWeek4.style.display = 'flex';
            cWeek3.style.display = 'none';
            week = "4";
            window.sessionStorage.setItem("week", week);
            break;
        case '4':
            week = "4";
            window.sessionStorage.setItem("week", week);
            break;
    }
}

window.addEventListener("load", function () {

    stripe.style.transition = 'opacity 2s ease-in';
    pek1.style.transition = 'opacity 2s ease-in';
    pek2.style.transition = 'opacity 2s ease-in';

    setTimeout(function(){
        stripe.style.opacity = '1';
        pek1.style.opacity = '1';
        pek2.style.opacity = '1';
    }, 5000);

});

function heighti() {
    var mainContent = document.getElementById('main-content');
    mainContent.style.minHeight = window.innerHeight + 'px';

    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
        if(window.innerWidth <(0.5 * window.innerHeight)) {
            var phoneVideo = document.getElementById('ipadVideo');
            phoneVideo.style.height = window.innerHeight + 'px';
            phoneVideo.style.width = 'auto';
        }
    } else {
        var phoneVideo = document.getElementById('ipadVideo');
        phoneVideo.style.height = 'auto';
        phoneVideo.style.width = '100%';
    }
    console.log(window.innerHeight + 'px');
}

window.onload = heighti(), god();
window.onresize = heighti;