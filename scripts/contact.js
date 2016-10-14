function validation(){
  var open_gate = true;
  var name = $('input#input_name').val();
  var email = $('input#input_email').val();
  var phone = $('input#input_phone').val();
  var message = $('textarea#input_message').val();
  $('input#input_name, input#input_email, input#input_phone, textarea#input_message').removeClass('wrong');

  if(name == ''){ $('input#input_name').addClass('wrong'); open_gate = false; }
  if(email == ''){ $('input#input_email').addClass('wrong'); open_gate = false; }else{ if ((email.indexOf("@")>=0)&&(email.indexOf(".")>=0)){}else{ $('input#input_email').addClass('wrong'); open_gate = false;} }
  if(phone == ''){ $('input#input_phone').addClass('wrong'); open_gate = false; }
  if(message == ''){ $('textarea#input_message').addClass('wrong'); open_gate = false; }




  if(open_gate){ $("form#contact_form").submit(); }
}


function initMap() {
  var map;
  google.maps.event.addDomListener(window, 'resize', function() {
    map.setCenter({lat: -33.889881, lng: 151.274921});
  });
  
  map = new google.maps.Map(document.getElementById('map_container'), {
    center: {lat: -33.889881, lng: 151.274921}, 
    zoom: 18,
    disableDefaultUI: true,
    scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
  });
  
  
  var contentString  = '<div id="map_content">';
        contentString += '  <h1 class="firstHeading">Birkenstock Bondi Beach,<br> 7/178 Campbell Pde. Bondi Beach 2026</h1><br />';
        contentString += '  <h5 class="' + isOpen() + '">' + isOpen() + ' Now</h5>';
        contentString += '</div>';


  var infowindow = new google.maps.InfoWindow({content: contentString});
  
  //MARKER
  var marker = new google.maps.Marker({
    position: {lat: -33.889881, lng: 151.274921},
    map: map,
    title: 'Bondi birkenstock'
  });
  infowindow.open(map, marker);

  $('div#map_container').append('<span class="borderwhite"></span>');
}