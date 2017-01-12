function archivesysteme_news( event, id ){
  $.ajax({
    url : BASEURL + "alfredatwork/dashboard/archiveData/" + id,
    cache: false,
    type : 'POST',
    dataType : 'html',
    success : function(data){
      Internal_notification_center( data , 'success', 2000);
      $(event.target).parent('li').addClass('archive');
    },
    error : function(resultat, statut, erreur){
      Internal_notification_center( erreur , 'error', 5000);
    }
  });
}

function archivemailchimp( event, email ){
  var input_datas = "email=" + email;
  $.ajax({
    url : BASEURL + "alfredatwork/dashboard/archiveMailchimp/",
    cache: false,
    type : 'POST',
    data : input_datas,
    dataType : 'html',
    success : function(data){
      Internal_notification_center( data , 'success', 2000);
      $(event.target).parent('td').parent('tr').remove();
    },
    error : function(resultat, statut, erreur){
      Internal_notification_center( erreur , 'error', 5000);
    }
  });
}