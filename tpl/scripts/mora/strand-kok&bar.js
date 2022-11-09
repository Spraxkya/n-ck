function validation1() {
    var form = document.getElementById('attansForm');
    var email = document.getElementById('attansEmail').value;
    var border = document.getElementById('attansEmail');
    var text = document.getElementById('epostVal');

    if (email.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)) {
        form.classList.add('valid');
        form.classList.remove('invalid');
        text.innerHTML = 'Var nogrann med eposten!!';
        text.style.color = 'black';
        return true;
    } else {
        form.classList.remove('valid');
        form.classList.add('invalid');
        return false;
    }
}

function checkeri() {
    var text = document.getElementById('epostVal');

    text.innerHTML = 'Var nogrann med eposten!!';
    text.style.color = 'black';
}

function skicka1() {
    var klick = document.getElementById('klick1');
    var border = document.getElementById('attansEmail');
    var text = document.getElementById('epostVal');

    if(validation1() !== true) {
        border.style.border = "solid #a30404 2px";
        border.style.backgroundColor = "rgb(163 4 4 / 19%)";
        text.innerHTML = 'Din epost är inte kosher';
        text.style.color = '#a30404';
    } else {
        klick.click();
    }
}

function hellYeah() {
    var knapp = document.getElementById('removy');

    knapp.removeAttribute('onclick');

}

function scaleBro() {
    heighti = window.innerHeight;
    widthi = window.innerWidth;
    bild = document.getElementById('bros');

    if(heighti < widthi) {
        bild.style.backgroundImage = 'url(https://näck.com/tpl/images/mora/dvd.webp)';
        bild.style.backgroundPosition = 'unset';
        bild.style.backgroundPositionX ='74%';
        bild.style.backgroundSize = 'cover';
        bild.style.height = '80%';
    } else if(heighti > widthi){
        bild.style.backgroundImage = 'url(https://näck.com/tpl/images/mora/dvdM.webp)';
        bild.style.backgroundPosition = 'top center';
        bild.style.backgroundSize = '100%';
        bild.style.height = '60%';
    }
}

onload = scaleBro();

window.onresize = scaleBro;