var cContainer = document.getElementById('cContainer');

var portfolio = document.getElementById('painting3');
var exit = document.querySelector('span');
var titles = document.querySelectorAll('h2');
var lii = document.querySelectorAll('li');
var ai = document.querySelectorAll('a');
var lir = document.querySelectorAll('.liR');
var info = document.querySelectorAll('.info');
var infoT = document.querySelectorAll('.infoT');

portfo = "0";
window.sessionStorage.setItem("portfo", portfo);

function openPort() {

    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){

        var mobHeight = document.documentElement.clientHeight || document.body.clientHeight;

        switch (sessionStorage.getItem('portfo')) {

            case '0':
            portfolio.style.transition = 'unset';
            portfolio.style.position = 'fixed';
            portfolio.style.right = '0'
            portfolio.style.top = '0';
            portfolio.style.width = '100vw';
            portfolio.style.height = mobHeight + 'px';
            portfolio.style.cursor = 'default';
    
            for (var i = 0; i < titles.length; i++) {
                titles[i].style.fontSize = '40px';
            }
    
            for (var i = 0; i < lii.length; i++) {
                lii[i].style.fontSize = '20px';
            }
    
            for (var i = 0; i < ai.length; i++) {
                ai[i].style.fontSize = '20px';
                ai[i].style.pointerEvents = 'all';
            }
    
            for (var i = 0; i < lir.length; i++) {
                lir[i].style.width = '15%';
            }
    
            exit.style.fontSize = '60px';
            exit.style.opacity = '1';
    
            portfo = "1";
            window.sessionStorage.setItem("portfo", portfo);
    
            portfolio.removeAttribute('onclick');
    
          break;
        }

    } else {

        switch (sessionStorage.getItem('portfo')) {

            case '0':
            portfolio.style.position = 'fixed';
            portfolio.style.right = '0'
            portfolio.style.top = '0';
            portfolio.style.width = '100vw';
            portfolio.style.height = '100vh';
            portfolio.style.cursor = 'default';
    
            for (var i = 0; i < titles.length; i++) {
                titles[i].style.fontSize = '70px';
            }
    
            for (var i = 0; i < lii.length; i++) {
                lii[i].style.fontSize = '30px';
            }
    
            for (var i = 0; i < ai.length; i++) {
                ai[i].style.fontSize = '30px';
                ai[i].style.pointerEvents = 'all';
            }
    
            for (var i = 0; i < lir.length; i++) {
                lir[i].style.width = '15%';
            }
    
            exit.style.fontSize = '70px';
            exit.style.opacity = '1';
    
            portfo = "1";
            window.sessionStorage.setItem("portfo", portfo);
    
            portfolio.removeAttribute('onclick');
    
          break;
        }

    }
}

document.querySelector('#exit').addEventListener('click', function (event) {
    event.stopPropagation();

    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
        switch (sessionStorage.getItem('portfo')) {

            case '1':
            portfolio.style.transition = 'all 2s ease';
            portfolio.style.position = 'absolute';
            portfolio.style.right = '7%';
            portfolio.style.top = '27.5%';
            portfolio.style.width = '16%';
            portfolio.style.height = '43.8%';
            portfolio.style.transform = 'skew(0deg, 0deg)';
            portfolio.style.cursor = 'pointer';
        
            setTimeout(() => { 
                var widthi = portfolio.offsetWidth;;
            
                if(widthi < 160) {
                    for (var i = 0; i < ai.length; i++) {
                        ai[i].style.fontSize = '0.8vw';
                        ai[i].style.pointerEvents = 'none';
                    }
                    for (var i = 0; i < titles.length; i++) {
                        titles[i].style.fontSize = '1.8vw';
                    }
                    for (var i = 0; i < lii.length; i++) {
                        lii[i].style.border = 'solid 0.5px';
                    }
                } else {
                    for (var i = 0; i < titles.length; i++) {
                        titles[i].style.fontSize = '1.4em';
                    }
                
                    for (var i = 0; i < lii.length; i++) {
                        lii[i].style.fontSize = '11px';
                        lii[i].style.flexDirection = 'row';
                    }
        
                    for (var i = 0; i < ai.length; i++) {
                        ai[i].style.fontSize = '11px';
                        ai[i].style.pointerEvents = 'none';
                    }
        
                    for (var i = 0; i < lir.length; i++) {
                        lir[i].style.width = '25%';
                    }
                }
                console.log(widthi); 
            }, 1800);

            exit.style.fontSize = '0px';
            exit.style.opacity = '0';

            portfo = "0";
            window.sessionStorage.setItem("portfo", portfo);

            for (var i = 0; i < infoT.length; i++) {
                infoT[i].style.display = 'none';
            }

            portfolio.setAttribute('onclick', 'openPort()');

        break;
        }
    } else {
        switch (sessionStorage.getItem('portfo')) {

            case '1':

            portfolio.style.position = 'absolute';
            portfolio.style.right = '7%';
            portfolio.style.top = '27.5%';
            portfolio.style.width = '16%';
            portfolio.style.height = '43.8%';
            portfolio.style.transform = 'skew(0deg, 0deg)';
            portfolio.style.cursor = 'pointer';
        
            for (var i = 0; i < titles.length; i++) {
                titles[i].style.fontSize = '1.5em';
            }
        
            for (var i = 0; i < lii.length; i++) {
                lii[i].style.fontSize = '14px';
                lii[i].style.flexDirection = 'row';
            }

            for (var i = 0; i < ai.length; i++) {
                ai[i].style.fontSize = '14px';
                ai[i].style.pointerEvents = 'none';
            }

            for (var i = 0; i < lir.length; i++) {
                lir[i].style.width = '25%';
            }

            exit.style.fontSize = '0px';
            exit.style.opacity = '0';

            portfo = "0";
            window.sessionStorage.setItem("portfo", portfo);

            for (var i = 0; i < infoT.length; i++) {
                infoT[i].style.display = 'none';
            }

            portfolio.setAttribute('onclick', 'openPort()');

        break;
        }
    }
});

