function main_verification( type ){
  	$( document ).ready(function(){
    	var open_gate = true;
    	switch(type){
      		case 'name':
      			if($('article form div #collection_name').val() == ''){ $('article form div #collection_name').addClass('wrong');  Internal_notification_center('You cannot send this form with an empty field.', 'error', 5000); open_gate=false;}
				
      			if(open_gate){
              var input_datas = "collection_id="+ $('article form div #collection_id').val();
      				    input_datas += "&name="+ $('article form div #collection_name').val();

          			$.ajax({
          			    url : BASEURL + "alfredatwork/collectiondetails/updatedata/" + type,
          			    cache: false,
          			    type : 'POST',
          			    data : input_datas,
          			    dataType : 'html',
          			    success : function( data ){
          			        Internal_notification_center(data, 'success', 2000);
          			    },
          			    	error : function(resultat, statut, erreur){
            				Internal_notification_center( erreur , 'error', 5000);
          			      }
          			  });
      			}
      			break;
      		case 'description':
      			 if($('article form div #collection_description').val() == ''){ $('article form div #collection_description').addClass('wrong');  Internal_notification_center('You cannot send this form with an empty field.', 'error', 5000); open_gate=false;}

      			if(open_gate){
              var input_datas = "collection_id="+ $('article form div #collection_id').val();
      				    input_datas += "&description="+ $('article form div #collection_description').val();
          			$.ajax({
          			    url : BASEURL + "alfredatwork/collectiondetails/updatedata/" + type,
          			    cache: false,
          			    type : 'POST',
          			    data : input_datas,
          			    dataType : 'html',
          			    success : function( data ){
          			        Internal_notification_center(data, 'success', 2000);
          			    },
          			    	error : function(resultat, statut, erreur){
            				Internal_notification_center( erreur , 'error', 5000);
          			      }
          			  });
      			}
      			break;
    		default:
    			break;
    	}
   	});
}

