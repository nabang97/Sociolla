<script type="text/javascript">

function insertProductType(){
  var id = document.getElementById('id').value;
  var name = document.getElementById('name').value;
  if (id == "" || name == "") {
    console.log("jangan kosong");
  }else{
    console.log("Insert Data");
    $.ajax({ /* THEN THE AJAX CALL */
        url: "../_action/inputs/insertType.php",
        method : "POST",
        data:{'id':id, 'name':name},
        async : true,
        dataType : 'text',
        success: function(data){
          DisplayProductType();
         //  $('#tableTypes').html(data);
         // alert("success insert data!");
        }
      });//end ajax
  }
} //end function

function insertProductCategory(){
  var id = document.getElementById('id').value;
  var name = document.getElementById('name').value;
  var product_type = document.getElementById('product_type').value;
  console.log(product_type);
  if (id == "" || name == "" || product_type == "") {
    console.log("jangan kosong");
  }else{
    console.log("Insert Data");
    $.ajax({ /* THEN THE AJAX CALL */
        url: "../_action/inputs/insertCategory.php",
        method : "POST",
        data:{'id':id, 'name':name, 'product_type':product_type},
        async : true,
        dataType : 'text',
        success: function(data){
          DisplayProductCategory();
         //  $('#tableTypes').html(data);
         // alert("success insert data!");
        }
      });//end ajax
  }
} //end function

function insertProductSubCategory(){
  var id = document.getElementById('id').value;
  var name = document.getElementById('name').value;
  var product_category = document.getElementById('product_category').value;
  console.log("datanya: "+  id + "-" + name + "-"+ product_category + "");
  if (id == "" || name == "" || product_category == "") {
    console.log("jangan kosong");
  }else{
    console.log("Insert Data");
    $.ajax({ /* THEN THE AJAX CALL */
        url: "../_action/inputs/insertSubCategory.php",
        method : "POST",
        data:{'id':id, 'name':name, 'product_category':product_category},
        async : true,
        dataType : 'text',
        success: function(data){

          DisplayProductSubCategory();
         //  $('#tableTypes').html(data);
         // alert("success insert data!");
        }
      });//end ajax
  }
} //end function

function insertBrand(){
  var id = document.getElementById('id').value;
  var name = document.getElementById('name').value;
  if (id == "" || name == "") {
    console.log("jangan kosong");
  }else{
    console.log("Insert Data");
    $.ajax({ /* THEN THE AJAX CALL */
        url: "../_action/inputs/insertBrand.php",
        method : "POST",
        data:{'id':id, 'name':name},
        async : true,
        dataType : 'text',
        success: function(data){

          DisplayBrands();
         //  $('#tableTypes').html(data);
         // alert("success insert data!");
        }
      });//end ajax
  }
} //end function

function insertVariantSize(){
  var name = document.getElementById('name').value;
  var value = document.getElementById('value').value;
  if (name == "" || value == "") {
    console.log("jangan kosong");
  }else{
    console.log("Insert Data");
    $.ajax({ /* THEN THE AJAX CALL */
        url: "../_action/inputs/insertVariantSize.php",
        method : "POST",
        data:{'name':name, 'value':value},
        async : true,
        dataType : 'text',
        success: function(data){

          DisplayVariantSizes();
         //  $('#tableTypes').html(data);
         // alert("success insert data!");
        }
      });//end ajax
  }
} //end function

function AddSize(){
  var add = document.getElementById('add-size').value.split(';');
  var name=add[0];
  var value=add[1];

  if (name == "" || value == "") {
    console.log("jangan kosong");
  }else{
    console.log("Insert Data");
    $.ajax({ /* THEN THE AJAX CALL */
        url: "../_action/inputs/insertVariantSize.php",
        method : "POST",
        data:{'name':name, 'value':value},
        async : true,
        dataType : 'text',
        success: function(data){
          alert('success');
          // DisplayVariantSizes();
         //  $('#tableTypes').html(data);
         // alert("success insert data!");
        }
      });//end ajax
  }
} //end function

function insertVariantWeight(){
  var name = document.getElementById('name').value;
  var value = document.getElementById('value').value;
  if (name == "" || value == "") {
    console.log("jangan kosong");
  }else{
    console.log("Insert Data");
    $.ajax({ /* THEN THE AJAX CALL */
        url: "../_action/inputs/insert.php",
        method : "POST",
        data:{'weight':1,'name':name, 'value':value},
        async : true,
        dataType : 'text',
        success: function(data){

          DisplayVariantWeights();
         //  $('#tableTypes').html(data);
         // alert("success insert data!");
        }
      });//end ajax
  }
} //end function

