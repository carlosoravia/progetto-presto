let btnUp = document.getElementById("btnUp");

btnUp.addEventListener('click', up);
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
        btnUp.style.display = "inline";
    } else {
        btnUp.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
function up() {
    topFunction ();
    scrollFunction();
}
