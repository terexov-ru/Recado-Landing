document.addEventListener("DOMContentLoaded", function () {
  $(".show-password").on("click", (e) => {
    let $icon = $(e.target.closest(".show-password"));

    if ($icon.hasClass("password-shown")) {
      $icon.prev().attr("type", "password");
      $icon.removeClass("password-shown");
    } else {
      $icon.prev().attr("type", "text");
      $icon.addClass("password-shown");
    }
  });
});
