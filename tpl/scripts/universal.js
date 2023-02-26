// Select the HTML elements we need
var tipElement = document.getElementById('randomTip');
var loadScreenElement = document.getElementById('loading-screenHuset');

if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
    var mobileHeight = document.documentElement.clientHeight || document.body.clientHeight;
    loadScreenElement.style.height = mobileHeight + 'px';
}

// Function to remove the loading screen element by fading it out
function fadeOutLoadScreen() {
  loadScreenElement.style.opacity = '0';
  setTimeout(function() {
    loadScreenElement.style.display = 'none';
  }, 1000); // change the number of milliseconds to adjust the fade-out time
}

window.addEventListener('resize', function() {
  var mobileHeight = document.documentElement.clientHeight || document.body.clientHeight;
  var mobileWidth = document.documentElement.clientWidth || document.body.clientWidth;
  loadScreenElement.style.height = mobileHeight + 'px';
  loadScreenElement.style.width = mobileWidth + 'px';

});

// Wait for the page to finish loading, then remove the loading screen element
window.addEventListener('load', function() {
  fadeOutLoadScreen();
});