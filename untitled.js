// COLLECTION FILTER
  if(filters.collection != 'all'){
    if(inception_product.length == products.length){
      console.log('alfsd');
      for (i=0; i<products.length; i++){
        var nb_of_tags = ((products[i].tag.length)-1);
        if ( filters.collection == 'seasonal' ){
          if( products[i].tag[nb_of_tags] == filters.collection ){
              provisory_product.push(products[i]);
          }
        }else if( filters.collection == 'classic' ){
          if( products[i].tag[nb_of_tags] != 'seasonal' ){
            products[i].gender.forEach(function(item, index){
              if( item != 'kids'){
                console.log('alex');
                provisory_product.push(products[i]);
              }
            });
          }
        }
      }
    }else{
      for (i=0; i<inception_product.length; i++){
        var nb_of_tags = ((inception_product[i].tag.length)-1);
        if ( filters.collection == 'seasonal' ){
          if( inception_product[i].tag[nb_of_tags] == filters.collection ){
            provisory_product.push(inception_product[i]);
          }
        }else if( filters.collection == 'classic' ){
          if( inception_product[i].tag[nb_of_tags] != 'seasonal' ){
            inception_product[i].gender.forEach(function(item, index){
              if( item != 'kids'){
                console.log('alex');
                provisory_product.push(inception_product[i]);
              }
            });
          }
        }
      }
    }
  }

  // GENDER FILTER
  if(filters.gender != 'all'){
    if(inception_product.length == products.length){
      for (i=0; i<products.length; i++){
        products[i].gender.forEach(function(item, index){
          if( item == filters.gender){
            provisory_product.push(products[i]);
          }
        });
      }
    }else{
      for (i=0; i<products.length; i++){
        products[i].gender.forEach(function(item, index){
          if( item == filters.gender){
            provisory_product.push(products[i]);
          }
        });
      }
    }
  }

  // SIZE FILTER
  if(filters.size != 'all'){
    if(inception_product.length == products.length){
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

  if(provisory_product == ''){ provisory_product = products; } // IF NO FILTER APPLY