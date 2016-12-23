function product_tooltype_factory( collection_id ){
  
  var html = '<form class="tooltype">';
      html += '  <h4>Add</h4>';
      html += '  <input onKeyPress="if(event.keyCode == 13){ verification_newelement(' + collection_id + '); }" id="product_name" placeholder="Color" type="text">';
      html += '  <a onclick="verification_newelement(' + collection_id + ');" class="input_button success">Send</a>';
      html += '  <a class="input_button cancel">Cancel</a>';
      html += '</form>';

  if( $('form.tooltype').length ){
    if( $('form.tooltype').hasClass('visible')){
      $('form.tooltype').hide();
      $('form.tooltype').removeClass('visible');
      $('a#Float_button').removeClass('active');
    }else{
      $('form.tooltype').show();
      $('form.tooltype').addClass('visible');
      $('a#Float_button').addClass('active');
    }
  }else{
    $('section#content').append(html);
    $('form.tooltype').show();
    $('form.tooltype').addClass('visible');
    $('a#Float_button').addClass('active');
  }
}

function verification_newelement( collection_id ){
	var color = $('form.tooltype input#product_name').val();
	if( color != '' ){
	var input_datas = "color="+ color + "&collection_id="+ collection_id;
	    $.ajax({
	        url : BASEURL + "alfredatwork/products/insertdata/",
	        cache: false,
	        type : 'POST',
	        data : input_datas,
	        dataType : 'html',
	       success : function(data){
	            Internal_notification_center(data, 'success', 2000);
	            tooltype_factory();
              location.reload();
	        },
	        error : function(resultat, statut, erreur){
	            Internal_notification_center( erreur , 'error', 5000);
	            simple_modal_factory('close');
	        }
	    });
	}else{
		Internal_notification_center('You have to write a color.', 'error', 5000);
	}
}

function switch_archive( event, id ){
    $.ajax({
        url : BASEURL + "alfredatwork/products/switchactive/" + id,
        cache: false,
        type : 'POST',
        dataType : 'html',
       success : function(data){
          if($(event.target).hasClass('active')){
              $(event.target).removeClass('active');
              $(event.target).parent('div').parent('div').parent('article').addClass('archive');
          }else{
              $(event.target).addClass('active');
              $(event.target).parent('div').parent('div').parent('article').removeClass('archive');
          }
        },
        error : function(resultat, statut, erreur){
            Internal_notification_center( erreur , 'error', 5000);
        }
    });
}

function add_delete_date( id ){
    $.ajax({
        url : BASEURL + "alfredatwork/products/adddeletedate/" + id,
        cache: false,
        type : 'POST',
        dataType : 'html',
       success : function(data){
            Internal_notification_center(data, 'success', 2000);
            simple_modal_factory('close');
            $('article#object_' + id).children('div.action').children('div.btn_container:nth-child(2)').hide();
            $('article#object_' + id).children('div.action').children('div.btn_container:nth-child(1)').show();
            if( $('article#object_' + id).hasClass('archive') ){}else{ $('article#object_' + id).addClass('archive'); }
			$('article#object_' + id).children('div.content').children('div.switch_container').hide();
			$('article#object_' + id).children('div.content').append('<div class="deletionTime"><p>30 days before deletion</p></div>');
        },
        error : function(resultat, statut, erreur){
            Internal_notification_center( erreur , 'error', 5000);
            simple_modal_factory('close');
        }
    });
}

function undo_deletion( id, event ){
    $.ajax({
        url : BASEURL + "alfredatwork/products/undoarchivedata/" + id,
        cache: false,
        type : 'POST',
        dataType : 'html',
       success : function(data){
            Internal_notification_center(data, 'success', 2000);
            $('article#object_' + id).children('div.content').children('div.switch_container').show();
            $('article#object_' + id).children('div.content').children('div.switch_container').children('span.switch').removeClass('active');
            $('article#object_' + id).children('div.content').children('div.deletionTime').remove();
            $('article#object_' + id).children('div.action').children('div.btn_container:nth-child(2)').show();
            $('article#object_' + id).children('div.action').children('div.btn_container:nth-child(1)').hide();
            $(event.target).parent('div.btn_container').hide();
        },
        error : function(resultat, statut, erreur){
            Internal_notification_center( erreur , 'error', 5000);
        }
    });
}