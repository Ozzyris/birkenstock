/*$(document).ready(function(){
    $(this).scrollTop(0);
});*/

function sidemenu(){
	$('#hamburger_icon').toggleClass('active');
	$('#left_menu').toggleClass('active');
}

var body = $("body, html");

body.on("scroll", function(e) {
  if(this.scrollTop > (window.innerHeight-50)) {
    $("nav").addClass("active");
  } else {
    $("nav").removeClass("active");
  }
  
});