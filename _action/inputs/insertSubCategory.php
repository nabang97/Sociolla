<?php

require_once('../../_controller/AdminController.php');

$controllerAdmin = new AdminController();

  $id_subcategory = $_POST['id'];
  $name = $_POST['name'];
  $id_category = $_POST['product_category'];

  if ((isset($id_subcategory) != "") && (isset($name)!="") && (isset($id_category) != "")) {
    $controllerAdmin->insertSubCategory($id_subcategory,$name,$id_category);
  }
