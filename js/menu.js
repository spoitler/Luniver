// Nav Toggle //
$( ".toggle" ).click(function() {
  $( this ).toggleClass( "toggle-active" );
  $( ".nav-wrapper" ).toggleClass( "nav-wrapper-active" );
  $(".nav-overlay").fadeToggle(300);
  $("ul").toggleClass('active');
  // //$("body").toggleClass('scroll');

 });

function valcheckbox() {
  var checkBox = document.getElementById("checkbox_menu");
  var body = document.getElementById("body");
  alert("test");
  if (checkBox.checked){
    body.style.position = "fixed";
  } else {
    body.style.position = "static";
  }
}

