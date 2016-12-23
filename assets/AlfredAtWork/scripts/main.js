// MENU SWITCH
function switch_menu(){
  if($('nav#left_navigation').hasClass('active')){
      $('section#toolbar a#hamburger_icon, nav#left_navigation').removeClass('active');
  }else{
      $('section#toolbar a#hamburger_icon, nav#left_navigation').addClass('active');
  }
}

//LABEL ANIMATION
function animation_label( type, event ){
  if(type == 'focus' ){
    $(event.target).closest( 'div.input_group' ).addClass( 'active' );
  }else if( type == 'blur' ){
    if($(event.target).val() == ''){
      $(event.target).closest( 'div.input_group' ).removeClass( 'active' );
    }
  }else{}
}

// PAGE TITLE
function nice_title(){
  var hours = new Date().getHours();
  //Title
  if(hours < 5){      document.title=('Good night');} //Entre minuit et 5h 
  else if(hours < 10){document.title=('Good Morning');} // Entre 5h et 10h
  else if(hours < 12){document.title=('Enjoy your meal');} // Entre 10h et midi
  else if(hours < 16){document.title=('Good Afternoon');} // Entre midi et 4h
  else if(hours < 18){document.title=('Enjoy your Tea Time');} //Ent 4h et 6h
  else if(hours < 20){document.title=('Good Evening');} //Entre 6h et 8h
  else if(hours < 24){document.title=('Good Night');} //Entre 8h et minuit
}
nice_title();


// INTERNAL NOTIFICATION FACTORY
function Internal_notification_center(message, type, time, undo_id, undo_url){
  switch(type){
    case 'close':
      $('div#alert').removeClass('active');
      clearTimeout(timeout_close_alert);
      break;
    case 'undo':
      $('div#alert').html('<span></span><h1></h1><a href="processing/' + undo_url + '.php?id=' + undo_id + '" >Undo</a>')
      $('div#alert span').addClass('info');
      $('div#alert h1').html(message);
      $('div#alert').addClass('active');
      break;
    default:
      $('body').append('<div id="alert"><span class="' + type + '" ></span><h1>' + message + '</h1></div>');
      setTimeout( function(){
        $('div#alert').addClass('active');
      }, 200);
      break;
  }
  var timeout_close_alert = setTimeout( function(){
    $('div#alert').removeClass('active');
    setTimeout( function(){
      $('div#alert').remove();
    }, 200);
  }, time);
}

// TOOLTYPE FACTORY
function tooltype_factory(){
  
  var html = '<form class="tooltype">';
      html += '  <h4>Add</h4>';
      html += '  <input onKeyPress="if(event.keyCode == 13) verification_newproduct();" name="product_name" placeholder="Title" type="text">';
      html += '  <a onclick="verification_newproduct();" class="input_button success">Send</a>';
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

function simple_modal_factory( id, type, title, description ){
  var html = '<div class="modal">';
     html += '  <div class="header ' + type + '">';
     html += '    <h5>' + title + '</h5>';
     html += '  </div>';
     html += '  <div class="body">';
     html += '    <p>' + description + '</p>';
     html += '    <a href="#" onclick="add_delete_date(' + id + ');" class="button red">Delete</a>';
     html += '    <a href="#" onclick="simple_modal_factory(\'close\');" class="button orange">Cancel</a>';
     html += '  </div>';
     html += '</div>';
     html += '<div onclick="simple_modal_factory(\'close\');" class="modal_darkfilter"></div>';


  if( id == 'close' ){
    $('div.modal').remove();
    $('div.modal_darkfilter').remove();
  }else{
    $('body').append(html);
  }


}









// TODO LIST

  // 1 - cancel button function














// function $_GET(param){
//   var vars = {};
//   window.location.href.replace( location.hash, '' ).replace( 
//     /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
//     function( m, key, value ) { // callback
//       vars[key] = value !== undefined ? value : '';
//     }
//   );

//   if ( param ) {
//     return vars[param] ? vars[param] : null;  
//   }
//   GET(vars.status, vars.id, vars.undo_url);
// }


// function GET(status, id, undo_url){
//       if(status === 'undo'){
//         Internal_notification_center('Element delete !', status, 12000, id, undo_url);
//       }else if(status === 'error'){
//          Internal_notification_center('Something bad happen !', status, 6000);
//       }else if(status === 'success'){
//         Internal_notification_center('All good !', status, 6000);
//       }
// }
//     var $_GET = $_GET();


