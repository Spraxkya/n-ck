var cContainer = document.getElementById('cContainer');
var bakgrund = document.getElementById('bckI');

const vContainer = document.getElementById('vernisage-container');
const vText = document.getElementById('vernisage-title');

var dim1 = document.getElementById('dim1');
var bigNote = document.getElementById('big-note');

var dim2 = document.getElementById('dim2');

/* Random word on the wall day to day */
const titles = ["SNÖKLOCKA", "FÖRGÄTMIGEJ", "VALLMO", "DINMAMMA", "VÅRTGÅRD", "TUSSILAGO", "FLÄDER", "REKTUM"];

vText.innerHTML = titles[Math.floor(Date.now()/86400000) % titles.length];

paint = '0';
window.sessionStorage.setItem('paint', paint);

function painting() {

    var painting1 = document.getElementById('painting1');
    var painting2 = document.getElementById('painting2');
    var painting3 = document.getElementById('painting3');
    var painting4 = document.getElementById('painting4');
    var painting5 = document.getElementById('painting5');

    switch (sessionStorage.getItem('paint')) {
        case '0':
            paint = "1";
            window.sessionStorage.setItem("paint",paint);
            dim2.style.zIndex = '3';
        break;
    };

    switch (sessionStorage.getItem('bild')) {
        case '1':
            painting1.style.display = 'flex';
            painting2.style.display = 'none';
            painting3.style.display = 'none';
            painting4.style.display = 'none';
            painting5.style.display = 'none';
        break;
        case '2':
            painting1.style.display = 'none';
            painting2.style.display = 'flex';
            painting3.style.display = 'none';
            painting4.style.display = 'none';
            painting5.style.display = 'none';
        break;
        case '3':
            painting1.style.display = 'none';
            painting2.style.display = 'none';
            painting3.style.display = 'flex';
            painting4.style.display = 'none';
            painting5.style.display = 'none';
        break;
        case '4':
            painting1.style.display = 'none';
            painting2.style.display = 'none';
            painting3.style.display = 'none';
            painting4.style.display = 'flex';
            painting5.style.display = 'none';
        break;
        case '5':
            painting1.style.display = 'none';
            painting2.style.display = 'none';
            painting3.style.display = 'none';
            painting4.style.display = 'none';
            painting5.style.display = 'flex';
        break;
    };
}

besk = '0';
window.sessionStorage.setItem('besk',besk);

function beskrivning() {

    var beskText1 = document.getElementById('beskText1');
    var beskText2 = document.getElementById('beskText2');
    var beskText3 = document.getElementById('beskText3');
    var beskText4 = document.getElementById('beskText4');
    var beskText5 = document.getElementById('beskText5');
    
    switch (sessionStorage.getItem('besk')) {
        case '0':
            besk = "1";
            window.sessionStorage.setItem("besk",besk);
            dim1.style.zIndex = '3';
            bigNote.zIndex = '3';
        break;
    };

    switch (sessionStorage.getItem('text')) {
        case '1':
            beskText1.style.display = 'flex';
            beskText2.style.display = 'none';
            beskText3.style.display = 'none';
            beskText4.style.display = 'none';
            beskText5.style.display = 'none';
        break;
        case '2':
            beskText1.style.display = 'none';
            beskText2.style.display = 'flex';
            beskText3.style.display = 'none';
            beskText4.style.display = 'none';
            beskText5.style.display = 'none';
        break;
        case '3':
            beskText1.style.display = 'none';
            beskText2.style.display = 'none';
            beskText3.style.display = 'flex';
            beskText4.style.display = 'none';
            beskText5.style.display = 'none';
        break;
        case '4':
            beskText1.style.display = 'none';
            beskText2.style.display = 'none';
            beskText3.style.display = 'none';
            beskText4.style.display = 'flex';
            beskText5.style.display = 'none';
        break;
        case '5':
            beskText1.style.display = 'none';
            beskText2.style.display = 'none';
            beskText3.style.display = 'none';
            beskText4.style.display = 'none';
            beskText5.style.display = 'flex';
        break;
    };

        var noteHeight = bigNote.clientHeight;
        var noteWidth = bigNote.clientWidth;

        beskText1.style.height = noteHeight + 'px';
        beskText2.style.height = noteHeight + 'px';
        beskText3.style.height = noteHeight + 'px';
        beskText4.style.height = noteHeight + 'px';
        beskText5.style.height = noteHeight + 'px';

        beskText1.style.width = noteWidth + 'px';
        beskText2.style.width = noteWidth + 'px';
        beskText3.style.width = noteWidth + 'px';
        beskText4.style.width = noteWidth + 'px';
        beskText5.style.width = noteWidth + 'px';
}

function exit() {

    switch (sessionStorage.getItem('besk')) {
        case '1':
            besk = "0";
            window.sessionStorage.setItem("besk",besk);
            dim1.style.zIndex = '-1';
            bigNote.zIndex = '-1';
        break;
    };

    switch (sessionStorage.getItem('paint')) {
        case '1':
            paint = "0";
            window.sessionStorage.setItem("paint",paint);
            dim2.style.zIndex = '-1';
        break;
    };

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

        // Get the width and height of the container and text elements
        const containerWidth = vContainer.offsetWidth;
        const containerHeight = vContainer.offsetHeight;
        const textWidth = vText.offsetWidth;
        const textHeight = vText.offsetHeight;
    
        // Calculate the scale factor based on the width and height
        const scaleFactor = Math.min((containerWidth / textWidth), (containerHeight / textHeight));
    
        // Set the transform property on the text element to scale it
        vText.style.transform = `scale(${scaleFactor})`;

}

if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
    document.body.zoom = '1';
    document.body.style.overflow = 'scroll';
    window.addEventListener("orientationchange", skal);
} else {
    document.body.style.overflow = 'hidden';
    window.onresize = skal;
}

window.onload = skal;