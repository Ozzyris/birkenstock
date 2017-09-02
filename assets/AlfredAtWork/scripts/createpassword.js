
function main_verification( type ){
	var open_gate = true,
		url,
		input_datas;

	switch(type){
		case 'password':
		console.log($( '#input_password_recovery' ).val(), $( '#input_password_recovery_bis' ).val(), $( '#token' ).val());
			url = BASEURL + "alfredatwork/create-password/set_password";
			if($( '#input_password_recovery' ).val() == '' || $( '#input_password_recovery_bis' ).val() == '' || $( '#token' ).val() == ''){
				Internal_notification_center('You cannot send a form with an empty field.', 'error', 5000);
				open_gate = false;
				return false;
			}else if( $( '#input_password_recovery' ).val() != $( '#input_password_recovery_bis').val() ){
				Internal_notification_center('Password do not match', 'error', 5000);
				open_gate = false;
				return false;
			}else{
				input_datas = "password_recovery=" + $( '#input_password_recovery' ).val() + "&password_recovery_bis=" + $( '#input_password_recovery_bis' ).val() + "&token=" + $( '#token' ).val();
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
		   		console.log(data);
		   		var json_data = JSON.parse(data);
            	Internal_notification_center( json_data.message , json_data.status, 5000);
      		},
       		error : function(resultat, statut, erreur){
       			Internal_notification_center(erreur, 'error', 5000);
       		}
    	});
	}
}