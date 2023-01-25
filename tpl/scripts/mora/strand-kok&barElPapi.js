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
        text.innerHTML = 'Din epost är inte okej';
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
    jas = window.outerHeight;
    bild = document.getElementById('bros');

    if(heighti < widthi) {
        bild.style.backgroundImage = 'url(https://näck.com/tpl/images/mora/ElPapi.webp)';
        bild.style.backgroundPosition = 'center center';
        bild.style.backgroundSize = 'cover';
        bild.style.height = '100%';
        console.log('jas');
    } else if(heighti > widthi){
        bild.style.backgroundImage = 'url(https://näck.com/tpl/images/mora/ElPapi.webp)';
        bild.style.backgroundPosition = 'center center';
        bild.style.backgroundSize = '175%';
        console.log('saj');
    }
}

onload = scaleBro();

window.onresize = scaleBro;