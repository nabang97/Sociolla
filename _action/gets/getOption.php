<?php require_once('../../_controller/AdminController.php');
  $start = new AdminController();

  if (isset($_POST['getproduct'])) {
    $subcategory = $_POST['subcategory'];
    $brand = $_POST['brand'];
    if (!empty($subcategory) && !empty($brand)) {
      $products = $start->showSelectedProduct($subcategory,$brand);
      foreach($products as $product){
        echo "<option value='".$product->code."'>".$product->name."</option>";
      }
    }else {
      echo "salah";
    }
  }


 ?>
