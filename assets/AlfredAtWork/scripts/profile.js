function main_verification( type ){
  var open_gate = true,
  url,
  input_datas;

  switch(type){
    case 'name':
      url = BASEURL + "alfredatwork/profile/name-content";
      if( $( '#input_firstname' ).val() == '' || $( '#input_lastname' ).val() == '' ){
        Internal_notification_center('You cannot send a form with an empty field.', 'error', 5000);
        open_gate = false;
      }else{
        input_datas = "first_name=" + $( '#input_firstname' ).val() + "&last_name=" + $('#input_lastname').val();
      }
      break;
      
    case 'email':
      url = BASEURL + "alfredatwork/profile/email-content";
      if( $( '#input_email' ).val() == '' ){
        Internal_notification_center('You cannot send a form with an empty field.', 'error', 5000);
        open_gate = false;
      }else{
        input_datas = "email=" + $( '#input_email' ).val();
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
