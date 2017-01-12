var filters = [];
var sizes = [];   // sizes for filters
var min_slider = '32';


function filtering( type, filter ){
  $('div.loaders').show(0);
  var provisory_product_collection = [];
  var provisory_product_gender = [];
  var provisory_product_size = [];
  $('section#products div.noResult').hide(0);
  if(type != 'initial'){ filter = filter.toLowerCase(); filters[""+type+""] = filter; }

  // COLLECTION FILTER
  if(filters.collection != 'all'){
    for(var h=0; h<products.length; h++){
      if( filters.collection == products[h].category ){
        provisory_product_collection.push( products[h] );
      }
    }
  }else{ provisory_product_collection = products; }

  // GENDER FILTER
  if(filters.gender != 'all'){
    for(var i=0; i<provisory_product_collection.length; i++){
      for(var j=0; j<provisory_product_collection[i].gender.length; j++){
        if( filters.gender == provisory_product_collection[i].gender[j] ){
          provisory_product_gender.push(provisory_product_collection[i]);
        }
      }
    }
  }else{ provisory_product_gender = provisory_product_collection; }

  // SIZE FILTER
  if(filters.size != 'all'){
    for(var k=0; k<provisory_product_gender.length; k++){
      for( var l=0; l<provisory_product_gender[k].size.length; l++){
        if( filters.size == provisory_product_gender[k].size[l] ){
          provisory_product_size.push(provisory_product_gender[k]);
        }
      }
    }
  }else{ provisory_product_size = provisory_product_gender; }

  $('div.loaders').hide(0);
  if(provisory_product_size.length == 0){ $('section#products div.noResult').show(0); }
  $('section#products ul#products_wrapper li').hide(0);
  for (i=0; i<provisory_product_size.length; i++){
    $('section#products ul#products_wrapper li#product_' + provisory_product_size[i].id).css('display', 'inline-block');
  }
}


function initalisation( filter ){
  var provisory_product = [],
      global_HTML = '';
  $('div.loaders').show(0);

  for (var i = products.length - 1; i >= 0; i--){
    var name = products[i].name.replace("_"," ").toUpperCase(),
        product_id =  products[i].id,
        category = products[i].category,
        thumb = products[i].thumb,
        style_long_text = '';
    if(name.length > 10){ style_long_text = 'style="font-size: 2.8rem; bottom: -4px;"'; }
    var html = ' <li id="product_' + product_id + '">';
        html += ' <a href="' + BASEURL + 'product-details/' + products[i].name + '/' + category + '/' + product_id + '">';
        html += '   <img src="' + BASEURL + thumb + '" alt="' + name + '">';
        html += '   <h3 ' + style_long_text + '>' + name + '</h3>';
        html += ' </a>';
        html += '</li>';

        global_HTML += html;
  }

  $('section#products ul#products_wrapper').prepend(global_HTML);
  $('section#products ul#products_wrapper li').hide(0);
  setTimeout(function(){ resize_image(); }, 300);
  filtering( 'initial' );
}


// CHANGE THE SIZE FILTER
$("#points").change(function(){
  var value = $(this).val();
  if(value == min_slider){ value = 'All'; }
  $(this).parent("div").children("a").text(value);
  filtering( 'size', value )
});

// FUNCTION GET DATA FROM URL
function GET( GET_filter ){
  if(GET_filter != null){ 
    GET_filter = GET_filter.replace('#', '');
    switch(GET_filter){
      case 'all':filters
        initalisation( filters = { collection: 'all', gender: 'all', size: 'all'});
        break;
      case 'seasonal':
        initalisation( filters = { collection: 'seasonal', gender: 'all', size: 'all'});
          $('section#products div.filter div.filter_group:nth-child(1) div.dropdown_content p.choice').text('Seasonal');
        break;
      case 'kids':
          initalisation( filters = { collection: 'all', gender: 'kids', size: 'all'});
          $('section#products div.filter div.filter_group:nth-child(2) div.dropdown_content p.choice').text('Kids');
        break;
      case 'men':
          initalisation( filters = { collection: 'all', gender: 'men', size: 'all'});
          $('section#products div.filter div.filter_group:nth-child(2) div.dropdown_content p.choice').text('Men');
        break;
      case 'women':
          initalisation( filters = { collection: 'all', gender: 'women', size: 'all'});
          $('section#products div.filter div.filter_group:nth-child(2) div.dropdown_content p.choice').text('Women');
        break;
        default:
          initalisation( filters = { collection: 'all', gender: 'all', size: 'all'});
          break;
    }
  }else{
    initalisation( filters = { collection: 'all', gender: 'all', size: 'all'});
  }
}
GET( GET_filter );

//RESIZE THE PICTURES
function resize_image(){
  console.log($('section#products ul.Three_column li a').outerWidth());
  var width = $('section#products ul.Three_column li a').outerWidth();
  $('section#products ul.Three_column li a').css('height', width-20);
}
$( window ).resize(function() { resize_image() });

// MENU FILTER
function filter_menu(){
  $('section#products div.filter').toggleClass('active');
  $('section#products div.filter span.arrow_button').toggleClass('active');
}

$("section#products div.filter div.filter_group").on("click", function(e){
  e.preventDefault();
  if( $(this).children("h4").data("type") == 'size'){ return false; }
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
  filtering( $(this).parent("ul").parent("div").parent("div").children("h4").data("type"), $(this).children("a").text());
});