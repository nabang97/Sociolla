<?php

require_once('../../_controller/AdminController.php');

$controllerAdmin = new AdminController();
if (isset($_POST['color'])) {
  $name = $_POST['name'];
  $value= $_POST['value'];
  echo "test";
  if ((isset($value) != "") && (isset($name) != "")) {
      $insertColor = $controllerAdmin->insertVariantColors($name, $value);
  }
}

if (isset($_POST['shade'])) {
  $name = $_POST['name'];
  echo "test";
  if ((isset($name) != "")) {
      $insertColor = $controllerAdmin->insertVariantShades($name);
  }
}

if (isset($_POST['weight'])) {
  $name = $_POST['name'];
  $value= $_POST['value'];
  echo "test";
  if ((isset($value) != "") && (isset($name) != "")) {
      $insertColor = $controllerAdmin->insertVariantWeight($name, $value);
  }
}

if (isset($_POST['accept-order'])) {
  $order = $_POST['code'];
  echo "test";
  if ((isset($order) != "")) {
      $acceptedOrder = $controllerAdmin->acceptOrder($order);
      
  }
}

if (isset($_POST['product_variant'])) {
  $product = $_POST['product'];
  $price= $_POST['price'];
  $discount = $_POST['discount'];
  $photo_url = $_POST['photo_url'];
  $shade = $_POST['shade'];
  $color = $_POST['color'];
  $size = $_POST['size'];
  $weight = $_POST['weight'];
  $stock=$_POST['stock'];

  echo "test";
      $insertColor = $controllerAdmin->insertProductVariant($product, $color, $shade,$size,$weight,$discount, $price,$stock,$photo_url);
}


?>