function insertProductVariant(){
  var product = document.getElementById('select-product').value;
  var price = document.getElementById('price').value;
  var discount = document.getElementById('discount').value;
  var photo_url = document.getElementById('photo_url').value;
  var stock = document.getElementById('stock').value;
  var shade =document.getElementById('select-shade').value;
  var color =document.getElementById('select-color').value;
  var size =document.getElementById('select-size').value;
  var weight =document.getElementById('select-weight').value;

  console.log(product+"|"+price+"|"+discount+"|"+photo_url+"|"+stock+"|"+shade+"|"+color+"|"+size+"|"+weight+"");

  if (product == "") {
    console.log("jangan kosong");
  }else{
    console.log("Insert Data");
    $.ajax({ /* THEN THE AJAX CALL */
        url: "../_action/inputs/insert.php",
        method : "POST",
        data:{
          'product_variant':1,
          'product':product,
          'price':price,
          'discount':discount,
          'photo_url':photo_url,
          'shade':shade,
          'color':color,
          'size':size,
          'weight':weight,
          'stock':stock
        },
        async : true,
        dataType : 'text',
        success: function(data){
            alert('success');
          //DisplayVariantWeights();
         //  $('#tableTypes').html(data);
         // alert("success insert data!");
        }
      });//end ajax
  }
} //end function

function AddWeight(){
  var add = document.getElementById('add-weight').value.split(';');
  var name = add[0];
  var value=add[1];
  if (name == "" || value == "") {
    console.log("jangan kosong");
  }else{
    console.log("Insert Data");
    $.ajax({ /* THEN THE AJAX CALL */
        url: "../_action/inputs/insert.php",
        method : "POST",
        data:{'weight':1,'name':name, 'value':value},
        async : true,
        dataType : 'text',
        success: function(data){

          // DisplayVariantWeights();
         //  $('#tableTypes').html(data);
         // alert("success insert data!");
        }
      });//end ajax
  }
} //end function

function insertVariantColor(){
  var name = document.getElementById('name').value;
  var value = document.getElementById('value').value;
  if (name == "" || value == "") {
    console.log("jangan kosong");
  }else{
    console.log("Insert Data");
    $.ajax({ /* THEN THE AJAX CALL */
        url: "../_action/inputs/insert.php",
        method : "POST",
        data:{'color':1,'name':name, 'value':value},
        async : true,
        dataType : 'text',
        success: function(data){

          DisplayVariantColors();
         //  $('#tableTypes').html(data);
         // alert("success insert data!");
        }
      });//end ajax
  }
} //end function

function AddColor(){
  var add = document.getElementById('add-color').value.split(';');
  var name=add[0];
  var value=add[1];

  if (name == "" || value == "") {
    console.log("jangan kosong");
  }else{
    console.log("Insert Data");
    $.ajax({ /* THEN THE AJAX CALL */
        url: "../_action/inputs/insert.php",
        method : "POST",
        data:{'color':1,'name':name, 'value':value},
        async : true,
        dataType : 'text',
        success: function(data){
          alert('success');
          // DisplayVariantColors();
         //  $('#tableTypes').html(data);
         // alert("success insert data!");
        }
      });//end ajax
  }
} //end function

function insertVariantShade(){
  var name = document.getElementById('name').value;
  if (name == "") {
    alert('fill all the blank');
  }else{
    console.log("Insert Data");
    $.ajax({ /* THEN THE AJAX CALL */
        url: "../_action/inputs/insert.php",
        method : "POST",
        data:{'shade':1,'name':name},
        async : true,
        dataType : 'text',
        success: function(data){

          DisplayVariantShades();
         //  $('#tableTypes').html(data);
         // alert("success insert data!");
        }
      });//end ajax
  }
} //end function

function AddShade(){
  var name = document.getElementById('add-shade').value;
  if (name == "") {
    alert('fill all the blank');
  }else{
    console.log("Insert Data");
    $.ajax({ /* THEN THE AJAX CALL */
        url: "../_action/inputs/insert.php",
        method : "POST",
        data:{'shade':1,'name':name},
        async : true,
        dataType : 'text',
        success: function(data){
          alert('success');
          // DisplayVariantShades();
         //  $('#tableTypes').html(data);
         // alert("success insert data!");
        }
      });//end ajax
  }
} //end function


function insertProduct(){
  var id = document.getElementById('code').value;
  var name = document.getElementById('name').value;
  var desc = document.getElementById('description').value;
  var subcategory = document.getElementById('product_subcategory').value;
  var brand = document.getElementById('select-brand').value;
  console.log("ds: "+subcategory);
  if (id == "" || name == "" || desc =="" || subcategory =="" || brand=="") {
    alert('fill all the fields!')
  }else{
    console.log("Insert Data");
    $.ajax({ /* THEN THE AJAX CALL */
        url: "../_action/inputs/insertProduct.php",
        method : "POST",
        data:{
          'id':id,
          'name':name,
          'desc': desc,
          'subcategory': subcategory,
          'brand': brand
        },
        async : true,
        dataType : 'text',
        success: function(data){
        alert('Success');
          DisplayProducts();
         //  $('#tableTypes').html(data);
         // alert("success insert data!");
        }
      });//end ajax
  }
} //end function

function acceptOrder(ordernum){
  var order_number = document.getElementById('nomor-order').textContent;
  var customer = document.getElementById('email-customer').textContent;
  var status = document.getElementById('order-status').textContent;
  console.log(order_number+"|"+customer+"|"+status+"");
    $.ajax({ /* THEN THE AJAX CALL */
        url: "../_action/inputs/insert.php",
        method : "POST",
        data:{'accept-order':1, 'code':order_number},
        async : true,
        success: function(data){
          // console.log(data);

          //$('#tableSubCategories').find('tbody').html(data);
        }
      });//end ajax
} //end function
</script>
