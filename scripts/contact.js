function validation(){
  var open_gate = true;
  var name = $('input#input_name').val();
  var email = $('input#input_email').val();
  var phone = $('input#input_phone').val();
  var message = $('textarea#input_message').val();
  $('input#input_name, input#input_email, input#input_phone, textarea#input_message').removeClass('wrong');

  if(name == ''){ $('input#input_name').addClass('wrong'); open_gate = false; }
  if(email == ''){ $('input#input_email').addClass('wrong'); open_gate = false; }else{ if ((email.indexOf("@")>=0)&&(email.indexOf(".")>=0)){}else{ $('input#input_email').addClass('wrong'); open_gate = false;} }
  if(phone == ''){ $('input#input_phone').addClass('wrong'); open_gate = false; }
  if(message == ''){ $('textarea#input_message').addClass('wrong'); open_gate = false; }




  if(open_gate){ $("form#contact_form").submit(); }
}