$(document).keydown(function (e) {
  if(!window.matchMedia("(max-width: 1000px)").matches) {
    switch(e.which) 
    {
       case 38:
            e.preventDefault();
        $('html, body').animate({ scrollTop: $(window).scrollTop() - $(window).height()}, 500);
           break;
       case 40:
           $('html, body').animate({ scrollTop:$(window).scrollTop() + $(window).height()}, 500);
           break;
    }
  }
});
$(document).ready(function(){
  $("a").click(function(e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
    }, 1000);
  });
});
function toggleHamburger() {
  if(document.getElementById("hamburger-menu").classList.contains("active-menu")) {
    document.getElementById("hamburger-menu").classList.remove("active-menu");
  } else {
    document.getElementById("hamburger-menu").classList.add("active-menu");
  }

  if(document.getElementById("toggle-hamburger").classList.contains("inactive")) {
    document.getElementById("toggle-hamburger").classList.remove("inactive");
    document.getElementById("logo-img").classList.remove("inactive");
    document.getElementById("body").classList.remove("noscroll");
  } else {
    document.getElementById("toggle-hamburger").classList.add("inactive");
    document.getElementById("logo-img").classList.add("inactive");
    document.getElementById("body").classList.add("noscroll");
  }
}