var slide_distance_percentage;
var number_of_picture;
var actual_position = 0;
var sizes = [];

// Sliding des images
function slide_image( next_position ){
	console.log(actual_position);
	var next_dot_position;
	$('section#product_image ul.dot li').removeClass('active');
	$('section#product_information ul.tag').html('');
	switch(next_position){
		case 'right':
			if(actual_position <= number_of_picture-2){
				$('section#product_image ul.gallery').css('transform', 'translateX(' + -((actual_position+1)*slide_distance_percentage) + '%)');
				
				gallery_content[(actual_position+1)].tag.forEach(function(item, index){
					$('section#product_information ul.tag').append('<li><img src="http://localhost/birkenstock/images/BADGE_' + item + '.svg" alt=""></li>');
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

				gallery_content[(actual_position-1)].tag.forEach(function(item, index){
					$('section#product_information ul.tag').append('<li><img src="http://localhost/birkenstock/images/BADGE_' + item + '.svg" alt=""></li>');
				});
				$('section#product_information p.color').text(gallery_content[(number_of_picture - actual_position)].color);
				$('section#product_information p.size').text(sizes[(number_of_picture - actual_position)]);
				actual_position = (actual_position - 1);
				next_dot_position = actual_position;
			}
			break;
		default:
			$('section#product_image ul.gallery').css('transform', 'translateX(' + -(next_position*slide_distance_percentage) + '%)');
			gallery_content[(number_of_picture - (next_position+1))].tag.forEach(function(item, index){
				$('section#product_information ul.tag').append('<li><img src="http://localhost/birkenstock/images/BADGE_' + item + '.svg" alt=""></li>');
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

	var address = 'products/'; 
    gallery_content[0].gender.forEach(function(item, index){
    	if(item == 'kids'){ address += 'kids/'; }
    });
    gallery_content[0].tag.forEach(function(item, index){
    	if(item == 'seasonal'){ address += 'seasonal/'; }
    });
    if(address == 'products/'){ address += 'classical/'; }

	for(var i=0;  i < number_of_picture; i++) {
    	var address_image = address + gallery_content[i].picture + '.png';
		$('section#product_image ul.gallery').prepend('<li style="width: ' + slide_distance_percentage + '%;"><img src="http://localhost/birkenstock/images/' + address_image + '" alt="">');
		$('section#product_image ul.dot').prepend('<li><a onclick="slide_image(' + (number_of_picture - (i+1)) + ')" style="background-image: url(http://localhost/birkenstock/images/' + address_image + ')" href="#"></a></li>');
		var size_length = gallery_content[i].size.length;
		var size =  gallery_content[i].size[0] + ' - ' + gallery_content[i].size[(size_length-1)];
		sizes.push(size)
	}
	$('section#product_image ul.dot li:first-child').addClass('active');
	if(number_of_picture == 1){$('section#product_image span.arrow.left, section#product_image span.arrow.right').hide();}else{$('section#product_image span.arrow.left').hide();}
	gallery_content[0].tag.forEach(function(item, index){
		$('section#product_information ul.tag').append('<li><img src="../../../images/BADGE_' + item + '.svg" alt=""></li>');
	});

	$('section#product_information p.color').text(gallery_content[0].color);
	$('section#product_information p.size').text(sizes[0]);
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
    		$('body').prepend('<div onclick="modal_contact(\'close\');" class="modal_darkfilter"></div><div class="modal"><button onclick="modal_contact(\'close\')" class="modal_buton">X</button><h2 class="title">Contact Us</h2><p style="text-align:center;"><strong>Phone:</strong>  0242 356 378</p><br><p style="text-align:center;"><strong>Mail:</strong>  birkenstockbondi@gmail.com</p></div>');
    		$('div.modal_darkfilter, div.modal').addClass('active');
    	  	break;
   	}
   	$('div.modal').css('top', scroll);
}

// FUNCTION GET DATA FROM URL
function GET(){
	var id = $_GET('id');
	if(id != null){
		id = id.replace('#', '');
		id = gallery_content[0].name + '_' + id;
		for(var i=0;  i < number_of_picture; i++) {
			if(id == gallery_content[i].picture){
				$('section#product_information ul.tag').html('');
				$('section#product_image ul.dot li:first-child').removeClass('active');
				$('section#product_image ul.dot li:nth-child(' + (number_of_picture - i) + ')').addClass('active');
				$('section#product_image ul.gallery').css('transform', 'translateX(' + -((number_of_picture - (i + 1))*slide_distance_percentage) + '%)');
				gallery_content[i].tag.forEach(function(item, index){
					$('section#product_information ul.tag').append('<li><img src="../../../images/BADGE_' + item + '.svg" alt=""></li>');
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

}
init_likend_collections();