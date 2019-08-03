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


?>
