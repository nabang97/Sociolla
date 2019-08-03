<?php

require_once('../../_controller/AdminController.php');

$controllerAdmin = new AdminController();

  $id = $_POST['id'];
  $name = $_POST['name'];
  $desc = $_POST['desc'];
  $brand=$_POST['brand'];
  $subcategory=$_POST['subcategory'];

  if ((isset($id) != "") && (isset($name)!="") && (isset($desc) != "") && (isset($brand) != "") && (isset($subcategory)!="")) {
    $controllerAdmin->insertProduct($id,$name,$desc,$brand,$subcategory);
  }
  ?>
  <script type="text/javascript">
    console.log(<?php $subcategory; ?>);
  </script>
