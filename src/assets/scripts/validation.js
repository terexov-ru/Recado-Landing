export function validateInput(input) {
  let inputContainer = input.closest(".input-container");
  const EMAIL_REGEXP =
    /^(([^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*)|(".+"))@(([^<>()[\].,;:\s@"]+\.)+[^<>()[\].,;:\s@"]{2,})$/iu;
  if (input.dataset.type == "text") {
    if (input.value == "") {
      inputContainer.classList.add("warning");
      inputContainer.classList.remove("success");
      setTimeout(() => {
        inputContainer.classList.remove("warning");
      }, 2000);
      return false;
    } else {
      inputContainer.classList.add("success");
      inputContainer.classList.remove("warning");
      return true;
    }
  }

  if (input.dataset.type == "password") {
    if (input.value == "") {
      inputContainer.classList.add("warning");
      inputContainer.classList.remove("success");
      setTimeout(() => {
        inputContainer.classList.remove("warning");
      }, 2000);
      return false;
    } else {
      let secondInput = inputContainer.nextElementSibling.firstElementChild;
      return isPasswordEqual(input, secondInput, true);
    }
  }

  if (input.dataset.type == "password-repeat") {
    if (input.value == "") {
      inputContainer.classList.add("warning");
      inputContainer.classList.remove("success");
      setTimeout(() => {
        inputContainer.classList.remove("warning");
      }, 2000);
      return false;
    } else {
      let firstInput = inputContainer.previousElementSibling.firstElementChild;
      return isPasswordEqual(input, firstInput, true);
    }
  }

  if (input.dataset.type == "telephone") {
    if (input.classList.contains("validate-success")) {
      inputContainer.classList.add("success");
      inputContainer.classList.remove("warning");
      return true;
    } else {
      inputContainer.classList.add("warning");
      inputContainer.classList.remove("success");
      setTimeout(() => {
        inputContainer.classList.remove("warning");
      }, 2000);
      return false;
    }
  }

  if (input.dataset.type == "email") {
    if (input.value == "") {
      inputContainer.classList.add("warning");
      inputContainer.classList.remove("success");
      setTimeout(() => {
        inputContainer.classList.remove("warning");
      }, 2000);
    } else {
      if (EMAIL_REGEXP.test(input.value)) {
        inputContainer.classList.add("success");
        inputContainer.classList.remove("warning", "wrong-email");
        return true;
      } else {
        inputContainer.classList.add("warning", "wrong-email");
        inputContainer.classList.remove("success");
        setTimeout(() => {
          inputContainer.classList.remove("warning");
        }, 2000);
        setTimeout(() => {
          inputContainer.classList.remove("wrong-email");
        }, 3000);
        return false;
      }
    }
  }

  if (input.dataset.type == "date") {
    if (input.value == "") {
      inputContainer.classList.add("warning");
      inputContainer.classList.remove("success");
      setTimeout(() => {
        inputContainer.classList.remove("warning");
      }, 2000);
      return false;
    } else {
      inputContainer.classList.add("success");
      inputContainer.classList.remove("warning");
      return true;
    }
  }

  if (input.dataset.type == "checkbox") {
    inputContainer = input.closest(".radio-input");
    if (input.checked) {
      inputContainer.classList.remove("warning");
      return true;
    } else {
      inputContainer.classList.add("warning");
      setTimeout(() => {
        inputContainer.classList.remove("warning");
      }, 2000);
      return false;
    }
  }

  if (input.dataset.type == "file") {
    if (input.value == "") {
      inputContainer.classList.add("warning", "wrong-file");
      inputContainer.classList.remove("success");
      setTimeout(() => {
        inputContainer.classList.remove("warning");
      }, 2000);
      setTimeout(() => {
        inputContainer.classList.remove("wrong-file");
      }, 3000);
      return false;
    } else {
      inputContainer.classList.add("success");
      inputContainer.classList.remove("warning", "wrong-file");
      return true;
    }
  }

  if (input.dataset.type == "rating") {
    inputContainer = input.closest(".label-input-container");
    let stars = input.querySelectorAll(".rating-input-star");

    for (let star of stars) {
      if (star.checked == true) {
        inputContainer.classList.remove("warning");
        return true;
      }
    }
    inputContainer.classList.add("warning");
    setTimeout(() => {
      inputContainer.classList.remove("warning");
    }, 2000);
    return false;
  }
}

export function isPasswordEqual(password1, password2, isShowMessage) {
  let inputContainer1 = password1.closest(".label-input-container");
  let inputContainer2 = password2.closest(".label-input-container");
  if (password1.value == password2.value) {
    inputContainer1.classList.add("success");
    inputContainer2.classList.add("success");
    return true;
  } else {
    inputContainer1.classList.remove("success");
    inputContainer2.classList.remove("success");
    if (isShowMessage) {
      inputContainer1.classList.add("warning", "passwords-not-equal");
      inputContainer2.classList.add("warning", "passwords-not-equal");
      setTimeout(() => {
        inputContainer1.classList.remove("warning");
        inputContainer2.classList.remove("warning");
      }, 2000);
      setTimeout(() => {
        inputContainer1.classList.remove("passwords-not-equal");
        inputContainer2.classList.remove("passwords-not-equal");
      }, 3000);
    }
    return false;
  }
}

export function isFormValid(form) {
  let validateInputs = form.querySelectorAll(".validate-input");
  let validCount = 0;
  validateInputs.forEach((input) => {
    if (validateInput(input)) {
      validCount++;
    }
  });
  if (validCount != validateInputs.length) {
    return false;
  } else {
    return true;
  }
}
