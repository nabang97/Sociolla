<?php require_once('../../_controller/AdminController.php');
  $start = new AdminController();

  if (isset($_POST['display-table'])) {
    $product_types = $start->showProductTypes();
    foreach($product_types as $category){
      echo "<tr>
            <td></td>
            <td>".$category->id_type."</td>
            <td>".$category->name."</td>
            <td></td>
            </tr>";
    }
  }

 ?>
