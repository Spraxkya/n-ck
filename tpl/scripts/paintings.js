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

var bakgrund = document.getElementById('bckI');

function scalable() {
    
    var elementHeight = window.innerHeight;
    var elementWidth = window.innerWidth;

    function mobileUpp() {

        scrollContainer.style.overflow = "hidden";
        x.style.overflowX = "scroll";
        document.body.style.overflowX = 'hidden';
        x.style.height = elementHeight + "px";
        x.style.width = elementWidth + "px";
        bakgrund.style.height = elementHeight + 'px';
    }
    
    function mobileSne() {
    
        scrollContainer.style.overflowY = "hidden";
        document.body.style.overflowX = 'scroll';
        x.style.height = elementHeight + "px";
        x.style.width = elementHeight * (1920 / 937) + "px";
        bakgrund.style.height = elementHeight + "px";
        bakgrund.style.width = elementHeight * (1920 / 937) + "px";
       
    }
    
    function mobileLongSne() {

        scrollContainer.style.overflow = "";
        x.style.overflowY = "hidden";
        document.body.style.overflowX = 'hidden';
        x.style.height = elementWidth * (937/1920) + 'px';
        x.style.width = elementWidth + "px";
        bakgrund.style.height = elementWidth * (937/1920) + 'px';
        bakgrund.style.width = elementWidth + "px";
       
    }
    
    function he() {  
        
        scrollContainer.style.overflow = "";
        x.style.overflowX = "hidden";
        document.body.style.overflowX = 'hidden';
        x.style.height = elementHeight + "px";
        x.style.width = elementHeight * (1920 / 937) + "px";
        bakgrund.style.height = elementHeight + "px";
        bakgrund.style.width = elementHeight * (1920 / 937) + "px";
    
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
        bakgrund.style.height = elementWidth * (937/1920) + 'px';
        bakgrund.style.width = elementWidth - scrollbarWidth + "px";
    
    }

    if (elementHeight > elementWidth && /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        
        mobileUpp();

    } else if(elementHeight < elementWidth && elementHeight > (elementWidth/2) && /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {

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

window.onload = scalable();
window.onresize = scalable;