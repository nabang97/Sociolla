<?php

require_once('../../_controller/AdminController.php');

$controllerAdmin = new AdminController();
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $name= $_POST['name'];
  $type = $_POST['product_type'];
  if ((isset($id) != "")  && (isset($name) != "") && (isset($type) != "")) {
      $insertCategory = $controllerAdmin->insertCategory($id, $name, $type);
  }
}
?>
