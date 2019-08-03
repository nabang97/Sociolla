<?php

require_once('../../_controller/AdminController.php');

$controllerAdmin = new AdminController();

  $id = $_POST['id'];
  $name= $_POST['name'];
  if ((isset($id) != "") && (isset($name) != "")) {
      $insertBrand = $controllerAdmin->insertBrand($id, $name);
  }
?>
