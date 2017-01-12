function main_verification( type ){
  var open_gate = true,
    url,
    input_datas,
    collection_id = $('input#collection_id').val();

  switch(type){

    case 'name':
      url = BASEURL + "alfredatwork/collection-detail/name-content/" + collection_id;
      if($( '#input_name' ).val() == ''){
        Internal_notification_center('You cannot send a form with an empty field.', 'error', 5000);
        open_gate = false;
      }else{
        input_datas = "name=" + $( '#input_name' ).val();
      }
      break;

      case 'description':
      url = BASEURL + "alfredatwork/collection-detail/description-content/" + collection_id;
      if($( '#input_description' ).val() == ''){
        Internal_notification_center('You cannot send a form with an empty field.', 'error', 5000);
        open_gate = false;
      }else{
          input_datas = "description=" + $( '#input_description' ).val();
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