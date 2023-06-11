const nav = document.querySelector("nav");

window.addEventListener("scroll", function() {
    nav.classList.toggle("sticky", window.scrollY > 80); //jika scroll udah lebih dari 80 px maka nav akan di beri class sticky
});

var swiper = new Swiper(".home-slider", {
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});