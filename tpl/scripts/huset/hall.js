var cContainer = document.getElementById('cContainer');
var bakgrund = document.getElementById('bckI');

var chat = document.getElementById('conversation');

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

document.getElementById('vernisage-title').innerHTML = titles[Math.floor(Date.now() / 86400000) % titles.length];

/* SVG transitions */
var trans1 = document.getElementById('tranSvg1');
var trans2 = document.getElementById('tranSvg2');
var trans3 = document.getElementById('tranSvg3');
var trans4 = document.getElementById('tranSvg4');

function rChat() {

    const chats = ["This is a 'No Trespassing' zone for you.", "You're not on the guest list.", "This place is strictly off-limits for you.", "Sorry, but your presence is not authorized here.", "You're like a bag of potatoes at a fruit stand. Out of place.", "This ain't your playground, buddy.", "Sorry, but you're not welcome to join the party.", "You're not the boss of this joint.", "This isn't a vacation spot for you.", "This is a 'Members Only' club, and you're not a member.", "You're not a fan favorite here.", "This is a one-person show, and you're not the star.", "You're like a square peg in a round hole.", "Sorry, but your seat at the table has been revoked.", "This place is for the cool kids, and you're not one of them."];

    let randomIndex = Math.floor(Math.random() * chats.length);
    let randomString = chats[randomIndex];

    chat.innerHTML = randomString;
}

if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    /* SVG transitions Mobile*/
    doNotEnter.onmouseenter = function () {
        trans1.setAttribute("flood-opacity", "1");
    }
    stoneDoor.onmouseenter = function () {
        trans2.setAttribute("flood-opacity", "1");
    }
    profile.onmouseenter = function () {
        trans3.setAttribute("flood-opacity", "1");
    }

    boutDoor.onmouseenter = function () {
        trans4.setAttribute("flood-opacity", "1");
    }

} else {
    /* SVG transitions PC*/
    doNotEnter.onmouseenter = function () {
        trans1.setAttribute("flood-opacity", "1");
    }

    doNotEnter.onclick = function () {
        console.log('hej');
        rChat();
    }

    doNotEnter.onmouseleave = function () {
        trans1.setAttribute("flood-opacity", "0");
    }

    stoneDoor.onmouseenter = function () {
        trans2.setAttribute("flood-opacity", "1");
    }

    stoneDoor.onclick = function () {
        console.log('hej');
        rChat();
    }

    stoneDoor.onmouseleave = function () {
        trans2.setAttribute("flood-opacity", "0");
    }

    profile.onmouseenter = function () {
        trans3.setAttribute("flood-opacity", "1");
    }

    profile.onclick = function () {
        console.log('hej');
        rChat();
    }

    profile.onmouseleave = function () {
        trans3.setAttribute("flood-opacity", "0");
    }

    boutDoor.onmouseenter = function () {
        trans4.setAttribute("flood-opacity", "1");
    }

    boutDoor.onclick = function () {
        console.log('hej');
        rChat();
    }

    boutDoor.onmouseleave = function () {
        trans4.setAttribute("flood-opacity", "0");
    }
}

function skal() {

    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {

        var mobileHeight = document.documentElement.clientHeight || document.body.clientHeight;
        var mobiletWidth = document.documentElement.clientWidth || document.body.clientWidth;

        var ratioHardM = mobileHeight / mobiletWidth;

        var ratioM = Math.round(ratioHardM * 100) / 100;

        console.log(ratioM);

        document.body.style.overflow = 'scroll';

        switch (true) {
            case 0.49 > ratioM:

                document.querySelector("html").removeEventListener("wheel", function (event) {
                    this.scrollLeft += event.deltaY;
                });
                document.querySelector("html").addEventListener("wheel", function (event) {
                    this.scrollTop += event.deltaY;
                });

                console.log('under ratio');
                cContainer.style.height = mobiletWidth * 937 / 1920 + 'px';
                cContainer.style.width = mobiletWidth + 'px';

                break;

            case ratioM >= 0.49:

                document.querySelector("html").removeEventListener("wheel", function (event) {
                    this.scrollTop += event.deltaY;
                });
                document.querySelector("html").addEventListener("wheel", function (event) {
                    this.scrollLeft += event.deltaY;
                });

                console.log('över ratio');
                cContainer.style.height = mobileHeight + 'px';
                cContainer.style.width = mobileHeight * 1920 / 937 + 'px';

                break;
        }

    } else {

        var elementHeight = window.innerHeight;
        var elementWidth = window.innerWidth;

        var ratioHard = elementHeight / elementWidth;

        var ratio = Math.round(ratioHard * 100) / 100;

        console.log(ratio);

        document.body.style.overflow = 'hidden';

        switch (true) {
            case 0.49 > ratio:

                document.querySelector("html").removeEventListener("wheel", function (event) {
                    this.scrollLeft += event.deltaY;
                });
                document.querySelector("html").addEventListener("wheel", function (event) {
                    this.scrollTop += event.deltaY;
                });

                console.log('under ratio');
                cContainer.style.height = elementWidth * 937 / 1920 + 'px';
                cContainer.style.width = elementWidth + 'px';

                break;

            case ratio >= 0.49:

                document.querySelector("html").removeEventListener("wheel", function (event) {
                    this.scrollTop += event.deltaY;
                });
                document.querySelector("html").addEventListener("wheel", function (event) {
                    this.scrollLeft += event.deltaY;
                });

                console.log('över ratio');
                cContainer.style.height = elementHeight + 'px';
                cContainer.style.width = elementHeight * 1920 / 937 + 'px';

                break;
        }
    }
}


window.onresize = skal;

window.onload = skal();