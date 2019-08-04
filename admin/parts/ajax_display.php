<script type="text/javascript">
function DisplayProductType(){
    $.ajax({ /* THEN THE AJAX CALL */
        url: "../_action/gets/getDisplay.php",
        method : "POST",
        data:{'display-table':1},
        async : true,
        success: function(data){
          $('#tableTypes').dataTable().fnClearTable();
          $('#tableTypes').DataTable().destroy();
          $('#tableTypes').find('tbody').append(data);
          $('#tableTypes').DataTable().draw();
        }
      });//end ajax
} //end function

function DisplayProductCategory(){
    $.ajax({ /* THEN THE AJAX CALL */
        url: "../_action/gets/getDisplay.php",
        method : "POST",
        data:{'display-category':1},
        async : true,
        success: function(data){

        if (data != "") {
          console.log("ada");
          //$('#tableCategories').find('tbody').html(data);
          $('#tableCategories').dataTable().fnClearTable();
          $('#tableCategories').DataTable().destroy();
          $('#tableCategories').find('tbody').append(data);
          $('#tableCategories').DataTable().draw();
          // $('#tableCategories').find('tbody').html(data);
        }else {
          console.log("kosong");
        }
        }
      });//end ajax
} //end function

function DisplayProductSubCategory(){
    $.ajax({ /* THEN THE AJAX CALL */
        url: "../_action/gets/getDisplay.php",
        method : "POST",
        data:{'display-subcategory':1},
        async : true,
        success: function(data){
          $('#tableSubCategories').dataTable().fnClearTable();
          $('#tableSubCategories').DataTable().destroy();
          $('#tableSubCategories').find('tbody').append(data);
          $('#tableSubCategories').DataTable().draw();
          //$('#tableSubCategories').find('tbody').html(data);
        }
      });//end ajax
} //end function

function DisplayBrands(){
    $.ajax({ /* THEN THE AJAX CALL */
        url: "../_action/gets/getDisplay.php",
        method : "POST",
        data:{'display-brands':1},
        async : true,
        success: function(data){
          $('#tableBrands').dataTable().fnClearTable();
          $('#tableBrands').DataTable().destroy();
          $('#tableBrands').find('tbody').append(data);
          $('#tableBrands').DataTable().draw();
          //$('#tableSubCategories').find('tbody').html(data);
        }
      });//end ajax
} //end function

function DisplayVariantSizes(){
    $.ajax({ /* THEN THE AJAX CALL */
        url: "../_action/gets/getDisplay.php",
        method : "POST",
        data:{'display-sizes':1},
        async : true,
        success: function(data){
          $('#tableSizes').dataTable().fnClearTable();
          $('#tableSizes').DataTable().destroy();
          $('#tableSizes').find('tbody').append(data);
          $('#tableSizes').DataTable().draw();
          //$('#tableSubCategories').find('tbody').html(data);
        }
      });//end ajax
} //end function

function DisplayVariantColors(){
    $.ajax({ /* THEN THE AJAX CALL */
        url: "../_action/gets/getDisplay.php",
        method : "POST",
        data:{'display-colors':1},
        async : true,
        success: function(data){
          $('#tableColors').dataTable().fnClearTable();
          $('#tableColors').DataTable().destroy();
          $('#tableColors').find('tbody').append(data);
          $('#tableColors').DataTable().draw();
          //$('#tableSubCategories').find('tbody').html(data);
        }
      });//end ajax
} //end function

function DisplayVariantWeights(){
    $.ajax({ /* THEN THE AJAX CALL */
        url: "../_action/gets/getDisplay.php",
        method : "POST",
        data:{'display-weights':1},
        async : true,
        success: function(data){
          $('#tableWeights').dataTable().fnClearTable();
          $('#tableWeights').DataTable().destroy();
          $('#tableWeights').find('tbody').append(data);
          $('#tableWeights').DataTable().draw();
          //$('#tableSubCategories').find('tbody').html(data);
        }
      });//end ajax
} //end function

function DisplayVariantShades(){
    $.ajax({ /* THEN THE AJAX CALL */
        url: "../_action/gets/getDisplay.php",
        method : "POST",
        data:{'display-shades':1},
        async : true,
        success: function(data){
          $('#tableShades').dataTable().fnClearTable();
          $('#tableShades').DataTable().destroy();
          $('#tableShades').find('tbody').append(data);
          $('#tableShades').DataTable().draw();
          //$('#tableSubCategories').find('tbody').html(data);
        }
      });//end ajax
} //end function


function DisplayProducts(){
    $.ajax({ /* THEN THE AJAX CALL */
        url: "../_action/gets/getDisplay.php",
        method : "POST",
        data:{'display-products':1},
        async : true,
        success: function(data){
          console.log(data);
          $('#tableProducts').dataTable().fnClearTable();
          $('#tableProducts').DataTable().destroy();
          $('#tableProducts').find('tbody').append(data);
          $('#tableProducts').DataTable().draw();
          //$('#tableSubCategories').find('tbody').html(data);
        }
      });//end ajax
} //end function

