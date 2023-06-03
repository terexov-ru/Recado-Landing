import "./slick.js";

$(document).ready(function () {
  var $slider = $(".slider");
  var $progressBar = $(".progress");

  $slider.on("beforeChange", function (event, slick, currentSlide, nextSlide) {
    var calc = (nextSlide / (slick.slideCount - 1)) * 100;

    $progressBar
      .css("background-size", calc + "% 100%")
      .attr("aria-valuenow", calc);
  });

  $slider.slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    speed: 400,
    variableWidth: true,
    arrows: false,
    infinite: false,
  });
});
