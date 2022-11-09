const scrollContainer = document.querySelector("main");
scrollContainer.addEventListener("wheel", (evt) => {
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
        scrollContainer.style.overflow = "scroll";
        
     }
    else {    
    evt.preventDefault();
    scrollContainer.scrollLeft += evt.deltaY;}
});


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

window.onload = scalable();
window.onresize = scalable;