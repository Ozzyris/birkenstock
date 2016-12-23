$('input[type=file]').change(function() {
	// console.log(this.files);
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


function main_verification( type ){
    var open_gate = true;
    switch(type){
      	case 'color':
      		var color = $('article form.body div.input_group input#product_color').val();
      		if(color == ''){
            	$('article form.body div.input_group input#product_color').addClass('wrong');
            	Internal_notification_center('You cannot modify this form with an empty color.', 'error', 5000);
           		open_gate = false;
        	}

        	if(open_gate){
          		var input_datas = "id="+ $('article form.body div.input_group input#product_id').val() + "&color=" + $('article form.body div.input_group input#product_color').val();
       			$.ajax({
        		    url : BASEURL + "alfredatwork/productdetails/update_color",
        		    cache: false,
        		    type : 'POST',
        		    data : input_datas,
        		    dataType : 'html',
        		    success : function(data){
        		        Internal_notification_center(data, 'success', 2000);
        		    },
        		    error : function(resultat, statut, erreur){
        		        Internal_notification_center(erreur, 'error', 5000);
        		    }
        		});
        	}
      		break;
      	case 'gender':
          var genderArray = [];
          if( $('input#men_input').is(":checked") ){ genderArray.push("men"); }
          if( $('input#woman_input').is(":checked") ){ genderArray.push("women"); }
          if( $('input#kids_input').is(":checked") ){ genderArray.push("kids"); }

          if( genderArray.length == 0 ){
            Internal_notification_center('At least one element as to be selected', 'error', 5000);
            open_gate = false;
          }else{
            var input_datas = "id="+ $('article form.body div.input_group input#product_id').val() + "&gender=" + genderArray;
            $.ajax({
                url : BASEURL + "alfredatwork/productdetails/update_gender",
                cache: false,
                type : 'POST',
                data : input_datas,
                dataType : 'html',
                success : function(data){
                    Internal_notification_center(data, 'success', 2000);
                },
                error : function(resultat, statut, erreur){
                    Internal_notification_center(erreur, 'error', 5000);
                }
            });
          }
      		break;
        case 'multiselect':
          var tagsArray = [];
          var li_length = $('article#products_tags div.body ul.five_column').children('li').length;
          for( var i = 1; i <= li_length; i++){
            if( $('article#products_tags div.body ul.five_column li:nth-child(' + i + ')').hasClass('active') ){
              tagsArray.push( $('article#products_tags div.body ul.five_column li:nth-child(' + i + ')').data('value') );
            }
          }
          if( tagsArray.length > 0 ){

            var input_datas = "id="+ $('article form.body div.input_group input#product_id').val() + "&tags=" + tagsArray;
            $.ajax({
                url : BASEURL + "alfredatwork/productdetails/update_tags",
                cache: false,
                type : 'POST',
                data : input_datas,
                dataType : 'html',
                success : function(data){
                    Internal_notification_center(data, 'success', 2000);
                },
                error : function(resultat, statut, erreur){
                    Internal_notification_center(erreur, 'error', 5000);
                }
            });
          }
          break;
        case 'range':
            var minsize = $('div.body div.input_group input#input_minsize').val(),
                maxsize = $('div.body div.input_group input#input_maxsize').val(),
                sizeArray = [];

            if(minsize > maxsize){
              Internal_notification_center('The Min size cannot be higher than the Max size', 'error', 5000);
              open_gate = false;
            }

          if(open_gate){
            for( var i = parseInt(minsize); i <= maxsize; i++){
              sizeArray.push( i );
            }
            

            var input_datas = "id="+ $('article form.body div.input_group input#product_id').val() + "&size=" + sizeArray;
            $.ajax({
                url : BASEURL + "alfredatwork/productdetails/update_size",
                cache: false,
                type : 'POST',
                data : input_datas,
                dataType : 'html',
                success : function(data){
                    Internal_notification_center(data, 'success', 2000);
                },
                error : function(resultat, statut, erreur){
                    Internal_notification_center(erreur, 'error', 5000);
                }
            });

          }
          break;

        case 'picture':

          var formData = new FormData();
                    console.log(formData);

          formData.append('file', $('input#file_picture_input')[0].files[0]);
          console.log($('input#file_picture_input')[0].files[0]);
          // console.log(formData.file);
          if (typeof formData !== 'undefined') {

            $.ajax({
                url : BASEURL + "alfredatwork/productdetails/update_picture/" + $('article form.body div.input_group input#product_id').val(),
                type : 'POST',
                data : formData,
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(data, text, xhr) {
                  console.log(data);
                  console.log(text);
                  console.log(xhr);
                },
                error: function(xhr, textStatus, error) {
                  console.log(xhr);
                  console.log(textStatus);
                  console.log(error);
                  alert('Error contacting server. Please try again later..');
                }
            });

          }else{
            message("Your Browser Don't support FormData API! Use IE 10 or Above!");
          }
          break;
    	default:
    		break;
    }
}

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


$('#picture_upload').submit(function( event ){
  event.preventDefault();
    var formData = new FormData( $("#picture_upload")[0] );
    formData.append('file', $('input#file_picture_input')[0].files[0]);
    if (typeof FormData !== 'undefined') {
      console.log($('input#file_picture_input')[0].files[0]);
    }else{
      message("Your Browser Don't support FormData API! Use IE 10 or Above!");
    }
})