function acceptOrder(){
  var order_number = document.getElementById('nomor-order').textContent;
  var customer = document.getElementById('email-customer').textContent;
  var status = document.getElementById('order-status').textContent;
  console.log(order_number+"|"+customer+"|"+status+"");
    // $.ajax({ /* THEN THE AJAX CALL */
    //     url: "../_action/gets/getDisplay.php",
    //     method : "POST",
    //     data:{'display-products':1},
    //     async : true,
    //     success: function(data){
    //       console.log(data);
    //
    //       //$('#tableSubCategories').find('tbody').html(data);
    //     }
    //   });//end ajax
} //end function

function showOrderDetail(id){
  var order_number = document.getElementById('nomor-order').textContent;
  var customer = document.getElementById('email-customer').textContent;
  var status = document.getElementById('order-status').textContent;
  console.log(order_number+"|"+customer+"|"+status+"");
    $.ajax({ /* THEN THE AJAX CALL */
        url: "../_action/gets/getModal.php",
        method : "POST",
        data:{
          'modal-detail':1,
          'id':id
        },
        async : true,
        success: function(data){
          console.log(data['order_number']);

          //$('#tableSubCategories').find('tbody').html(data);
        }
      });//end ajax
} //end function

$(document).ready(function(){ /* PREPARE THE SCRIPT */
    $("#product_type").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
     var selected = $(this).val(); /* GET THE VALUE OF THE SELECTED DATA */
     //var dataString = "allbooks="+allbooks; /* STORE THAT TO A DATA STRING */
      console.log(selected);
       $.ajax({ /* THEN THE AJAX CALL */
          /* TYPE OF METHOD TO USE TO PASS THE DATA */
         url: "../_action/gets/getCategory.php",
         method : "POST",
         data:{'selected':selected},
         async : true,
         dataType : 'text',
         success: function(data){
          $('#product_category').html(data);
         }
       });
     });

     $("#product_category").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
      var selected = $(this).val(); /* GET THE VALUE OF THE SELECTED DATA */
      //var dataString = "allbooks="+allbooks; /* STORE THAT TO A DATA STRING */
       console.log(selected);
       $.ajax({ /* THEN THE AJAX CALL */
          /* TYPE OF METHOD TO USE TO PASS THE DATA */
         url: "../_action/gets/getSubCategory.php",
         method : "POST",
         data:{'selected':selected},
         async : true,
         dataType : 'text',
         success: function(data){
          $('#product_subcategory').html(data);
         }
       });
      });

      $("#select-brand").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
       var selectedBrand = $(this).val(); /* GET THE VALUE OF THE SELECTED DATA */
       var selectedSubCategory = document.getElementById('product_subcategory').value;
        console.log(selectedBrand + " : " + selectedSubCategory);
        $.ajax({ /* THEN THE AJAX CALL */
           /* TYPE OF METHOD TO USE TO PASS THE DATA */
          url: "../_action/gets/getOption.php",
          method : "POST",
          data:{'getproduct':1,'brand':selectedBrand, 'subcategory': selectedSubCategory},
          async : true,
          dataType : 'text',
          success: function(data){
           $('#select-product').html(data);
          }
        });
       });

       $("#product_subcategory").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
        var selectedSubCategory = $(this).val(); /* GET THE VALUE OF THE SELECTED DATA */
        var selectedBrand = document.getElementById('select-brand').value;
         console.log(selectedBrand + " : " + selectedSubCategory);
         $.ajax({ /* THEN THE AJAX CALL */
            /* TYPE OF METHOD TO USE TO PASS THE DATA */
           url: "../_action/gets/getOption.php",
           method : "POST",
           data:{'getproduct':1,'brand':selectedBrand, 'subcategory': selectedSubCategory},
           async : true,
           dataType : 'text',
           success: function(data){
            $('#select-product').html(data);
           }
         });
        });

        $("#select-color").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
            var selected = $(this).val();
            if (selected == 'other') {
              $('#input-color').show();
            }else{
              $('#input-color').hide();
            }
        });

        $("#select-shade").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
            var selected = $(this).val();
            if (selected == 'other') {
              $('#input-shade').show();
            }else{
              $('#input-shade').hide();
            }
        });
        $("#select-size").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
            var selected = $(this).val();
            if (selected == 'other') {
              $('#input-size').show();
            }else{
              $('#input-size').hide();
            }
        });
        $("#select-weight").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
            var selected = $(this).val();
            console.log(selected);
            if (selected == 'other') {
              $('#input-weight').show();
            }else{
              $('#input-weight').hide();
            }
        });
});

</script>
