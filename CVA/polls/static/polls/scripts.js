//Add JQuery
var script = document.createElement('script');
script.src = 'http://code.jquery.com/jquery-1.11.0.min.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);

/*--------------
  Header Menu
--------------*/
$(document).ready(function() {

  $(".Burger").click(function(e) {

    $(".Navbar__list").toggleClass('is-open');
    e.preventDefault();

  });
  /*--------------
       Scroll
  --------------*/
  $('.scroll').click(function(e){
      var jump = $(this).attr('href');
      var new_position = $(jump).offset();
      $('html, body').stop().animate({ scrollTop: new_position.top }, 500);
      e.preventDefault();
  });

});
