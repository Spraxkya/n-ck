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
    var y = document.getElementById('onethird-container');
    var c = document.getElementById('onethird-container2');
    var v = document.getElementById('onethird-container3');
    var exit = document.getElementById('exit');
    var elementHeight = window.innerHeight;
    var elementWidth = window.innerWidth;
    var img = document.getElementById('note-img');
    var popUp = document.getElementById('notes-popup');
    var noteWidth = img.clientWidth;
    var noteHeight = img.clientHeight;

    if ((elementHeight / elementWidth) > 937 / 1920) {
        x.style.height = elementHeight + "px";
        x.style.width = elementHeight * (1920 / 937) + "px";
        y.style.minWidth = (elementHeight * (1920 / 937)) / 3 + "px";
        c.style.minWidth = (elementHeight * (1920 / 937)) / 3 + "px";
        v.style.minWidth = (elementHeight * (1920 / 937)) / 3 + "px";
        x.style.backgroundSize = ` ${elementHeight * (1920 / 937)}px ${elementHeight}px`;
        document.querySelector('h1').style.fontSize = "2vh";
        document.querySelector('span').style.fontSize = "1.7vh";
        document.getElementById('year').style.fontSize = "1.4vw";
        document.getElementById('title').style.fontSize = "1.6vw";
        document.getElementById('caption').style.fontSize = "1.4vw";
    } else {
        x.style.height = elementWidth * (937 / 1920) + "px";
        x.style.width = elementWidth + "px";
        y.style.minWidth = elementWidth / 3 + "px";
        c.style.minWidth = elementWidth / 3 + "px";
        v.style.minWidth = elementWidth / 3 + "px";
        x.style.backgroundSize = ` ${elementWidth}px ${elementWidth * (937 / 1920)}px`;
        document.querySelector('h1').style.fontSize = "1vw";
        document.querySelector('span').style.fontSize = "0.85vw";
        document.getElementById('year').style.fontSize = "2.8vh";
        document.getElementById('title').style.fontSize = "3.2vh";
        document.getElementById('caption').style.fontSize = "2.8vh";
    }
    popUp.style.width = noteWidth + "px";
    popUp.style.height = noteHeight + "px";
    exit.style.width = x.style.width * 848/1920;
    exit.style.height = x.style.height;

}

function loadScroll() {
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
        document.getElementById('notes2').scrollIntoView();
     }
    else {    }
}

function cancel() {
    var painting1 = document.getElementById('paint-img');
    var exit = document.getElementById('exit');
    var position = document.querySelector('main');
    var painting2 = document.getElementById('paint-img2');
    var painting3 = document.getElementById('paint-img3');
    var note1 = document.getElementById('note-img');
    var notePopUp = document.getElementById('notes-popup');
    var year = document.getElementById('year');
    var title = document.getElementById('title');
    var caption = document.getElementById('caption');
    var header = document.querySelector('header');

    painting1.style.visibility = "hidden";
    painting1.style.transition = "";
    painting1.style.opacity = "0";
    painting1.style.maxWidth = "20%";
    painting1.style.maxHeight = "20%";
    position.style.justifyContent = "";
    position.style.alignItems = "";
    painting2.style.visibility = "hidden";
    painting2.style.transition = "";
    painting2.style.opacity = "0";
    painting2.style.maxWidth = "20%";
    painting2.style.maxHeight = "20%";
    painting3.style.visibility = "hidden";
    painting3.style.transition = "";
    painting3.style.opacity = "0";
    painting3.style.maxWidth = "20%";
    painting3.style.maxHeight = "20%";
    year.innerHTML = "";
    title.innerHTML = "";
    caption.innerHTML = ``;
    note1.style.visibility = "hidden";
    notePopUp.style.zIndex = "-1";
    exit.style.display = "none";
    header.style.position = "";
    header.style.width = "";
    header.style.height = "";
}


