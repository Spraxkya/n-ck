mode = "onOff";
window.sessionStorage.setItem("mode", mode);

var cContainer = document.getElementById('cContainer');

var bckOn = document.getElementById('bckOn');
var bckOff = document.getElementById('bckOff');
var bckUv = document.getElementById('bckUv');
var bckOnG = document.getElementById('bckOnG');
var bckOffG = document.getElementById('bckOffG');
var bckUvG = document.getElementById('bckUvG');

var flicker = document.getElementsByClassName('flicker')[0];

var lightSwitch = document.getElementById('lightSwitch');
var leftSwitch = document.getElementById('lightbutton1');
var rightSwitch = document.getElementById('lightbutton2');

var lightSwitchOnOff = document.getElementById('lightSwitch-onOff');
var lightSwitchOffOn = document.getElementById('lightSwitch-offOn');
var lightSwitchOnOn = document.getElementById('lightSwitch-onOn');
var lightSwitchOffOff = document.getElementById('lightSwitch-offOff');

var bulletin = document.getElementById('bulletin-board');

var poster = document.getElementsByClassName("poster");
var posterLight = document.getElementsByClassName("posterLight");
var posterDark = document.getElementsByClassName("posterDark");
var posterUV = document.getElementsByClassName("posterUV");

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
            for (var i = 0; i < posterLight.length; i++) {
                posterLight[i].style.zIndex = "0";
            }
            for (var i = 0; i < posterDark.length; i++) {
                posterDark[i].style.zIndex = "2";
            }
            for (var i = 0; i < posterUV.length; i++) {
                posterUV[i].style.zIndex = "0";
            }
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
            for (var i = 0; i < posterLight.length; i++) {
                posterLight[i].style.zIndex = "2";
            }
            for (var i = 0; i < posterDark.length; i++) {
                posterDark[i].style.zIndex = "0";
            }
            for (var i = 0; i < posterUV.length; i++) {
                posterUV[i].style.zIndex = "0";
            }
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
            for (var i = 0; i < posterLight.length; i++) {
                posterLight[i].style.zIndex = "2";
            }
            for (var i = 0; i < posterDark.length; i++) {
                posterDark[i].style.zIndex = "0";
            }
            for (var i = 0; i < posterUV.length; i++) {
                posterUV[i].style.zIndex = "0";
            }
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
            for (var i = 0; i < posterLight.length; i++) {
                posterLight[i].style.zIndex = "0";
            }
            for (var i = 0; i < posterDark.length; i++) {
                posterDark[i].style.zIndex = "0";
            }
            for (var i = 0; i < posterUV.length; i++) {
                posterUV[i].style.zIndex = "2";
            }
            break;
    }
        
}

function enter() {

    switch(sessionStorage.getItem('mode')) {
        case 'offOff':
            bckOffG.style.zIndex = '2';
            bckOffG.play();
            bckOffG.addEventListener('timeupdate', () => {
                if (bckOffG.currentTime >= 1) {
                    lightSwitch.style.opacity = "0";
                    lightSwitch.style.transition = "opacity 1s";
                    bulletin.style.opacity = "0";
                    bulletin.style.transition = "opacity 1s";
                    flicker.style.display = "none";
                    console.log('Event happened 1s into the video!');
                    bckOffG.removeEventListener('timeupdate', arguments.callee); // stop listening to the event
                }
            });
            bckOffG.addEventListener('ended', function() {
                window.location.assign("./hall"); 
                console.log('The video has finished playing');
            });
        break;
        case 'onOff':
            bckOnG.style.zIndex = '2';
            bckOnG.play();
            bckOnG.addEventListener('timeupdate', () => {
                if (bckOnG.currentTime >= 1) {
                    lightSwitch.style.opacity = "0";
                    lightSwitch.style.transition = "opacity 1s";
                    bulletin.style.opacity = "0";
                    bulletin.style.transition = "opacity 1s";
                    flicker.style.display = "none";
                    console.log('Event happened 1s into the video!');
                    bckOnG.removeEventListener('timeupdate', arguments.callee); // stop listening to the event
                }
            });
            bckOnG.addEventListener('ended', function() {
                window.location.assign("./hall"); 
                console.log('The video has finished playing');
            });
        break;
        case 'offOn':
            bckOnG.style.zIndex = '2';
            bckOnG.play();
            bckOnG.addEventListener('timeupdate', () => {
                if (bckOnG.currentTime >= 1) {
                    lightSwitch.style.opacity = "0";
                    lightSwitch.style.transition = "opacity 1s";
                    bulletin.style.opacity = "0";
                    bulletin.style.transition = "opacity 1s";
                    flicker.style.display = "none";
                    console.log('Event happened 1s into the video!');
                    bckOnG.removeEventListener('timeupdate', arguments.callee); // stop listening to the event
                }
            });
            bckOnG.addEventListener('ended', function() {
                window.location.assign("./hall"); 
                console.log('The video has finished playing');
            });
        break;
        case 'onOn':
            bckUvG.style.zIndex = '2';
            bckUvG.play();
            bckUvG.addEventListener('timeupdate', () => {
                if (bckUvG.currentTime >= 1) {
                    lightSwitch.style.opacity = "0";
                    lightSwitch.style.transition = "opacity 1s";
                    bulletin.style.opacity = "0";
                    bulletin.style.transition = "opacity 1s";
                    flicker.style.display = "none";
                    console.log('Event happened 1s into the video!');
                    bckUvG.removeEventListener('timeupdate', arguments.callee); // stop listening to the event
                }
            });
            bckUvG.addEventListener('ended', function() {
                window.location.assign("./hall"); 
                console.log('The video has finished playing');
            });
        break;
    }
}

function skal() {

    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
        
        var mobileHeight = document.documentElement.clientHeight || document.body.clientHeight;
        var mobiletWidth = document.documentElement.clientWidth || document.body.clientWidth;

        var ratioHardM = mobileHeight/mobiletWidth;

        var ratioM = Math.round(ratioHardM * 100) / 100;

        console.log(ratioM);

        document.body.style.overflow = 'scroll';
        
        switch(true) {
            case 0.49 > ratioM :
    
                document.querySelector("html").removeEventListener("wheel", function(event) {
                    this.scrollLeft += event.deltaY;
                });
                document.querySelector("html").addEventListener("wheel", function(event) {
                    this.scrollTop += event.deltaY;
                });
    
                console.log('under ratio');
                cContainer.style.height = mobiletWidth * 937/1920 + 'px';
                cContainer.style.width = mobiletWidth + 'px';
    
            break;
    
            case ratioM >= 0.49 :
    
                document.querySelector("html").removeEventListener("wheel", function(event) {
                    this.scrollTop += event.deltaY;
                });
                document.querySelector("html").addEventListener("wheel", function(event) {
                    this.scrollLeft += event.deltaY;
                });
    
                console.log('över ratio');
                cContainer.style.height = mobileHeight + 'px';
                cContainer.style.width = mobileHeight * 1920/937 + 'px';
    
            break;
        }

    } else {

        var elementHeight = window.innerHeight;
        var elementWidth = window.innerWidth;
    
        var ratioHard = elementHeight/elementWidth;
    
        var ratio = Math.round(ratioHard * 100) / 100;
    
        console.log(ratio);

        document.body.style.overflow = 'hidden';

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
}


window.onresize = skal;

window.onload = skal();