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

function newsletter_verification(){
  var open_gate = true;
  var email = $('input#input_newsletter').val();
  $('input#input_newsletter').removeClass('wrong');
  if(email == ''){ $('input#input_newsletter').addClass('wrong'); open_gate = false; }else{ if ((email.indexOf("@")>=0)&&(email.indexOf(".")>=0)){}else{ $('input#input_newsletter').addClass('wrong'); open_gate = false;} }

  if(open_gate){ $("form#form_newsletter").submit(); }
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
      html += '<a class="quick_contact_button" onclick="launch_detail_information();" href="#"><img src="http://localhost/birkenstock/images/ICON_mail.svg" alt=""><img style="display: none;" src="http://localhost/birkenstock/images/ICON_cross.svg" alt=""></a>';
      html += '  <div class="content" style="display:none;">';
      html += '    <h4>Birkenstock<br>7/178 Campbell Parade, Sydney NSW</h4>';
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
      html += '        <div class="days_container">Monday - Friday</div>';
      html += '        <div class="hours_container">10am - 6pm</div>';
      html += '      </div>';
      html += '    </div>';
      html += '    <div class="external_link">';
      html += '      <a href="">',
      html += '        <i><img src="http://localhost/birkenstock/images/ICON_location.svg" alt=""></i>';
      html += '        <p>Get Direction</p>';
      html += '      </a>';
      html += '      <a href="">';
      html += '        <i><img src="http://localhost/birkenstock/images/ICON_phone.svg" alt=""></i>';
      html += '        <p>Call Us</p>';
      html += '      </a>';
      html += '      <a href="">';
      html += '        <i><img src="http://localhost/birkenstock/images/ICON_arobase.svg" alt=""></i>';
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



function $_GET(param){
  var vars = {};
  window.location.href.replace( location.hash, '' ).replace(/[?&]+([^=&]+)=?([^&]*)?/gi, function( m, key, value ) {
      vars[key] = value !== undefined ? value : '';
  });
  if( param ){
    return vars[param] ? vars[param] : null;  
  }
}