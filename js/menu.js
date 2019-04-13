// Nav Toggle //
$( ".toggle" ).click(function() {
  $( this ).toggleClass( "toggle-active" );
  $( ".nav-wrapper" ).toggleClass( "nav-wrapper-active" );
  $(".nav-overlay").fadeToggle(300);
  $("ul").toggleClass('active');
  $("body").toggleClass('scroll');
  $(".menu").toggleClass('scroll');
});
