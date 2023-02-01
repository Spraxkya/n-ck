mode = "onOff";
window.sessionStorage.setItem("mode", mode);

var cContainer = document.getElementById('cContainer');

var bckOn = document.getElementById('bckOn');
var bckOff = document.getElementById('bckOff');
var bckUv = document.getElementById('bckUv');
var bckOnG = document.getElementById('bckOnG');
var bckOffG = document.getElementById('bckOffG');
var bckUvG = document.getElementById('bckUvG');

var lightSwitch = document.getElementById('lightSwitch');
var leftSwitch = document.getElementById('lightbutton1');
var rightSwitch = document.getElementById('lightbutton2');

var lightSwitchOnOff = document.getElementById('lightSwitch-onOff');
var lightSwitchOffOn = document.getElementById('lightSwitch-offOn');
var lightSwitchOnOn = document.getElementById('lightSwitch-onOn');
var lightSwitchOffOff = document.getElementById('lightSwitch-offOff');

var bulletin = document.getElementById('bulletin-board');

function leftButton() {

    switch (sessionStorage.getItem('mode')) {

        case 'onOff':
            mode = "offOff";
            window.sessionStorage.setItem("mode", mode);
            moodi();

        break;

        case 'offOff':
            mode = "onOff";
            window.sessionStorage.setItem("mode", mode);
            moodi();

        break;

        case 'onOn':
            mode = "offOn";
            window.sessionStorage.setItem("mode", mode);
            moodi();

        break;

        case 'offOn':
            mode = "onOn";
            window.sessionStorage.setItem("mode", mode);
            moodi();

        break;

    }

}

function rightButton() {

    switch (sessionStorage.getItem('mode')) {

        case 'onOff':
            mode = "onOn";
            window.sessionStorage.setItem("mode", mode);
            moodi();

        break;

        case 'offOff':
            mode = "offOn";
            window.sessionStorage.setItem("mode", mode);
            moodi();

        break;

        case 'onOn':
            mode = "onOff";
            window.sessionStorage.setItem("mode", mode);
            moodi();

        break;

        case 'offOn':
            mode = "offOff";
            window.sessionStorage.setItem("mode", mode);
            moodi();

        break;

    }

}

function moodi() {
    switch(sessionStorage.getItem('mode')) {
        case 'offOff':
            lightSwitchOnOff.style.zIndex = '0';
            lightSwitchOffOn.style.zIndex = '0';
            lightSwitchOnOn.style.zIndex = '0';
            lightSwitchOffOff.style.zIndex = '2';
            bckOn.style.zIndex = '0';
            bckOff.style.zIndex = '1';
            bckUv.style.zIndex = '0';
            document.querySelectorAll('.mood-color').forEach(el => {
                el.style.color = "black";
            });
            document.querySelectorAll('.form-control').forEach(el => {
                el.style.backgroundColor = "rgb(145 145 145 / 40%)";
            });
            skyltUv.style.zIndex = '0';
            skyltOff.style.zIndex = '2';
            skyltOn.style.zIndex = '0';
            onForm.style.display = 'none';
            uvForm.style.display = 'none';

            break;
        case 'onOff':
            lightSwitchOffOff.style.zIndex = '0';
            lightSwitchOffOn.style.zIndex = '0';
            lightSwitchOnOn.style.zIndex = '0';
            lightSwitchOnOff.style.zIndex = '2';
            bckOn.style.zIndex = '1';
            bckOff.style.zIndex = '0';
            bckUv.style.zIndex = '0';
            document.querySelectorAll('.mood-color').forEach(el => {
                el.style.color = "black";
            });
            document.querySelectorAll('.form-control').forEach(el => {
                el.style.backgroundColor = "rgba(255, 255, 255, 0.398)";
                el.style.color = "black";
            });
            skyltUv.style.zIndex = '0';
            skyltOff.style.zIndex = '0';
            skyltOn.style.zIndex = '2';
            onForm.style.display = 'flex';
            uvForm.style.display = 'none';

            break;
        case 'offOn':
            lightSwitchOnOff.style.zIndex = '0';
            lightSwitchOffOn.style.zIndex = '2';
            lightSwitchOnOn.style.zIndex = '0';
            lightSwitchOffOff.style.zIndex = '0';
            bckOn.style.zIndex = '1';
            bckOff.style.zIndex = '0';
            bckUv.style.zIndex = '0';
            document.querySelectorAll('.mood-color').forEach(el => {
                el.style.color = "black";
            });
            document.querySelectorAll('.form-control').forEach(el => {
                el.style.backgroundColor = "rgba(255, 255, 255, 0.398)";
                el.style.color = "black";
            });
            skyltUv.style.zIndex = '0';
            skyltOff.style.zIndex = '0';
            skyltOn.style.zIndex = '2';
            onForm.style.display = 'flex';
            uvForm.style.display = 'none';

            break;
        case 'onOn':
            lightSwitchOnOff.style.zIndex = '0';
            lightSwitchOffOn.style.zIndex = '0';
            lightSwitchOnOn.style.zIndex = '2';
            lightSwitchOffOff.style.zIndex = '0';
            bckOn.style.zIndex = '0';
            bckOff.style.zIndex = '0';
            bckUv.style.zIndex = '1';
            document.querySelectorAll('.mood-color').forEach(el => {
                el.style.color = "#95d3fa";
            });
            document.querySelectorAll('.form-control').forEach(el => {
                el.style.backgroundColor = "rgba(255, 255, 255, 0.398)";
                el.style.color = "#95d3fa";
            });
            skyltUv.style.zIndex = '2';
            skyltOff.style.zIndex = '0';
            skyltOn.style.zIndex = '0';
            onForm.style.display = 'none';
            uvForm.style.display = 'flex';

            break;
    }
        
}

