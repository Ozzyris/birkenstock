function verification_newproduct(){
	var value = $('form.tooltype input').val();
    value = value.split(' ').join('_');
	if( value != '' ){
		var input_datas = "title="+ encodeURIComponent(value);
          $.ajax({
                url : BASEURL + "alfredatwork/collection/insert_element/",
                cache: false,
                type : 'POST',
                data : input_datas,
                dataType : 'html',
                success : function(data){
                    location.reload();
                },
                error : function(resultat, statut, erreur){
                	Internal_notification_center(erreur, 'error', 5000);
                }
            });
	}else{
		Internal_notification_center('You have to write a name.', 'error', 5000);
	}
}

function delete_element( id ){
    $.ajax({
        url : BASEURL + "alfredatwork/collection/delete-element/" + id,
        cache: false,
        type : 'POST',
        dataType : 'html',
       success : function(data){
            var json_data = JSON.parse(data);
            Internal_notification_center( json_data.message , json_data.status, 5000);
            $( 'article#collection_' + id ).remove();
            simple_modal_factory('close');
        },
        error : function(resultat, statut, erreur){
            Internal_notification_center( erreur , 'error', 5000);
            simple_modal_factory('close');
        }
    });
}


function switch_archive( event, id ){
    $.ajax({
        url : BASEURL + "alfredatwork/collection/switch_element/" + id,
        cache: false,
        type : 'POST',
        dataType : 'html',
        success : function(data){
            var json_data = JSON.parse(data);
            Internal_notification_center( json_data.message , json_data.status, 5000);

            if( json_data.status == 'success' ){
                if($(event.target).hasClass('active')){
                    $(event.target).removeClass('active');
                    $(event.target).parent('div.switch_container').parent('div.content').parent('article.object').addClass('archive');
                }else{
                    $(event.target).addClass('active');
                    $(event.target).parent('div.switch_container').parent('div.content').parent('article.object').removeClass('archive');
                }
            }

        },
        error : function(resultat, statut, erreur){
            Internal_notification_center( erreur , 'error', 5000);
        }
    });
}