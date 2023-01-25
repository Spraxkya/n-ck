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
var doNotDoor = document.getElementById('doNotEnter-door');
var doNotEnter = document.getElementById('doNotEnter');
var profileT = document.getElementById('profile-title');
var profileDoor = document.getElementById('profile-door');
var vernisageC = document.getElementById('vernisage-container');
var vernisage = document.getElementById('vernisage-title');
var pil = document.getElementById('arrow');
var doorStone = document.getElementById('stone-door');
var stoneDoor = document.getElementById('stoneDoor');
var boutiqueT = document.getElementById('boutique-title');
var boutiqueDoor = document.getElementById('boutique-door');

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
        doNotDoor.style.width = `${bakgrund.offsetWidth*0.1192708333333}px`;
        profileT.style.left = `${bakgrund.offsetWidth*0.18}px`;
        profileDoor.style.width = `${bakgrund.offsetWidth*0.076}px`;
        profileDoor.style.left = `${bakgrund.offsetWidth*0.178}px`;
        vernisageC.style.width = `${bakgrund.offsetWidth*0.282}px`;
        vernisageC.style.left = `${bakgrund.offsetWidth*0.36}px`;
        pil.style.width = `${bakgrund.offsetWidth*0.03}px`;
        pil.style.left = `${bakgrund.offsetWidth*0.50}px`;
        doorStone.style.width = `${bakgrund.offsetWidth*0.083854}px`;
        doorStone.style.left = `${bakgrund.offsetWidth*0.7897}px`;
        boutiqueDoor.style.width = `${bakgrund.offsetWidth*0.077}px`;
        boutiqueDoor.style.left = `${bakgrund.offsetWidth*0.919}px`;
        boutiqueT.style.left = `${bakgrund.offsetWidth*0.863}px`;
        boutiqueT.style.fontSize = `clamp(3.24vw, 6.34vh, 2.5em)`;
        console.log(elementHeight + 'mobile UPP');

    }
    
    function mobileSne() {
    
        scrollContainer.style.overflowY = "hidden";
        document.body.style.overflowX = 'scroll';
        x.style.height = elementHeight + "px";
        x.style.width = elementHeight * (1920 / 937) + "px";
        bakgrund.style.height = elementHeight + "px";
        bakgrund.style.width = elementHeight * (1920 / 937) + "px";
        doNotDoor.style.width = `${bakgrund.offsetWidth*0.1192708333333}px`;
        profileT.style.left = `${bakgrund.offsetWidth*0.18}px`;
        profileDoor.style.width = `${bakgrund.offsetWidth*0.076}px`;
        profileDoor.style.left = `${bakgrund.offsetWidth*0.178}px`;
        vernisageC.style.width = `${bakgrund.offsetWidth*0.282}px`;
        vernisageC.style.left = `${bakgrund.offsetWidth*0.36}px`;
        pil.style.width = `${bakgrund.offsetWidth*0.03}px`;
        pil.style.left = `${bakgrund.offsetWidth*0.50}px`;
        doorStone.style.width = `${bakgrund.offsetWidth*0.083854}px`;
        doorStone.style.left = `${bakgrund.offsetWidth*0.7897}px`;
        boutiqueDoor.style.width = `${bakgrund.offsetWidth*0.077}px`;
        boutiqueDoor.style.left = `${bakgrund.offsetWidth*0.919}px`;
        boutiqueT.style.left = `${bakgrund.offsetWidth*0.87}px`;
        boutiqueT.style.fontSize = `clamp(3.24vw, 6.5vh, 6.5vh)`;
        console.log(elementHeight + 'mobile SNE');
    
    }
    
    function mobileLongSne() {

        scrollContainer.style.overflow = "";
        x.style.overflowY = "hidden";
        document.body.style.overflowX = 'hidden';
        x.style.height = elementWidth * (937/1920) + 'px';
        x.style.width = elementWidth + "px";
        bakgrund.style.height = elementWidth * (937/1920) + 'px';
        bakgrund.style.width = elementWidth + "px";
        doNotDoor.style.width = `${bakgrund.offsetWidth*0.1192708333333}px`;
        profileT.style.left = `${bakgrund.offsetWidth*0.18}px`;
        profileDoor.style.width = `${bakgrund.offsetWidth*0.076}px`;
        profileDoor.style.left = `${bakgrund.offsetWidth*0.178}px`;1
        vernisageC.style.width = `${bakgrund.offsetWidth*0.282}px`;
        vernisageC.style.left = `${bakgrund.offsetWidth*0.36}px`;
        pil.style.width = `${bakgrund.offsetWidth*0.03}px`;
        pil.style.left = `${bakgrund.offsetWidth*0.50}px`;
        doorStone.style.width = `${bakgrund.offsetWidth*0.083854}px`;
        doorStone.style.left = `${bakgrund.offsetWidth*0.7897}px`;
        boutiqueDoor.style.width = `${bakgrund.offsetWidth*0.077}px`;
        boutiqueDoor.style.left = `${bakgrund.offsetWidth*0.919}px`;
        boutiqueT.style.left = `${bakgrund.offsetWidth*0.87}px`;
        boutiqueT.style.fontSize = `clamp(3.24vw, 6.5vh, 6.5vh)`;
        console.log(elementHeight + 'mobile SNE LÅNGSMAL');


    }
    
    function he() {  
        
        scrollContainer.style.overflow = "";
        x.style.overflowX = "hidden";
        document.body.style.overflowX = 'hidden';
        x.style.height = elementHeight + "px";
        x.style.width = elementHeight * (1920 / 937) + "px";
        bakgrund.style.height = elementHeight + "px";
        bakgrund.style.width = elementHeight * (1920 / 937) + "px";
        doNotDoor.style.width = `11.927083333333333333333333333333%`;
        profileT.style.left = `18%`;
        profileDoor.style.width = `7.6%`;
        profileDoor.style.left = `17.8%`;
        vernisageC.style.width = `28.2%`;
        vernisageC.style.left = `36%`;
        pil.style.width = `3%`;
        pil.style.left = `50%`;
        doorStone.style.width = `8.3854%`;
        doorStone.style.left = `78.97%`;
        boutiqueDoor.style.width = `7.7%`;
        boutiqueDoor.style.left = `91.9%`;
        boutiqueT.style.left = `85.6%`;
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
        bakgrund.style.height = elementWidth * (937/1920) + 'px';
        bakgrund.style.width = elementWidth - scrollbarWidth + "px";
        doNotDoor.style.width = `11.927083333333333333333333333333%`;
        profileT.style.left = `18%`;
        profileDoor.style.width = `7.6%`;
        profileDoor.style.left = `17.8%`;
        vernisageC.style.width = `28.2%`;
        vernisageC.style.left = `36%`;
        pil.style.width = `3%`;
        pil.style.left = `50%`;
        doorStone.style.width = `8.3854%`;
        doorStone.style.left = `78.97%`;
        boutiqueDoor.style.width = `7.7%`;
        boutiqueDoor.style.left = `91.9%`;
        boutiqueT.style.left = `85.6%`;
        console.log('ratio 9/16');

    
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

    var transformProp = (function(){
        var testEl = document.createElement('div');
        if(testEl.style.transform == null) {
          var vendors = ['Webkit', 'Moz', 'ms'];
          for(var vendor in vendors) {
            if(testEl.style[ vendors[vendor] + 'Transform' ] !== undefined) {
              return vendors[vendor] + 'Transform';
            }
          }
        }
        return 'transform';
      })();

    if (elementHeight <= 937 && elementHeight >= 370) {
        var percentage = (elementHeight - 370) / (937 - 370);
        profileDoor.style[transformProp] = 'perspective(112px) rotateY(' + (22.5 - 9 * percentage) + 'deg) skew(-1deg, -1deg)';
        boutiqueDoor.style[transformProp] = 'perspective(' + (120 + 40 * percentage) + 'px) rotateY(' + (-22 + 9 * percentage) + 'deg) skew(' + (0 + 0 * percentage) + 'deg, ' + (0 + 0 * percentage) + 'deg)';
    } else if (elementHeight <= 1280 && elementHeight >= 937) {
        var percentage2 = (elementHeight - 937) / (1280 - 937);
        profileDoor.style[transformProp] = 'perspective(112px) rotateY(' + (13.5 - 5 * percentage2) + 'deg) skew(-1deg, -1deg)';
        boutiqueDoor.style[transformProp] = 'perspective(' + (120 + 40 * percentage2) + 'px) rotateY(' + (-13 + 4 * percentage2) + 'deg) skew(' + (0 + 0 * percentage2) + 'deg, ' + (0 + 0 * percentage2) + 'deg)';
    }
    
    var y = document.getElementById('big-container').offsetHeight;
    var scaleD = ((y/937)*100 + "%");

    doNotEnter.style[transformProp] = `scale(${scaleD})`;
    stoneDoor.style[transformProp] = `scale(${scaleD})`;
}

/* Random word on the wall day to day */

function vernisageTitle() {
    var title = document.getElementById('vernisage-hidden').innerHTML;
    window.sessionStorage.setItem("title", title);
    document.getElementById('vernisage-title').innerHTML = sessionStorage.getItem("title");
}

/* SVG transitions */
var trans1 = document.getElementById('tranSvg1');
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
window.onload = scalable;