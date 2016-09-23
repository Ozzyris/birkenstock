var toogle_detail_information = true;
function launch_detail_information(){
	if(toogle_detail_information){
		$('a.quick_contact_button img:nth-child(1)').hide(0);
		$('a.quick_contact_button img:nth-child(2)').show(0);
		$('div.quick_contact div.content').show(0);
		toogle_detail_information = false;
	}else{
		$('a.quick_contact_button img:nth-child(1)').show(0);
		$('a.quick_contact_button img:nth-child(2)').hide(0);
		$('div.quick_contact div.content').hide(0);
		toogle_detail_information = true;
	}
}

function initMap() {
	var map;
	google.maps.event.addDomListener(window, 'resize', function() {
		map.setCenter({lat: -33.739852, lng: 151.069539});
	});
	
	map = new google.maps.Map(document.getElementById('map'), {
		center: {lat: -33.739852, lng: 151.069539}, 
		zoom: 15,
		disableDefaultUI: true,
		scrollwheel: false,
		navigationControl: false,
		mapTypeControl: false,
		scaleControl: false,
		draggable: false
	});
	
	
	var contentString = '<div id="content"><h1 id="firstHeading" class="firstHeading">Bondi Birkenstoch</h1><br /><div id="bodyContent"><bOpen Hours</b><br />' + isOpen() + '</p></div></div>';
	var infowindow = new google.maps.InfoWindow({content: contentString});
	
	//MARKER
	var marker = new google.maps.Marker({
		position: {lat: -33.739852, lng: 151.069539},
		map: map,
		title: 'Bondi birkenstock'
	});
	infowindow.open(map, marker);
}