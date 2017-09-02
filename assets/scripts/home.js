function initMap() {
  var map;
  google.maps.event.addDomListener(window, 'resize', function() {
	map.setCenter({lat: -33.89007, lng: 151.274787});
  });
  
  map = new google.maps.Map(document.getElementById('home_map'), {
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
        contentString += '  <h1 class="firstHeading">Birkenstock Bondi Beach,</h1><br />';
        // contentString += '  <h1 class="firstHeading">Birkenstock Bondi Beach,<br> 7/178 Campbell Pde. Bondi Beach 2026</h1><br />';
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

  $('div#home_map').append('<span class="borderwhite"></span>');
}


$(function() {
	/** -----------------------------------------
	 * Modulo del Slider 
	 -------------------------------------------*/
	 var SliderModule = (function() {
	 	var pb = {};
	 	pb.el = $('#slider');
	 	pb.items = {
	 		panels: pb.el.find('.slider_wrapper > li'),
	 	}

	 	// Interval del Slider
	 	var SliderInterval,
	 		currentSlider = 0,
	 		nextSlider = 1,
	 		lengthSlider = pb.items.panels.length;

	 	// Constructor del Slider
	 	pb.init = function(settings) {
	 		this.settings = settings || {duration: 8000};
	 		var items = this.items,
	 			lengthPanels = items.panels.length,
	 			output = '';

	 		// Insertamos nuestros botones
	 		for(var i = 0; i < lengthPanels; i++) {
	 			if(i == 0) {
	 				output += '<li class="active"></li>';
	 			} else {
	 				output += '<li></li>';
	 			}
	 		}

	 		$('#control-buttons').html(output);

	 		// Activamos nuestro Slider
	 		activateSlider();
	 		// Eventos para los controles
	 		$('#control-buttons').on('click', 'li', function(e) {
	 			var $this = $(this);
	 			if(!(currentSlider === $this.index())) {
	 				changePanel($this.index());
	 			}
	 		});

	 	}

	 	// Funcion para activar el Slider
	 	var activateSlider = function() {
	 		SliderInterval = setInterval(pb.startSlider, pb.settings.duration);
	 	}

	 	// Funcion para la Animacion
	 	pb.startSlider = function() {
	 		var items = pb.items,
	 			controls = $('#control-buttons li');
	 		// Comprobamos si es el ultimo panel para reiniciar el conteo
	 		if(nextSlider >= lengthSlider) {
	 			nextSlider = 0;
	 			currentSlider = lengthSlider-1;
	 		}

	 		controls.removeClass('active').eq(nextSlider).addClass('active');
	 		items.panels.eq(currentSlider).fadeOut('slow');
	 		items.panels.eq(nextSlider).fadeIn('slow');

	 		// Actualizamos los datos del slider
	 		currentSlider = nextSlider;
	 		nextSlider += 1;
	 	}

	 	// Funcion para Cambiar de Panel con Los Controles
	 	var changePanel = function(id) {
	 		clearInterval(SliderInterval);
	 		var items = pb.items,
	 			controls = $('#control-buttons li');
	 		// Comprobamos si el ID esta disponible entre los paneles
	 		if(id >= lengthSlider) {
	 			id = 0;
	 		} else if(id < 0) {
	 			id = lengthSlider-1;
	 		}

	 		controls.removeClass('active').eq(id).addClass('active');
	 		items.panels.eq(currentSlider).fadeOut('slow');
	 		items.panels.eq(id).fadeIn('slow');

	 		// Volvemos a actualizar los datos del slider
	 		currentSlider = id;
	 		nextSlider = id+1;
	 		// Reactivamos nuestro slider
	 		activateSlider();
	 	}

		return pb;
	 }());

	 SliderModule.init();

});