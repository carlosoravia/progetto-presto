

var swiper = new Swiper(".mySwiper", {
    effect: "cube",
    grabCursor: false,
    loop: true,
    speed: 1500,
    cubeEffect: {
        shadow: false,
        slideShadows: false,
        shadowOffset:   0,
        shadowScale: 0,
    },
    autoplay: {
        delay: 2000,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});


let swiper_mobile = new Swiper(".My-swiper-mobile", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
