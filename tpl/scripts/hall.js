/* General settings for background */

const scrollContainer = document.querySelector("html");
scrollContainer.addEventListener("wheel", (evt) => {
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
        scrollContainer.style.overflow = "scroll";
     }
    else {    
    scrollContainer.scrollLeft += evt.deltaY;}
});


function scalable() {
    var x = document.getElementById('big-container');
    var elementHeight = window.innerHeight;
    var elementWidth = window.innerWidth;
    var profile = document.getElementById('profile-title');
    var vernisage = document.getElementById('vernisage-title');
    var boutique = document.getElementById('boutique-title');
    var doNot = document.getElementById('doNotEnter');
    var stone = document.getElementById('stoneDoor');

    if ((elementHeight / elementWidth) > 937 / 1920) {
        x.style.height = elementHeight + "px";
        x.style.width = elementHeight * (1920 / 937) + "px";
        x.style.backgroundSize = ` ${elementHeight * (1920 / 937)}px ${elementHeight}px`;
        profile.style.fontSize = "clamp(4.27vh, 4.27vh, 5.5vw)";
        vernisage.style.fontSize = "clamp(10vh, 10vh, 15vw)";
        boutique.style.fontSize = "clamp(6.5vh, 6.5vh, 13vw)";
    } else {
        x.style.height = elementWidth * (937 / 1920) + "px";
        x.style.width = elementWidth + "px";
        x.style.backgroundSize = ` ${elementWidth}px ${elementWidth * (937 / 1920)}px`;
        profile.style.fontSize = "clamp(2vw, 4.27vh, 5.5vw)";
        vernisage.style.fontSize = "clamp(5vw, 10vh, 15vw)";
        boutique.style.fontSize = "clamp(3.24vw, 6.5vh, 13vw)";
    }

    var y = document.getElementById('big-container').offsetHeight;
    var scaleD = ((y/937)*100 + "%");
    doNot.style.transform = `scale(${scaleD})`;
    stone.style.transform = `scale(${scaleD})`;
}

/* Random word on the wall day to day */

function vernisageTitle() {
    var title = document.getElementById('vernisage-hidden').innerHTML;
    window.sessionStorage.setItem("title", title);
    document.getElementById('vernisage-title').innerHTML = sessionStorage.getItem("title");
}

/* SVG transitions */

var doNotEnter = document.getElementById('doNotEnter');
var trans1 = document.getElementById('tranSvg1');
var stoneDoor = document.getElementById('stoneDoor');
var trans2 = document.getElementById('tranSvg2');

doNotEnter.onmouseenter = function() {
    trans1.setAttribute("flood-opacity", "1");
}

doNotEnter.onmouseleave = function() {
    trans1.setAttribute("flood-opacity", "0");
}

stoneDoor.onmouseenter = function() {
    trans2.setAttribute("flood-opacity", "1");
}

stoneDoor.onmouseleave = function() {
    trans2.setAttribute("flood-opacity", "0");
}

/* In Game Chat */
doNotEnter.onclick = function() {
    conversation = "curtain";
    window.sessionStorage.setItem("conversation", conversation);
    chatModule();
}

stoneDoor.onclick = function() {
    conversation = "stone";
    window.sessionStorage.setItem("conversation", conversation);
    chatModule();
}

window.onload = scalable();
window.onresize = scalable;