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

gapi.analytics.ready(function() {

  /**
   * Authorize the user immediately if the user has already granted access.
   * If no access has been created, render an authorize button inside the
   * element with the ID "embed-api-auth-container".
   */
  gapi.analytics.auth.authorize({
    container: 'embed-api-auth-container',
    clientid: ' 574051210552-81cc255phc3qpedol9uci8253llimfvq.apps.googleusercontent.com '
  });


  /**
   * Create a new ViewSelector instance to be rendered inside of an
   * element with the id "view-selector-container".
   */
  var viewSelector = new gapi.analytics.ViewSelector({
    container: 'view-selector-container'
  });

  // Render the view selector to the page.
  viewSelector.execute();


  /**
   * Create a new DataChart instance with the given query parameters
   * and Google chart options. It will be rendered inside an element
   * with the id "chart-container".
   */
  var dataChart = new gapi.analytics.googleCharts.DataChart({
    query: {
      metrics: 'ga:sessions',
      dimensions: 'ga:date',
      'start-date': '30daysAgo',
      'end-date': 'yesterday'
    },
    chart: {
      container: 'chart-container',
      type: 'LINE',
      options: {
        width: '100%'
      }
    }
  });


  /**
   * Render the dataChart on the page whenever a new view is selected.
   */
  viewSelector.on('change', function(ids) {
    dataChart.set({query: {ids: ids}}).execute();
  });

});