function enter() {

    switch(sessionStorage.getItem('mode')) {
        case 'offOff':
            bckOffG.src = bckOffG.src;
            bckOff.style.zIndex = '0';
            bckOffG.style.zIndex = '1';
            document.querySelectorAll('.lightSwitch-img').forEach(el => {
                el.style.opacity = "0";
                el.style.transition = "opacity 2s";
            });
        break;
        case 'onOff':
            bckOnG.src = bckOnG.src;
            bckOn.style.zIndex = '0';
            bckOnG.style.zIndex = '1';
            document.querySelectorAll('.lightSwitch-img').forEach(el => {
                el.style.opacity = "0";
                el.style.transition = "opacity 2s";
            });
        break;
        case 'offOn':
            bckOnG.src = bckOnG.src;
            bckOn.style.zIndex = '0';
            bckOnG.style.zIndex = '1';
            document.querySelectorAll('.lightSwitch-img').forEach(el => {
                el.style.opacity = "0";
                el.style.transition = "opacity 2s";
            });
        break;
        case 'onOn':
            bckUvG.src = bckUvG.src;
            bckUv.style.zIndex = '0';
            bckUvG.style.zIndex = '1';
            document.querySelectorAll('.lightSwitch-img').forEach(el => {
                el.style.opacity = "0";
                el.style.transition = "opacity 2s";
            });
        break;
    }

    setTimeout(() => { 
        window.location.assign("./tpl/hall.php"); 
    }, 2000);
}

function skal() {

    var elementHeight = window.innerHeight;
    var elementWidth = window.innerWidth;

    var ratioHard = elementHeight/elementWidth;

    var ratio = Math.round(ratioHard * 100) / 100;

    console.log(ratio);

    switch(true) {
        case 0.49 > ratio :

            document.querySelector("html").removeEventListener("wheel", function(event) {
                this.scrollLeft += event.deltaY;
            });
            document.querySelector("html").addEventListener("wheel", function(event) {
                this.scrollTop += event.deltaY;
            });

            console.log('under ratio');
            cContainer.style.height = elementWidth * 937/1920 + 'px';
            cContainer.style.width = elementWidth + 'px';

        break;

        case ratio >= 0.49 :

            document.querySelector("html").removeEventListener("wheel", function(event) {
                this.scrollTop += event.deltaY;
            });
            document.querySelector("html").addEventListener("wheel", function(event) {
                this.scrollLeft += event.deltaY;
            });

            console.log('över ratio');
            cContainer.style.height = elementHeight + 'px';
            cContainer.style.width = elementHeight * 1920/937 + 'px';

        break;
    }
}

if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
    document.body.zoom = '1';
    document.body.style.overflow = 'scroll';
    window.addEventListener("orientationchange", skal);
} else {
    document.body.style.overflow = 'hidden';
    window.onresize = skal;
}


window.onload = skal();