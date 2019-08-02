<?php
require_once('../../_controller/AdminController.php');
$controllerAdmin = new AdminController();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- nampilin brannya disini -->
    <select class="" name="">
      <?php
      $brands = $controllerAdmin->showBrand();
        foreach ($brands as $brand) {
          echo  "<option value='".$brand['brand_id']."'>".$brand['name']."</option>";
        }
       ?>
     </select><br>

<br>
   <h3>Insert Brand</h3>
    <form class="" action="../../_action/insertBrand.php" method="post">
      <input type="text" name="brand_id" value="">
      <input type="text" name="name" value="">
      <input type="submit" name="submit" value="">
    </form><br>

    <h3>Insert SubCategory</h3>
    <!-- select type produknya disini -->

    <!-- select category berdasarkan type -->

    <!-- form insert sub category -->
     <form class="" action="../../_action/inputs/insertSubCategory.php" method="post">
       <select class="" name="product_type" id="select_product_types">
         <?php
         $product_types = $controllerAdmin->showProductTypes();
           foreach ($product_types as $type) {
             echo  "<option value='".$type['id_type']."'>".$type['name']."</option>";
           }
          ?>
        </select><br>
       <select class="" name="product_category"  id="category">
         <option value="">Select category</option>
       </select><br>
       <input type="text" name="id" value="">
       <input type="text" name="name" value="">
       <input type="submit" name="submit" value="Insert Subcategory">
     </form>
     <br>
     <h4>Show data sub category</h4>
     <select class="" name=""  id="sub_category">
       <option value="">Select sub category</option>
     </select><br>

    <script src="../../js/vendor/jquery-3.1.1.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){ /* PREPARE THE SCRIPT */
        $("#select_product_types").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
         var selected = $(this).val(); /* GET THE VALUE OF THE SELECTED DATA */
         //var dataString = "allbooks="+allbooks; /* STORE THAT TO A DATA STRING */
          console.log(selected);
           $.ajax({ /* THEN THE AJAX CALL */
              /* TYPE OF METHOD TO USE TO PASS THE DATA */
             url: "../../_action/gets/getCategory.php",
             method : "POST",
             data:{'selected':selected},
             async : true,
             dataType : 'text',
             success: function(data){
              $('#category').html(data);
             }
           });
         });
    });

    $(document).ready(function(){ /* PREPARE THE SCRIPT */
        $("#category").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
         var selected = $(this).val(); /* GET THE VALUE OF THE SELECTED DATA */
         //var dataString = "allbooks="+allbooks; /* STORE THAT TO A DATA STRING */
          console.log(selected);
           $.ajax({ /* THEN THE AJAX CALL */
              /* TYPE OF METHOD TO USE TO PASS THE DATA */
             url: "../../_action/gets/getSubCategory.php",
             method : "POST",
             data:{'selected':selected},
             async : true,
             dataType : 'text',
             success: function(data){
              // $('#sub_category').html(data);
              alert(data);
             }
           });
         });
    });
    </script>
  </body>
</html>
