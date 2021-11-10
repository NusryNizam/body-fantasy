// Scroll to top button implementation
const toTop = document.querySelector('#toTop');

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction();
}
function scrollFunction(){
    if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        toTop.style.display = 'block';
    } else {
        toTop.style.display = 'none';
    }
}

toTop.addEventListener('click', () => {
    document.body.scrollTop = 0; // For safari
    document.documentElement.scrollTop = 0; // For chrome, ff, ie, opera
});

