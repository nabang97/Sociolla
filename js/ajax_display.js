  function getProduct(code,size_id,shade_id,weight_id){

    if (code == "") {
      console.log("jangan kosong");
    }else{
      console.log("Display" + code);
      $.ajax({ /* THEN THE AJAX CALL */
          url: "_action/gets/getDetail.php",
          method : "POST",
          data:{
            'selected-product-variant':1,
            'code':code,
            'size_id':size_id,
            'shade_id':shade_id,
            'weight_id':weight_id,
          },
          async : true,
          dataType : 'text',
          success: function(data){
            console.log(data);
            window.location.href = "detail_product.php?"+data+"";
           //  $('#tableTypes').html(data);
           // alert("success insert data!");
          }
        });//end ajax
    }
  }

  $(document).ready(function(){ /* PREPARE THE SCRIPT */
      // check color
       // check sizes
       // check shades
       // check weights
  });
