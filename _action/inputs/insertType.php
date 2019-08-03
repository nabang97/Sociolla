<?php

require_once('../../_controller/AdminController.php');

$controllerAdmin = new AdminController();

  $type_id = $_POST['id'];
  $name= $_POST['name'];
  if ((isset($type_id) != "") && (isset($name) != "")) {
      $insertProdyctType = $controllerAdmin->insertProductType($type_id, $name);
  }
?>
