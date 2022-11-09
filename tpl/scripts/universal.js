/* Loading Screen */
window.addEventListener("load", function () {
    var loadScreen = document.getElementById('loading-screen');

    setTimeout(function(){
        document.body.removeChild(loadScreen);
        document.body.style.overflow = 'auto';
    }, 3000);

});
