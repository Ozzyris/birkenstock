function main_verification( type, id ){
	$( document ).ready(function() {
		var open_gate = true;
		var form_id = id[0].split("_"); 
		form_id = form_id[0];
		var form_length = id.length;
		var input_datas = "form_id="+ form_id +"&form_length="+ form_length;

		id.forEach(function(item, index){
			$('article form div #' + item).removeClass('wrong');
			var value = $('article form div #' + item).val();
			switch(type[index]){
				case 'text':
					$(id).removeClass('wrong');
					if(value == ''){
						$('article form div #' + item).addClass('wrong');
						Internal_notification_center('You cannot send a form with an empty field.', 'error', 5000);
						open_gate = false;
				}
					break;
				case 'url':
					$(id).removeClass('wrong');
					if(value == ''){
						$('article form div #' + item).addClass('wrong');
						Internal_notification_center('You cannot send a form with an empty field.', 'error', 5000);
						open_gate = false;
					}
					if(value.indexOf('http') == -1){
						$('article form div #' + item).addClass('wrong');
						Internal_notification_center('An http:// is needed to save a link', 'error', 5000);
						open_gate = false;
				}
					break;
				default:
					break;
			}
			var input_id = id[index].split("_");
			input_id = input_id[2];
			input_datas = input_datas + "&type" + index + "=" + input_id + "&value" + index + "=" + value;
		});
		if(open_gate){
			$.ajax({
       			url : BASEURL + "alfredatwork/home/addhomecontent",
       			cache: false,
       			type : 'POST',
       			data : input_datas,
       			dataType : 'html',
		       success : function(data){
          			Internal_notification_center('Saved', 'success', 2000);
          			console.log( data );
      			},
       			error : function(resultat, statut, erreur){
       				Internal_notification_center(resultat, 'error', 5000);
       				console.log(resultat + ' ' + erreur);
       			}
    		});
		}
	});
}