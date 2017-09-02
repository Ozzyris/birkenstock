var slide_distance_percentage;
var number_of_picture;
var actual_position = 0;
var sizes = [];

// Sliding des images
function slide_image( next_position ){
	var next_dot_position;
	$('section#product_image ul.dot li').removeClass('active');
	$('section#product_information ul.tag').html('');
	switch(next_position){
		case 'right':
			if(actual_position <= number_of_picture-2){
				$('section#product_image ul.gallery').css('transform', 'translateX(' + -((actual_position+1)*slide_distance_percentage) + '%)');
				
				gallery_content[(number_of_picture - (actual_position+2))].tags.forEach(function(item, index){
					$('section#product_information ul.tag').append('<li><img src="http://birkenstockbondibeach.com.au/assets/images/BADGE_' + item + '.svg" alt=""></li>');
				});
				$('section#product_information p.color').text(gallery_content[(number_of_picture - (actual_position+2))].color);
				$('section#product_information p.size').text(sizes[(number_of_picture - (actual_position+2))]);
				actual_position = (actual_position + 1);
				next_dot_position = actual_position;
			}
			break;
		case 'left':
			if(actual_position >= 1){
				$('section#product_image ul.gallery').css('transform', 'translateX(' + -((actual_position-1)*slide_distance_percentage) + '%)');

				gallery_content[(number_of_picture - actual_position)].tags.forEach(function(item, index){
					$('section#product_information ul.tag').append('<li><img src="http://birkenstockbondibeach.com.au/assets/images/BADGE_' + item + '.svg" alt=""></li>');
				});
				$('section#product_information p.color').text(gallery_content[(number_of_picture - actual_position)].color);
				$('section#product_information p.size').text(sizes[(number_of_picture - actual_position)]);
				actual_position = (actual_position - 1);
				next_dot_position = actual_position;
			}
			break;
		default:
			$('section#product_image ul.gallery').css('transform', 'translateX(' + -(next_position*slide_distance_percentage) + '%)');
			gallery_content[(number_of_picture - (next_position+1))].tags.forEach(function(item, index){
				$('section#product_information ul.tag').append('<li><img src="http://birkenstockbondibeach.com.au/assets/images/BADGE_' + item + '.svg" alt=""></li>');
			});
			$('section#product_information p.color').text(gallery_content[(number_of_picture - (next_position+1))].color);
			$('section#product_information p.size').text(sizes[(number_of_picture - (next_position+1))]);
			actual_position = next_position;
			next_dot_position = next_position;
			break;
	}

	if(next_dot_position == 0){ $('section#product_image span.arrow.left').hide(); $('section#product_image span.arrow.right').show();}else if(next_dot_position == (number_of_picture-1)){$('section#product_image span.arrow.right').hide(); $('section#product_image span.arrow.left').show();}else{$('section#product_image span.arrow.left, section#product_image span.arrow.right').show();}
	$('section#product_image ul.dot li:nth-child(' + (next_dot_position+1) + ')').addClass('active');
}

// Genration of the gallery
function init_gallery(){
	number_of_picture = gallery_content.length;
	slide_distance_percentage = (100 / gallery_content.length);
	$('section#product_image ul.gallery').css('width', number_of_picture + '00%');
	$('section#product_image ul.dot').css('width', number_of_picture*40 + 'px');

	for(var i=0;  i < number_of_picture; i++) {
		$('section#product_image ul.gallery').prepend('<li style="width: ' + slide_distance_percentage + '%;"><img src="' + BASEURL + gallery_content[i].picture + '" alt="' + gallery_content[i].name + '">');
		$('section#product_image ul.dot').prepend('<li><a onclick="slide_image(' + (number_of_picture - (i+1)) + ')" style="background-image: url(' + BASEURL + gallery_content[i].thumb + ')" href="#"></a></li>');
		var size_length = gallery_content[i].size.length;
		var size =  gallery_content[i].size[0] + ' - ' + gallery_content[i].size[(size_length-1)];
		sizes.push(size)
	}

	$('section#product_image ul.dot li:first-child').addClass('active');
	if(number_of_picture == 1){ $('section#product_image span.arrow.left, section#product_image span.arrow.right').hide(); }else{ $('section#product_image span.arrow.left').hide(); }
	gallery_content[(number_of_picture-1)].tags.forEach(function(item, index){
		$('section#product_information ul.tag').append('<li><img src="' + BASEURL + '/assets/images/BADGE_' + item + '.svg" alt=""></li>');
	});

	$('section#product_information p.color').text(gallery_content[(number_of_picture-1)].color);
	$('section#product_information p.size').text(sizes[(number_of_picture-1)]);
	GET();
}
init_gallery();

