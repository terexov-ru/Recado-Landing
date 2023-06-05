import Swiper from "swiper/bundle";
document.addEventListener("DOMContentLoaded", function () {
  if ($(window).width() > 1400) {
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

  if ($(window).width() > 1200 && $(window).width() < 1400) {
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
      spaceBetween: 16,
    });
  }

  if ($(window).width() > 800 && $(window).width() < 1200) {
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
      slidesPerView: 3,
      spaceBetween: 16,
    });
  }

  if ($(window).width() > 600 && $(window).width() < 800) {
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
      slidesPerView: 2,
      spaceBetween: 16,
    });
  }
});
