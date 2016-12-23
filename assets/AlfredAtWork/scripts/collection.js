function verification_newproduct(){
	var value = $('form.tooltype input').val();
	if( value != '' ){
		var input_datas = "title="+ value;
          $.ajax({
                url : BASEURL + "alfredatwork/collection/insertData/",
                cache: false,
                type : 'POST',
                data : input_datas,
                dataType : 'html',
               success : function(data){
                    Internal_notification_center('Saved', data, 2000);
                    tooltype_factory();
                },
                error : function(resultat, statut, erreur){
                	Internal_notification_center(erreur, 'error', 5000);
                }
            });
	}else{
		Internal_notification_center('You have to write a name.', 'error', 5000);
	}
}

function add_delete_date( id ){
    $.ajax({
        url : BASEURL + "alfredatwork/collection/adddeletedate/" + id,
        cache: false,
        type : 'POST',
        dataType : 'html',
       success : function(data){
            Internal_notification_center(data, 'success', 2000);
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
        url : BASEURL + "alfredatwork/collection/switchactive/" + id,
        cache: false,
        type : 'POST',
        dataType : 'html',
       success : function(data){
        console.log( data );
            if($(event.target).hasClass('active')){
                $(event.target).removeClass('active');
            }else{
                $(event.target).addClass('active');
            }
        },
        error : function(resultat, statut, erreur){
            Internal_notification_center( erreur , 'error', 5000);
        }
    });
}

function undo_deletion( id ){
    $.ajax({
        url : BASEURL + "alfredatwork/collection/undoarchivedata/" + id,
        cache: false,
        type : 'POST',
        dataType : 'html',
       success : function(data){
            Internal_notification_center(data, 'success', 2000);
        },
        error : function(resultat, statut, erreur){
            Internal_notification_center( erreur , 'error', 5000);
        }
    });
}