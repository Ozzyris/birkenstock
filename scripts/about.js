var about_title = ['FOOTBED EDGE', 'TOE GRIP', 'CROSS ARCH SUPPORT', 'LONGITUDINAL ARCH SUPPORTS', 'CORK-LATEX FOOTBED', 'DEEP HEEL CUP'];
var about_decription = ['BIRKENSTOCK sandals have an elevated footbed edge to protect the toes.', 'The toe grip ensures that the toes are optimally positioned, promoting a natural rolling movement of the foot.', 'The cross arch support aids the metatarsal bones during walking and standing, ensuring a natural and healthy foot posture.', 'Longitudinal arch supports bolster the tarsus bones and provide good footing with each step.', 'The cork-latex footbed is flexible and lightweight, and it insulates against heat and cold. The footbed also features moisture-absorbing characteristics.', 'The heel cup provides stability for the heel bone and supports the foot’s natural padding.'];

function change_key_point_description(id){
	$('section#benefit div.image_key_point span.dot_border').removeClass('active');
	switch(id){
		case 0:
			$('section#benefit div.image_key_point span.dot_border:nth-child(2)').addClass('active');
			break;
		case 1:
			$('section#benefit div.image_key_point span.dot_border:nth-child(3)').addClass('active');
			break;
		case 2:
			$('section#benefit div.image_key_point span.dot_border:nth-child(4)').addClass('active');
			break;
		case 3:
			$('section#benefit div.image_key_point span.dot_border:nth-child(5)').addClass('active');
			$('section#benefit div.image_key_point span.dot_border:nth-child(6)').addClass('active');
			break;
		case 4:
			$('section#benefit div.image_key_point span.dot_border:nth-child(7)').addClass('active');
			break;
		case 5:
			$('section#benefit div.image_key_point span.dot_border:nth-child(8)').addClass('active');
			break;
		default:
			break;
	}
	$('section#benefit div.image_key_point_detail h3.subtitle').text( about_title[id] );
	$('section#benefit div.image_key_point_detail p').text( about_decription[id] );
}