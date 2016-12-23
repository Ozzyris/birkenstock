function sendrecoveryemail(){
  var open_gate = true;
  var email = $('#connexion_form #revovery_email').val();
  if( email == ''){
    $('#connexion_form #revovery_email').addClass('wrong');
    Internal_notification_center('The email adress you enter is incorect', 'error', 5000);
    open_gate=false;
  }else{
    if ((email.indexOf("@")>=0)&&(email.indexOf(".")>=0)){}else{
      $('#connexion_form #revovery_email').addClass('wrong');
      Internal_notification_center('The email adress you enter is incorect', 'error', 5000);
      open_gate=false;
    }
  }
	
  if(open_gate){
    var input_datas = "email="+ email;
    console.log(email);

  		$.ajax({
  		    url : BASEURL + "alfredatwork/forgot-password/recovery-mail",
  		    cache: false,
  		    type : 'POST',
  		    data : input_datas,
  		    dataType : 'html',
  		    success : function( data ){
  		        Internal_notification_center(data, 'success', 2000);
  		    },
  		    	error : function(resultat, statut, erreur){
  				Internal_notification_center( erreur , 'error', 5000);
  		      }
  		});
  }
}

