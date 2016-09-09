var slide_distance_percentage;
var actual_position = 0;
// Sliding des images
function slide_image( next_position ){
	$('section#product_image ul.dot li').removeClass('active');
	console.log(actual_position);
	switch(next_position){
		case 'right':
			$('section#product_image ul.gallery').css('transform', 'translateX(' + ((actual_position-1)*slide_distance_percentage) + '%)');
			break;
		case 'left':
			$('section#product_image ul.gallery').css('transform', 'translateX(' + ((actual_position+1)*slide_distance_percentage) + '%)');
			break;
		default:
			$('section#product_image ul.gallery').css('transform', 'translateX(' + ((actual_position-next_position)*slide_distance_percentage) + '%)');
			break
	}
	console.log( actual_position + ' | ' + slide_distance_percentage);
}

// Genration of the gallery
function init_gallery(){
	var number_of_picture = gallery_picture.length;
	slide_distance_percentage = (100 / gallery_picture.length);
	$('section#product_image ul.gallery').css('width', number_of_picture + '00%');
	$('section#product_image ul.dot').css('width', number_of_picture*17 + 'px');

	for(var i=0;  i < number_of_picture; i++) {
		console.log(gallery_picture[i]);
		$('section#product_image ul.gallery').prepend('<li style="width: ' + slide_distance_percentage + '%;"><img src="../images/products/' + gallery_picture[i] + '.png" alt="">');
		if(i == number_of_picture-1){$('section#product_image ul.dot').prepend('<li class="active"><a onclick="slide_image(' + i + ')" href="#"></a></li>');}else{$('section#product_image ul.dot').prepend('<li><a onclick="slide_image(' + i + ')" href="#"></a></li>');}
	}

}
init_gallery();


//On resize of the screen
function resize(){

}