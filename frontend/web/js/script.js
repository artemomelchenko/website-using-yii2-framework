//Menu

jQuery(".menu-toggle").click(function () {
  jQuery("ul").toggleClass("opening");
  jQuery(this).toggleClass("open");
});

// Toggle Collapse
$(".faq li .question").click(function () {
  $(this).find(".plus-minus-toggle").toggleClass("collapsed");
  $(this).parent().toggleClass("active");
});

//Validate form
if (
  window.location.pathname == "/" ||
  window.location.pathname == "/testimonials" ||
  window.location.pathname == "/contact" ||
  window.location.pathname == "/services"
) {
  let input_name = document.getElementById("input_name");
  let input_email = document.getElementById("input_email");
  let input_message = document.getElementById("input_message");
  let submit_button = document.getElementById("submit_form");

  // Function checked input name
  input_name.addEventListener("blur", function () {
    let value = this.value;
    let label_name = document.getElementById("label_name");

    if (input_name.value.length === 0) {
      input_name.classList.remove("invalid");
      label_name.classList.remove("focus-invalid");
      input_name.classList.add("valid");
      label_name.classList.add("focus");
      label_name.classList.remove("focus");
    } else {
      input_name.classList.add("valid");
      label_name.classList.add("focus");
    }
  });

  // Function checked input email
  input_email.addEventListener("blur", function () {
    let value = this.value;
    let label_email = document.getElementById("label_email");
    check = /[-._a-z0-9]+@(?:[a-z0-9][-a-z0-9]+\.)+[a-z]{2,6}$/.test(value);

    if (check) {
      input_email.classList.remove("invalid");
      label_email.classList.remove("focus-invalid");
      input_email.classList.add("valid");
      label_email.classList.add("focus");
    } else {
      input_email.classList.remove("valid");
      input_email.classList.add("invalid");
      label_email.classList.add("focus-invalid");

      submit_button.setAttribute("disabled", true);
      submit_button.classList.remove("submit-form-success");
    }
    checkForm();
  });

  // Function checked input message
  input_message.addEventListener("blur", function () {
    let value = this.value;
    let label_message = document.getElementById("label_message");

    if (input_message.value.length === 0) {
      input_message.classList.remove("invalid");
      label_message.classList.remove("focus-invalid");
      input_message.classList.add("valid");
      label_message.classList.add("focus");
      label_message.classList.remove("focus");
    } else {
      input_message.classList.add("valid");
      label_message.classList.add("focus");
    }
  });

  function ValidateForm() {
    checkForm();
  }

  function checkForm() {
    if (input_email.classList.contains("valid") == true) {
      submit_button.removeAttribute("disabled");
      submit_button.classList.add("submit-form-success");
    } else {
    }
  }
}

function openPopup(title) {
  document.getElementById("number_post").value = title;
  let popup = document.querySelector(".popup-container");
  let shadow = document.getElementById("shadow");

  numberPost = title;
  console.log(numberPost);
  popup.classList.add("active");
  shadow.classList.add("active");
}

function closePopup() {
  var popupContain = document.querySelector(".popup-container");
  let shadow = document.getElementById("shadow");

  popupContain.classList.remove("active");
  shadow.classList.remove("active");
}
//Contact form attach photo
$('input[type="file"]').each(function () {
  // get label text
  var label = $(this).parents(".form-group").find("label").text();
  label = label ? label : "Attach your photo";

  // wrap the file input
  $(this).wrap('<div class="input-file"></div>');
  // display label
  $(this).before('<span class="btn">' + label + "</span>");
  // we will display selected file here
  $(this).before('<span class="file-selected"></span>');

  // file input change listener
  $(this).change(function (e) {
    // Get this file input value
    var val = $(this).val();

    // Display the filename
    $(this).siblings(".file-selected").text("uploaded your file");
  });
});

// Open the file browser when our custom button is clicked.
$(".input-file .btn").click(function () {
  $(this).siblings('input[type="file"]').trigger("click");
});

$(".row-messenger").mouseover(function () {
  $("#messenger-1").attr("src", "img/icon-messenger-hover.png");
});
$(".row-messenger").mouseout(function () {
  $("#messenger-1").attr("src", "img/icon-messenger.png");
});
