function testWebP(callback) {
  var webP = new Image();
  webP.onload = webP.onerror = function () {
    callback(webP.height == 2);
  };
  webP.src =
    "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
}

testWebP(function (support) {
  if (support == true) {
    document.querySelector("body").classList.add("webp");
  } else {
    document.querySelector("body").classList.add("no-webp");
  }
});

$(".questionnaire__close, .profession__item-link").click(function () {
  $(".questionnaire").toggleClass("active__form");
  $("body").toggleClass("locked");
});
$(
  ".questionnaire__close-answer, .questionnaire__answer .questionnaire__form"
).click(function () {
  $(".questionnaire__answer").css("left", "-100%");
});
$("#link-for-operator").click(function () {
  $("#questionnaire option[value=1]").prop("selected", true);
});
$("#link-for-locksmith").click(function () {
  $("#questionnaire option[value=2]").prop("selected", true);
});
$("#link-for-cleaner").click(function () {
  $("#questionnaire option[value=3]").prop("selected", true);
  $(".input-rights").hide();
});
$("#link-for-electrician").click(function () {
  $("#questionnaire option[value=4]").prop("selected", true);
  $(".input-rights").show();
});
$("#link-for-apparatchik").click(function () {
  $("#questionnaire option[value=5]").prop("selected", true);
  $(".input-rights").hide();
});
$("#link-for-cleaner2").click(function () {
  $("#questionnaire option[value=6]").prop("selected", true);
  $(".input-rights").hide();
});
$("#link-for-loader").click(function () {
  $("#questionnaire option[value=7]").prop("selected", true);
  $(".input-rights").show();
});
$("#link-for-qualifications").click(function () {
  $("#questionnaire option[value=8]").prop("selected", true);
  $(".input-rights").show();
});
$("#link-for-weigher").click(function () {
  $("#questionnaire option[value=9]").prop("selected", true);
  $(".input-rights").hide();
});
$("#link-for-tractor").click(function () {
  $("#questionnaire option[value=10]").prop("selected", true);
  $(".input-rights").show();
});

function onEntry(entry) {
  entry.forEach((change) => {
    if (change.isIntersecting) {
      change.target.classList.add("element-show");
    }
  });
}

let options = {
  threshold: [0.1],
};
let observer = new IntersectionObserver(onEntry, options);
let elements = document.querySelectorAll(".element-animation");

for (let elm of elements) {
  observer.observe(elm);
}
$(window).bind("scroll", function (e) {
  parallaxScroll();
});

function parallaxScroll() {
  var scrolled = $(window).scrollTop();
  $(".about__parallax").css("top", 300 - scrolled * 0.25 + "px");
  $(".dir-features__item-text").css("top", -100 + scrolled * 0.08 + "px");
}
$(function () {
  $("#phone").mask("+7 (999) 99-99-999");
  $("#birthday").mask("9999-99-99");
  $("#passport-series").mask("99 99");
  $("#passport-number").mask("999999");
});
