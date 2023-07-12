import { isFormValid } from "./validation";

document.addEventListener("DOMContentLoaded", function () {
  $(".login__btn").on("click", (e) => {
    $(".errors-container").removeClass("showed");
    let form = e.target.closest(".validate-form");
    if (isFormValid(form)) {
      console.log("send");
    } else {
      e.preventDefault();
    }
  });
});
