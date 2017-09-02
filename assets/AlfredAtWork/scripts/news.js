function verification_newproduct(){
	var value = $('form.tooltype input').val();
	if( value != '' ){
		var input_datas = "title=" + encodeURIComponent(value);
        console.log(input_datas);
          $.ajax({
                url : BASEURL + "alfredatwork/news/insertData/",
                cache: false,
                type : 'POST',
                data : input_datas,
                dataType : 'html',
                success : function(data){
                    location.reload();
                },
                error : function(resultat, statut, erreur){
                	Internal_notification_center(resultat, 'error', 5000);
                }
            });
	}else{
		Internal_notification_center('You have to write a name.', 'error', 5000);
	}
}

function delete_element( id ){
    $.ajax({
        url : BASEURL + "alfredatwork/news/delete-element/" + id,
        cache: false,
        type : 'POST',
        dataType : 'html',
       success : function(data){
            var json_data = JSON.parse(data);
            Internal_notification_center( json_data.message , json_data.status, 5000);
            simple_modal_factory('close');
            $( 'article#news_' + id ).remove();
        },
        error : function(resultat, statut, erreur){
            Internal_notification_center( resultat , 'error', 5000);
            simple_modal_factory('close');
        }
    });
}


function switch_element( event, id ){
    $.ajax({
        url : BASEURL + "alfredatwork/news/switchactive/" + id,
        cache: false,
        type : 'POST',
        dataType : 'html',
       success : function(data){
            var json_data = JSON.parse(data);
            Internal_notification_center( json_data.message , json_data.status, 5000);
            if($(event.target).hasClass('active')){
                $(event.target).removeClass('active');
                $(event.target).parent('div.switch_container').parent('div.content').parent('article.object').addClass('archive');
            }else{
                $(event.target).addClass('active');
                $(event.target).parent('div.switch_container').parent('div.content').parent('article.object').removeClass('archive');
            }
        },
        error : function(resultat, statut, erreur){
            Internal_notification_center( resultat , 'error', 5000);
        }
    });
}