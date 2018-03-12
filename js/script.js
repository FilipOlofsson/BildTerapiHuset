$(document).keydown(function (e) {
  if(!window.matchMedia("(max-width: 1000px)").matches) {
    switch(e.which) 
    {
       case 38:
            e.preventDefault();
        $('html, body').animate({ scrollTop: $(window).scrollTop() - screen.height}, 500);
           break;
       case 40:
           $('html, body').animate({ scrollTop:$(window).scrollTop() + screen.height}, 500);
           break;
    }
  }
});
$(window).bind('mousewheel', function(event) {
  if(!window.matchMedia("(max-width: 1000px)").matches) {
    if (event.originalEvent.wheelDelta >= 0) {
      console.log($(window).scrollTop());
      if($(window).scrollTop() % screen.height < 10) {
        $('html, body').stop();
        $('html, body').animate({ scrollTop: $(window).scrollTop() - screen.height}, 500);
      }
    } else {
      console.log($(window).scrollTop());
      if($(window).scrollTop() % screen.height < 10) {
        $('html, body').stop();
        $('html, body').animate({ scrollTop:$(window).scrollTop() + screen.height}, 500);
      }
    }
  }
});