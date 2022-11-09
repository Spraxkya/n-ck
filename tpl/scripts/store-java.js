const scrollContainer = document.querySelector("html");
scrollContainer.addEventListener("wheel", (evt) => {
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
        scrollContainer.style.overflow = "scroll";
        
     }
    else {    
    scrollContainer.scrollLeft += evt.deltaY;}
});
var x = document.getElementById('big-container');

function scalable() {
    var x = document.getElementById('big-container');
    var elementHeight = window.innerHeight;
    var elementWidth = window.innerWidth;

    if ((elementHeight / elementWidth) > 937 / 1920) {
        x.style.height = elementHeight + "px";
        x.style.width = elementHeight * (1920 / 937) + "px";
        x.style.backgroundSize = ` ${elementHeight * (1920 / 937)}px ${elementHeight}px`;
    } else {
        x.style.height = elementWidth * (937 / 1920) + "px";
        x.style.width = elementWidth + "px";
        x.style.backgroundSize = ` ${elementWidth}px ${elementWidth * (937 / 1920)}px`;
    }
}

function loadStats(bar1,stat1,bar2,stat2,bar3,stat3) {
    bar1.style.background = `linear-gradient(90deg, rgba(255,255,255,1) ${stat1}, rgba(0,0,0,0) ${stat1})`;
    bar2.style.background = `linear-gradient(90deg, rgba(255,255,255,1) ${stat2}, rgba(0,0,0,0) ${stat2})`;
    bar3.style.background = `linear-gradient(90deg, rgba(255,255,255,1) ${stat3}, rgba(0,0,0,0) ${stat3})`;
}

countDown = function() {
    var count1 = document.getElementById('quantity1');
    count1.setAttribute('value', count1.value -1);
}

window.onload = scalable;
window.onresize = scalable;