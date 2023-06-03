import SimpleBar from "simplebar";
import "simplebar/dist/simplebar.css";

import ResizeObserver from "resize-observer-polyfill";
window.ResizeObserver = ResizeObserver;

import "./main.scss";

import "IMAGES/logo.png";
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

import "ICONS/check.svg";
import "ICONS/select-arrow.svg";
import "ICONS/option1.svg";
import "ICONS/option2.svg";
import "ICONS/option3.svg";
import "ICONS/option4.svg";
import "ICONS/logo_white.svg";

import "SCRIPTS/validate.js";
import "SCRIPTS/scrollbar.js";

document.addEventListener("DOMContentLoaded", function () {
  $(".burger").on("click", () => {
    $(".header").toggleClass("menu-active");
  });

  $(".question-item__question").on("click", (e) => {
    e.target.closest(".question-item").classList.toggle("show");
  });
});
