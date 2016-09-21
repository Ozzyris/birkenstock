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
					$('section#product_information ul.tag').prepend('<li><img src="../../../images/BADGE_' + item + '.svg" alt=""></li>');
				});
				$('section#product_information p.color').text(gallery_content[actual_position].color);
				$('section#product_information p.size').text(sizes[actual_position]);

				actual_position = (actual_position + 1);
			}
			break;
		case 'left':
			if(actual_position >= 1){
				$('section#product_image ul.gallery').css('transform', 'translateX(' + -((actual_position-1)*slide_distance_percentage) + '%)');

				$('section#product_information ul.tag').html('');
				gallery_content[(actual_position-1)].tag.forEach(function(item, index){
					$('section#product_information ul.tag').prepend('<li><img src="../../../images/BADGE_' + item + '.svg" alt=""></li>');
				});
				$('section#product_information p.color').text(gallery_content[actual_position].color);
				$('section#product_information p.size').text(sizes[actual_position]);

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
	$('section#product_image ul.dot').css('width', number_of_picture*17 + 'px');

	for(var i=0;  i < number_of_picture; i++) {
		$('section#product_image ul.gallery').prepend('<li style="width: ' + slide_distance_percentage + '%;"><img src="../../../images/products/' + gallery_content[i].picture + '.png" alt="">');
		if(i == number_of_picture-1){$('section#product_image ul.dot').prepend('<li class="active"><a onclick="slide_image(' + ((number_of_picture-1)-i) + ')" href="#"></a></li>');}else{$('section#product_image ul.dot').prepend('<li><a onclick="slide_image(' + i + ')" href="#"></a></li>');}

		var size_length = gallery_content[i].size.length;
		var size =  gallery_content[i].size[0] + ' - ' + gallery_content[i].size[(size_length-1)];
		sizes.push(size)
	}
	gallery_content[0].tag.forEach(function(item, index){
		$('section#product_information ul.tag').prepend('<li><img src="../../../images/BADGE_' + item + '.svg" alt=""></li>');
	});

	$('section#product_information p.color').text(gallery_content[0].color);
	$('section#product_information p.size').text(sizes[0]);


}
init_gallery();


//On resize of the screen
function resize(){

}