function paintingClick() {
    var painting1 = document.getElementById('paint-img');
    var exit = document.getElementById('exit');
    var position = document.querySelector('main');
    var header = document.querySelector('header');

    if (painting1.style.visibility === "hidden") {
        painting1.style.visibility = "";
        painting1.style.transition = "visibility 1s linear, opacity 1s linear, max-height 1s linear, max-width 1s linear";
        painting1.style.opacity = "1";
        painting1.style.maxWidth = "80%";
        painting1.style.maxHeight = "80%";
        exit.style.display = "block";
        position.style.justifyContent = "center";
        position.style.alignItems = "center";
        header.style.position = "absolute";
        header.style.width = "100vw";
        header.style.height = "100vh";

    } else {
        painting1.style.visibility = "hidden";
        painting1.style.transition = "";
        painting1.style.opacity = "0";
        painting1.style.maxWidth = "20%";
        painting1.style.maxHeight = "20%";
        position.style.justifyContent = "";
        position.style.alignItems = "";
        header.style.position = "";
        header.style.width = "";
        header.style.height = "";
    }
};

function paintingClick2() {
    var painting2 = document.getElementById('paint-img2');
    var exit = document.getElementById('exit');
    var position = document.querySelector('main');
    var header = document.querySelector('header');

    if (painting2.style.visibility === "hidden") {
        painting2.style.visibility = "";
        painting2.style.transition = "visibility 1s linear, opacity 1s linear, max-height 1s linear, max-width 1s linear";
        painting2.style.opacity = "1";
        painting2.style.maxWidth = "80%";
        painting2.style.maxHeight = "80%";
        exit.style.display = "block";
        position.style.justifyContent = "center";
        position.style.alignItems = "center";
        header.style.position = "absolute";
        header.style.width = "100vw";
        header.style.height = "100vh";

    } else {
        painting2.style.visibility = "hidden";
        painting2.style.transition = "";
        painting2.style.opacity = "0";
        painting2.style.maxWidth = "20%";
        painting2.style.maxHeight = "20%";
        position.style.justifyContent = "";
        position.style.alignItems = "";
        header.style.position = "";
        header.style.width = "";
        header.style.height = "";
    }
}

function paintingClick3() {
    var painting3 = document.getElementById('paint-img3');
    var exit = document.getElementById('exit');
    var position = document.querySelector('main');
    var header = document.querySelector('header');

    if (painting3.style.visibility === "hidden") {
        painting3.style.visibility = "";
        painting3.style.transition = "visibility 1s linear, opacity 1s linear, max-height 1s linear, max-width 1s linear";
        painting3.style.opacity = "1";
        painting3.style.maxWidth = "80%";
        painting3.style.maxHeight = "80%";
        exit.style.display = "block";
        position.style.justifyContent = "center";
        position.style.alignItems = "center";
        header.style.width = "100vw";
        header.style.height = "100vh";
        header.style.position = "absolute";

    } else {
        painting3.style.visibility = "hidden";
        painting3.style.transition = "";
        painting3.style.opacity = "0";
        painting3.style.maxWidth = "20%";
        painting3.style.maxHeight = "20%";
        position.style.justifyContent = "";
        position.style.alignItems = "";
        header.style.width = "";
        header.style.height = "";
        header.style.position = "";
    }
}

