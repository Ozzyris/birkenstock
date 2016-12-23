function login_tooltype (){
	$( document ).ready(function() {
		$('#tooltype').toggle();
		$('#password').focus();
		$('#input_email, #password').val('');
		$('#tooltype input').removeClass('wrong');
	});
}

function login_verfification(){
	$( document ).ready(function() {
		var open_gate = true;
		var email = $('#input_email').val();
		var password = $('#input_password').val();
		$('#input_email, #input_password').removeClass('wrong');
	
		if(email == ""){ $('#input_email').addClass('wrong'); open_gate = false; }else{
			if((email.indexOf("@")>=0)&&(email.indexOf(".")>=0)){}else{
				$('#input_email').addClass('wrong'); open_gate = false;
			}
		}
		if(password == ""){
			$('#input_password').addClass('wrong'); open_gate = false;
		}
	
		if(open_gate){
			$("#connexion_form").submit();
		}
	});
}

