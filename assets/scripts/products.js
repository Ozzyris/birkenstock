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
    for (i=0; i<products.length; i++){
      var nb_of_tags = ((products[i].tag.length)-1);
      if ( filters.collection == 'seasonal' ){
        if( products[i].tag[nb_of_tags] == filters.collection ){
          provisory_product_collection.push(products[i]);
        }
      }else if( filters.collection == 'classic' ){
        if( products[i].tag[nb_of_tags] != 'seasonal' ){
          provisory_product_collection.push(products[i]);
        }
      }
    }
  }else{ provisory_product_collection = products; }
  //console.log( 'Stage 1: ' + provisory_product_collection.length );

  // GENDER FILTER
  if(filters.gender != 'all'){
    for (i=0; i<provisory_product_collection.length; i++){

      provisory_product_collection[i].gender.forEach(function(item, index){
        if( item == filters.gender){
          provisory_product_gender.push(provisory_product_collection[i]);
        }
      });
    }
  }else{ provisory_product_gender = provisory_product_collection; }
  //console.log( 'Stage 2: ' + provisory_product_gender.length );

  // SIZE FILTER
    if(filters.size != 'all'){
      for (i=0; i<provisory_product_gender.length; i++){
        provisory_product_gender[i].size.forEach(function(item, index){
          if( item == filters.size ){
            provisory_product_size.push(provisory_product_gender[i]);
          }
        });
      }
    }else{ provisory_product_size = provisory_product_gender; }
  //console.log( 'Stage 3: ' + provisory_product_size.length );


  if(provisory_product_size.length == 0){ $('section#products div.noResult').show(0); }
  $('div.loaders').hide(0);
  $('section#products ul#products_wrapper li').hide(0);
  provisory_product_size.forEach(function(item_second, index_second){
    $('section#products ul#products_wrapper li#' + item_second.id).css('display', 'inline-block');
  });
}


function initalisation( filter ){
  var provisory_product = [];
  $('section#products div.noResult').hide(0);

  if(filter){
    filters = filter;
  }else{
    filters = { collection: 'all', gender: 'all', size: 'all' }
  }

  if(filter.collection ==  'all' && filter.gender ==  'all' ){
    provisory_product = products;
  }else if(filter.collection ==  'seasonal'){
    // COLLECTION FILTER
    for(i=0; i<products.length; i++){
      var nb_of_tags = (products[i].tag.length)-1;;
      if( products[i].tag[nb_of_tags] == filters.collection ){
          provisory_product.push(products[i]);
      }
    }
  }else if(filter.gender ==  'kids' || filter.gender ==  'men' || filter.gender ==  'women'){
    // GENDER FILTER
    for (j=0; j<products.length; j++){
      products[j].gender.forEach(function(item, index){
       
        if( item == filters.gender){
          provisory_product.push(products[j]);
        }
      });
    }
  } 

  products.forEach(function(item, index){
    var colour = item.color.replace(/\s+/g, '');
    var image_name = item.name.replace(/\s+/g, '');
    var product_id =  item.tag[0];
    image_name += '_' + item.tag[0];
    product_id += '_' + colour.toLowerCase();
    image_name += '_' + colour.toLowerCase();
    var class_element = '';
    var style_long_text = '';
    var address = 'products/'; 
    var addressforimage = 'products/thumb/'; 
    item.gender.forEach(function(itemBis, indexBis){
      if(itemBis == 'kids'){
        address += 'kids/';
        addressforimage += 'kids/';
        class_element += ' kids';
      }
    });
    item.tag.forEach(function(itemBis, indexBis){
      if(itemBis == 'seasonal'){
        address += 'seasonal/';
        addressforimage += 'seasonal/';
        class_element += ' seasonal';
      }
    });
    if(addressforimage == 'thumb/'){ addressforimage += 'classical/'; }
    var address_image = addressforimage + image_name + '.png';
    var name = item.name;
    var address_href = address + name.replace(/\s+/g, '') + '/' + product_id;
    name = item.name.toUpperCase();
    if(name.length > 10){ style_long_text = 'style="font-size: 2.8rem; bottom: -4px;"'; }


    var html = ' <li id="' + item.id + '">';
        html += ' <a href="product_details/' + item.id + '">';
        html += '   <img src="assets/images/' + address_image + '" alt="' + name + '">';
        html += '   <h3 ' + style_long_text + '>' + name + '</h3>';
        html += ' </a>';
        html += '</li>';
    $('section#products ul#products_wrapper').prepend(html);
  });


  $('section#products ul#products_wrapper li').hide(0);
  $('div.loaders').hide(0);
  provisory_product.forEach(function(item_second, index_second){
    $('section#products ul#products_wrapper li#' + item_second.id).css('display', 'inline-block');
  });
  setTimeout(function(){ resize_image(); }, 300);
}

function resize_image(){
  var width = $('section#products ul.Three_column li a').outerWidth();
  $('section#products ul.Three_column li a').css('height', width-20);
}

  $("#points").change(function(){
    var value = $(this).val();
    if(value == min_slider){ value = 'All'; }
    $(this).parent("div").children("a").text(value);
    filtering( 'size', value )
  });

// FUNCTION GET DATA FROM URL
function GET(){
  var collection = $_GET('collection');
  if(collection != null){
    collection = collection.replace('#', '');
    switch(collection){
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
GET();

$( window ).resize(function() { resize_image() });