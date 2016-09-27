var slide_distance_percentage;
var number_of_picture;
var actual_position = 0;
var sizes = [];

// Sliding des images
function slide_image( next_position ){
	$('section#product_image ul.dot li').removeClass('active');
	switch(next_position){
		case 'right':
			if(actual_position <= number_of_picture-2){
				$('section#product_image ul.gallery').css('transform', 'translateX(' + -((actual_position+1)*slide_distance_percentage) + '%)');
				
				$('section#product_information ul.tag').html('');
				gallery_content[(actual_position+1)].tag.forEach(function(item, index){
					$('section#product_information ul.tag').append('<li><img src="../../../images/BADGE_' + item + '.svg" alt=""></li>');
				});
				$('section#product_information p.color').text(gallery_content[(actual_position+1)].color);
				$('section#product_information p.size').text(sizes[(actual_position+1)]);

				actual_position = (actual_position + 1);
			}
			break;
		case 'left':
			if(actual_position >= 1){
				$('section#product_image ul.gallery').css('transform', 'translateX(' + -((actual_position-1)*slide_distance_percentage) + '%)');

				$('section#product_information ul.tag').html('');
				gallery_content[(actual_position-1)].tag.forEach(function(item, index){
					$('section#product_information ul.tag').append('<li><img src="../../../images/BADGE_' + item + '.svg" alt=""></li>');
				});
				$('section#product_information p.color').text(gallery_content[(actual_position-1)].color);
				$('section#product_information p.size').text(sizes[(actual_position-1)]);

				actual_position = (actual_position - 1);
			}
			break;
		default:
			$('section#product_image ul.gallery').css('transform', 'translateX(' + ((actual_position-next_position)*slide_distance_percentage) + '%)');
			actual_position = next_position;
			break;
	}
	$('section#product_image ul.dot li:nth-child(' + (actual_position+1) + ')').addClass('active');
	//console.log( actual_position + ' | ' + next_position + ' | ' + slide_distance_percentage);
}

// Genration of the gallery
function init_gallery(){
	number_of_picture = gallery_content.length;
	slide_distance_percentage = (100 / gallery_content.length);
	$('section#product_image ul.gallery').css('width', number_of_picture + '00%');
	$('section#product_image ul.dot').css('width', number_of_picture*40 + 'px');

	for(var i=0;  i < number_of_picture; i++) {
		$('section#product_image ul.gallery').prepend('<li style="width: ' + slide_distance_percentage + '%;"><img src="../../../images/products/' + gallery_content[i].picture + '.png" alt="">');
		if(i == number_of_picture-1){$('section#product_image ul.dot').prepend('<li class="active"><a onclick="slide_image(' + ((number_of_picture-1)-i) + ')" href="#" style="background-image: url(http://localhost/birkenstock/images/products/' + gallery_content[i].picture + '.png)"></a></li>');}else{$('section#product_image ul.dot').append('<li><a onclick="slide_image(' + (i+1) + ')" style="background-image: url(http://localhost/birkenstock/images/products/' + gallery_content[i].picture + '.png)" href="#"></a></li>');}

		var size_length = gallery_content[i].size.length;
		var size =  gallery_content[i].size[0] + ' - ' + gallery_content[i].size[(size_length-1)];
		sizes.push(size)
	}
	gallery_content[0].tag.forEach(function(item, index){
		$('section#product_information ul.tag').append('<li><img src="../../../images/BADGE_' + item + '.svg" alt=""></li>');
	});

	$('section#product_information p.color').text(gallery_content[0].color);
	$('section#product_information p.size').text(sizes[0]);

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

function init_likend_collections(){
	console.log(liked_collection.name + ' ' + liked_collection.collection[0] + ' ' + liked_collection.collection[1]);
	liked_collection.collection.forEach(function(item, index){
		console.log(item + ' ' + index);
	});

}
init_likend_collections();