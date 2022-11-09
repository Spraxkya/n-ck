const scrollContainer = document.querySelector("html");
scrollContainer.addEventListener("wheel", (evt) => {
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
        scrollContainer.style.overflow = "scroll";
        
    } else {
    scrollContainer.scrollLeft += evt.deltaY;}
});

var yeit = document.getElementById('big-container');
var lightSwitch = document.getElementById('lightSwitch');
var leftSwitch = document.getElementById('lightbutton1');
var rightSwitch = document.getElementById('lightbutton2');


leftSwitch.onclick = function() {
        if(document.getElementById('lightSwitch-onOff').style.display !== "none") {
            mode = "offOff";
            window.sessionStorage.setItem("mode", mode);
            correckBck();
            scalable();
        } else if(document.getElementById('lightSwitch-offOff').style.display === "block") {
            mode = "onOff";
            window.sessionStorage.setItem("mode", mode);
            correckBck();
            scalable();
        } else if(document.getElementById('lightSwitch-onOn').style.display === "block") {
            mode = "offOn";
            window.sessionStorage.setItem("mode", mode);
            correckBck();
            scalable();
        } else if(document.getElementById('lightSwitch-offOn').style.display === "block") {
            mode = "onOn";
            window.sessionStorage.setItem("mode", mode);
            correckBck();
            scalable();
        }
}
rightSwitch.onclick = function() {
    
        if(document.getElementById('lightSwitch-onOff').style.display !== "none") {
            mode = "onOn";
            window.sessionStorage.setItem("mode", mode);
            correckBck();
            scalable();
        } else if(document.getElementById('lightSwitch-offOff').style.display === "block") {
            mode = "offOn";
            window.sessionStorage.setItem("mode", mode);
            correckBck();
            scalable();
        } else if(document.getElementById('lightSwitch-onOn').style.display === "block") {
            mode = "onOff";
            window.sessionStorage.setItem("mode", mode);
            correckBck();
            scalable();
        } else if(document.getElementById('lightSwitch-offOn').style.display === "block") {
            mode = "offOff";
            window.sessionStorage.setItem("mode", mode);
            correckBck();
            scalable();
        }
}

function correckBck() {
    
    if(sessionStorage.getItem('mode') === null) {
        mode = "onOff";
        window.sessionStorage.setItem("mode", mode);
    }

    switch(sessionStorage.getItem('mode')) {
        case 'offOff':
            document.getElementById('lightSwitch-onOff').style.display = "none";
            document.getElementById('lightSwitch-offOn').style.display = "none";
            document.getElementById('lightSwitch-onOn').style.display = "none";
            document.getElementById('lightSwitch-offOff').style.display = "block";
            yeit.style.background = `url('./tpl/images/lights-off.jpg')`;
            document.querySelectorAll('.mood-color').forEach(el => {
                el.style.color = "black";
            });
            document.querySelectorAll('.form-control').forEach(el => {
                el.style.backgroundColor = "rgb(145 145 145 / 40%)";
            });
            document.getElementById('skylt_uv').style.display = "none";
            document.getElementById('skylt_slackt').style.display = "block";
            document.getElementById('skylt_tant').style.display = "none";
            scalable();
            break;
        case 'onOff':
            document.getElementById('lightSwitch-offOff').style.display = "none";
            document.getElementById('lightSwitch-offOn').style.display = "none";
            document.getElementById('lightSwitch-onOn').style.display = "none";
            document.getElementById('lightSwitch-onOff').style.display = "block";
            yeit.style.background = `url('./tpl/images/lights-on.jpg')`;
            document.querySelectorAll('.mood-color').forEach(el => {
                el.style.color = "black";
            });
            document.querySelectorAll('.form-control').forEach(el => {
                el.style.backgroundColor = "rgba(255, 255, 255, 0.398)";
                el.style.color = "black";
            });
            document.getElementById('skylt_uv').style.display = "none";
            document.getElementById('skylt_slackt').style.display = "none";
            document.getElementById('skylt_tant').style.display = "block";
            scalable();
            break;
        case 'offOn':
            document.getElementById('lightSwitch-onOff').style.display = "none";
            document.getElementById('lightSwitch-offOn').style.display = "block";
            document.getElementById('lightSwitch-onOn').style.display = "none";
            document.getElementById('lightSwitch-offOff').style.display = "none";
            yeit.style.background = `url('./tpl/images/lights-on.jpg')`;
            document.querySelectorAll('.mood-color').forEach(el => {
                el.style.color = "black";
            });
            document.querySelectorAll('.form-control').forEach(el => {
                el.style.backgroundColor = "rgba(255, 255, 255, 0.398)";
                el.style.color = "black";
            });
            document.getElementById('skylt_uv').style.display = "none";
            document.getElementById('skylt_slackt').style.display = "none";
            document.getElementById('skylt_tant').style.display = "block";
            scalable();
            break;
        case 'onOn':
            document.getElementById('lightSwitch-onOff').style.display = "none";
            document.getElementById('lightSwitch-offOn').style.display = "none";
            document.getElementById('lightSwitch-onOn').style.display = "block";
            document.getElementById('lightSwitch-offOff').style.display = "none";
            yeit.style.background = `url('./tpl/images/uv-lights-on.jpg')`;
            document.querySelectorAll('.mood-color').forEach(el => {
                el.style.color = "#95d3fa";
            });
            document.querySelectorAll('.form-control').forEach(el => {
                el.style.backgroundColor = "rgba(255, 255, 255, 0.398)";
                el.style.color = "#95d3fa";
            });
            document.getElementById('skylt_uv').style.display = "block";
            document.getElementById('skylt_slackt').style.display = "none";
            document.getElementById('skylt_tant').style.display = "none";
            scalable();
            break;
    }
        
}

function scalable() {
    var elementHeight = window.innerHeight;
    var elementWidth = window.innerWidth;

    if ((elementHeight / elementWidth) > 937 / 1920) {
        yeit.style.height = elementHeight + "px";
        yeit.style.width = elementHeight * (1920 / 937) + "px";
        yeit.style.backgroundSize = ` ${elementHeight * (1920 / 937)}px ${elementHeight}px`;
    } else if ((elementHeight / elementWidth) < 937 / 1920){
        yeit.style.height = elementWidth * (937 / 1920) + "px";
        yeit.style.width = elementWidth + "px";
        yeit.style.backgroundSize = ` ${elementWidth}px ${elementWidth * (937 / 1920)}px`;
    } else {
        yeit.style.height = elementHeight + "px";
        yeit.style.width = elementWidth + "px";
        yeit.style.backgroundSize = ` ${elementWidth}px ${elementWidth * (937 / 1920)}px`;
    }
}

window.onresize = scalable;
window.onload = correckBck(), scalable;
