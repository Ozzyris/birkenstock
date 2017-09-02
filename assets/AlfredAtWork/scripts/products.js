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
	var input_datas = "color="+ encodeURIComponent(color);
	    $.ajax({
	      url : BASEURL + "alfredatwork/products/insert_element/" + collection_id,
	      cache: false,
	      type : 'POST',
	      data : input_datas,
	      dataType : 'html',
	      success : function(data){
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
    url : BASEURL + "alfredatwork/products/switch_element/" + id,
    cache: false,
    type : 'POST',
    dataType : 'html',
    success : function(data){
      console.log(data);
      var json_data = JSON.parse(data);
      console.log(data, json_data);
      Internal_notification_center( json_data.message , json_data.status, 5000);
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

function delete_element( id ){
    $.ajax({
        url : BASEURL + "alfredatwork/products/delete_element/" + id,
        cache: false,
        type : 'POST',
        dataType : 'html',
       success : function(data){
          var json_data = JSON.parse(data);
          Internal_notification_center( json_data.message , json_data.status, 5000);
          simple_modal_factory('close');
          $('article#product_' + id).remove()
        },
        error : function(resultat, statut, erreur){
            Internal_notification_center( erreur , 'error', 5000);
            simple_modal_factory('close');
        }
    });
}