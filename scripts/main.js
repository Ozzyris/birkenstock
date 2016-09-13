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

var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map_container'), {
    center: {lat: -33.8897663, lng: 151.27495640000006},
    zoom: 17,
    scrollwheel: false,
    draggable: false,
    navigationControl: false,
    mapTypeControl: false
  });
}