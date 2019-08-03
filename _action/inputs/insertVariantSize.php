<?php

require_once('../../_controller/AdminController.php');

$controllerAdmin = new AdminController();

  $name = $_POST['name'];
  $value= $_POST['value'];
  if ((isset($value) != "") && (isset($name) != "")) {
      $insertVariantSize = $controllerAdmin->insertVariantSize($name, $value);
  }
?>
