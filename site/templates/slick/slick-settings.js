$(document).ready(function() {
  $(".slider").slick({
    dots: true,
    infinite: true,
    slidesToShow: 1,
    speed: 500,
    arrows: true,
    lazyLoad: true,
    autoplay: true,
    nextArrow: '<i class="arrow next fas fa-caret-right"></i>',
    prevArrow: '<i class="arrow fas fa-caret-left"></i>',
    dotsClass: "custom-dots",
    pauseOnHover: true
  });

  const blogPost = document.querySelector(".content");
  const fixed = Array.from(document.querySelectorAll(".fixed"));

  blogPost.addEventListener("mouseenter", () => {
    fixed.forEach(el => el.classList.add("hide"));
  });
  blogPost.addEventListener("mouseleave", () => {
    fixed.forEach(el => el.classList.remove("hide"));
  });
});
