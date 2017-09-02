function main_verification( type ){
  var open_gate = true,
  url,
  input_datas
  news_id = $('input#product_id').val();

  switch(type){
    case 'title':
      url = BASEURL + "alfredatwork/news-details/title-content/" + news_id;
      if( $( '#title_input' ).val() == ''){
        Internal_notification_center('You cannot send a form with an empty field.', 'error', 5000);
        open_gate = false;
      }else{
        input_datas = "title=" + encodeURIComponent($( '#title_input' ).val());
      }
      break;

    case 'time':
      url = BASEURL + "alfredatwork/news-details/time-content/" + news_id;
      if( $( '#time_input' ).val() == ''){
        Internal_notification_center('You cannot send a form with an empty field.', 'error', 5000);
        open_gate = false;
      }else{
        input_datas = "time=" + encodeURIComponent($( '#time_input' ).val());
      }
      break;

    case 'description':
      url = BASEURL + "alfredatwork/news-details/description-content/" + news_id;
      if( $( '#description_input' ).val() == ''){
        Internal_notification_center('You cannot send a form with an empty field.', 'error', 5000);
        open_gate = false;
      }else{
        input_datas = "description=" + encodeURIComponent($( '#description_input' ).val());
      }
      break;

    case 'link':
      url = BASEURL + "alfredatwork/news-details/link-content/" + news_id;
      if( $( '#link_input' ).val() == ''){
        Internal_notification_center('You cannot send a form with an empty field.', 'error', 5000);
        open_gate = false;
      }else{
        input_datas = "link=" + encodeURIComponent($( '#link_input' ).val());
      }
      break;

    case 'image':
      var open_picture_gate = true,
          formData = new FormData(),
          file_upload = $('input#input_image')[0].files[0];
      open_gate = false;
  
          if( file_upload == undefined ){ 
            Internal_notification_center('You cannot upload a empty file!', 'error', 5000);
            open_picture_gate = false;
          }else{
            if( file_upload.size > 1048576 ){
              Internal_notification_center('The file is too big', 'error', 5000);
              open_picture_gate = false;
              return false;
            }
            if( file_upload.type != 'image/jpeg' && file_upload.type != 'image/png' ){ 
              Internal_notification_center('The file must be an image - Jpeg', 'error', 5000);
              open_picture_gate = false;
              return false;
            }
            if (typeof formData == 'undefined'){
              Internal_notification_center('Your Browser Don\'t support FormData API! Use IE 10 or Above!', 'error', 5000);
              open_picture_gate = false;
              return false;
            }
    
            if( open_picture_gate == true ){
              formData.append('file', file_upload);
    
              $.ajax({
                url : BASEURL + "alfredatwork/news-details/image-content/" + news_id,
                    type : 'POST',
                    data : formData,
                    contentType: false,
                    processData: false,
                    success: function(data){
                      var json_data = data;
                      Internal_notification_center( json_data.message , json_data.status, 5000);
                      if( json_data.status == 'success'){ location.reload(); }
                    },
                    error: function(resultat, statut, erreur) {
                      Internal_notification_center(erreur, 'error', 5000);
                    }
                });
              }
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
      success: function(data){
        console.log(data);
        var json_data = JSON.parse(data);
        Internal_notification_center( json_data.message , json_data.status, 5000);
      },
      error: function(resultat, statut, erreur){
        console.log(resultat, statut, erreur);
        Internal_notification_center(resultat, 'error', 5000);
      }
    });
  }
}

$('input[type=file]').change(function() {
  var file = this.files;
  var user_feedback = $(this).parent();
  if (file.length > 1) {
    Internal_notification_center( 'Sorry, multiple files are not allowed' , 'error', 5000);
    return;
  }

  user_feedback.addClass('active');
  user_feedback.children('p').text( file[0].name );
  user_feedback.append( '<span class="details">File Type: ' + file[0].type + ' | File Size: ' + Math.ceil((file[0].size / 1024)/1000) + ' Mb</span>' );
});