function modal_contact( action ){
	var scroll = $(window).scrollTop();
	switch( action ){
		case 'close':
			$('div.modal_darkfilter, div.modal').removeClass('active');
    	  	setTimeout(function(){
    	  		$('div.modal_darkfilter, div.modal').remove();
    	    }, 310);
    	  	break;
    	default:
    		$('body').prepend('<div onclick="modal_contact(\'close\');" class="modal_darkfilter"></div><div class="modal"><button onclick="modal_contact(\'close\')" class="modal_buton">X</button><h2 class="title">Contact Us</h2><a href="tel:0291304607"><p style="text-align:center;"><strong>Phone:</strong>  02 9130 4607</p></a><a href="mailto:birkenstockbondi@gmail.com"><br><p style="text-align:center;"><strong>Mail:</strong>  birkenstockbondi@gmail.com</p></a></div>');
    		$('div.modal_darkfilter, div.modal').addClass('active');
    	  	break;
   	}
   	$('div.modal').css('top', scroll);
}

// FUNCTION GET DATA FROM URL
function GET(){
	if(GET_product != null){
		for(var i=0;  i < number_of_picture; i++) {
			if(GET_product == gallery_content[i].id){
				$('section#product_information ul.tag').html('');
				$('section#product_image ul.dot li:first-child').removeClass('active');
				$('section#product_image ul.dot li:nth-child(' + (number_of_picture - i) + ')').addClass('active');
				$('section#product_image ul.gallery').css('transform', 'translateX(' + -((number_of_picture - (i + 1))*slide_distance_percentage) + '%)');
				gallery_content[i].tags.forEach(function(item, index){
					$('section#product_information ul.tag').append('<li><img src="' + BASEURL + 'assets/images/BADGE_' + item + '.svg" alt=""></li>');
				});
				$('section#product_information p.color').text(gallery_content[i].color);
				$('section#product_information p.size').text(sizes[i]);
				actual_position = (number_of_picture - (i+1));
				if(actual_position == 0){ $('section#product_image span.arrow.left').hide(); $('section#product_image span.arrow.right').show();}else if(actual_position == (number_of_picture-1)){$('section#product_image span.arrow.right').hide(); $('section#product_image span.arrow.left').show();}else{$('section#product_image span.arrow.left, section#product_image span.arrow.right').show();}
			}
		}
	}
}


function init_likend_collections(){
	console.log(liked_collection.name + ' ' + liked_collection.collection[0] + ' ' + liked_collection.collection[1]);
	liked_collection.collection.forEach(function(item, index){
		console.log(item + ' ' + index);
	});


	var html = '<div id="external_collection">'
    html += '  <h2>Other Collections</h2>';
    html += '  <article>';
    html += '    <a href="http://birkenstockbondibeach.com.au/views/seasonal/arizona.html">';
    html += '      <img src="http://birkenstockbondibeach.com.au/images/products/SHOES_arizona_1.png" alt="">';
    html += '      <h3>Seasonal</h3>';
    html += '    </a>';
    html += '  </article>';
    html += '  <article>';
    html += '    <a href="http://birkenstockbondibeach.com.au/views/seasonal/arizona.html">';
    html += '      <img src="http://birkenstockbondibeach.com.au/images/products/SHOES_arizona_1.png" alt="">';
    html += '      <h3>Kids</h3>';
    html += '    </a>';
    html += '  </article>';
    html += '</div>';
}
//init_likend_collections();