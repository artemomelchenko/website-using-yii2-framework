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
$('.faq li .question').click(function () {
  $(this).find('.plus-minus-toggle').toggleClass('collapsed');
  $(this).parent().toggleClass('active');
});