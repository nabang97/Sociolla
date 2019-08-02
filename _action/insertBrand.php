<?php

require_once('../_controller/AdminController.php');

$controllerAdmin = new AdminController();

if (isset($_POST['submit'])) {
  $brand_id = $_POST['brand_id'];
  $name= $_POST['name'];
  if (isset($_POST['brand_id']) != "" && isset($_POST['name']) != "") {
      $insertBrand = $controllerAdmin->insertBrand($brand_id, $name);
  }
}
$controllerAdmin->showProductCategories();
