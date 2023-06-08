import "swiper/css/bundle";

import "./main.scss";

import "IMAGES/advantage_1.png";
import "IMAGES/advantage_2.png";
import "IMAGES/advantage_3.png";
import "IMAGES/advantage_4.png";
import "IMAGES/sbis.png";
import "IMAGES/feedback.png";
import "IMAGES/iiko.png";
import "IMAGES/1c.png";
import "IMAGES/poster.png";
import "IMAGES/r_keeper.png";
import "IMAGES/frontpad.png";
import "IMAGES/sclad.png";
import "IMAGES/main.png";
import "IMAGES/logo.svg";
import "IMAGES/01.png";
import "IMAGES/02.png";
import "IMAGES/03.png";
import "IMAGES/04.png";

import "IMAGES/sklad.svg";
import "IMAGES/frontpad.svg";
import "IMAGES/iiko.svg";

import "ICONS/check.svg";
import "ICONS/select-arrow.svg";
import "ICONS/option1.svg";
import "ICONS/option2.svg";
import "ICONS/option3.svg";
import "ICONS/option4.svg";
import "ICONS/option5.svg";
import "ICONS/option6.svg";
import "ICONS/logo_white.svg";

import "SCRIPTS/validate.js";
import "SCRIPTS/scrollbar.js";
import "SCRIPTS/select.js";

document.addEventListener("DOMContentLoaded", function () {
  let scroll = 0;

  function showPopup($popup) {
    scroll = $(window).scrollTop();
    $popup.addClass("popup-shown");
    $(".header").addClass("hidden");
    $(".main").addClass("hidden");
    $(".footer").addClass("hidden");
    $("body,html").animate({ scrollTop: 0 }, 400);
    console.log(scroll);
  }

  function hidePopup($popup) {
    $popup.removeClass("popup-shown");
    $(".header").removeClass("hidden");
    $(".main").removeClass("hidden");
    $(".footer").removeClass("hidden");
    $(window).scrollTop(scroll);
  }

  $(".js-show-form").on("click", () => {
    showPopup($(".form-wrapper"));
  });

  $(".js-show-terms").on("click", () => {
    showPopup($(".terms-wrapper"));
  });

  $(".js-inner-show-terms").on("click", () => {
    hidePopup($(".form-wrapper"));
    showPopup($(".terms-wrapper"));
  });

  $(".popup-container__cross-block").on("click", (e) => {
    hidePopup($(e.target).closest(".popup-wrapper"));
  });

  $(".burger").on("click", () => {
    $(".header").toggleClass("menu-active");
  });

  $(".question-item__question").on("click", (e) => {
    e.target.closest(".question-item").classList.toggle("show");
  });

  if ($(window).width() > 600) {
    $(".header__language").on("click", () => {
      $(".header__language").toggleClass("show");
    });

    window.addEventListener("click", (e) => {
      let target = e.target;
      if (!target.closest(".header__language")) {
        $(".header__language").removeClass("show");
      }
    });
  } else {
    $(".hint-block").removeClass("desc");

    $(".js-hint-icon").on("click", (e) => {
      $(e.target).closest(".hint-block").toggleClass("show");
    });

    $(".rate-item__advantages-header").on("click", (e) => {
      $(e.target).closest(".rate-item__advantages-header").toggleClass("show");
      $(e.target)
        .closest(".rate-item__advantages-header")
        .next()
        .toggleClass("show");
    });
  }
});
