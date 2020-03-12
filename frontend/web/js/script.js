let wrapper1 = document.getElementById("wrapper-1-home");
let wrapper2 = document.getElementById("wrapper-2-home");
let wrapper3 = document.getElementById("wrapper-3-home");
let wrapper4 = document.getElementById("wrapper-4-home");

//Menu

jQuery(".menu-toggle").click(function() {
  jQuery("ul").toggleClass("opening");
  jQuery(this).toggleClass("open");
});

// Animation

// $(document).ready(function() {
//   console.log(wrapper1.offsetTop);
//   console.log(wrapper2.offsetTop);
//   console.log(wrapper3.offsetTop);
//   console.log(wrapper4.offsetTop);
// });

// function animationOpacity() {
//   console.log("i");
// }

//Accordion

// Toggle Collapse
$(".faq li .question").click(function() {
  $(this)
    .find(".plus-minus-toggle")
    .toggleClass("collapsed");
  $(this)
    .parent()
    .toggleClass("active");
});

//Validate form
if(window.location.pathname == '/'  || window.location.pathname == '/testimonials' || window.location.pathname == '/contact') {

let input_name = document.getElementById("input_name");
let input_email = document.getElementById("input_email");
let input_message = document.getElementById("input_message");
let submit_button = document.getElementById("submit_form");


// Function checked input name
input_name.addEventListener("blur", function() {
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
input_email.addEventListener("blur", function() {
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
input_message.addEventListener("blur", function() {
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

function ValidateForm(){
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