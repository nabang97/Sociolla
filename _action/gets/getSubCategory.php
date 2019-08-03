<?php require_once('../../_controller/AdminController.php');
  $start = new AdminController();

  if (!empty($_POST['selected'])) {
    $data = $_POST['selected'];
    $subcategories = $start->showProductSubCategories($data);
    foreach($subcategories as $subcategory){
      echo "<option value='". $subcategory->id_subcategory ."'>".$subcategory->name."</option>";
    }
  }else {
    echo "salah";
  }

 ?>
