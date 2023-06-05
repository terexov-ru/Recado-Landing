import Swiper from "swiper/bundle";
document.addEventListener("DOMContentLoaded", function () {
  if ($(window).width() > 600) {
    const swiper = new Swiper(".mySwiper", {
      direction: "horizontal",
      scrollbar: {
        el: ".swiper-scrollbar",
        draggable: true,
        dragSize: "auto",
        dragClass: "swiper-scrollbar-drag",
        horizontalClass: "swiper-scrollbar-horizontal",
        hide: false,
      },
      slidesPerView: 4,
      spaceBetween: 32,
    });
  }
});
