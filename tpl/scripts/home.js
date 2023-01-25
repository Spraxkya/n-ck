const scrollContainer = document.querySelector("html");
var x = document.getElementById('big-container');

scrollContainer.addEventListener("wheel", (evt) => {
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
        scrollContainer.style.overflow = "hidden";
        x.style.overflowX = "scroll";
    } else {
    scrollContainer.scrollLeft += evt.deltaY;
    x.scrollLeft += evt.deltaY;
    }
});

mode = "onOff";
window.sessionStorage.setItem("mode", mode);

var lightSwitch = document.getElementById('lightSwitch');
var leftSwitch = document.getElementById('lightbutton1');
var rightSwitch = document.getElementById('lightbutton2');

var bulletin = document.getElementById('bulletin-board');
var dikt = document.getElementById('dikt');

var bckOn = document.getElementById('bckOn');
var bckOff = document.getElementById('bckOff');
var bckUv = document.getElementById('videoUv');

var lightSwitchOnOff = document.getElementById('lightSwitch-onOff');
var lightSwitchOffOn = document.getElementById('lightSwitch-offOn');
var lightSwitchOnOn = document.getElementById('lightSwitch-onOn');
var lightSwitchOffOff = document.getElementById('lightSwitch-offOff');

var skyltOn = document.getElementById('skylt_tant');
var skyltOff = document.getElementById('skylt_slackt');
var skyltUv = document.getElementById('skylt_uv');

var uvForm = document.getElementById('uvForm');
var onForm = document.getElementById('onForm');

var kod = document.getElementById('code');

bckUv.load();

leftSwitch.onclick = function() {

    switch (sessionStorage.getItem('mode')) {

        case 'onOff':
            mode = "offOff";
            window.sessionStorage.setItem("mode", mode);
            moodi();
            scalable();
        break;

        case 'offOff':
            mode = "onOff";
            window.sessionStorage.setItem("mode", mode);
            moodi();
            scalable();
        break;

        case 'onOn':
            mode = "offOn";
            window.sessionStorage.setItem("mode", mode);
            moodi();
            scalable();
        break;

        case 'offOn':
            mode = "onOn";
            window.sessionStorage.setItem("mode", mode);
            moodi();
            scalable();
        break;

    }
}

rightSwitch.onclick = function() {
    
    switch (sessionStorage.getItem('mode')) {

        case 'onOff':
            mode = "onOn";
            window.sessionStorage.setItem("mode", mode);
            moodi();
            scalable();
        break;

        case 'offOff':
            mode = "offOn";
            window.sessionStorage.setItem("mode", mode);
            moodi();
            scalable();
        break;

        case 'onOn':
            mode = "onOff";
            window.sessionStorage.setItem("mode", mode);
            moodi();
            scalable();
        break;

        case 'offOn':
            mode = "offOff";
            window.sessionStorage.setItem("mode", mode);
            moodi();
            scalable();
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
            scalable();
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
            scalable();
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
            scalable();
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
            scalable();
            break;
    }
        
}

function enterDoor() {
        bckUv.play();
        setTimeout(() => { 
            window.location.assign("./tpl/hall.php"); 
        }, 2000);

        setTimeout(() => {
            document.querySelectorAll('.mood-color').forEach(el => {
                el.style.opacity = "0";
                el.style.transition = "opacity 2s";
            });
            document.querySelectorAll('.lightSwitch-img').forEach(el => {
                el.style.opacity = "0";
                el.style.transition = "opacity 2s";
            });
            document.querySelectorAll('.skyltStyle').forEach(el => {
                el.style.opacity = "0";
                el.style.transition = "opacity 2s";
            });
            document.querySelectorAll('.logUt').forEach(el => {
                el.style.opacity = "0";
                el.style.transition = "opacity 2s";
            });
        }, 900);
}

