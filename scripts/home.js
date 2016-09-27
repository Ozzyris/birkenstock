function initMap() {
	var map;
	google.maps.event.addDomListener(window, 'resize', function() {
		map.setCenter({lat: -33.89007, lng: 151.274787});
	});
	
	map = new google.maps.Map(document.getElementById('map'), {
		center: {lat: -33.89007, lng: 151.274787}, 
		zoom: 16,
		disableDefaultUI: true,
		scrollwheel: false,
		navigationControl: false,
		mapTypeControl: false,
		scaleControl: false,
		draggable: false
	});
	
	
	var contentString  = '<div id="map_content">';
      	contentString += '	<h1 class="firstHeading">Birkenstock,<br> 7/178 Campbell Parade, Sydney NSW </h1><br />';
      	contentString += '  <h5 class="' + isOpen() + '">' + isOpen() + ' Now</h5>';
      	contentString += '</div>';


	var infowindow = new google.maps.InfoWindow({content: contentString});
	
	//MARKER
	var marker = new google.maps.Marker({
		position: {lat: -33.89007, lng: 151.274787},
		map: map,
		title: 'Bondi birkenstock'
	});
	infowindow.open(map, marker);


	$('div#map').append('<span class="borderwhite"></span>');
}