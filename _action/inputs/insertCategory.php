<?php

require_once('../../_controller/AdminController.php');

$controllerAdmin = new AdminController();

  $id = $_POST['id'];
  $name= $_POST['name'];
  $type = $_POST['product_category'];
  if ((isset($id) != "")  && (isset($name) != "") && (isset($type) != "")) {
      $insertCategory = $controllerAdmin->insertCategory($id, $name, $type);
  }

?>