kod.oninput = function() {
    code = kod.value;
    window.sessionStorage.setItem("code", code);

    switch (sessionStorage.getItem('code')) {
        case 'brister' || 'Brister':
            enterDoor();
        break;
    }
}

function scalable() {

    var elementHeight = window.innerHeight;
    var elementWidth = window.innerWidth;

    var mobileWidth = window.outerWidth;

    function mobileUpp() {
    
        var elementHeight = window.innerHeight;
        var elementWidth = window.innerWidth;

        scrollContainer.style.overflow = "hidden";
        x.style.overflowX = "scroll";
        document.body.style.overflowX = 'hidden';
        x.style.height = elementHeight + "px";
        x.style.width = elementWidth + "px";
        bckOn.style.height = elementHeight + 'px';
        bckOff.style.height = elementHeight + 'px';
        bckUv.style.height = elementHeight + 'px';
        lightSwitch.style.left = `${bckOn.offsetWidth*0.498}px`;
        leftSwitch.style.left = `${bckOn.offsetWidth*0.516927}px`;
        leftSwitch.style.width = `${bckOn.offsetWidth*0.0114}px`;
        rightSwitch.style.left = `${bckOn.offsetWidth*0.52222}px`;
        rightSwitch.style.width = `${bckOn.offsetWidth*0.0114}px`;
        bulletin.style.left = `${bckOn.offsetWidth*0.596}px`;
        bulletin.style.width = `${bckOn.offsetWidth*0.341}px`;
        console.log(elementHeight + 'mobile UPP');

    }
    
    function mobileSne() {
    
        scrollContainer.style.overflowY = "hidden";
        document.body.style.overflowX = 'scroll';
        x.style.height = elementHeight + "px";
        x.style.width = elementHeight * (1920 / 937) + "px";
        bckOn.style.height = elementHeight + "px";
        bckOff.style.height = elementHeight + "px";
        bckUv.style.height = elementHeight + "px";
        bckOn.style.width = elementHeight * (1920 / 937) + "px";
        bckOff.style.width = elementHeight * (1920 / 937) + "px";
        bckUv.style.width = elementHeight * (1920 / 937) + "px";
        lightSwitch.style.left = `${bckOn.offsetWidth*0.498}px`;
        leftSwitch.style.left = `${bckOn.offsetWidth*0.516927}px`;
        leftSwitch.style.width = `${bckOn.offsetWidth*0.0114}px`;
        rightSwitch.style.left = `${bckOn.offsetWidth*0.52222}px`;
        rightSwitch.style.width = `${bckOn.offsetWidth*0.0114}px`;
        bulletin.style.left = `${bckOn.offsetWidth*0.596}px`;
        bulletin.style.width = `${bckOn.offsetWidth*0.341}px`;
        console.log(elementHeight + 'mobile SNE');
    
    }
    
    function mobileLongSne() {
        
        scrollContainer.style.overflow = "";
        x.style.overflowY = "hidden";
        document.body.style.overflowX = 'hidden';
        x.style.height = elementWidth * (937/1920) + 'px';
        x.style.width = elementWidth + "px";
        bckOn.style.height = elementWidth * (937/1920) + 'px';
        bckOff.style.height = elementWidth * (937/1920) + 'px';
        bckUv.style.height = elementWidth * (937/1920) + 'px';
        bckOn.style.width = elementWidth + "px";
        bckOff.style.width = elementWidth + "px";
        bckUv.style.width = elementWidth + "px";
        lightSwitch.style.left = `${bckOn.offsetWidth*0.498}px`;
        leftSwitch.style.left = `${bckOn.offsetWidth*0.516927}px`;
        leftSwitch.style.width = `${bckOn.offsetWidth*0.0114}px`;
        rightSwitch.style.left = `${bckOn.offsetWidth*0.52222}px`;
        rightSwitch.style.width = `${bckOn.offsetWidth*0.0114}px`;
        bulletin.style.left = `${bckOn.offsetWidth*0.596}px`;
        bulletin.style.width = `${bckOn.offsetWidth*0.341}px`;
        console.log(elementHeight + 'mobile SNE LÅNGSMAL');
    }
    
    function he() {
    
        scrollContainer.style.overflow = "";
        x.style.overflowX = "hidden";
        document.body.style.overflowX = 'hidden';
        x.style.height = elementHeight + "px";
        x.style.width = elementHeight * (1920 / 937) + "px";
        bckOn.style.height = elementHeight + "px";
        bckOff.style.height = elementHeight + "px";
        bckUv.style.height = elementHeight + "px";
        bckOn.style.width = elementHeight * (1920 / 937) + "px";
        bckOff.style.width = elementHeight * (1920 / 937) + "px";
        bckUv.style.width = elementHeight * (1920 / 937) + "px";
        lightSwitch.style.left = `49.8%`;
        leftSwitch.style.left = `51.6927%`;
        leftSwitch.style.width = `1.14%`;
        rightSwitch.style.left = `52.222%`;
        rightSwitch.style.width = `1.14%`;
        bulletin.style.left = `59.6%`;
        bulletin.style.width = `34.1%`;
        console.log('he');
    
    }
    
    function da() {

        // Creating invisible container
        const outer = document.createElement('div');
        outer.style.visibility = 'hidden';
        outer.style.overflow = 'scroll'; // forcing scrollbar to appear
        outer.style.msOverflowStyle = 'scrollbar'; // needed for WinJS apps
        document.body.appendChild(outer);
        
        // Creating inner element and placing it in the container
        const inner = document.createElement('div');
        outer.appendChild(inner);
        
        // Calculating difference between container's full width and the child width
        const scrollbarWidth = (outer.offsetWidth - inner.offsetWidth);
        
        // Removing temporary elements from the DOM
        outer.parentNode.removeChild(outer);

        scrollContainer.style.overflow = "";
        x.style.overflowY = "hidden";
        document.body.style.overflowX = 'hidden';
        x.style.height = elementWidth * (937/1920) + 'px';
        x.style.width = elementWidth - scrollbarWidth + "px";
        bckOn.style.height = elementWidth * (937/1920) + 'px';
        bckOff.style.height = elementWidth * (937/1920) + 'px';
        bckUv.style.height = elementWidth * (937/1920) + 'px';
        bckOn.style.width = elementWidth - scrollbarWidth + "px";
        bckOff.style.width = elementWidth - scrollbarWidth + "px";
        bckUv.style.width = elementWidth - scrollbarWidth + "px";
        lightSwitch.style.left = `49.8%`;
        leftSwitch.style.left = `51.6927%`;
        leftSwitch.style.width = `1.14%`;
        rightSwitch.style.left = `52.222%`;
        rightSwitch.style.width = `1.14%`;
        bulletin.style.left = `59.6%`;
        bulletin.style.width = `34.1%`;
        console.log('da');
        console.log(scrollbarWidth);
    
    }

    if (elementHeight > elementWidth && /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        
        mobileUpp();
    
    } else if(elementHeight < elementWidth && elementHeight > (elementWidth/2) && /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){

        mobileSne();

    } else if(elementHeight < elementWidth && elementHeight < (elementWidth/2) &&  /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) { 
    
        mobileLongSne();
    
    } else if(elementHeight/elementWidth >= 937/1920) {

        he();

    } else if(elementHeight/elementWidth < 937/1920) {

        da();

    } else {
        console.log('hej');
    }
}

// Detect orientation change in JavaScript
const portrait = window.matchMedia('(orientation: portrait)');

portrait.addEventListener('change', (event) => {
    // Check if orientation is portrait
    if (event.matches) {
        console.log('Device orientation is Portrait');
        window.location.reload();
    } else {
        console.log('Device orientation is Landscape');
        window.location.reload();
    }
});

window.onresize = scalable;
window.onload = scalable,moodi();