info.forEach(function(info) {
    info.onclick = function() {
        if(this.parentNode.parentNode.parentNode.style.height === 'unset') {
            this.parentNode.parentNode.parentNode.style.height = 'fit-content';
            this.parentNode.parentNode.parentNode.style.flexDirection = 'column';
            this.parentNode.style.justifyContent = 'flex-end';
            this.parentNode.parentNode.parentNode.querySelectorAll('.infoT')[0].style.display= 'flex';
        } else {
            this.parentNode.parentNode.parentNode.style.height = 'unset';
            this.parentNode.style.justifyContent = 'flex-end';
            this.parentNode.parentNode.parentNode.querySelectorAll('.infoT')[0].style.display = 'none';
        }
    };
});



/* scaling */
function skal() {

    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
        
        var mobileHeight = document.documentElement.clientHeight || document.body.clientHeight;
        var mobiletWidth = document.documentElement.clientWidth || document.body.clientWidth;

        var ratioHardM = mobileHeight/mobiletWidth;

        var ratioM = Math.round(ratioHardM * 100) / 100;

        console.log(ratioM);

        document.body.style.overflow = 'scroll';
        
        switch(true) {
            case 0.49 > ratioM :
    
                document.querySelector("html").removeEventListener("wheel", function(event) {
                    this.scrollLeft += event.deltaY;
                });
                document.querySelector("html").addEventListener("wheel", function(event) {
                    this.scrollTop += event.deltaY;
                });
    
                console.log('under ratio');
                cContainer.style.height = mobiletWidth * 937/1920 + 'px';
                cContainer.style.width = mobiletWidth + 'px';
    
            break;
    
            case ratioM >= 0.49 :
    
                document.querySelector("html").removeEventListener("wheel", function(event) {
                    this.scrollTop += event.deltaY;
                });
                document.querySelector("html").addEventListener("wheel", function(event) {
                    this.scrollLeft += event.deltaY;
                });
    
                console.log('över ratio');
                cContainer.style.height = mobileHeight + 'px';
                cContainer.style.width = mobileHeight * 1920/937 + 'px';
    
            break;
        }

        switch (sessionStorage.getItem('portfo')) {

            case '0':
                portfolio.style.position = 'absolute';
                portfolio.style.right = '7%';
                portfolio.style.top = '27.5%';
                portfolio.style.width = '16%';
                portfolio.style.height = '43.8%';
                portfolio.style.cursor = 'pointer';
            
                setTimeout(() => { 
                    var widthi = portfolio.offsetWidth;;
                
                    if(widthi < 160) {
                        for (var i = 0; i < ai.length; i++) {
                            ai[i].style.fontSize = '0.8vw';
                            ai[i].style.pointerEvents = 'none';
                        }
                        for (var i = 0; i < titles.length; i++) {
                            titles[i].style.fontSize = '1.8vw';
                        }
                        for (var i = 0; i < lii.length; i++) {
                            lii[i].style.border = 'solid 0.5px';
                        }
                    } else {
                        for (var i = 0; i < titles.length; i++) {
                            titles[i].style.fontSize = '1.4em';
                        }
                    
                        for (var i = 0; i < lii.length; i++) {
                            lii[i].style.fontSize = '11px';
                            lii[i].style.flexDirection = 'row';
                        }
            
                        for (var i = 0; i < ai.length; i++) {
                            ai[i].style.fontSize = '11px';
                            ai[i].style.pointerEvents = 'none';
                        }
            
                        for (var i = 0; i < lir.length; i++) {
                            lir[i].style.width = '25%';
                        }
                    }
                    console.log(widthi); 
                }, 1800);
    
                exit.style.fontSize = '0px';
                exit.style.opacity = '0';
    
                portfo = "0";
                window.sessionStorage.setItem("portfo", portfo);
    
                for (var i = 0; i < infoT.length; i++) {
                    infoT[i].style.display = 'none';
                }
    
                portfolio.setAttribute('onclick', 'openPort()');
    
            break;

            case '1':
            portfolio.style.position = 'absolute';
            portfolio.style.right = '7%';
            portfolio.style.top = '27.5%';
            portfolio.style.width = '16%';
            portfolio.style.height = '43.8%';
            portfolio.style.cursor = 'pointer';
        
            setTimeout(() => { 
                var widthi = portfolio.offsetWidth;;
            
                if(widthi < 160) {
                    for (var i = 0; i < ai.length; i++) {
                        ai[i].style.fontSize = '0.8vw';
                        ai[i].style.pointerEvents = 'none';
                    }
                    for (var i = 0; i < titles.length; i++) {
                        titles[i].style.fontSize = '1.8vw';
                    }
                    for (var i = 0; i < lii.length; i++) {
                        lii[i].style.border = 'solid 0.5px';
                    }
                } else {
                    for (var i = 0; i < titles.length; i++) {
                        titles[i].style.fontSize = '1.4em';
                    }
                
                    for (var i = 0; i < lii.length; i++) {
                        lii[i].style.fontSize = '11px';
                        lii[i].style.flexDirection = 'row';
                    }
        
                    for (var i = 0; i < ai.length; i++) {
                        ai[i].style.fontSize = '11px';
                        ai[i].style.pointerEvents = 'none';
                    }
        
                    for (var i = 0; i < lir.length; i++) {
                        lir[i].style.width = '25%';
                    }
                }
                console.log(widthi); 
            }, 1800);

            exit.style.fontSize = '0px';
            exit.style.opacity = '0';

            portfo = "0";
            window.sessionStorage.setItem("portfo", portfo);

            for (var i = 0; i < infoT.length; i++) {
                infoT[i].style.display = 'none';
            }

            portfolio.setAttribute('onclick', 'openPort()');

        break;
        }

    } else {

        var elementHeight = window.innerHeight;
        var elementWidth = window.innerWidth;
    
        var ratioHard = elementHeight/elementWidth;
    
        var ratio = Math.round(ratioHard * 100) / 100;
    
        console.log(ratio);

        document.body.style.overflow = 'hidden';

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
        
        setTimeout(() => { 
            var widthi = portfolio.offsetWidth;;
        
            if(widthi < 220) {
                for (var i = 0; i < ai.length; i++) {
                    ai[i].style.fontSize = '0.8vw';
                }
                for (var i = 0; i < titles.length; i++) {
                    titles[i].style.fontSize = '1.8vw';
                }
                for (var i = 0; i < lii.length; i++) {
                    lii[i].style.border = 'solid 0.5px';
                }
            } else if(widthi > 340) {
                for (var i = 0; i < ai.length; i++) {
                    ai[i].style.fontSize = '30px';          
                }
                for (var i = 0; i < titles.length; i++) {
                    titles[i].style.fontSize = '70px';           
                }
                for (var i = 0; i < lii.length; i++) {
                    lii[i].style.border = 'solid';
                }
            } else {
                for (var i = 0; i < ai.length; i++) {
                    ai[i].style.fontSize = '14px';
                }
                for (var i = 0; i < titles.length; i++) {
                    titles[i].style.fontSize = '1.5em';
                }
                for (var i = 0; i < lii.length; i++) {
                    lii[i].style.border = 'solid';
                }
            }
            console.log(widthi); 
        }, 100);
    }
}

window.onresize = skal;

/* Loading Screen */
window.addEventListener("load", function () {
    var loadScreen = document.getElementById('loading-screen');

    setTimeout(function(){
        document.body.removeChild(loadScreen);
        skal();
    }, 3000);
});