// Popup navigation bar for small screens

const hamburger = document.querySelector('.hamburger');
const popupWrapper = document.querySelector('.popup-wrapper');
const popupClose = document.querySelector('.close');

hamburger.addEventListener('click', () => {
        popupWrapper.style.display = "block";
        popupClose.style.display = "block";
        // hamburger.src = 'images/cross.png';
});

popupClose.addEventListener('click', () => {
    popupWrapper.style.display = "none";
    popupClose.style.display = "none";
});

popupWrapper.addEventListener('click', (event) => {
    event.stopPropagation();
    popupWrapper.style.display = "none";
    popupClose.style.display = "none";
});


// To hide the popup navbar if the screen viewport is changed
function myFunction(x) {
    if (x.matches) { // If media query matches
        popupWrapper.style.display = "none";
        popupClose.style.display = "none";
    } 
  }

var x = window.matchMedia("(min-width: 500px)");
myFunction(x);
x.addListener(myFunction);