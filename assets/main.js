  let navbar = $(".navbar");
  
  $(window).scroll(function () {
    // get the complete hight of window
    let oTop = $(".section1").offset().top - window.innerHeight;
    if ($(window).scrollTop() > oTop) {
      navbar.addClass("sticky");
    } else {
      navbar.removeClass("sticky");
    }
  });