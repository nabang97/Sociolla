<?php require_once('../../_controller/SystemController.php');
  $controllerSystem = new SystemController();

  if (isset($_POST['selected-product-variant'])) {
    $code = $_POST['code'];
    $size = $_POST['size_id'];
    $shade = $_POST['shade_id'];
    $weight = $_POST['weight_id'];
    echo "code=".$code."&size=".$size."&shade=".$shade."&weight=".$weight;
  }
