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
var colors = [];  // colors for filters
var texture = []; // texture for filters
var sizes = [];   // sizes for filters
var min_slider = '32';


function filtering( type, filter ){
  if(type != 'initial'){
    filter = filter.toLowerCase();
    console.log(type + ' | ' + filter);
    filters[""+type+""] = filter;
  }

  var provisory_product = [];

  // COLLECTION FILTER
  if(filters.collection != 'all'){
    for (i=0; i<products.length; i++){

        var nb_of_tags = (products[i].tag.length)-1;;

        if ( filters.collection == 'seasonal'){
          if ( products[i].tag[nb_of_tags] == filters.collection ){
            provisory_product.push(products[i]);
          }
        }else{
           if ( products[i].tag[nb_of_tags] != 'seasonal' ){
            provisory_product.push(products[i]);
          }
        }
    }
  }

  // GENDER FILTER
  if(filters.gender != 'all'){
    if(provisory_product == ''){
      for (i=0; i<products.length; i++){
        products[i].gender.forEach(function(item, index){
          if( item === filters.gender){
            provisory_product.push(products[i]);
          }
        });
      }
    }else{
      console.log('data from the provisory product');
    }
  }

  // SIZE FILTER
  if(filters.size != 'all'){
    if(provisory_product == ''){
      for (i=0; i<products.length; i++){
        products[i].size.forEach(function(item, index){
          //console.log(item + ' | ' + filters.size);
          if ( item == filters.size ){
            provisory_product.push(products[i]);
          }
        });
      }
    }else{
      console.log('data from the provisory product');
    }
  }

  // COLOR FILTER
  if(filters.color != 'all'){
    if(provisory_product == ''){
      for (i=0; i<products.length; i++){
        var product = products[i].color.toLowerCase();
        //console.log(product + ' | ' + filters.color);
        if ( product === filters.color){
            provisory_product.push(products[i]);
        }
      }
    }else{
      console.log('data from the provisory product');
    }
  }

  // TEXTURE FILTER
  if(filters.texture != 'all'){
    if(provisory_product == ''){
      for (i=0; i<products.length; i++){
        products[i].tag.forEach(function(item, index){
          //console.log(item + ' | ' + filters.texture);
          if ( item == filters.texture ){
            provisory_product.push(products[i]);
          }
        });
      }
    }else{
      console.log('data from the provisory product');
    }
  }

  if(provisory_product == ''){ provisory_product = products; } // IF NO FILTER APPLY
  
  console.log(provisory_product);
  $('section#products ul#products_wrapper li').hide(0);
  provisory_product.forEach(function(item, index){
    $('section#products ul#products_wrapper li:nth-child(' + (index+1) + ')').show(0);
  });
}


function initalisation( filter ){
  if(filter){
    filters = filter;
  }else{
    filters = {
      collection: 'all',
      gender: 'all',
      size: 'all',
      color: 'all',
      texture: 'all'
    }
  }

  var provisory_product = [];

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
    item.gender.forEach(function(itemBis, indexBis){
      if(itemBis == 'kids'){
        address += 'kids/';
        class_element += ' kids';
      }
    });
    item.tag.forEach(function(itemBis, indexBis){
      if(itemBis == 'seasonal'){
        address += 'seasonal/';
        class_element += ' seasonal';
      }
    });
    if(address == 'products/'){
      address += 'classical/';
    }
    var address_image = address + image_name + '.png';
    var name = item.name;
    var address_href = address + name.replace(/\s+/g, '') + '.html';
    name = item.name.toUpperCase();
    if(name.length > 10){ style_long_text = 'style="font-size: 2.8rem; bottom: -4px;"'; }


    var html = ' <li id="' + item.id + '">';
        html += ' <a href="http://localhost/birkenstock/views/' + address_href + '?id=' + product_id + '">';
        html += '   <img src="http://localhost/birkenstock/images/' + address_image + '" alt="' + name + '">';
        html += '   <h3 ' + style_long_text + '>' + name + '</h3>';
        html += ' </a>';
        html += '</li>';
    $('section#products ul#products_wrapper').prepend(html);
  });


  $('section#products ul#products_wrapper li').hide(0);
  console.log(provisory_product.length);
  provisory_product.forEach(function(item_second, index_second){
    console.log(item_second.picture);
    $('section#products ul#products_wrapper li#' + item_second.id).show(0);
  });
  resize_image();
}

function resize_image(){
  var width = $('section#products ul.Three_column li a').width();
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
      case 'all':
        initalisation( filters = { collection: 'all', gender: 'all', size: 'all', color: 'all', texture: 'all' });
        break;
      case 'seasonal':
        initalisation( filters = { collection: 'seasonal', gender: 'all', size: 'all', color: 'all', texture: 'all' });
          $('section#products div.filter div.filter_group:nth-child(1) div.dropdown_content p.choice').text('Seasonal');
        break;
      case 'kids':
          initalisation( filters = { collection: 'all', gender: 'kids', size: 'all', color: 'all', texture: 'all' });
          $('section#products div.filter div.filter_group:nth-child(2) div.dropdown_content p.choice').text('Kids');
        break;
      case 'men':
          initalisation( filters = { collection: 'all', gender: 'men', size: 'all', color: 'all', texture: 'all' });
          $('section#products div.filter div.filter_group:nth-child(2) div.dropdown_content p.choice').text('Men');
        break;
      case 'women':
          initalisation( filters = { collection: 'all', gender: 'women', size: 'all', color: 'all', texture: 'all' });
          $('section#products div.filter div.filter_group:nth-child(2) div.dropdown_content p.choice').text('Women');
        break;
        default:
          break;
    }
  }else{
    initalisation( filters = { collection: 'all', gender: 'all', size: 'all', color: 'all', texture: 'all' });
  }
}
GET();

$( window ).resize(function() { resize_image() });

