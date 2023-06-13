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

let loadMoreBtn = document.querySelector('.package .load-more .btn');
let currentItem = 3;
loadMoreBtn.onclick = () => {
    let boxes = [...document.querySelectorAll('.package .box-container .box')];
    for (var i = currentItem; i < currentItem + 3; i++) {
        boxes[i].style.display = 'inline-block';
    };
    currentItem += 3;
    if (currentItem >= boxes.length) {
        loadMoreBtn.style.display = 'none;'
    }
}