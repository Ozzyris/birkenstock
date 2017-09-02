function main_verification( type ){
	var open_gate = true,
		url,
		input_datas;

	switch(type){
		case 'newsletter':
			url = BASEURL + "alfredatwork/home/newsletter-content";
			if($( '#input_newslettertext' ).val() == ''){
				Internal_notification_center('You cannot send a form with an empty field.', 'error', 5000);
				open_gate = false;
			}else{
				input_datas = "newsletter_text=" + encodeURIComponent($( '#input_newslettertext' ).val());
			}
			break;

		case 'facebook':
			url = BASEURL + "alfredatwork/home/facebook-content";
			if($( '#input_facebooktext' ).val() == '' || $( '#input_facebooklink' ).val() == ''){
				Internal_notification_center('You cannot send a form with an empty field.', 'error', 5000);
				open_gate = false;
			}else{
				if($( '#input_facebooklink' ).val().indexOf('http') == -1){
					Internal_notification_center('An http:// is needed to save a link', 'error', 5000);
					open_gate = false;
				}else{
					input_datas = "facebook_text=" + encodeURIComponent($( '#input_facebooktext' ).val()) + '&facebook_link=' + encodeURIComponent($( '#input_facebooklink' ).val());
				}
			}
			break;

		case 'instagram':
			url = BASEURL + "alfredatwork/home/instagram-content";
			if($( '#input_instagramtext' ).val() == '' || $( '#input_instagramlink' ).val() == ''){
				Internal_notification_center('You cannot send a form with an empty field.', 'error', 5000);
				open_gate = false;
			}else{
				if($( '#input_instagramlink' ).val().indexOf('http') == -1){
					Internal_notification_center('An http:// is needed to save a link', 'error', 5000);
					open_gate = false;
				}else{
					input_datas = "instagram_text=" + encodeURIComponent($( '#input_instagramtext' ).val()) + '&instagram_link=' + encodeURIComponent($( '#input_instagramlink' ).val());
				}
			}
			break;

		case 'address':
			url = BASEURL + "alfredatwork/home/address-content";
			if($( '#input_addresstext' ).val() == '' || $( '#input_addresslink' ).val() == ''){
				Internal_notification_center('You cannot send a form with an empty field.', 'error', 5000);
				open_gate = false;
			}else{
				if($( '#input_addresslink' ).val().indexOf('http') == -1){
					Internal_notification_center('An http:// is needed to save a link', 'error', 5000);
					open_gate = false;
				}else{
					input_datas = "address_text=" + encodeURIComponent($( '#input_addresstext' ).val()) + '&address_link=' + encodeURIComponent($( '#input_addresslink' ).val());
				}
			}
			break;

		case 'email':
			url = BASEURL + "alfredatwork/home/email-content";
			if($( '#input_emailtext' ).val() == '' || $( '#input_emaillink' ).val() == ''){
				Internal_notification_center('You cannot send a form with an empty field.', 'error', 5000);
				open_gate = false;
			}else{
				if($( '#input_emaillink' ).val().indexOf('mailto:') == -1){
					Internal_notification_center('An mailto: is needed to save a link', 'error', 5000);
					open_gate = false;
				}else{
					input_datas = "email_text=" + encodeURIComponent($( '#input_emailtext' ).val()) + '&email_link=' + encodeURIComponent($( '#input_emaillink' ).val());
				}
			}
			break;

		case 'phone':
			url = BASEURL + "alfredatwork/home/phone-content";
			if($( '#input_phonetext' ).val() == '' || $( '#input_phonelink' ).val() == ''){
				Internal_notification_center('You cannot send a form with an empty field.', 'error', 5000);
				open_gate = false;
			}else{
				if($( '#input_phonelink' ).val().indexOf('tel:') == -1){
					Internal_notification_center('An tel: is needed to save a link', 'error', 5000);
					open_gate = false;
				}else{
					input_datas = "phone_text=" + encodeURIComponent($( '#input_phonetext' ).val()) + '&phone_link=' + encodeURIComponent($( '#input_phonelink' ).val());
				}
			}
			break;

		default:
			break;

	}

	if( open_gate == true ){
		$.ajax({
       		url : url,
       		cache: false,
       		type : 'POST',
       		data : input_datas,
       		dataType : 'html',
		   success : function(data){
		   		var json_data = JSON.parse(data);
            	Internal_notification_center( json_data.message , json_data.status, 5000);
      		},
       		error : function(resultat, statut, erreur){
       			Internal_notification_center(resultat, 'error', 5000);
       		}
    	});
	}

}