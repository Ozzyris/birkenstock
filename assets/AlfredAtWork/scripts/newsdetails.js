function main_verification( type ){
  	$( document ).ready(function(){
    	var open_gate = true;
    	switch(type){
      		case 'title':
      			if($('article form div #news_title').val() == ''){ $('article form div #news_title').addClass('wrong');  Internal_notification_center('You cannot send this form with first name empty.', 'error', 5000); open_gate=false;}
				
      			if(open_gate){
              var input_datas = "product_id="+ $('article form div #product_id').val();
      				    input_datas += "&title="+ $('article form div #news_title').val();

          			$.ajax({
          			    url : BASEURL + "alfredatwork/newsdetails/updatedata/" + type,
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
      			 if($('article form div #news_description').val() == ''){ $('article form div #news_description').addClass('wrong');  Internal_notification_center('You cannot send this form with first name empty.', 'error', 5000); open_gate=false;}

      			if(open_gate){
              var input_datas = "product_id="+ $('article form div #product_id').val();
      				    input_datas += "&description="+ $('article form div #news_description').val();
          			$.ajax({
          			    url : BASEURL + "alfredatwork/newsdetails/updatedata/" + type,
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
      		case 'link':
      			if($('article form div #news_link').val() == ''){ $('article form div #news_link').addClass('wrong');  Internal_notification_center('You cannot send this form with first name empty.', 'error', 5000); open_gate=false;}

      			if(open_gate){
              var input_datas = "product_id="+ $('article form div #product_id').val();
      				    input_datas += "&link="+ $('article form div #news_link').val();
          			$.ajax({
          			    url : BASEURL + "alfredatwork/newsdetails/updatedata/" + type,
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