function noteClick() {
    var note1 = document.getElementById('note-img');
    var notePopUp = document.getElementById('notes-popup');
    var year = document.getElementById('year');
    var title = document.getElementById('title');
    var caption = document.getElementById('caption');
    var position = document.querySelector('main');
    var exit = document.getElementById('exit');
    var header = document.querySelector('header');

    if (note1.style.visibility === "hidden") {
        year.innerHTML = "2020-12-32";
        title.innerHTML = "Boaty McBoatface";
        caption.innerHTML = `Sub down, ass up. Horizon approaching. <br> Yeah that’s what’s up. <br>
            Original start page, original start art. <br> The first edition.
            Keep on evolving.`;
        note1.style.visibility = "inherit";
        position.style.justifyContent = "center";
        position.style.alignItems = "center";
        notePopUp.style.zIndex = "3";
        exit.style.display = "block";
        header.style.width = "100vw";
        header.style.height = "100vh";
        header.style.position = "absolute";
    } else {
        year.innerHTML = "";
        title.innerHTML = "";
        caption.innerHTML = ``;
        note1.style.visibility = "hidden";
        position.style.justifyContent = "";
        position.style.alignItems = "";
        notePopUp.style.zIndex = "-1";
        header.style.width = "";
        header.style.height = "";
        header.style.position = "";
    }
}

function noteClick2() {
    var note1 = document.getElementById('note-img');
    var notePopUp = document.getElementById('notes-popup');
    var year = document.getElementById('year');
    var title = document.getElementById('title');
    var caption = document.getElementById('caption');
    var position = document.querySelector('main');
    var exit = document.getElementById('exit');
    var header = document.querySelector('header');

    if (note1.style.visibility === "hidden") {
        year.innerHTML = "2020-04-20 b.c";
        title.innerHTML = "Yung Achilles ";
        caption.innerHTML = `A literal rocker, huge stoner. <br> Big thinker, mangas dreamer. <br> 
        The burning sun glazed - on his skin this had no effect. <br>
        Heel got rekkt.`;
        note1.style.visibility = "inherit";
        position.style.justifyContent = "center";
        position.style.alignItems = "center";
        notePopUp.style.zIndex = "3";
        exit.style.display = "block";
        header.style.width = "100vw";
        header.style.height = "100vh";
        header.style.position = "absolute";
    } else {
        year.innerHTML = "";
        title.innerHTML = "";
        caption.innerHTML = ``;
        note1.style.visibility = "hidden";
        position.style.justifyContent = "";
        position.style.alignItems = "";
        notePopUp.style.zIndex = "-1";
        header.style.width = "";
        header.style.height = "";
        header.style.position = "";
    }
}

function noteClick3() {
    var note1 = document.getElementById('note-img');
    var notePopUp = document.getElementById('notes-popup');
    var year = document.getElementById('year');
    var title = document.getElementById('title');
    var caption = document.getElementById('caption');
    var position = document.querySelector('main');
    var exit = document.getElementById('exit');
    var header = document.querySelector('header');

    if (note1.style.visibility === "hidden") {
        year.innerHTML = "2020-05-15";
        title.innerHTML = "Stargazing";
        caption.innerHTML = `The concept and the dream. <br> The space mission came in between. <br>
        It will be made, stars, flames, spacecraft and all. <br>
        Believe us, this one is our call..`;
        note1.style.visibility = "inherit";
        position.style.justifyContent = "center";
        position.style.alignItems = "center";
        notePopUp.style.zIndex = "3";
        exit.style.display = "block";
        header.style.width = "100vw";
        header.style.height = "100vh";
        header.style.position = "absolute";
    } else {
        year.innerHTML = "";
        title.innerHTML = "";
        caption.innerHTML = ``;
        note1.style.visibility = "hidden";
        position.style.justifyContent = "";
        position.style.alignItems = "";
        notePopUp.style.zIndex = "-1";
        header.style.width = "";
        header.style.height = "";
        header.style.position = "";
    }
}

/*

Boaty McBoatface
2020-12-32
Sub down, ass up. Horizon approaching. Yeah that’s what’s up. 
Original start page, original start art. The first edition.
Keep on evolving.


Yung Achilles 
2020-04-20 b.c
A literal rocker, huge stoner. Big thinker, mangas dreamer. 
The burning sun glazed - on his skin this had no effect.
Heel got rekkt.


Stargazing
2020-05-15
The concept and the dream. The space mission came in between.
It will be made, stars, flames, spacecraft and all.
Believe us, this one is our call.

*/

window.onresize = scalable;