<?php
require_once('../../_controller/AdminController.php');
$controllerAdmin = new AdminController();
$categories = $controllerAdmin->showProductCategories();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="../../_action/inputs/insertCategory.php" method="post" id="form_category">
    <select class="" name="product_type" id="select_product_types">
      <?php
      $product_types = $controllerAdmin->showProductTypes();
        foreach ($product_types as $type) {
          echo  "<option value='".$type['id_type']."'>".$type['name']."</option>";
        }
       ?>
     </select><br>
      <input type="text" name="id" value="">
      <input type="text" name="name" value="">
      <input type="submit" name="submit" value="Input Data Kategori">
    </form>
    <br><br>
    <table>
        <tr>
          <th>kode kategori</th>
          <th>nama kategori</th>
          <th>Jenis Produk</th>
        </tr>
        <?php
        foreach ($categories as $category) {
          echo "<tr><td>".$category['id_category']."</td><td>".$category['name']."</td><td>".$category['tipe_produk']."</td></tr>";
        }
         ?>
    </table>
  </body>
</html>
