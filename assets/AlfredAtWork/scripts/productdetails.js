function main_verification( type ){
  var open_gate = true,
  url,
  input_datas
  product_id = $('input#product_id').val();

  switch(type){
    case 'category':
      url = BASEURL + "alfredatwork/product-details/category_element/" + product_id;
      if( !$('input#classical_input').is(":checked") && !$('input#seasonal_input').is(":checked") && !$('input#child_input').is(":checked") ){
        Internal_notification_center('You cannot send a form with an empty field.', 'error', 5000);
        open_gate = false;
      }else{
        if( $('input#classical_input').is(":checked") ){ input_datas = "category=classic"; }
        if( $('input#seasonal_input').is(":checked") ){ input_datas = "category=seasonal"; }
        if( $('input#child_input').is(":checked") ){ input_datas = "category=kids"; }
      }
      break;

    case 'picture':
      var open_picture_gate = true,
          formData = new FormData(),
          file_upload = $('input#input_picture')[0].files[0];
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
            url : BASEURL + "alfredatwork/product-details/picture_element/" + product_id,
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

    case 'thumb':
      var open_picture_gate = true,
          formData = new FormData(),
          file_upload = $('input#thumb_input')[0].files[0];
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
            url : BASEURL + "alfredatwork/product-details/thumb_element/" + product_id,
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

    case 'color':
      url = BASEURL + "alfredatwork/product-details/color_element/" + product_id;
      if( $( '#color_input' ).val() == ''){
        Internal_notification_center('You cannot send a form with an empty field.', 'error', 5000);
        open_gate = false;
      }else{
        input_datas = "color=" + encodeURIComponent($( '#color_input' ).val());
      }
      break;

    case 'gender':
      url = BASEURL + "alfredatwork/product-details/gender_element/" + product_id;
      var genderArray = [];
      if( $('input#men_input').is(":checked") ){ genderArray.push("men"); }
      if( $('input#woman_input').is(":checked") ){ genderArray.push("women"); }
      if( $('input#kids_input').is(":checked") ){ genderArray.push("kids"); }
      if( genderArray.length == 0 ){
        Internal_notification_center('You cannot send a form with an empty field.', 'error', 5000);
        open_gate = false;
      }else{
        input_datas = "gender=" + genderArray;
      }
      break;

    case 'tags':
      url = BASEURL + "alfredatwork/product-details/tags_element/" + product_id;
      var tagsArray = [];
      var li_length = $('article#products_tags div.body ul.five_column').children('li').length;
      for( var i = 1; i <= li_length; i++){
        if( $('article#products_tags div.body ul.five_column li:nth-child(' + i + ')').hasClass('active') ){
          tagsArray.push( $('article#products_tags div.body ul.five_column li:nth-child(' + i + ')').data('value') );
        }
      }
      if( tagsArray.length == 0 ){
        Internal_notification_center('You cannot send a form with an empty field.', 'error', 5000);
        open_gate = false;
      }else{
        input_datas = "tags=" + tagsArray;
      }
      break;

    case 'size':
      url = BASEURL + "alfredatwork/product-details/size_element/" + product_id;
      var minsize = $('input#input_minsize').val(),
          maxsize = $('input#input_maxsize').val(),
          sizeArray = [];
      if(minsize > maxsize){
        Internal_notification_center('The Min size cannot be higher than the Max size', 'error', 5000);
        open_gate = false;
      }else{
        for( var i = parseInt(minsize); i <= maxsize; i++){
          sizeArray.push( i );
        }
        input_datas = "size=" + sizeArray;
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

function higlight_multiselec( event ){
  if($(event.target).parent('li').hasClass('active')){
    $(event.target).parent('li').removeClass('active');
  }else{
    $(event.target).parent('li').addClass('active');
  }
}

var rangeSlider = function(){
  var slider = $('div.body div.input_group'),
      range = $('div.body div.input_group input.range'),
      value = $('div.body div.input_group span.range_value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $(this).next(value).html(this.value);
    });
  });
};

rangeSlider();