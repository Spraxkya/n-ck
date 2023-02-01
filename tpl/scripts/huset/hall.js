var cContainer = document.getElementById('cContainer');
var bakgrund = document.getElementById('bckI');

var doNotDoor = document.getElementById('doNotEnter-door');
var doNotEnter = document.getElementById('doNotEnter');

var profileDoor = document.getElementById('profile-door');
var profile = document.getElementById('profile');

var vernisageC = document.getElementById('vernisage-container');
var vernisage = document.getElementById('vernisage-title');

var pil = document.getElementById('arrow');

var doorStone = document.getElementById('stone-door');
var stoneDoor = document.getElementById('stoneDoor');

var boutiqueDoor = document.getElementById('boutique-door');
var boutDoor = document.getElementById('boutDoor');

/* Random word on the wall day to day */
var titles = ["SNÖKLOCKA", "FÖRGÄTMIGEJ", "VALLMO", "DINMAMMA", "VÅRTGÅRD", "TUSSILAGO", "FLÄDER", "REKTUM"];

document.getElementById('vernisage-title').innerHTML = titles[Math.floor(Date.now()/86400000) % titles.length];

/* SVG transitions */
var trans1 = document.getElementById('tranSvg1');
var trans2 = document.getElementById('tranSvg2');
var trans3 = document.getElementById('tranSvg3');
var trans4 = document.getElementById('tranSvg4');

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

profile.onmouseenter = function() {
    trans3.setAttribute("flood-opacity", "1");
}

profile.onmouseleave = function() {
    trans3.setAttribute("flood-opacity", "0");
}

boutDoor.onmouseenter = function() {
    trans4.setAttribute("flood-opacity", "1");
}

boutDoor.onmouseleave = function() {
    trans4.setAttribute("flood-opacity", "0");
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

            var vContainer = document.getElementById('vernisage-container');
            var vText = document.getElementById('vernisage-title'); 

            if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {

                // Get the width and height of the container and text elements
                var containerWidth = vContainer.clientWidth;
                var containerHeight = vContainer.clientHeight;
                var textWidth = vText.clientWidth;
                var textHeight = vText.clientHeight;
            
                // Calculate the scale factor based on the width and height
                var scaleFactor = Math.min((containerWidth / textWidth), (containerHeight / textHeight));
            
                // Set the transform property on the text element to scale it
                vText.style.transform = `scale(${scaleFactor})`;
            } else {
                // Get the width and height of the container and text elements
                var containerWidth = vContainer.offsetWidth;
                var containerHeight = vContainer.offsetHeight;
                var textWidth = vText.offsetWidth;
                var textHeight = vText.offsetHeight;
            
                // Calculate the scale factor based on the width and height
                var scaleFactor = Math.min((containerWidth / textWidth), (containerHeight / textHeight));
            
                // Set the transform property on the text element to scale it
                vText.style.transform = `scale(${scaleFactor})`;
            }

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

            var vContainer = document.getElementById('vernisage-container');
            var vText = document.getElementById('vernisage-title'); 

            if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {

                // Get the width and height of the container and text elements
                var containerWidth = vContainer.clientWidth;
                var containerHeight = vContainer.clientHeight;
                var textWidth = vText.clientWidth;
                var textHeight = vText.clientHeight;
            
                // Calculate the scale factor based on the width and height
                var scaleFactor = Math.min((containerWidth / textWidth), (containerHeight / textHeight));
            
                // Set the transform property on the text element to scale it
                vText.style.transform = `scale(${scaleFactor})`;

            } else {
                // Get the width and height of the container and text elements
                var containerWidth = vContainer.offsetWidth;
                var containerHeight = vContainer.offsetHeight;
                var textWidth = vText.offsetWidth;
                var textHeight = vText.offsetHeight;
            
                // Calculate the scale factor based on the width and height
                var scaleFactor = Math.min((containerWidth / textWidth), (containerHeight / textHeight));
            
                // Set the transform property on the text element to scale it
                vText.style.transform = `scale(${scaleFactor})`;
            }

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