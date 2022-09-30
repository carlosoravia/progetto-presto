let btnDarkMode = document.getElementById('darkMode');
let is_clicked = false;
let mode = localStorage.getItem('mode');


function darkMode() {
    btnDarkMode.innerHTML = '<i class="bi bi-cloud-moon-fill"></i>';
    document.documentElement.style.setProperty(' --scroll-bar', 'rgb(rgb(45, 52, 29))');

    // colori principali
    document.documentElement.style.setProperty('--primary', 'rgba(20, 19, 20, 1)');
    document.documentElement.style.setProperty('--secondary', 'rgba(75, 72, 74, 1)');

    // testi
    document.documentElement.style.setProperty('--dark', 'rgba(0, 0, 0, 0.8)');
    document.documentElement.style.setProperty('--white', 'rgba(235, 235, 235, 0.772)');
    document.documentElement.style.setProperty('--dark-al', 'rgba(0, 0, 0, 1)');

    // bordi
    document.documentElement.style.setProperty(' --grey-border', 'rgb(64, 63, 63)');
    document.documentElement.style.setProperty('--yellow-border', 'rgb(240, 189, 47)');
    document.documentElement.style.setProperty('--red-border', 'rgb(208, 42, 58)');
    document.documentElement.style.setProperty('--white-border', 'rgb(235, 235, 235)');

    //effetti
    document.documentElement.style.setProperty('--yellow-fade', 'rgba(92, 83, 87, 0.8)');
    document.documentElement.style.setProperty('--red-fade', 'rgba(186, 53, 66, 0.417)');
    document.documentElement.style.setProperty('--btn-text', 'rgba(0, 0, 0, 0.8)');
    document.documentElement.style.setProperty('--btn-dark', 'rgba(0, 0, 0, 0.8)');

    // colri netti
    document.documentElement.style.setProperty('--black-solid', 'rgba(34, 27, 27, 1)');
    document.documentElement.style.setProperty('--white-solid', 'rgba(253, 253, 253, 1)');
    document.documentElement.style.setProperty('--red', 'rgba(186, 53, 66, 0.765)');
    document.documentElement.style.setProperty('--yellow', 'rgba(223, 181, 55, 0.623)');

    // cards
    document.documentElement.style.setProperty('--bg-card', 'rgba(75, 72, 74, 1)');
    document.documentElement.style.setProperty('--text-card-1', 'rgba(75, 72, 74, 1)');
    document.documentElement.style.setProperty('--text-card-2', 'rgba(75, 72, 74, 1)');
    document.documentElement.style.setProperty('--text-card-3', 'rgba(211, 209, 49, 1)');
}

function lightMode() {
    btnDarkMode.innerHTML = '<i class="bi bi-cloud-sun"></i>';
    document.documentElement.style.setProperty(' --scroll-bar', 'rgb(rgb(45, 52, 29))');

    // colori principali
    document.documentElement.style.setProperty('--primary', 'rgba(172, 172, 172, 0.71)');
    document.documentElement.style.setProperty('--secondary', 'rgba(129, 177, 169, 1)');

    // testi
    document.documentElement.style.setProperty('--dark', 'rgba(229, 236, 235, 0.9)');
    document.documentElement.style.setProperty('--white', 'rgba(0, 0, 0, 1)');
    document.documentElement.style.setProperty('--dark-al', 'rgba(0, 0, 0, 1)');

    // bordi
    document.documentElement.style.setProperty(' --grey-border', 'rgb(235, 235, 235)');
    document.documentElement.style.setProperty('--yellow-border', 'rgb(240, 189, 47)');
    document.documentElement.style.setProperty('--red-border', 'rgb(208, 42, 58)');
    document.documentElement.style.setProperty('--white-border', 'rgba(34, 27, 27, 1)');

    // effetti
    document.documentElement.style.setProperty('--yellow-fade', 'rgba(20, 2, 11, 0.8)');
    document.documentElement.style.setProperty('--red-fade', 'rgba(186, 53, 66, 0.417)');
    document.documentElement.style.setProperty('--btn-text', 'rgba(0, 0, 0, 0.8)');

    // colori netti
    document.documentElement.style.setProperty('--black-solid', 'rgba(253, 253, 253, 1)');
    document.documentElement.style.setProperty('--white-solid', 'rgba(34, 27, 27, 1)');
    document.documentElement.style.setProperty('--red', 'rgba(186, 53, 66, 0.765)');
    document.documentElement.style.setProperty('--yellow', 'rgba(126, 119, 45, 1)');

    // cards
    document.documentElement.style.setProperty('--bg-card', 'rgba(75, 72, 74, 1)');
    document.documentElement.style.setProperty('--text-card-1', 'rgba(75, 72, 74, 1)');
    document.documentElement.style.setProperty('--text-card-2', 'rgba(75, 72, 74, 1)');
    document.documentElement.style.setProperty('--text-card-3', 'rgba(38, 59, 36, 1)');
}

addEventListener('DOMContentLoaded', () => {
    btnDarkMode.addEventListener('click', ()=>{
        if (is_clicked) {// light mode
            lightMode();
            is_clicked = false;
            localStorage.setItem('mode', 'light');
        }else{ //dark mode
            darkMode();
            is_clicked = true;
            localStorage.setItem('mode', 'dark');
        }
    })



    if (mode === 'dark') {
        darkMode();
    } else {
        lightMode();
    }

});






