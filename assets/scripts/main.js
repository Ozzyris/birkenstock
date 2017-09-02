/*$(document).ready(function(){
    $(this).scrollTop(0);
});*/

function sidemenu(){
	$('#hamburger_icon').toggleClass('active');
	$('#left_menu').toggleClass('active');
}

var body = $("body, html");
var header_size = $("header").outerHeight();
body.on("scroll", function(e) {
  if(this.scrollTop > (header_size-50)) {
    $("nav").addClass("active");
  } else {
    $("nav").removeClass("active");
  }
 
});

function save_email_to_mailchimp(){
  var open_door = true;
  var email = $('#newsletter_input').val();

  if( email == '' ){
    open_door = false;
    alert('The email is required.');
    return false;
  }

  if( (email.indexOf("@")==0) && (email.indexOf(".")==0) ){
    open_door = false;
    alert('The email is incorrect.');
    return false;
  }

  if( open_door ){
    var input_datas = "email=" + encodeURIComponent( email );

    $.ajax({
      url : BASEURL + "contact/newsletter",
      cache: false,
      type : 'POST',
      data : input_datas,
      dataType : 'html',
      success : function(reponse){
        var json_reponse = JSON.parse(reponse);
        alert( json_reponse.message );
        $('#newsletter_input').val('');
      },
      error : function(resultat, statut, erreur){
        console.log( resultat, statut, erreur );
      }
    });
  }
}

var open_hours = [
    { // MONDAY
      open: 10,
      close: 18
    },
    { // TUESDAY
      open: 10,
      close: 18
    },
    { // WEDNESDAY
      open: 10,
      close: 18
    },
    { // THURSDAY
      open: 10,
      close: 18
    },
    { // FRIDAY
      open: 10,
      close: 18
    },
    { // SATURDAY
      open: 10,
      close: 18
    },
    { // SUNDAY
      open: 10,
      close: 18
    },
];


function isOpen(){
  var now = new Date();
  var day = now.getDay();
  var hours = now.getHours();
  // console.log(open_hours[day].open + 'h - ' + open_hours[day].close + 'h');
  if(hours >= open_hours[day].open && hours <= open_hours[day].close){ return 'Open'; }else{ return 'Close'; }
}


function quickcontact(){
  var html = '<div class="quick_contact" class="m-scrollable-filter">';
      html += '<a class="quick_contact_button" onclick="launch_detail_information();" href="#"><img src="' + BASEURL + 'assets/images/ICON_mail.svg" alt=""><img style="display: none;" src="'+ BASEURL + '/assets/images/ICON_cross.svg" alt=""></a>';
      html += '  <div class="content" style="display:none;">';
      // html += '    <h4>Birkenstock Bondi Beach<br>7/178 Campbell Pde. Bondi Beach 2026</h4>';
      html += '    <h4>Birkenstock Bondi Beach</h4>';
      html += '    <div class="open_hours">';
      html += '      <h5 class="' + isOpen() + '">' + isOpen() + ' Now</h5>';
      html += '      <div class="line_containter">';
      html += '        <div class="days_container">Monday - Friday</div>';
      html += '        <div class="hours_container">10am - 6pm</div>';
      html += '      </div>';
      html += '      <div class="line_containter">';
      html += '        <div class="days_container">Saturday</div>';
      html += '        <div class="hours_container">10am - 6pm</div>';
      html += '      </div>';
      html += '      <div class="line_containter">';
      html += '        <div class="days_container">Sunday</div>';
      html += '        <div class="hours_container">10am - 6pm</div>';
      html += '      </div>';
      html += '    </div>';
      html += '    <div class="external_link">';
      html += '      <a href="https://goo.gl/maps/vG6YjBuWVbk" target="_blank">',
      html += '        <i><img src="'+ BASEURL + '/assets/images/ICON_location.svg" alt=""></i>';
      html += '        <p>Get Direction</p>';
      html += '      </a>';
      html += '      <a href="tel:0291304607">';
      html += '        <i><img src="'+ BASEURL + '/assets/images/ICON_phone.svg" alt=""></i>';
      html += '        <p>Call Us</p>';
      html += '      </a>';
      html += '      <a href="mailto:birkenstockbondi@gmail.com">';
      html += '        <i><img src="'+ BASEURL + '/assets/images/ICON_arobase.svg" alt=""></i>';
      html += '        <p>Email Us</p>';
      html += '      </a>';
      html += '    </div>';
      html += '  </div>';
      html += '</div>';
      $('body').append(html);
}
quickcontact();


var toogle_detail_information = true;
function launch_detail_information(){
  if(toogle_detail_information){
    $('a.quick_contact_button img:nth-child(1)').hide(0);
    $('a.quick_contact_button img:nth-child(2)').show(0);
    $('div.quick_contact div.content').show(0);
    toogle_detail_information = false;
  }else{
    $('a.quick_contact_button img:nth-child(1)').show(0);
    $('a.quick_contact_button img:nth-child(2)').hide(0);
    $('div.quick_contact div.content').hide(0);
    toogle_detail_information = true;
  }
}