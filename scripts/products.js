function filter_menu(){
	$('section#products div.filter').toggleClass('active');
	$('section#products div.filter span.arrow_button').toggleClass('active');
}

$("section#products div.filter div.filter_group").on("click", function(e){
  e.preventDefault();
  if($(this).hasClass("active")) {
    $(this).removeClass("active");
    $(this).children("div").children("ul").slideUp("fast");
  } else {
    $(this).addClass("active");
    $(this).children("div").children("ul").slideDown("fast");
  }
});

$("section#products div.filter div.filter_group div.dropdown_content ul.dropdown li").on("click", function(e){
	e.preventDefault();
	$(this).parent("ul").parent("div").children("p").text($(this).children("a").text());
	filtering( $(this).parent("ul").parent("div").parent("div").children("h4").text(), $(this).children("a").text() )
});



function filtering( type, filter ){
	console.log(type + ' | ' + filter);
}