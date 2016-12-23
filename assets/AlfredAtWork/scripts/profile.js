function main_verification( type ){
  $( document ).ready(function() {
    var open_gate = true;
    switch(type){
      case 'name':
        if($('article form div #first_name_form').val() == ''){
            $('article form div #first_name_form').addClass('wrong');
            Internal_notification_center('You cannot send this form with first name empty.', 'error', 5000);
            open_gate = false;
        }
        if($('article form div #last_name_form').val() == ''){
            $('article form div #last_name_form').addClass('wrong');
            Internal_notification_center('You cannot send this form with last name empty.', 'error', 5000);
            open_gate = false;
        }

        if(open_gate){
          var input_datas = "first_name="+ $('article form div #first_name_form').val() + "&last_name=" + $('article form div #last_name_form').val();
          $.ajax({
                url : BASEURL + "alfredatwork/profile/addprofilecontent/" + type,
                cache: false,
                type : 'POST',
                data : input_datas,
                dataType : 'html',
               success : function(data){
                    Internal_notification_center('Saved', 'success', 2000);
                    console.log( data );
                },
                error : function(resultat, statut, erreur){
                  Internal_notification_center(resultat, 'error', 5000);
                  console.log(resultat + ' ' + erreur);
                }
            });
        }
        break;
      case 'email':
        var email = $('article form div #email_form').val();
         if( email == ''){
            $('article form div #email_form').addClass('wrong');
            Internal_notification_center('You cannot send this form with email empty.', 'error', 5000);
            open_gate = false;
        }else{
          if ((email.indexOf("@")>=0)&&(email.indexOf(".")>=0)){}else{
            $('article form div #email_form').addClass('wrong');
            Internal_notification_center('You cannot send this form with email empty.', 'error', 5000);
            open_gate = false;
          }
        }

        if(open_gate){
          var input_datas = "email="+ email;
          $.ajax({
                url : BASEURL + "alfredatwork/profile/addprofilecontent/" + type,
                cache: false,
                type : 'POST',
                data : input_datas,
                dataType : 'html',
               success : function(data){
                    Internal_notification_center('Saved', 'success', 2000);
                    console.log( data );
                },
                error : function(resultat, statut, erreur){
                  Internal_notification_center(resultat, 'error', 5000);
                  console.log(resultat + ' ' + erreur);
                }
            });
        }
        break;
      case 'password':
        if($('article form div #password_form_old').val() == ''){
            $('article form div #password_form_old').addClass('wrong');
            Internal_notification_center('All the field must be filled.', 'error', 5000);
            open_gate = false;
        }
        if($('article form div #password_form_new').val() == ''){
            $('article form div #password_form_new').addClass('wrong');
            Internal_notification_center('All the field must be filled.', 'error', 5000);
            open_gate = false;
        }
        if($('article form div #password_form_newbis').val() == ''){
            $('article form div #password_form_newbis').addClass('wrong');
            Internal_notification_center('All the field must be filled.', 'error', 5000);
            open_gate = false;
        }

        if(open_gate){
          var input_datas = "old_password="+ $('article form div #password_form_old').val() + "&new_password_1=" + $('article form div #password_form_new').val() + "&new_password_2=" + $('article form div #password_form_newbis').val();
          $.ajax({
                url : BASEURL + "alfredatwork/profile/addprofilecontent/" + type,
                cache: false,
                type : 'POST',
                data : input_datas,
                dataType : 'html',
               success : function(data){
                    Internal_notification_center('Saved', 'success', 2000);
                    console.log( data );
                },
                error : function(resultat, statut, erreur){
                  Internal_notification_center(resultat, 'error', 5000);
                  console.log(resultat + ' ' + erreur);
                }
            });
        }
        break;
      default:
        break;
    }
  });
}
