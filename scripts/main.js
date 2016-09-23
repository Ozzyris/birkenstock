/*$(document).ready(function(){
    $(this).scrollTop(0);
});*/

function sidemenu(){
	$('#hamburger_icon').toggleClass('active');
	$('#left_menu').toggleClass('active');
}

var body = $("body, html");

body.on("scroll", function(e) {
  if(this.scrollTop > (window.innerHeight-50)) {
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
  console.log(open_hours[day].open + 'h - ' + open_hours[day].close + 'h');
  if(hours >= open_hours[day].open && hours <= open_hours[day].close){ return 'Open'; }else{ return 'Close'; }
}


function quickcontact(){
  var html = '<div class="quick_contact" class="m-scrollable-filter">';
      html += '<a class="quick_contact_button" onclick="launch_detail_information();" href="#"><img src="images/ICON_mail.svg" alt=""><img style="display: none;" src="images/ICON_cross.svg" alt=""></a>';
      html += '  <div class="content" style="display:none;">';
      html += '    <h4>Birkenstock<br>7/178 Campbell Parade, Sydney NSW</h4>';
      html += '    <div class="open_hours">';
      html += '      <h5 class="open">' + isOpen() + ' Now</h5>';
      html += '      <div class="line_containter">';
      html += '        <div class="days_container">Monday - Friday</div>';
      html += '        <div class="hours_container">10am -8pm</div>';
      html += '      </div>';
      html += '      <div class="line_containter">';
      html += '        <div class="days_container">Saturday</div>';
      html += '        <div class="hours_container">9am - 9pm</div>';
      html += '      </div>';
      html += '      <div class="line_containter">';
      html += '        <div class="days_container">Monday - Friday</div>';
      html += '        <div class="hours_container">11am - 10pm</div>';
      html += '      </div>';
      html += '    </div>';
      html += '    <div class="external_link">';
      html += '      <a href="">',
      html += '        <i><img src="images/ICON_location.svg" alt=""></i>';
      html += '        <p>Get Direction</p>';
      html += '      </a>';
      html += '      <a href="">';
      html += '        <i><img src="images/ICON_phone.svg" alt=""></i>';
      html += '        <p>Call Us</p>';
      html += '      </a>';
      html += '      <a href="">';
      html += '        <i><img src="images/ICON_arobase.svg" alt=""></i>';
      html += '        <p>Email Us</p>';
      html += '      </a>';
      html += '    </div>';
      html += '  </div>';
      html += '</div>';

      console.log('html');

      $('body').append(html);
}
quickcontact();